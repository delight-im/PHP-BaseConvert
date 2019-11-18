<?php

/*
 * PHP-BaseConvert (https://github.com/delight-im/PHP-BaseConvert)
 * Copyright (c) delight.im (https://www.delight.im/)
 * Licensed under the MIT License (https://opensource.org/licenses/MIT)
 */

namespace Delight\BaseConvert;

/** Conversion of numbers and numeric strings between different bases */
final class Base {

	/** @var int the maximum base supported for conversions */
	const MAX = 62;
	/** @var int the minimum base supported for conversions */
	const MIN = 2;

	/**
	 * Converts the specified number between the two supplied bases
	 *
	 * @param string|int $number the number or numeric string to convert
	 * @param int|string $fromBase the base to convert from (between 2 and 62)
	 * @param int|string $toBase the base to convert to (between 2 and 62)
	 * @return string|null
	 */
	public static function convert($number, $fromBase, $toBase) {
		if (!\is_int($number) && (!\is_string($number) || $number === '')) {
			return null;
		}

		if (!\is_int($fromBase) && !\is_numeric($fromBase)) {
			return null;
		}

		$fromBase = (int) $fromBase;

		if ($fromBase < self::MIN || $fromBase > self::MAX) {
			return null;
		}

		if (!\is_int($toBase) && !\is_numeric($toBase)) {
			return null;
		}

		$toBase = (int) $toBase;

		if ($toBase < self::MIN || $toBase > self::MAX) {
			return null;
		}

		return Alphabet::convert(
			$number,
			\substr(Alphabet::ALPHANUMERIC, 0, $fromBase),
			\substr(Alphabet::ALPHANUMERIC, 0, $toBase)
		);
	}

	private function __construct() {}

}
