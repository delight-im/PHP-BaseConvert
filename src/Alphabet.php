<?php

/*
 * PHP-BaseConvert (https://github.com/delight-im/PHP-BaseConvert)
 * Copyright (c) delight.im (https://www.delight.im/)
 * Licensed under the MIT License (https://opensource.org/licenses/MIT)
 */

namespace Delight\BaseConvert;

/** Conversion of numbers and numeric strings between different alphabets, with pre-defined alphabets that may be used as sources or targets */
final class Alphabet {

	/** @var string the 52 letters from the basic Latin alphabet (ISO 646) */
	const ALPHA = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	/** @var string 33 letters from the basic Latin alphabet (ISO 646), easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ALPHA_HUMAN = 'CFHJKLMNPRTVWXYbcdfghjkmnpqrtvwxy';
	/** @var string the 26 small letters from the basic Latin alphabet (ISO 646) */
	const ALPHA_LOWERCASE = 'abcdefghijklmnopqrstuvwxyz';
	/** @var string 18 small letters from the basic Latin alphabet (ISO 646), easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ALPHA_LOWERCASE_HUMAN = 'bcdfghjkmnpqrtvwxy';
	/** @var string the 26 capital letters from the basic Latin alphabet (ISO 646) */
	const ALPHA_UPPERCASE = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	/** @var string 15 capital letters from the basic Latin alphabet (ISO 646), easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ALPHA_UPPERCASE_HUMAN = 'CFHJKLMNPRTVWXY';
	/** @var string the 62 decimal digits and letters from the basic Latin alphabet (ISO 646) */
	const ALPHANUMERIC = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	/** @var string 46 decimal digits, letters from the basic Latin alphabet (ISO 646) and punctuation characters from US-ASCII, easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ALPHANUMERIC_AND_PUNCTUATION_HUMAN = '3479CFHJKLMNPRTVWXYbcdfghjkmnpqrtvwxy#%+-?@^_~';
	/** @var string 37 decimal digits and letters from the basic Latin alphabet (ISO 646), easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ALPHANUMERIC_HUMAN = '3479CFHJKLMNPRTVWXYbcdfghjkmnpqrtvwxy';
	/** @var string the 36 decimal digits and small letters from the basic Latin alphabet (ISO 646) */
	const ALPHANUMERIC_LOWERCASE = '0123456789abcdefghijklmnopqrstuvwxyz';
	/** @var string 22 decimal digits and small letters from the basic Latin alphabet (ISO 646), easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ALPHANUMERIC_LOWERCASE_HUMAN = '3479bcdfghjkmnpqrtvwxy';
	/** @var string the 36 decimal digits and capital letters from the basic Latin alphabet (ISO 646) */
	const ALPHANUMERIC_UPPERCASE = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	/** @var string 19 decimal digits and capital letters from the basic Latin alphabet (ISO 646), easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ALPHANUMERIC_UPPERCASE_HUMAN = '3479CFHJKLMNPRTVWXY';
	/** @var string the 95 printable characters from US-ASCII */
	const ASCII_PRINTABLE = ' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
	/** @var string 51 printable characters from US-ASCII, easily readable by humans (i.e. no single-character homoglyphs) and not forming any (offensive) words (i.e. no vowels) */
	const ASCII_PRINTABLE_HUMAN = '#%&*+-3479<=>?@CFHJKLMNPRTVWXY^_bcdfghjkmnpqrtvwxy~';
	/** @var string the 2 standard binary digits */
	const BINARY = '01';
	/** @var string (a virtual) alphabet containing (only the first of) the 256 digits that can be represented with a byte */
	const BYTE = "\0";
	/** @var string the 10 standard decimal digits */
	const DECIMAL = '0123456789';
	/** @var string the 12 standard duodecimal digits */
	const DUODECIMAL = self::DUODECIMAL_UPPERCASE;
	/** @var string the 12 standard duodecimal digits with small letters */
	const DUODECIMAL_LOWERCASE = '0123456789ab';
	/** @var string the 12 standard duodecimal digits with capital letters */
	const DUODECIMAL_UPPERCASE = '0123456789AB';
	/** @var string the 16 standard hexadecimal digits */
	const HEX = self::HEX_UPPERCASE;
	/** @var string the 16 standard hexadecimal digits with small letters */
	const HEX_LOWERCASE = '0123456789abcdef';
	/** @var string the 16 standard hexadecimal digits with capital letters */
	const HEX_UPPERCASE = '0123456789ABCDEF';
	/** @var string the 8 standard octal digits */
	const OCTAL = '01234567';
	/** @var string the 4 standard quaternary digits */
	const QUATERNARY = '0123';
	/** @var string the 5 standard quinary digits */
	const QUINARY = '01234';
	/** @var string the 6 standard senary digits */
	const SENARY = '012345';
	/** @var string the 3 standard ternary digits */
	const TERNARY = '012';
	/** @var string the 20 standard vigesimal digits */
	const VIGESIMAL = self::VIGESIMAL_UPPERCASE;
	/** @var string the 20 standard vigesimal digits with small letters */
	const VIGESIMAL_LOWERCASE = '0123456789abcdefghij';
	/** @var string the 20 standard vigesimal digits with capital letters */
	const VIGESIMAL_UPPERCASE = '0123456789ABCDEFGHIJ';

