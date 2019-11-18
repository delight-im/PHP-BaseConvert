<?php

/*
 * PHP-BaseConvert (https://github.com/delight-im/PHP-BaseConvert)
 * Copyright (c) delight.im (https://www.delight.im/)
 * Licensed under the MIT License (https://opensource.org/licenses/MIT)
 */

namespace Delight\BaseConvert;

use Delight\Alphabets\Alphabet as Pool;

/** Conversion of numbers and numeric strings between different alphabets, with pre-defined alphabets that may be used as sources or targets */
final class Alphabet {

	const ALPHA = Pool::ALPHA;
	const ALPHA_HUMAN = Pool::ALPHA_HUMAN;
	const ALPHA_LOWERCASE = Pool::ALPHA_LOWERCASE;
	const ALPHA_LOWERCASE_HUMAN = Pool::ALPHA_LOWERCASE_HUMAN;
	const ALPHA_UPPERCASE = Pool::ALPHA_UPPERCASE;
	const ALPHA_UPPERCASE_HUMAN = Pool::ALPHA_UPPERCASE_HUMAN;
	const ALPHANUMERIC = Pool::ALPHANUMERIC;
	const ALPHANUMERIC_AND_PUNCTUATION_HUMAN = Pool::ALPHANUMERIC_AND_PUNCTUATION_HUMAN;
	const ALPHANUMERIC_HUMAN = Pool::ALPHANUMERIC_HUMAN;
	const ALPHANUMERIC_LOWERCASE = Pool::ALPHANUMERIC_LOWERCASE;
	const ALPHANUMERIC_LOWERCASE_HUMAN = Pool::ALPHANUMERIC_LOWERCASE_HUMAN;
	const ALPHANUMERIC_UPPERCASE = Pool::ALPHANUMERIC_UPPERCASE;
	const ALPHANUMERIC_UPPERCASE_HUMAN = Pool::ALPHANUMERIC_UPPERCASE_HUMAN;
	const ASCII_PRINTABLE = Pool::ASCII_PRINTABLE;
	const ASCII_PRINTABLE_HUMAN = Pool::ASCII_PRINTABLE_HUMAN;
	const BASE_32 = Pool::BASE_32;
	const BASE_58 = Pool::BASE_58;
	const BASE_64 = Pool::BASE_64;
	const BASE_64_URL = Pool::BASE_64_URL;
	const BASE_85 = Pool::BASE_85;
	const BINARY = Pool::BINARY;
	const BYTE = "\x00\x01\x02\x03\x04\x05\x06\x07\x08\x09\x0a\x0b\x0c\x0d\x0e\x0f\x10\x11\x12\x13\x14\x15\x16\x17\x18\x19\x1a\x1b\x1c\x1d\x1e\x1f\x20\x21\x22\x23\x24\x25\x26\x27\x28\x29\x2a\x2b\x2c\x2d\x2e\x2f\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39\x3a\x3b\x3c\x3d\x3e\x3f\x40\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4a\x4b\x4c\x4d\x4e\x4f\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5a\x5b\x5c\x5d\x5e\x5f\x60\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6a\x6b\x6c\x6d\x6e\x6f\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7a\x7b\x7c\x7d\x7e\x7f\x80\x81\x82\x83\x84\x85\x86\x87\x88\x89\x8a\x8b\x8c\x8d\x8e\x8f\x90\x91\x92\x93\x94\x95\x96\x97\x98\x99\x9a\x9b\x9c\x9d\x9e\x9f\xa0\xa1\xa2\xa3\xa4\xa5\xa6\xa7\xa8\xa9\xaa\xab\xac\xad\xae\xaf\xb0\xb1\xb2\xb3\xb4\xb5\xb6\xb7\xb8\xb9\xba\xbb\xbc\xbd\xbe\xbf\xc0\xc1\xc2\xc3\xc4\xc5\xc6\xc7\xc8\xc9\xca\xcb\xcc\xcd\xce\xcf\xd0\xd1\xd2\xd3\xd4\xd5\xd6\xd7\xd8\xd9\xda\xdb\xdc\xdd\xde\xdf\xe0\xe1\xe2\xe3\xe4\xe5\xe6\xe7\xe8\xe9\xea\xeb\xec\xed\xee\xef\xf0\xf1\xf2\xf3\xf4\xf5\xf6\xf7\xf8\xf9\xfa\xfb\xfc\xfd\xfe\xff";
	const DECIMAL = Pool::DECIMAL;
	const DUODECIMAL = Pool::DUODECIMAL;
	const DUODECIMAL_LOWERCASE = Pool::DUODECIMAL_LOWERCASE;
	const DUODECIMAL_UPPERCASE = Pool::DUODECIMAL_UPPERCASE;
	const HEX = Pool::HEX;
	const HEX_LOWERCASE = Pool::HEX_LOWERCASE;
	const HEX_UPPERCASE = Pool::HEX_UPPERCASE;
	const OCTAL = Pool::OCTAL;
	const QUATERNARY = Pool::QUATERNARY;
	const QUINARY = Pool::QUINARY;
	const SENARY = Pool::SENARY;
	const TERNARY = Pool::TERNARY;
	const VIGESIMAL = Pool::VIGESIMAL;
	const VIGESIMAL_LOWERCASE = Pool::VIGESIMAL_LOWERCASE;
	const VIGESIMAL_UPPERCASE = Pool::VIGESIMAL_UPPERCASE;

	/**
	 * Converts the specified number between the two supplied alphabets
	 *
	 * @param string|int $number the number or numeric string to convert
	 * @param string $fromAlphabet the alphabet to convert from, e.g. as one of the constants from the {@see Alphabet} class
	 * @param string $toAlphabet the alphabet to convert to, e.g. as one of the constants from the {@see Alphabet} class
	 * @return string|null
	 */
	public static function convert($number, $fromAlphabet, $toAlphabet) {
		if (!\is_int($number) && (!\is_string($number) || $number === '')) {
			return null;
		}

		if (!\is_string($fromAlphabet) || \strlen($fromAlphabet) < 2) {
			return null;
		}

		if (!\is_string($toAlphabet) || \strlen($toAlphabet) < 2) {
			return null;
		}

		$decimal = self::toDecimal($number, $fromAlphabet);

		if ($decimal === null) {
			return null;
		}

		if ($toAlphabet === self::DECIMAL) {
			return $decimal;
		}

		return self::fromDecimal($decimal, $toAlphabet);
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
		elseif (Pool::isStandardAlphabet($fromAlphabet)) {
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
		elseif (Pool::isStandardAlphabet($toAlphabet)) {
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

	private function __construct() {}

}
