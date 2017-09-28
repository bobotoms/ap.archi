<?php

namespace BackOfficeBundle\Tools;

/**
 * Tools
 *
 */
class Tools
{
	
	public static function caractere($text){
		$caracteres = array (
				"&amp;" => "&",
				"&aacute;" => "á",
				"&Aacute;" => "Á",
				"&acirc;" => "â",
				"&Acirc;" => "Â",
				"&agrave;" => "à",
				"&Agrave;" => "À",
				"&aring;" => "å",
				"&Aring;" => "Å",
				"&atilde;" => "ã",
				"&Atilde;" => "Ã",
				"&auml;" => "ä",
				"&Auml;" => "Ä",
				"&aelig;" => "æ",
				"&AElig;" => "Æ",
				"&ccedil;" => "ç",
				"&Ccedil;" => "Ç",
				"&eacute;" => "é",
				"&Eacute;" => "É",
				"&ecirc;" => "ê",
				"&Ecirc;" => "Ê",
				"&egrave;" => "è",
				"&Egrave;" => "È",
				"&euml;" => "ë",
				"&Euml;" => "Ë",
				"&iacute;" => "í",
				"&Iacute;" => "Í",
				"&icirc;" => "î",
				"&Icirc;" => "Î",
				"&igrave;" => "ì",
				"&Igrave;" => "Ì",
				"&iuml;" => "ï",
				"&Iuml;" => "Ï",
				"&ntilde;" => "ñ",
				"&Ntilde;" => "Ñ",
				"&oacute;" => "ó",
				"&Oacute;" => "Ó",
				"&ocirc;" => "ô",
				"&Ocirc;" => "Ô",
				"&ograve;" => "ò",
				"&Ograve;" => "Ò",
				"&oslash;" => "ø",
				"&Oslash;" => "Ø",
				"&otilde;" => "õ",
				"&Otilde;" => "Õ",
				"&ouml;" => "ö",
				"&Ouml;" => "Ö",
				"&oelig;" => "œ",
				"&OElig;" => "Œ",
				"&scaron" => "š",
				"&Scaron" => "Š",
				"&szlig" => "ß",
				"&eth" => "ð",
				"&ETH" => "Ð",
				"&thorn" => "þ",
				"&THORN" => "Þ",
				"&uacute" => "ú",
				"&Uacute" => "Ú",
				"&ucirc" => "û",
				"&Ucirc" => "Û",
				"&ugrave" => "ù",
				"&Ugrave" => "Ù",
				"&uuml" => "ü",
				"&Uuml" => "Ü",
				"&yacute" => "ý",
				"&Yacute" => "Ý",
				"&yuml;" => "ÿ",
				"&Yuml;" => "Ÿ",
				"&euro;" => "€",
				"&pound;" => "£",
				"&nbsp;" => " ",
				"&#039;" => "'",
				"&#145;" => "'",
				"&#146;" => "'",
				"&#39;" => "'",
				"&#147;" => '"',
				"&#148;" => '"',
				"&deg;" => "°",
				"&raquo;" => "»",
				"&laquo;" => "«",
				"&lt;" => "<",
				"&gt;" => ">",
				
		);
		foreach ($caracteres as $key => $caractere){
			$text = str_replace($key, $caractere, $text);
		}
			return $text;
	}
	
}