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
                        $client = new IkelRegistry();
                        $domain = $domainLookup->domain.$domainLookup->sld;
                        $response = $client->checkDomain($domain);
                        if(isset($response['success']['msg'])){
                           Yii::app()->user->setFlash('domain',$response['success']['msg']);
                        }
                        if(isset($response['error']['msg'])){
                           Yii::app()->user->setFlash('domain',$response['error']['msg']);
                        }
                       
                    }
                    
                     $this->render('index',array('lookup'=>$domainLookup));
                }
                else{
		     $this->render('index',array('lookup'=>$domainLookup));
                }
	}
        
        
        public function actionDomain(){
            $domain = new Domain();
            $adminContact = new VCard();
            $techContact = new VCard();
            
            if(isset($_POST['Domain'])&&isset($_POST['VCard'])&&isset($_POST['VCard'])){
                $domain->attributes = $_POST['Domain'];
                $adminContact->attributes = $_POST['VCard'][VCard::DOMAIN_ADMIN_CONTACT];
                $techContact->attributes = $_POST['VCard'][VCard::DOMAIN_TECH_CONTACT];
                
                if($domain->validate()&&$techContact->validate()&&$adminContact->validate()){
                    
                    $client = new IkelRegistry();
                   
                    $response = $client->createDomain($domain,$adminContact,$techContact);
                     
                        if(isset($response['success']['msg'])){
                           Yii::app()->user->setFlash('domain',$response['success']['msg']);
                        }
                        if(isset($response['error']['msg'])){
                           Yii::app()->user->setFlash('domain',$response['error']['msg']);
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
            else{
            $this->render('domainRegistration',
                    array(
                        'model'=>$domain,
                        'adminContact'=>$adminContact,
                        'techContact'=>$techContact,
                        )
                    );
            }
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