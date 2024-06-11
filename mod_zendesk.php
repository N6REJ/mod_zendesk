<?php
/**
 * @package    MOD_zendesk
 *
 * @author     N6REJ programming@hallhome.us
 * @copyright  Copyright (c) 2024 N6REJ all rights reserved
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 * @link       http://n6rej.github.io
 */

defined('_JEXEC') or die('Restricted access');

// Include the syndicate functions only once
if(!defined('DS')){
define('DS',DIRECTORY_SEPARATOR);
}

require_once (dirname(__FILE__).DS.'helper.php');

$baseurl 				= JURI::base();

require JModuleHelper::getLayoutPath('mod_zendesk', $params->get('layout', 'default'));

?>
