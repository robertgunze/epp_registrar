<?php /* @var $this Controller */ 
    Yii::app()->bootstrap->register();
?>
<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
       <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    
<div class="container" id="page">

	<div id="mainmenu">
		<?php 
                
                   $this->widget('bootstrap.widgets.TbNavbar', array(
                    'brandLabel' => '<strong><span style="color:#47ADCB">Flex</span>Domains</strong>',
                    'display' => TbHtml::NAVBAR_DISPLAY_FIXEDTOP,
                    'items' => array(
                        array(
                            'class' => 'bootstrap.widgets.TbNav',
                            'items' => array(
                                array('label'=>'Home','icon'=>TbHtml::ICON_HOME, 'url'=>array('/site/index'), 'visible' => true),
                                //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                               // array('label'=>'Contacts', 'url'=>array('/site/contact')),
                                array('label'=>'Domain Registration','icon'=>TbHtml::ICON_BRIEFCASE, 'url'=>array('/site/domain'), 'visible' => true),
                                array('label'=>'Domain Renewal','icon'=>  TbHtml::ICON_REFRESH,  'url'=>array('/site/renewDomain'), 'visible' => true),
                                array('label'=>'My Account','icon'=>  TbHtml::ICON_USER,  'url'=>array('/site/myaccount'), 'visible' => true),
                                array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                array('label' => 'System Settings', 'icon'=>  TbHtml::ICON_WRENCH, 'url' =>'#', 'visible' => !Yii::app()->user->isGuest,
                                        'items'=>array(
                                            array('label' => 'User Accounts', 'url' => array('user/admin'), 'visible' => Yii::app()->user->isGuest),
                                            array('label' => 'User Privileges', 'url' => array('authItem/roles'), 'visible' => Yii::app()->user->isGuest),
                                        )),
                                array('label' => 'Logout (' . Yii::app()->user->name . ')','icon'=>  TbHtml::ICON_SIGNAL, 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                            ),
                        )
                    )
                        )
                );
                
                ?>
                
                ?>
	</div><!-- mainmenu -->
        <br /><br /><br />
        <div class="breadcrumb">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
        </div>

	<?php echo $content; ?>

	<div class="clear"></div>

        <footer id="footer" class="footer well">
            <small>
                &copy; <?php echo date('Y'); ?> iKEL.
            </small>
            
        </footer>
	<!-- footer -->

</div><!-- page -->

</body>
</html>
