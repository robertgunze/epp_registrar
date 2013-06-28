<?php /* @var $this Controller */ ?>
<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"></link>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<header class="navbar navbar-fixed-top">
<div class="navbar-inner" >
<div class="container" >

 <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container" style="background-color:black">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse" >
              <ul class="nav pull-right">
                <li class="active"><a href="<?php echo $this->createUrl('site/index'); ?>">Home</a></li>
                <li><a href="<?php echo $this->createUrl('site/page', array('view'=>'about'));?>">About</a></li>
                <li><a href="<?php echo $this->createUrl('site/contact');?>">Contact</a></li>
                <li><a href="<?php echo $this->createUrl('site/login');?>" style="display:<?php echo Yii::app()->user->isGuest?'block':'none' ?>">Sign in</a></li>
                <li><a href="<?php echo $this->createUrl('site/logout');?>" style="display:<?php echo !Yii::app()->user->isGuest?'block':'none' ?>"><?php echo 'Logout ('.Yii::app()->user->name.')';?></a></li></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

        
</div>
</div>
</header>
    
<div class="container" id="page">

	<div id="mainmenu">
		<?php 
                
//                $this->widget('zii.widgets.CMenu',array(
//			'items'=>array(
//				array('label'=>'Home', 'url'=>array('/site/index')),
//				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
//				array('label'=>'Contact', 'url'=>array('/site/contact')),
//				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
//			),
//		)); 
                
                ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

        <footer id="footer" class="footer">
            <small>
                Copyright &copy; <?php echo date('Y'); ?> by iKEL.
		All Rights Reserved.
                
            </small>
            <nav>
                <ul>
                    <li><a href="<?php echo $this->createUrl('site/page', array('view'=>'about'));?>">About</a></li>
                    <li><a href="<?php echo $this->createUrl('site/contact');?>">Contact</a></li>
                </ul>
            </nav>
            
        </footer>
	<!-- footer -->

</div><!-- page -->

</body>
</html>
