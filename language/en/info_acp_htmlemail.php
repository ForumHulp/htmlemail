<?php
/**
*
* HTML email extension for the phpBB Forum Software package.
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
	'LOG_CORE_INSTALLED'		=> '<strong>ForumHulp Core installed successfully</strong>',
	'LOG_CORE_DEINSTALLED'		=> '<strong>ForumHulp Core desinstalled successfully</strong>',

	'LOG_CORE_NOT_REPLACED'		=> '<strong>ForumHulp Core didn’t desinstalled successfully</strong><br />Could not replaced file(s)<br />» %s',
	'LOG_CORE_NOT_UPDATED'		=> '<strong>ForumHulp Core didn’t installed successfully</strong><br />Could not update file(s)<br />» %s',
	'HTML_EMAIL_NOTICE'			=> '<div style="width:80%;margin:20px auto;"><p style="text-align:left;">Config setting of this extension are not necessary.<br />However not all updates are done properly because of file permissions or missing files. See admin log for a overview.<br /><br />Please update files by hand to enjoy all functions !</p></div>',

));

?>
