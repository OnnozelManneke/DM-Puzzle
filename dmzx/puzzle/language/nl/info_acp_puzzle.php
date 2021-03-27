<?php
/**
*
* @package phpBB Extension - Puzzle
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'LOG_PLAYED_PUZZLE'					=> '<strong>DM Puzzel</strong><br>» %s speelde DM Puzzel',
	'LOG_PUZZLE_SETTINGS'				=> 'De DM Puzzel configuratie is gewijzigd',
	'PUZZLE_ADDED'						=> 'De puzzel is succesvol toegevoegd.',
	'PUZZLE_ALL_PUZZLES'				=> 'Alle puzzels',
	'PUZZLE_CONFIG'						=> 'Puzzel configuratie',
	'PUZZLE_CONFIG_AREABORDER'			=> 'Kader',
	'PUZZLE_CONFIG_AREABORDER_EXP'		=> 'Als deze optie is ingeschakeld, ziet de speler een kader rond het oplossingsveld',
	'PUZZLE_CONFIG_AREAIMAGE'			=> 'Afbeelding als achtergrond',
	'PUZZLE_CONFIG_AREAIMAGE_EXP'		=> 'Als deze optie is ingeschakeld, wordt de afbeelding verkleind als achtergrond weergegeven',
	'PUZZLE_CONFIG_DEFAULT'				=> 'Standaard instellingen',
	'PUZZLE_CONFIG_DEFAULT_EXP'			=> 'Als deze optie is ingeschakeld, worden de puzzels weergegeven met de standaardinstellingen',
	'PUZZLE_CONFIG_EXP'					=> 'Hier kun je enkele basisinstellingen instellen voor de weergave van je puzzels',
	'PUZZLE_CONFIG_FIXED'				=> 'Niveau',
	'PUZZLE_CONFIG_FIXED_EXP'			=> 'Als deze optie is ingeschakeld heeft het spel een vast niveau, en kunnen de spelers er zelf geen selecteren',
	'PUZZLE_CONFIG_FIXED_LEVEL'			=> 'Vast niveau',
	'PUZZLE_CONFIG_FIXED_LEVEL_EXP'		=> 'Dit niveau wordt standaard gebruikt als je bovenstaande optie hebt ingeschakeld. Geldige waarden zijn van 0 (eenvoudig) tot 6 (extreem moeilijk)',
	'PUZZLE_CONFIG_MIXED'				=> 'Mix meteen',
	'PUZZLE_CONFIG_MIXED_EXP'			=> 'Als je deze optie inschakelt, wordt de puzzel in één keer gemixt. Op deze manier zullen de spelers de afbeelding niet zien voordat deze wordt gemixt',
	'PUZZLE_CONFIG_PAGE'				=> 'Aantal puzzels per pagina',
	'PUZZLE_CONFIG_PAGE_EXP'			=> 'Hier kunt u instellen hoeveel puzzels u per pagina in het beheerderspaneel wilt zien',
	'PUZZLE_CONFIG_POLYGON'				=> 'Veelhoek puzzelstukjes',
	'PUZZLE_CONFIG_POLYGON_EXP'			=> 'Als deze optie is ingeschakeld, worden de puzzelstukjes polygoon weergegeven. Anders worden ze rechthoekig weergegeven.',
	'PUZZLE_CONFIG_SIMPLE'				=> 'Eenvoudige mix',
	'PUZZLE_CONFIG_SIMPLE_EXP'			=> 'Als deze optie is ingeschakeld, worden de puzzelstukjes gewoon gemixt, maar niet omgedraaid.',
	'PUZZLE_CONFIG_SOLVE_BUTTON'		=> 'Toon knop: oplossen',
	'PUZZLE_CONFIG_SOLVE_BUTTON_EXP'	=> 'Als deze optie is ingeschakeld, zien de spelers een oplossingsknop',
	'PUZZLE_CONFIG_UPDATED'				=> 'De puzzel configuratie is succesvol bijgewerkt',
	'PUZZLE_CONFIRM_OPERATION'			=> 'Weet u zeker dat u deze bewerking wilt uitvoeren?',
	'PUZZLE_DESCRIPTION'				=> 'Beschrijving',
	'PUZZLE_EDIT'						=> 'Puzzelbeheer',
	'PUZZLE_EDIT_DESCRIPTION'			=> 'Beschrijving',
	'PUZZLE_EDIT_DESCRIPTION_EXP'		=> 'Hier kunt u uw puzzel beschrijven',
	'PUZZLE_EDIT_EXPLAIN'				=> 'Hier kun je nieuwe puzzels toevoegen of de geselecteerde bewerken.',
	'PUZZLE_EDIT_IMAGE_NAME'			=> 'Afbeelding naam',
	'PUZZLE_EDIT_IMAGE_NAME_EXP'		=> 'Voer hier de naam van de afbeelding in, inclusief de extensie (bijv. Afbeelding.jpg). Het pad naar de afbeelding wordt automatisch toegevoegd. Alle afbeeldingen moeten in de map ext/dmzx/puzzle/puzzles',
	'PUZZLE_EDIT_NAME'					=> 'Naam van de puzzel',
	'PUZZLE_EDIT_NAME_EXP'				=> 'Voer hier een naam in voor uw puzzel',
	'PUZZLE_EDIT_PUZZLE'				=> 'Bewerk puzzel',
	'PUZZLE_ENTER_PUZZLE'				=> 'Je moet een code invoeren!',
	'PUZZLE_FORM_INVALID'				=> 'De ingediende code is ongeldig. Probeer het a.u.b. opnieuw.',
	'PUZZLE_HEADER'						=> 'DM Puzzel',
	'PUZZLE_IMAGE_NAME'					=> 'Afbeelding naam',
	'PUZZLE_MULTI'						=> '%d puzzels',
	'PUZZLE_NAME'						=> 'Naam van de puzzel',
	'PUZZLE_NEW_PUZZLE'					=> 'Voeg een nieuwe puzzel toe',
	'PUZZLE_NO_ITEMS'					=> 'Geen puzzels beschikbaar',
	'PUZZLE_NO_PUZZLE'					=> 'Geen code ingevoerd om te bewerken.',
	'PUZZLE_PUZZLE'						=> 'Code',
	'PUZZLE_PUZZLE_EDIT'				=> 'Bewerk of verander de code hier',
	'PUZZLE_REMOVED'					=> 'De puzzel is succesvol verwijderd.',
	'PUZZLE_SINGLE'						=> '1 Puzzel',
	'PUZZLE_SORT_DESCRIPTION'			=> 'Beschrijving',
	'PUZZLE_SORT_IMAGE_NAME'			=> 'Afbeelding naam',
	'PUZZLE_SORT_NAME'					=> 'Naam',
	'PUZZLE_TITLE'						=> 'DM Puzzel Beheer',
	'PUZZLE_TITLE_EXPLAIN'				=> 'Hier kun je nieuwe puzzels toevoegen en bestaande puzzels bewerken of verwijderen.',
	'PUZZLE_UPDATED'					=> 'De puzzel is succesvol bijgewerkt',
));
