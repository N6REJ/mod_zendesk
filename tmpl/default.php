<?php
/**
 * @package    MOD_Klas_zendesk
 *
 * @author     N6REJ programming@hallhome.us
 * @copyright  Copyright (c) 2024 N6REJ all rights reserved
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 * @link       http://n6rej.github.io
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;

$wam = Factory::getApplication()->getDocument()->getWebAssetManager();

$scriptUrl  = 'https://static.zdassets.com/ekr/snippet.js';
$licenseKey = $params->get('license_key', '');

if ($licenseKey) {
    $scriptUrl .= '?key=' . $licenseKey;
}

$wam->registerAndUseScript('ze-snippet', $scriptUrl, [], ['defer' => false]);