	/**
	 * Converts the specified number between the two supplied alphabets
	 *
	 * @param string|int $number the number or numeric string to convert
	 * @param string $fromAlphabet the alphabet to convert from, e.g. as one of the constants from the {@see Alphabet} class
	 * @param string $toAlphabet the alphabet to convert to, e.g. as one of the constants from the {@see Alphabet} class
	 * @return string|null
	 */
	public static function convert($number, $fromAlphabet, $toAlphabet) {
		if (\is_int($number) || (\is_string($number) && $number !== '')) {
			if (\is_string($fromAlphabet) && (\strlen($fromAlphabet) >= 2 || $fromAlphabet === self::BYTE)) {
				if (\is_string($toAlphabet) && (\strlen($toAlphabet) >= 2 || $toAlphabet === self::BYTE)) {
					$decimal = self::toDecimal($number, $fromAlphabet);

					if ($decimal !== null) {
						if ($toAlphabet !== self::DECIMAL) {
							return self::fromDecimal($decimal, $toAlphabet);
						}
						else {
							return $decimal;
						}
					}
					else {
						return null;
					}
				}
				else {
					return null;
				}
			}
			else {
				return null;
			}
		}
		else {
			return null;
		}
	}

	/**
	 * Converts the specified number from the supplied alphabet to the decimal numeral system
	 *
	 * @param string|int $number the number or numeric string to convert from the old alphabet to the decimal numeral system
	 * @param string $fromAlphabet the alphabet to convert from, e.g. as one of the constants from the {@see Alphabet} class
	 * @return string|null
	 */
	private static function toDecimal($number, $fromAlphabet) {
		$number = (string) $number;
		$fromAlphabet = (string) $fromAlphabet;
		$fromBase = \strlen($fromAlphabet);

		if ($fromAlphabet === self::BYTE) {
			$outputGmp = \gmp_import($number);
		}
		elseif (self::isStandardAlphabet($fromAlphabet)) {
			if ($fromBase >= 11 && $fromBase <= 36) {
				if ($number === \strtoupper($number)) {
					$number = \strtolower($number);
				}
				elseif ($number !== \strtolower($number)) {
					return null;
				}
			}

			$outputGmp = @\gmp_init($number, $fromBase);

			if ($outputGmp === false || \gmp_sign($outputGmp) === -1) {
				return null;
			}
		}
		else {
			$fromBaseGmp = \gmp_init($fromBase, 10);
			$outputGmp = \gmp_init(0, 10);

			for ($i = 0; $i < \strlen($number); $i++) {
				$digit = \strpos($fromAlphabet, $number[$i]);

				if ($digit !== false) {
					$digitGmp = \gmp_init($digit, 10);
					$outputGmp = \gmp_mul($outputGmp, $fromBaseGmp);
					$outputGmp = \gmp_add($outputGmp, $digitGmp);
				}
				else {
					return null;
				}
			}
		}

		return \gmp_strval($outputGmp, 10);
	}

	/**
	 * Converts the specified number from the decimal numeral system to the supplied alphabet
	 *
	 * @param string|int $number the number or numeric string to convert from the decimal numeral system to the new alphabet
	 * @param string $toAlphabet the alphabet to convert to, e.g. as one of the constants from the {@see Alphabet} class
	 * @return string|null
	 */
	private static function fromDecimal($number, $toAlphabet) {
		$numberGmp = \gmp_init($number, 10);
		$toAlphabet = (string) $toAlphabet;
		$toBase = \strlen($toAlphabet);

		if ($toAlphabet === self::BYTE) {
			$output = \gmp_export($numberGmp);
		}
		elseif (self::isStandardAlphabet($toAlphabet)) {
			$output = @\gmp_strval($number, $toBase);

			if ($toBase >= 11 && $toBase <= 36) {
				if ($toAlphabet === \strtoupper($toAlphabet)) {
					$output = \strtoupper($output);
				}
			}
		}
		else {
			$toBaseGmp = \gmp_init($toBase, 10);
			$output = '';

			while (\gmp_sign($numberGmp) === 1) {
				$quotientAndRemainderGmp = \gmp_div_qr($numberGmp, $toBaseGmp, \GMP_ROUND_ZERO);
				$index = \gmp_strval($quotientAndRemainderGmp[1], 10);
				$output = $toAlphabet[$index] . $output;
				$numberGmp = $quotientAndRemainderGmp[0];
			}
		}

		if ($output !== '') {
			return $output;
		}
		else {
			return $toAlphabet[0];
		}
	}

	/**
	 * Checks if the specified alphabet is a standard alphabet with 2 to 62 digits or characters
	 *
	 * @param string $alphabet
	 * @return bool
	 */
	private static function isStandardAlphabet($alphabet) {
		$base = \strlen($alphabet);

		if ($base >= 2 && $base <= 62) {
			if ($base <= 10) {
				return $alphabet === \substr(self::DECIMAL, 0, $base);
			}
			elseif ($base <= 36) {
				return $alphabet === \substr(self::ALPHANUMERIC_LOWERCASE, 0, $base) || $alphabet === \substr(self::ALPHANUMERIC_UPPERCASE, 0, $base);
			}
			else {
				return $alphabet === \substr(self::ALPHANUMERIC, 0, $base);
			}
		}
		else {
			return false;
		}
	}

	private function __construct() {}

}
