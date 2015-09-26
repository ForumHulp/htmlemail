<?php
/**
*
* HTML email extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 ForumHulp.com <http://forumhulp.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'LOG_CORE_INSTALLED'		=> '<strong>L’extension « HTML email » a été installée avec succès</strong>',
	'LOG_CORE_DEINSTALLED'		=> '<strong>L’extension « HTML email » a été désinstallée avec succès</strong>',

	'LOG_CORE_NOT_REPLACED'		=> '<strong>L’extension « HTML email »  n’a pas été désinstallée avec succès</strong><br />Impossible de remplacer les fichiers<br />» %s',
	'LOG_CORE_NOT_UPDATED'		=> '<strong>L’extension « HTML email »  n’a pas été installée avec succès</strong><br />Impossible de mettre à jour les fichiers<br />» %s',
	'HTML_EMAIL_NOTICE'			=> '<div style="width:80%;margin:20px auto;"><p style="text-align:left;">Aucune paramètre n’est disponible pour cette extension.<br />Cependant, toutes les mises à jour n’ont pas été correctement exécutées en raison des permissions sur les fichiers ou en raison de fichiers manquants. Pour davantage d’informations merci de consulter le « Journal d’administration ».<br /><br />Merci de mettre à jour les fichiers manuellement pour accéder à toutes les fonctionnalités !</p></div>',

));

?>
