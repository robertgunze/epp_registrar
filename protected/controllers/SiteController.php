<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
                $domainLookup = new DomainLookup;
                if(isset($_POST['DomainLookup'])){
                    $domainLookup->attributes = $_POST['DomainLookup'];
                    if($domainLookup->validate()){
                        //$client = new IkelRegistry();
                        $client = new IkelCommandRegistry();
                        $domain = $domainLookup->domain.$domainLookup->sld;
                        $response = $client->checkDomain($domain);
              
                        if($response['attributes']["$domain"]['avail']){
                             Yii::app()->user->setFlash('domain',$response['values']["$domain"].' '.
                                     TbHtml::link('Buy Domain with MPESA/TIGO-PESA/AIRTEL MONEY',
                                             $this->createUrl('domain'),
                                             array('class'=>'btn btn-success')));
                        }
                        else{
                             Yii::app()->user->setFlash('domain',$response['values']["$domain"]);
                        }
//                        if(isset($response['success']['msg'])){
//                           Yii::app()->user->setFlash('domain',$response['success']['msg']);
//                        }
//                        if(isset($response['error']['msg'])){
//                           Yii::app()->user->setFlash('domain',$response['error']['msg']);
//                        }
//                       
                    }
                    
                     
                }
             
	      $this->render('index',array('lookup'=>$domainLookup));
                
	}
        
        private function _saveDomainInfo($response,$user_id){
            $domainInfoModel = new Domain();
            $domainInfoModel->date_registered = date('Y-m-d H:i:s');
            $domainInfoModel->date_of_expiry = $response['values']['domain:exDate'];
            $domainInfoModel->name = $response['values']['domain:name'];
            $domainInfoModel->user_id = (int)$user_id;
            
            
            return $domainInfoModel->save();
        }
        
        private function _createUser($adminContact){
            $user = User::model()->findByAttributes(
                      array('email'=>$adminContact->electronicMailbox)
                    );
            if($user){
                return $user->id;
            }
            
            $user = new User();
            $user->email = $adminContact->electronicMailbox;
            $user->mobile = $adminContact->voicePhone;
            $user->password = sha1(rand(1000, 9999));
            
            if($user->save()){
                $user = User::model()->findByAttributes(
                      array('email'=>$adminContact->electronicMailbox)
                    );
               return $user->id;
            }
        }
        
        public function actionDomain(){
            $domain = new DomainForm();
            $adminContact = new VCard();
            $techContact = new VCard();
            
            if(Yii::app()->request->isPostRequest){
                
                $domain->attributes = $_POST['DomainForm'];
                $adminContact->attributes = $_POST['VCard'][VCard::DOMAIN_ADMIN_CONTACT];
                $techContact->attributes = $_POST['VCard'][VCard::DOMAIN_TECH_CONTACT];
                if($domain->validate()&&$adminContact->validate()){
                    //$client = new IkelRegistry();
                    $client = new IkelCommandRegistry();
                    $response = $client->createDomain($domain,$adminContact,$techContact);
                    $user_id = $this->_createUser($adminContact);
                    $this->_saveDomainInfo($response, $user_id);
            
                    if(isset($response['values']['domain:name'])){
                           Yii::app()->user->setFlash('domain',$response['values']['domain:name']);
                    }
                    if(isset($response['error']['msg'])){
                           Yii::app()->user->setFlash('domain',$response['error']['msg']);
                    }
                         
                }
                
               
            }
            
            $this->render('domainRegistration',
                    array(
                        'model'=>$domain,
                        'adminContact'=>$adminContact,
                        'techContact'=>$techContact,
                        )
                    );
            
        }
        
        public function actionRenewDomain(){
            
            $model = new DomainRenewal();
            if(isset($_GET['domain']))
                $model->domain = $_GET['domain'];
            if(Yii::app()->request->isPostRequest){
               
                $model->attributes = $_POST['DomainRenewal'];
                //$client = new IkelRegistry();
                $client = new IkelCommandRegistry();
                $response = $client->renewDomain($model->domain, $model->period);
                $domain = Domain::model()->findByAttributes(array('name'=>$model->domain));
                $domain->date_of_expiry = $response['values']['domain:exDate'];
                $domain->save();
                Yii::app()->user->setFlash('success',"Domain renewed for the next {$model->period} year(s)");
                  
            }
            
            $this->render('domain_renewal',array('model'=>$model));
        }
        
        public function actionMyAccount(){
            $user_id = Yii::app()->user->getState('user_id');
            $domains = Domain::model()->findAllByAttributes(array('user_id'=>$user_id));
            $criteria = new CDbCriteria();
            $criteria->condition = "user_id = {$user_id}";
            $domainsDataProvider = new CActiveDataProvider('Domain',array('criteria'=>$criteria));
            $this->render('my_account',array('domainsDataProvider'=>$domainsDataProvider));
        }
        
        
        public function actionDomainContact(){
            if(isset($_POST['submit'])){
            $client = new IkelRegistry();
            try{
            $response = $client->createContact();
            }catch(Exception $ex){
                echo $ex->getMessage();
            }
            
            
                        if(isset($response['success']['msg'])){
                           //Yii::app()->user->setFlash('domain',$response['success']['msg']);
                            echo $response['success']['msg'];
                        }
                        if(isset($response['error']['msg'])){
                           //Yii::app()->user->setFlash('domain',$response['error']['msg']);
                            echo $response['error']['msg'];
                        }
                        
                        
                        
            }
            
            
        }

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
       
}