<!DOCTYPE html5>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/blog.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/hero.style.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>
<body>

<!-- Top header/navigation -->
<nav id="mynav" class="navbar navbar-default" role="navigation">
  <div class="container-fluid">

    <div class="header-social text-right">
      <a href="https://www.facebook.com/ysnglobal/" onclick="target='newwindow'"><i class="fa fa-fw fa-facebook"></i></a>
      <a href="https://twitter.com/ysn_global" onclick="target='newwindow'"><i class="fa fa-fw fa-twitter"></i></a>
      <a href="http://instagram.com/ysnglobal/" onclick="target='newwindow'"><i class="fa fa-fw fa-instagram"></i></a>
    </div><!-- close header-social -->
      <div class="brand-wrap">
      <a href="#" class="navbar-brand"><img class=" text-left img-responsive" src="http://placehold.it/50x50"></a>
      </div>
    <button id="button-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul id="header-menu" class="nav navbar-nav navbar-right header-menu">
        <li class="active"><a href="<?php bloginfo('wpurl') ?>">Home</a></li>
        <li><a href="<?php bloginfo('wpurl') ?>/company">Company</a></li>
        <!-- insert Clients -->
        <!-- insert Services -->
        <li><a href="<?php bloginfo('wpurl') ?>/eyp">EYP</a></li>
        <!-- <li><a href="<?php /* bloginfo('wpurl')*/ ?>/blog">Blog</a></li> -->
        <li><a href="<?php bloginfo('wpurl') ?>/contact">Contact</a></li>
      </ul>
    </div> <!--navbar-brand -->
  </div> <!--close container-fluid -->
</nav>


