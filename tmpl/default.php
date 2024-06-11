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
use Joomla\CMS\HTML\HTMLHelper;

$scriptUrl  = 'https://static.zdassets.com/ekr/snippet.js?key=';
$licenseKey = $params->get('license_key', '');
?>
<script id="ze-snippet" src="<?php echo $scriptUrl . $licenseKey; ?>"> </script>
