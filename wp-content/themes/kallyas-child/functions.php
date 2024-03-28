<?php

// THIS WILL ALLOW ADDING CUSTOM CSS TO THE style.css FILE and JS code to /js/zn_script_child.js

add_action( 'wp_enqueue_scripts', 'kl_child_scripts',11 );
function kl_child_scripts() {

	wp_deregister_style( 'kallyas-styles' );
    wp_enqueue_style( 'kallyas-styles', get_template_directory_uri().'/style.css', '' , ZN_FW_VERSION );
    wp_enqueue_style( 'kallyas-child', get_stylesheet_uri(), array('kallyas-styles') , ZN_FW_VERSION );

	/**
	 **** Uncomment this line if you want to add custom javascript file
	 */
	// wp_enqueue_script( 'zn_script_child', get_stylesheet_directory_uri() .'/js/zn_script_child.js' , '' , ZN_FW_VERSION , true );

}

/* ======================================================== */

/**
 * Load child theme's textdomain.
 */
add_action( 'after_setup_theme', 'kallyasChildLoadTextDomain' );
function kallyasChildLoadTextDomain(){
   load_child_theme_textdomain( 'zn_framework', get_stylesheet_directory().'/languages' );
}

/* ======================================================== */

/**
 * Example code loading JS in Header. Uncomment to use.
 */

/* ====== REMOVE COMMENT

add_action('wp_head', 'KallyasChild_loadHeadScript' );
function KallyasChild_loadHeadScript(){

	echo '
	<script type="text/javascript">

	// Your JS code here

	</script>';

}
 ====== REMOVE COMMENT */

/* ======================================================== */

/**
 * Example code loading JS in footer. Uncomment to use.
 */

/* ====== REMOVE COMMENT

add_action('wp_footer', 'KallyasChild_loadFooterScript' );
function KallyasChild_loadFooterScript(){

	echo '
	<script type="text/javascript">

	// Your JS code here

	</script>';

}
 ====== REMOVE COMMENT */

/* ======================================================== */


function th_dbug() { ?>
    <script>
    jQuery(document).ready(function() {
        jQuery('#wp-admin-bar-znhgtfw-theme-options-submenu-item-dashboard').remove();
        jQuery('#toplevel_page_zn-about').remove();
    });
    </script>
<?php }
add_action('admin_footer', 'th_dbug');

function th_frontend_js() { ?>
    <script>
    jQuery(document).ready(function() {
        jQuery('#wp-admin-bar-znhgtfw-theme-options-submenu-item-dashboard').remove();
    });
    </script>
<?php }
add_action('wp_footer', 'th_frontend_js');



function th_name() { ?>
    <div class="th-header-text">
        <p class="th-main-title">Sci Club 3punto3</p>
        <p class="th-description">Sci agonistico e cultura dello sport</p>
    </div>
<?php }
add_action('zn_head__main_left', 'th_name');