<?php
/**
 * @title            CSS & JS dynamic variables
 *
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2015-2017, Pierre-Henry Soria. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / Framework / Layout / Gzip
 */
namespace PH7\Framework\Layout\Gzip;
defined('PH7') or exit('Restricted access');

use PH7\Framework\Mvc\Model\DbConfig;

return array(
    'url_theme' => PH7_URL_ROOT . PH7_LAYOUT . PH7_TPL, // Replace "[$url_theme]" variable
    'url_def_tpl_css' => PH7_URL_ROOT . PH7_LAYOUT . PH7_TPL . PH7_DEFAULT_THEME . PH7_SH . PH7_CSS, // Replace "[$url_def_tpl_css]" variable
    'url_def_tpl_js' => PH7_URL_ROOT . PH7_LAYOUT . PH7_TPL . PH7_DEFAULT_THEME . PH7_SH . PH7_JS, // Replace "[$url_def_tpl_js]" variable
    'current_tpl_name' => DbConfig::getSetting('defaultTemplate'), // Replace "[$current_tpl_name]" variable
);
