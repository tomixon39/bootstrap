<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="/wp-content/themes/wpstasiu/images/favicon.png">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" media="screen" />

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
    
<script type='text/javascript' src='/wp-content/themes/wpstasiu/js/jquery.marquee.js'></script>
<script type="text/javascript">

$( document ).ready(function() {
    $('.marquee').marquee({
    //speed in milliseconds of the marquee
    duration: 15000,
    //gap in pixels between the tickers
    // gap: 50,
    //time in milliseconds before the marquee will start animating
    delayBeforeStart: 0,
    //'left' or 'right'
    direction: 'left',
    //true or false - should the marquee be duplicated to show an effect of continues flow
    // duplicated: true
});
});

</script>
</head>

<body>

    <div class="container-fluid">
        <section id="header">
            <div class="row szary">
                <div class="container">
                    <div class="col-lg-12">
                        <div class="col-lg-3">
                            <span class="glyphicon glyphicon-envelope dane-top"></span>
                            <p class="dane-top-p">henryk-klima@wp.pl</p>
                        </div>
                        <div class="col-lg-3">
                            <span class="glyphicon glyphicon-phone dane-top"></span>
                            <p class="dane-top-p"> (59) 822-54-89</p>
                        </div>
                        <div class="col-lg-4 col-lg-offset-2">
                            <div class="input-group">
                                <input type="text" placeholder="Szukaj" class="form-control">
                                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="" href="/"><img src="/wp-content/themes/wpstasiu/images/logos.png" class="img-responsive logo"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php wp_nav_menu( array( 
                'menu' => 'glowne', 
                'container_id' => 'bs-example-navbar-collapse-1',
                'container_class' => 'collapse navbar-collapse', 
                'menu_class' => 'nav navbar-nav menu navbar-right' 
                ) ); ?>
                </div>
                <!-- /.container -->
                </nav>
            </div>
        </section><!--koniec header -->