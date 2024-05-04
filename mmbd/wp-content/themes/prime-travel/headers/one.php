<?php
/**
 * Header Layout Three
 * 
 * @package Travel Monster
*/
$defaults        = travel_monster_get_general_defaults();
$header_width    = get_theme_mod( 'header_width_layout', $defaults['header_width_layout']);
$vip_image       = get_theme_mod( 'header_contact_image', $defaults['header_contact_image'] );
$add_class       = 'fullwidth' === $header_width ? 'container-full' : 'container';
$vip_img_id      = attachment_url_to_postid( $vip_image );
$ed_social_media = get_theme_mod( 'ed_social_media', false );
/**
 * Mobile Header
 */
if( function_exists('travel_monster_mobile_header') ) travel_monster_mobile_header();
/**
 * Desktop Header
 */
?>
<header id="masthead" class="site-header header-layout-3" <?php if( function_exists('travel_monster_microdata') ) travel_monster_microdata( 'header' ); ?>>
    <div class="header-m">
        <div class="<?php echo esc_attr($add_class); ?>">
            <div class="header-m-lft-wrap">
                <?php if( function_exists('travel_monster_site_branding') ) travel_monster_site_branding( false ); ?>
            </div>
            <div class="header-m-mid-wrap">
                <div class="contact-wrap-head">
                    <div class="vib-whats">
                        <div class="vib-whats-txt">
                            <?php
                                if( function_exists('travel_monster_header_phone_label') ) travel_monster_header_phone_label();               
                                if( function_exists('travel_monster_header_phone') ) travel_monster_header_phone();
                            ?>
                        </div>
                        <?php if( $vip_image ){
                            ?>
                            <div class="vib-whats-dp">
                                <?php echo wp_get_attachment_image( $vip_img_id, 'full' ); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="head-5-contlinks">
                        <?php 
                            if( function_exists('travel_monster_header_email_label') ) travel_monster_header_email_label();
                            if( function_exists('travel_monster_header_email') ) travel_monster_header_email();
                        ?>
                    </div>
                </div>
            </div>
            <div class="header-m-rght-wrap">
                <?php if( function_exists('travel_monster_primary_header_button') ) travel_monster_primary_header_button(); ?>
            </div>
        </div>
    </div>
    
    <div class="header-b">
        <div class="<?php echo esc_attr($add_class); ?>">
            <div class="navigation-wrap">
                <?php if( function_exists('travel_monster_primary_navigation') ) travel_monster_primary_navigation(); ?>
            </div>
            <div class="social-flgswrap">
                <?php if( $ed_social_media ){ ?>
					<div class="social-media-wrap">
						<?php
							$social_icons = new Travel_Monster_Social_Lists;
							$social_icons->travel_monster_social_links();
						?>
					</div>
                <?php } ?>
                <?php travel_monster_header_search(); ?>
                <?php if( travel_monster_is_currency_converter_activated() || travel_monster_is_polylang_active() || travel_monster_is_wpml_active() ){ ?>
                    <div class="languagendcurrency-wrap">
                        <?php 
                        /**
                         * Language Switcher
                        */ 
                        do_action( 'travel_monster_language_switcher' ); ?>
                        <?php 
                        /**
                         * Currency Converter
                        */ 
                        do_action( 'travel_monster_currency_converter' );
                        ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div> <!-- header-b -->
    <?php travel_monster_sticky_header(); ?>
</header><!-- #masthead -->