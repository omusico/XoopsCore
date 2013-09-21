<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Monolog module definitions
 *
 * @package   Monolog
 * @author    Richard Griffith <richard@geekwright.com>
 * @copyright 2013 The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license   GNU GPL 2 or later (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @link      http://xoops.org
 */

$modversion = array();
$modversion['name'] = _MI_MONOLOG_NAME;
$modversion['description'] = _MI_MONOLOG_DSC;
$modversion['version'] = 0.1;
$modversion['author'] = 'Richard Griffith';
$modversion['nickname'] = 'geekwright';
$modversion['credits'] = 'The XOOPS Project';
$modversion['license'] = 'GNU GPL 2.0';
$modversion['license_url'] = 'www.gnu.org/licenses/gpl-2.0.html/';
$modversion['official'] = 1;
$modversion['help'] = 'page=help';
$modversion['helpsection'][]=array(
    'name' => _MI_MONOLOG_HELP,
    'link' => 'page=help'
);
$modversion['helpsection'][]=array(
    'name' => _MI_MONOLOG_HACKING,
    'link' => 'page=hacking'
);
$modversion['image'] = 'images/logo.png';
$modversion['dirname'] = 'monolog';

//about
$modversion['release_date'] = '2013/09/05';
$modversion['module_website_url'] = 'http://www.xoops.org/';
$modversion['module_website_name'] = 'XOOPS';
$modversion['module_status'] = 'ALPHA 1';
$modversion['min_php'] = '5.3';
$modversion['min_xoops'] = '2.6.0';

// paypal
/*
$modversion['paypal'] = array();
$modversion['paypal']['business'] = '';
$modversion['paypal']['item_name'] = '';
$modversion['paypal']['amount'] = 0;
$modversion['paypal']['currency_code'] = '';
*/

// Admin menu
// Set to 1 if you want to display menu generated by system module
$modversion['system_menu'] = 1;

/*
 Manage extension
 */
$modversion['extension'] = 1;
$modversion['extension_module'][] = 'system';

// Admin things
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';

// Menu
$modversion['hasMain'] = 0;

// Preferences
$modversion['config'][] = array(
    'name' => 'monolog_enable',
    'title' => '_MI_MONOLOG_ENABLE',
    'description' => '',
    'formtype' => 'yesno',
    'valuetype' => 'int',
    'default' => 0,  // default to off to give chance to review module access rights
);

$modversion['config'][] = array(
    'name' => 'include_blocks',
    'title' => '_MI_MONOLOG_INCLUDE_BLOCKS',
    'description' => '',
    'formtype' => 'yesno',
    'valuetype' => 'int',
    'default' => 1,
);

$modversion['config'][] = array(
    'name' => 'include_deprecated',
    'title' => '_MI_MONOLOG_INCLUDE_DEPRECATED',
    'description' => '',
    'formtype' => 'yesno',
    'valuetype' => 'int',
    'default' => 1,
);

$modversion['config'][] = array(
    'name' => 'include_extra',
    'title' => '_MI_MONOLOG_INCLUDE_EXTRA',
    'description' => '',
    'formtype' => 'yesno',
    'valuetype' => 'int',
    'default' => 1,
);

$modversion['config'][] = array(
    'name' => 'include_queries',
    'title' => '_MI_MONOLOG_INCLUDE_QUERIES',
    'description' => '',
    'formtype' => 'yesno',
    'valuetype' => 'int',
    'default' => 1,
);

$modversion['config'][] = array(
    'name' => 'include_timers',
    'title' => '_MI_MONOLOG_INCLUDE_TIMERS',
    'description' => '',
    'formtype' => 'yesno',
    'valuetype' => 'int',
    'default' => 1,
);

$modversion['config'][] = array(
    'name' => 'logging_threshold',
    'title' => '_MI_MONOLOG_THRESHOLD_LEVEL',
    'description' => '',
    'formtype' => 'select',
    'valuetype' => 'text',
    'default' => 'debug',
    'options' => array_flip(
        array(
            'debug'  => _MI_MONOLOG_THRESHOLD_DEBUG,
            'info' => _MI_MONOLOG_THRESHOLD_INFO,
            'warning' => _MI_MONOLOG_THRESHOLD_WARNING,
            'error' => _MI_MONOLOG_THRESHOLD_ERROR,
        )
    ),
);

$modversion['config'][] = array(
    'name' => 'log_file_path',
    'title' => '_MI_MONOLOG_LOG_FILE_PATH',
    'description' => '',
    'formtype' => 'textbox',
    'valuetype' => 'text',
    'default' => XOOPS_VAR_PATH . '/logs/xoops_monolog.log',
    'options' => array(),
);
