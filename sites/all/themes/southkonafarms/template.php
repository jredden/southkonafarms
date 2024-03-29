<?php // $Id: template.php,v 1.1.2.6 2009/12/24 01:47:01 jmburnz Exp $
// adaptivethemes.com

/**
 * @file template.php
 */

// Don't include custom functions if the database is inactive.
db_set_active();

// include_once(drupal_get_path('theme', 'adaptivetheme') .'/inc/template.custom-functions.inc');

/**
 * Add the color scheme stylesheet if color_enable_schemes is set to 'on'.
 * Note: you must have at minimum a color-default.css stylesheet in /css/theme/
 */
if (theme_get_setting('color_enable_schemes') == 'on') {
  drupal_add_css(drupal_get_path('theme', 'southkonafarms') .'/css/theme/'. get_at_colors(), 'theme');
}

/**
 * USAGE
 * 1. Rename each function to match your subthemes name,
 *    e.g. if you name your theme "themeName" then the function
 *    name will be "themeName_preprocess_hook".
 * 2. Uncomment the required function to use. You can delete the
 *    "sample_variable".
 */

/**
 * Override or insert variables into all templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered.
 */

function southkonafarms_preprocess(&$vars, $hook) {
  $vars['dateTime'] = new DateTime("now", new DateTimeZone('Pacific/Honolulu'));
}


/**
 * Override or insert variables into the page templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered.
 */
/*
function southkonafarms_preprocess_page(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
*/

/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered.
 */
/*
function southkonafarms_preprocess_node(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
*/

/**
 * Override or insert variables into the comment templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered.
 */
/*
function southkonafarms_preprocess_comment(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
*/

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered.
 */
/*
function southkonafarms_preprocess_block(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
*/
function returnTimeSkin($dateTime){
	$date = $dateTime->format("G");
	if( ( $date >= 0 && $date <=4 ) || ( $date >= 20 && $date <=23)){
		echo '<link href="/southkonafarms/sites/all/themes/southkonafarms/css/theme/evening_theme.css" rel="stylesheet" type="text/css"/>';
	}else if ( ( $date >= 5 && $date <=9 ) || ( $date >= 16 && $date <=19)){
		echo '<link href="/southkonafarms/sites/all/themes/southkonafarms/css/theme/evening_theme.css" rel="stylesheet" type="text/css"/>';
	}
}
