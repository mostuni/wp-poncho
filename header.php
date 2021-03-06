<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo( 'title' ); ?></title>

    <meta name="description"
          content="Base de html y css para la creación de sitios pertenecientes a la Administración Pública Nacional de la República Argentina.">

    <meta name="author" content="Presidencia de la Nación">

    <!-- Nav and address bar color -->
    <meta name="theme-color" content="<?php echo get_theme_mod('primary_color');?>">
    <meta name="msapplication-navbutton-color" content="<?php echo get_theme_mod('primary_color');?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="<?php echo get_theme_mod('primary_color');?>">

	<?php wp_head(); ?>

</head>

<body cz-shortcut-listen="true">
<header>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php if ( has_custom_logo( 0 ) ) {
						echo get_custom_logo( 0 );
					} else {
						?>
                        <img alt="Brand" src="<?php echo get_stylesheet_directory_uri(); ?>/images/argentinagob.svg"
                             height="50">
					<?php } ?>
                    <h1 class="sr-only"><?php bloginfo( 'name' ); ?>
                        <small><?php bloginfo( 'description' ); ?></small>
                    </h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<?php

					$itemsMenu = wp_get_nav_menu_items( 'Principal' );

					foreach ( $itemsMenu as $item ) {
						$cssClass = '';
						foreach ( $item->classes as $class ) {
							$cssClass .= " " . $class;
						}
						echo '<li><a class="' . $cssClass . '" href="' . $item->url . '" title="">' . $item->title . '</a></li>';
					}

					?>
                    <li>
                        <a title="buscar" href="#modalSearch" role="button" data-toggle="modal"><i
                                    class="fa fa-search"></i></a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div id="modalSearch" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Buscar</h4>
                </div>
                <div class="modal-body">

	                <?php echo get_search_form();?>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

</header>
