<?php/** * Load translation file * * This will load the MO file for the current locale. * The translation file must be named church-content-manager-$locale.mo. *  * First it will check to see if the MO file exists in wp-content/languages/plugins. * If not, then the 'languages' direcory inside the plugin will be used. * It is ideal to keep translation files outside of the plugin to avoid loss during updates. * * To Do: load_plugin_textdomain() will presumably be updated as load_theme_textdomain() was to  * natively support external loading from WP_LANG_DIR. When this is so, simplify this function. * http://core.trac.wordpress.org/changeset/22346 * * @package    Church_Content_Manager * @subpackage Functions * @copyright  Copyright (c) 2013, churchthemes.com * @link       https://github.com/churchthemes/church-content-manager * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html * @since      0.5 */// No direct accessif ( ! defined( 'ABSPATH' ) ) exit;add_action( 'plugins_loaded', 'ccm_load_textdomain' );function ccm_load_textdomain() {	// Textdomain	$domain = 'church-content-manager';	// WordPress core locale filter	$locale = apply_filters( 'plugin_locale', get_locale(), $domain );	// Does external MO file exist? Load it	// This is ideal since it is not wiped out by plugin updates	$external_mofile = WP_LANG_DIR . '/plugins/'. $domain . '-' . $locale . '.mo';	if ( file_exists( $external_mofile ) ) {		load_textdomain( $domain, $external_mofile );	}	// Otherwise use MO file stored in plugin	// This is not ideal except for pre-made, unedited translations included with the plugin	else {		$languages_dir = CCM_DIR . '/' . trailingslashit( CCM_LANG_DIR ); // ensure trailing slash		load_plugin_textdomain( $domain, false, $languages_dir );	}}