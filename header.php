<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <?php wp_head(); ?>
  <?php echo get_theme_mod( 'general_code' ) ?>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9035780560703580" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>

<?php
  $header_vertical = get_theme_mod('header_vertical');
  $header_sticky = get_theme_mod('header_sticky');
  $header_fixed = get_theme_mod('header_fixed');
  $header_full = get_theme_mod('header_full');
?>

  <header id="header" class="header<?php if( ! empty( $header_vertical ) ) { ?> header--vertical<?php } else { ?><?php if( ! empty( $header_fixed ) ) { ?> header--fixed<?php } else { ?><?php if( ! empty( $header_sticky ) ) { ?> header--sticky<?php } // if header_sticky ?><?php } // if header_fixed ?><?php if( ! empty( $header_full ) ) { ?> header--full-width<?php } // if header_full ?><?php } // if header_vertical ?>">

    <?php if ( get_theme_mod( 'header_topbar' ) == '1' ) { ?>
    <div class="header-topbar">
      <div class="header-topbar-wrap">
        <div class="header-topbar-left">
          <?php if ( is_active_sidebar( 'widget-header-top-left' ) ) : ?>
          <div class="header-topbar-inner">
            <?php dynamic_sidebar( 'widget-header-top-left' ); ?>
          </div>
          <?php endif; ?>
        </div>
        <div class="header-topbar-right">
          <?php if ( is_active_sidebar( 'widget-header-top-right' ) ) : ?>
          <div class="header-topbar-inner">
            <?php dynamic_sidebar( 'widget-header-top-right' ); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php } ?>

    <div class="header-wrap">
      <?php if ( get_theme_mod( 'logo_display', '1' ) ) { ?>
        <div class="header-logo-wrap">
          <?php if ( get_theme_mod( 'header_logo' ) ) { ?>
              <div class="header-logo<?php if ( get_theme_mod( 'logo_aling_setting_id' ) ) { ?> <?php echo get_theme_mod( 'logo_aling_setting_id' ); ?><?php } ?>">
                <a class="header-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                  <span class="header-logo-title">
                    <?php bloginfo( 'name' ); ?>
                  </span>
                </a>
              </div>
          <?php } else { ?>
            <div class="header-logo header-logo--default<?php if ( get_theme_mod( 'logo_aling_setting_id' ) ) { ?> <?php echo get_theme_mod( 'logo_aling_setting_id' ); ?><?php } ?>">
              <a class="header-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <span class="header-logo-title">
                  <?php bloginfo( 'name' ); ?>
                </span>
              </a>
            </div>
          <?php } ?>
        </div>
      <?php } ?>

      <?php if ( get_theme_mod( 'nav_display', '1' ) ) { ?>
        <div class="header-menu-toggle">
          <div class="header-menu-toggle-one"></div>
          <div class="header-menu-toggle-two"></div>
          <div class="header-menu-toggle-three"></div>
        </div>
        <div class="header-navigation-wrap">
          <nav id="header-navigation" class="header-navigation<?php if ( get_theme_mod( 'nav_aling_setting_id' ) ) { ?> <?php echo get_theme_mod( 'nav_aling_setting_id' ); ?><?php } ?>" role="navigation">
            <div class="header-menu">
              <ul id="header-menu-list" class="header-menu-list">
                <?php
                if ( has_nav_menu('header') ) {
                  $args = array(
                    'container' => '',
                    'depth' => 0,
                    'echo' => false,
                    'items_wrap' => '%3$s',
                    'theme_location' => 'header',
                  );
                    echo wp_nav_menu($args);
                } else {
                    echo '<p>'.__( 'Set your main menu in <strong>Apperance &gt; Menus</strong>', 'theme' ).'</p>';
                }
                ?>

                <?php if ( get_theme_mod( 'nav_display_search', '1' ) ) { ?>
                <li id="menu-item-search" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-search header-menu-item header-menu-item-search">
                  <span class="header-menu-link">
                    <?php echo _e( 'Search in &hellip;', 'theme', 'placeholder' ); ?>
                  </span>
                  <svg class="header-menu-icon header-menu-icon--open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M508.5 481.6l-129-129c-2.3-2.3-5.3-3.5-8.5-3.5h-10.3C395 312 416 262.5 416 208 416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c54.5 0 104-21 141.1-55.2V371c0 3.2 1.3 6.2 3.5 8.5l129 129c4.7 4.7 12.3 4.7 17 0l9.9-9.9c4.7-4.7 4.7-12.3 0-17zM208 384c-97.3 0-176-78.7-176-176S110.7 32 208 32s176 78.7 176 176-78.7 176-176 176z"></path></svg>
                  <svg class="header-menu-icon header-menu-icon--close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M217.5 256l137.2-137.2c4.7-4.7 4.7-12.3 0-17l-8.5-8.5c-4.7-4.7-12.3-4.7-17 0L192 230.5 54.8 93.4c-4.7-4.7-12.3-4.7-17 0l-8.5 8.5c-4.7 4.7-4.7 12.3 0 17L166.5 256 29.4 393.2c-4.7 4.7-4.7 12.3 0 17l8.5 8.5c4.7 4.7 12.3 4.7 17 0L192 281.5l137.2 137.2c4.7 4.7 12.3 4.7 17 0l8.5-8.5c4.7-4.7 4.7-12.3 0-17L217.5 256z"></path></svg>
                </li>
                <?php } ?>
              </ul>
              <div class="header-menu-search">
                <?php get_search_form(); ?>
              </div>
            </div>
          </nav>

          <?php if ( get_theme_mod( 'header_vertical', '0' ) ) { ?>
            <?php if ( is_active_sidebar( 'widget-header-vertical' ) ) : ?>
              <?php dynamic_sidebar( 'widget-header-vertical' ); ?>
            <?php endif; ?>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </header><!-- .header -->
