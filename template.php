<?php

/**
 * @file
 * Template.php - process theme data for your sub-theme.
 * 
 * Rename each function and instance of "roblib_theme" to match
 * your subthemes name, e.g. if you name your theme "roblib_theme" then the function
 * name will be "roblib_theme_preprocess_hook". Tip - you can search/replace
 * on "roblib_theme".
 */


function roblib_theme_field__field_proxied_link__database($variables) {
// the name of the function came from the devel themer tool after 1st putting dpm() in themename_field()
	
// dpm($variables);
// this dumps the vars using the devel mod. use it to target the varibles printed below.
	
	$output = '';
	$output = '<a href="http://proxy.library.upei.ca/login?url=' . $variables['items'][0]['#element']['display_url'] . '">' . $variables['items'][0]['#element']['title'] .  '</a>';
	
	return $output;
}

/**
 * Override or insert variables for the html template.
 */
/* -- Delete this line if you want to use this function
function roblib_theme_preprocess_html(&$vars) {
}
function roblib_theme_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 */

function roblib_theme_preprocess_page(&$vars) {
	 if (!empty($vars['logo'])) {
    $vars['site_logo'] = '<a href="http://www.upei.ca" class="active"><img class="site-logo" typeof="foaf:Image" src="http://library.upei.ca/sites/library.upei.ca/files/upei_shield_logo_rusttext.small_.png" alt="Robertson Library"></a>';
  }
}
function roblib_theme_process_page(&$vars) {
}
// */


/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function roblib_theme_preprocess_node(&$vars) {
}
function roblib_theme_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function roblib_theme_preprocess_comment(&$vars) {
}
function roblib_theme_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function roblib_theme_preprocess_block(&$vars) {
}
function roblib_theme_process_block(&$vars) {
}
// */
