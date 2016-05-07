<?php
#--------------------------------------------------------------------#
# Define Theme Constants
#--------------------------------------------------------------------#
define('NRW_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/nrw/');
define('NRW_THEME_NAME', 'charlotte');

#--------------------------------------------------------------------#
# Load Text Domain
#--------------------------------------------------------------------#
add_action('after_theme_setup', 'lang_setup');
function lang_setup(){
    load_theme_textdomain(NRW_THEME_NAME, get_template_directory() . '/lang');
}

#--------------------------------------------------------------------#
# 
#--------------------------------------------------------------------#