<?php
/**
*
* @package phpBB Extension - Puzzle
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'COPYRIGHT_OWN'					=> '<strong>Aangedreven door DM Puzzel</strong><br>&copy; 2010, 2011 door femu op <a href="http://die-muellers.org" onclick="window.open(this.href); return false">Die Muellers Dot Org</a>',
	'OWN_COPYRIGHT'					=> '&copy; 2015 <a href="http://www.dmzx-web.net" onclick="window.open(this.href); return false">dmzx-web.net</a>',
	'PLAYING_PUZZLE'				=> 'Speelt momenteel DM Puzzel',
	'PUZZLE_BACKLINK'				=> '%sGa verder met de volgende puzzel%s',
	'PUZZLE_DESCRIPTION'			=> 'Beschrijving',
	'PUZZLE_FALSE'					=> 'false', // Never change this language string!!!
	'PUZZLE_FLIP_X'					=> 'Draai horizontaal',
	'PUZZLE_FLIP_X_EXP'				=> 'Houd [ALT] ingedrukt en dubbelklik',
	'PUZZLE_FLIP_Y'					=> 'Draai verticaal',
	'PUZZLE_FLIP_Y_EXP'				=> 'Houd [SHIFT] ingedrukt en dubbelklik',
	'PUZZLE_IMAGE_MISSING'			=> 'De puzzelafbeelding bestaat niet. Informeer de beheerder en vertel hem de volgende naam van de afbeelding:<br><br><strong>%1$s</strong><br>',
	'PUZZLE_LEVEL'					=> 'Moeilijkheidsgraad',
	'PUZZLE_LEVEL_1'				=> 'Erg makkelijk',
	'PUZZLE_LEVEL_2'				=> 'Makkelijk',
	'PUZZLE_LEVEL_3'				=> 'Nog steeds makkelijk',
	'PUZZLE_LEVEL_4'				=> 'Iets moeilijker',
	'PUZZLE_LEVEL_5'				=> 'Moeilijk',
	'PUZZLE_LEVEL_6'				=> 'Zeer moeilijk',
	'PUZZLE_LEVEL_7'				=> 'Extreem moeilijk',
	'PUZZLE_MIX'					=> 'Mix',
	'PUZZLE_MOVE'					=> 'Verplaats',
	'PUZZLE_MOVE_EXP'				=> 'Klik en verplaats',
	'PUZZLE_NAVIGATION'				=> 'Puzzels',
	'PUZZLE_NO_PUZZLES'				=> 'Er zijn momenteel geen puzzels beschikbaar. Vraag de beheerder om wat te uploaden.',
	'PUZZLE_PREVIEW'				=> 'Voorbeeld',
	'PUZZLE_ROTATE'					=> 'Draaien',
	'PUZZLE_ROTATE_EXP'				=> 'Dubbelklik',
	'PUZZLE_SOLVE'					=> 'Oplossen',
	'PUZZLE_SOLVED'					=> 'Gefeliciteerd! Je hebt de puzzel opgelost!',
	'PUZZLE_TITLE'					=> 'DM Puzzel',
	'PUZZLE_TITLE_DEFAULT_EXPLAIN'	=> 'Er wordt een willekeurige puzzel geselecteerd, die je kunt proberen op te lossen.<br>Je hebt verschillende instellingen, afhankelijk van wat de beheerder heeft ingeschakeld / uitgeschakeld.<br><br>Om de puzzel te starten, klik je op de knop knop <strong>Mix</strong>.<br><br><strong>Hint:</strong> Houd er rekening mee dat de puzzelstukjes horizontaal en verticaal kunnen worden omgedraaid!<br><br><strong>Veel plezier met onze puzzels!</strong><br><br>',
	'PUZZLE_TITLE_EXPLAIN'			=> 'Er wordt een willekeurige puzzel geselecteerd, die je kunt proberen op te lossen.<br>Je kunt de moeilijkheidsgraad zelf instellen.<br><br>Om de puzzel te starten, klik je op de knop <strong>Mix</strong>.<br><br><strong>Hint:</strong> Houd er rekening mee dat de puzzelstukjes horizontaal en verticaal kunnen worden omgedraaid!<br><br><strong> Veel plezier met onze puzzels!</strong><br><br>',
	'PUZZLE_TRUE'					=> 'true', // Never change this language string!!!
));
