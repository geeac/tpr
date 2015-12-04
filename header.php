<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
 
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
 
    ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>
 
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
</head>
 
<body <?php body_class(); ?>>

<div id="wrapper">
 
    <header id="header">
        <hgroup>
            <h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2><?php bloginfo( 'description' ); ?></h2>
        </hgroup>
 
<nav id="access" role="navigation" style="z-index:999;">
        <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to the 'starkers_menu' function which can be found in functions.php.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
        <?php wp_nav_menu( array( 'container' => 'nav', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'primary' ) ); ?>
</nav>
<nav id="mobile-menu" role="navigation" style="z-index:999;">
        <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to the 'starkers_menu' function which can be found in functions.php.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
        <?php wp_nav_menu( array( 'container' => 'nav', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'primary' ) ); ?>
</nav>


    </header>

	<div class="nivoSlider" style="z-index:1; height:265px; background:#888;">

<?php if(is_page("Home")) { ?>

		<img src="/cms/wp-content/uploads/header-conflict.jpg" alt="conflict" />
		<img src="/cms/wp-content/uploads/header-unravel.jpg" alt="unravel" />
		<img src="/cms/wp-content/uploads/header-resolve.jpg" alt="resolve" />
		<img src="/cms/wp-content/uploads/header-evolve.jpg" alt="evolve" />

<?php } else if(is_page("Our Focus")) { ?>

		<img src="/cms/wp-content/uploads/header-workplace.jpg" alt="workplace" />
		<img src="/cms/wp-content/uploads/header-education.jpg" alt="education" />
		<img src="/cms/wp-content/uploads/header-family.jpg" alt="family" />

<?php } else if(is_page("Workplaces")) { ?>

		<img src="/cms/wp-content/uploads/header-tension.jpg" alt="tension" />
		<img src="/cms/wp-content/uploads/header-resolution.jpg" alt="resolution" />

<?php } else if(is_page("School Districts")) { ?>

		<img src="/cms/wp-content/uploads/header-learn.jpg" alt="learn" />
		<img src="/cms/wp-content/uploads/header-education2.jpg" alt="education" />

<?php } else if(is_page("Families")) { ?>

		<img src="/cms/wp-content/uploads/header-family1.jpg" alt="conflict" />
		<img src="/cms/wp-content/uploads/header-family2.jpg" alt="blank" />
	
<?php } else if(is_page("Communities")) { ?>

		<img src="/cms/wp-content/uploads/header-strife.jpg" alt="strife" />
		<img src="/cms/wp-content/uploads/header-community.jpg" alt="community" />

<?php } else if(is_page("About Us")) { ?>

		<img src="/cms/wp-content/uploads/header-about-20151.jpg" alt="blank" />

<?php } else if(is_page("Services")) { ?>

		<img src="/cms/wp-content/uploads/header-services.jpg" alt="services" />

<?php } else if(is_page("Assessments")) { ?>

		<img src="/cms/wp-content/uploads/header-assessment2.jpg" alt="coaching" />

<?php } else if(is_page("Mediation")) { ?>

		<img src="/cms/wp-content/uploads/header-mediation.jpg" alt="mediation" />

<?php } else if(is_page("Leadership Mentoring")) { ?>

		<img src="/cms/wp-content/uploads/header-blank3.jpg" alt="blank" />

<?php } else if(is_page("Facilitation")) { ?>

		<img src="/cms/wp-content/uploads/header-facilitation.jpg" alt="facilitation" />

<?php } else if(is_page("Coaching")) { ?>

		<img src="/cms/wp-content/uploads/header-coaching.jpg" alt="coaching" />

<?php } else if(is_page("Training")) { ?>

		<img src="/cms/wp-content/uploads/header-training.jpg" alt="training" />

<?php } else if(is_page("Restorative Practices")) { ?>

		<img src="/cms/wp-content/uploads/header-restorative.jpg" alt="restorative" />

<?php } else if(is_page("Clients")) { ?>

		<img src="/cms/wp-content/uploads/header-resolution.jpg" alt="resolution" />

<?php } else if(is_page("Articles") || is_post_type_archive() || is_page("turning-point-resolutions-inc") || is_page("mediate-employee-employee-conflict") || is_archive() || is_front_page() || is_paged() || is_single() || is_home()){ ?>

		<img src="/cms/wp-content/uploads/header-articles2.jpg" alt="articles" />

<?php } else if(is_page("Contact")) { ?>

		<img src="/cms/wp-content/uploads/header-blank4.jpg" alt="blank" />

<?php } else { ?>

		<img src="/cms/wp-content/uploads/header-blank4.jpg" alt="blank" />

<?php } ?>

	</div>

	<div id="main">