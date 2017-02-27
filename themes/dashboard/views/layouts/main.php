<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/css/themes/flat-blue.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/css/base.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="flat-blue">

    <div class="app-container">
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li class="active">Dashboard</li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments-o"></i></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="title">
                                    Notification <span class="badge pull-right">0</span>
                                </li>
                                <li class="message">
                                    No new notification
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown danger">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-star-half-o"></i> 4</a>
                            <ul class="dropdown-menu danger  animated fadeInDown">
                                <li class="title">
                                    Notification <span class="badge pull-right">4</span>
                                </li>
                                <li>
                                    <ul class="list-group notifications">
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge">1</span> <i class="fa fa-exclamation-circle icon"></i> new registration
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item message">
                                                view all
                                            </li>
                                        </a>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Emily Hart <span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="profile-img">
                                    <img src="../img/profile/picjumbo.com_HNCK4153_resize.jpg" class="profile-img">
                                </li>
                                <li>
                                    <div class="profile-info">
                                        <h4 class="username">Emily Hart</h4>
                                        <p>emily_hart@email.com</p>
                                        <div class="btn-group margin-bottom-2x" role="group">
                                            <button type="button" class="btn btn-default"><i class="fa fa-user"></i> Profile</button>
                                            <button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <div class="icon fa fa-paper-plane"></div>
                                <div class="title">CMS</div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <!-- menu lateral -->
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'<span class="icon fa fa-tachometer"></span><span class="title">Home</span>', 'url'=>array('/site/index')),
				array('label'=>'<span class="icon fa fa-tachometer"></span><span class="title">About</span>', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'<span class="icon fa fa-tachometer"></span><span class="title">Contact</span>', 'url'=>array('/site/contact')),
				array('label'=>'<span class="icon fa fa-tachometer"></span><span class="title">Login</span>', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'<span class="icon fa fa-tachometer"></span><span class="title">Logout</span> ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
			'encodeLabel'=>false,
			'htmlOptions'=>array('class'=>'nav navbar-nav'),
		)); ?>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- Main Content -->
            <div class="container-fluid">
				
				<div class="side-body">
				    <div class="page-title">
				        <span class="title"></span>
				        <div class="description"></div>
				    </div>
				    <div class="row">
				        <div class="col-xs-12">
				            <div class="card">
				            	<?php echo $content; ?>
				            </div>
				        </div>
				    </div>
				</div>
            </div><!-- ./Main Content -->
        </div><!-- ./row content-container -->


        <footer class="app-footer">
            <div class="wrapper">
                <span class="pull-right"><?php echo Yii::powered(); ?> <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © 2017 Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>.
            </div>
        </footer>

    <div><!-- ./app-container -->

<!-- Javascript Libs -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/js/Chart.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/js/bootstrap-switch.min.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/js/select2.full.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/js/ace/ace.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/js/ace/mode-html.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/js/ace/theme-github.js"></script>
<!-- Javascript -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/dashboard/js/app.js"></script>

</body>
</html>
