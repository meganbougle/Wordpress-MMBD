<?php
/**
 * Help Panel.
 *
 * @package Travel_Monster
 */
?>
<!-- Help file panel -->
<div id="help-panel" class="panel-left">
    <div class="panel-aside">
        <h4><?php esc_html_e( 'View Our Documentation Link', 'travel-monster' ); ?></h4>
        <p><?php esc_html_e( 'Are you new to WordPress? Our extensive documentation has step by step guide to create an attractive website.', 'travel-monster' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( 'https://docs.wptravelengine.com/docs-category/travel-monster/' ); ?>" title="<?php esc_attr_e( 'Visit the Documentation', 'travel-monster' ); ?>" target="_blank">
            <?php esc_html_e( 'View Documentation', 'travel-monster' ); ?>
        </a>
    </div><!-- .panel-aside -->
    
    <div class="panel-aside">
        <h4><?php esc_html_e( 'Support Ticket', 'travel-monster' ); ?></h4>
        <p><?php printf( __( 'It\'s always a good idea to visit our %1$sKnowledge Base%2$s before you send us a support ticket.', 'travel-monster' ), '<a href="'. esc_url( 'https://docs.wptravelengine.com/docs-category/travel-monster/' ) .'" target="_blank">', '</a>' ); ?></p>
        <p><?php printf( __( 'If the Knowledge Base didn\'t answer your queries, submit us a %1$sSupport Ticket%2$s here. Our response time usually is less than a business day, except on the weekends.', 'travel-monster' ), '<a href="'. esc_url( 'https://wptravelengine.com/support-ticket/' ) .'" target="_blank">', '</a>' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( 'https://wptravelengine.com/support-ticket/' ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'travel-monster' ); ?>" target="_blank">
            <?php esc_html_e( 'Contact Support', 'travel-monster' ); ?>
        </a>
    </div><!-- .panel-aside -->

    <div class="panel-aside">
        <h4><?php esc_html_e( 'View Our Demo', 'travel-monster' ); ?></h4>
        <p><?php esc_html_e( 'Visit the demo of our theme to get more ideas about the design and layout of our theme.', 'travel-monster' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( 'https://wptravelenginedemo.com/' . TRAVEL_MONSTER_THEME_TEXTDOMAIN . '/' ); ?>" title="<?php esc_attr_e( 'Visit the Demo', 'travel-monster' ); ?>" target="_blank">
            <?php esc_html_e( 'View Demo', 'travel-monster' ); ?>
        </a>
    </div><!-- .panel-aside -->
</div>