# PHP-BaseConvert

Conversion of arbitrarily large numbers between any two bases or alphabets

## Requirements

 * PHP 5.6.0+
   * GMP (GNU Multiple Precision) extension (`gmp`)

## Installation

 1. Include the library via Composer [[?]](https://github.com/delight-im/Knowledge/blob/master/Composer%20(PHP).md):

    ```
    $ composer require delight-im/base-convert
    ```

 1. Include the Composer autoloader:

    ```php
    require __DIR__ . '/vendor/autoload.php';
    ```

## Usage

### Conversions between bases

```php
\Delight\BaseConvert\Base::convert(
    '101111000110011100011101110001110011100001000100010100111110',
    2,
    27
); // string(13) "5HH1KDF77JELE"

// or

\Delight\BaseConvert\Base::convert(
    '2634460662',
    8,
    16
); // string(8) "167261B2"

// or

\Delight\BaseConvert\Base::convert(
    'BC671DC7384453E',
    16,
    10
); // string(18) "848490771450709310"
```

**Note:** Only bases between 2 (inclusive) and 62 (inclusive) are supported via `Base::convert`. For larger bases, you must use `Alphabet::convert` instead and specify the alphabet that should be used explicitly.

### Conversions between alphabets

```php
\Delight\BaseConvert\Alphabet::convert(
    '219',
    \Delight\BaseConvert\Alphabet::DECIMAL,
    \Delight\BaseConvert\Alphabet::ALPHANUMERIC_HUMAN
); // string(2) "Fw"

// or

\Delight\BaseConvert\Alphabet::convert(
    '1068880747392',
    \Delight\BaseConvert\Alphabet::DECIMAL,
    \Delight\BaseConvert\Alphabet::BINARY
); // string(40) "1111100011011110010000011101101110000000"

// or

\Delight\BaseConvert\Alphabet::convert(
    '3012001200067890000406780000912050034500',
    \Delight\BaseConvert\Alphabet::DECIMAL,
    \Delight\BaseConvert\Alphabet::ALPHANUMERIC_HUMAN
); // string(26) "4tYhrL3q7ydJrqrj4hp7WjHkWJ"

// or

\Delight\BaseConvert\Alphabet::convert(
    '4562245003000071200000100340005636710000',
    \Delight\BaseConvert\Alphabet::OCTAL,
    \Delight\BaseConvert\Alphabet::DECIMAL
); // string(36) "784790447634685127626847041410011136"

// or

\Delight\BaseConvert\Alphabet::convert(
    '127000450089A00000000BCD00604500323EF100',
    \Delight\BaseConvert\Alphabet::HEX,
    \Delight\BaseConvert\Alphabet::DECIMAL
); // string(48) "105259540817262448627958480599765632799008026880"

// or

\Delight\BaseConvert\Alphabet::convert(
    'rxmMbcWYNVfH',
    \Delight\BaseConvert\Alphabet::ALPHA_HUMAN,
    \Delight\BaseConvert\Alphabet::DECIMAL
); // string(19) "1413192387433400246"

// or

\Delight\BaseConvert\Alphabet::convert(
    "\x44\x25\x31\x3d",
    \Delight\BaseConvert\Alphabet::BYTE,
    \Delight\BaseConvert\Alphabet::OCTAL
); // string(11) "10411230475"
```

### Available alphabets

When passing an alphabet to `Alphabet::convert` as either the source or the target alphabet, you can use any alphabet that exclusively consists of ASCII or single-byte UTF-8 characters. Of course, no single character may appear more than once in a given alphabet.

Alternatively, you can use any of the following pre-defined alphabets that should be sufficient for many purposes:

```php
\Delight\BaseConvert\Alphabet::ALPHA;
\Delight\BaseConvert\Alphabet::ALPHA_HUMAN;
\Delight\BaseConvert\Alphabet::ALPHA_LOWERCASE;
\Delight\BaseConvert\Alphabet::ALPHA_LOWERCASE_HUMAN;
\Delight\BaseConvert\Alphabet::ALPHA_UPPERCASE;
\Delight\BaseConvert\Alphabet::ALPHA_UPPERCASE_HUMAN;
\Delight\BaseConvert\Alphabet::ALPHANUMERIC;
\Delight\BaseConvert\Alphabet::ALPHANUMERIC_AND_PUNCTUATION_HUMAN;
\Delight\BaseConvert\Alphabet::ALPHANUMERIC_HUMAN;
\Delight\BaseConvert\Alphabet::ALPHANUMERIC_LOWERCASE;
\Delight\BaseConvert\Alphabet::ALPHANUMERIC_LOWERCASE_HUMAN;
\Delight\BaseConvert\Alphabet::ALPHANUMERIC_UPPERCASE;
\Delight\BaseConvert\Alphabet::ALPHANUMERIC_UPPERCASE_HUMAN;
\Delight\BaseConvert\Alphabet::ASCII_PRINTABLE;
\Delight\BaseConvert\Alphabet::ASCII_PRINTABLE_HUMAN;
\Delight\BaseConvert\Alphabet::BINARY;
\Delight\BaseConvert\Alphabet::BYTE;
\Delight\BaseConvert\Alphabet::DECIMAL;
\Delight\BaseConvert\Alphabet::DUODECIMAL;
\Delight\BaseConvert\Alphabet::DUODECIMAL_LOWERCASE;
\Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE;
\Delight\BaseConvert\Alphabet::HEX;
\Delight\BaseConvert\Alphabet::HEX_LOWERCASE;
\Delight\BaseConvert\Alphabet::HEX_UPPERCASE;
\Delight\BaseConvert\Alphabet::OCTAL;
\Delight\BaseConvert\Alphabet::QUATERNARY;
\Delight\BaseConvert\Alphabet::QUINARY;
\Delight\BaseConvert\Alphabet::SENARY;
\Delight\BaseConvert\Alphabet::TERNARY;
\Delight\BaseConvert\Alphabet::VIGESIMAL;
\Delight\BaseConvert\Alphabet::VIGESIMAL_LOWERCASE;
\Delight\BaseConvert\Alphabet::VIGESIMAL_UPPERCASE;
```

### Built-in PHP functions

If you prefer a consistent interface for bases of any size, you can replace PHP’s built-in functions for base conversions as follows:

 * `\bindec($n)` can be replaced with …
   * `\Delight\BaseConvert\Base::convert($n, 2, 10)`
   * `\Delight\BaseConvert\Alphabet::convert($n, \Delight\BaseConvert\Alphabet::BINARY, \Delight\BaseConvert\Alphabet::DECIMAL)`
 * `\octdec($n)` can be replaced with …
   * `\Delight\BaseConvert\Base::convert($n, 8, 10)`
   * `\Delight\BaseConvert\Alphabet::convert($n, \Delight\BaseConvert\Alphabet::OCTAL, \Delight\BaseConvert\Alphabet::DECIMAL)`
 * `\decbin($n)` can be replaced with …
   * `\Delight\BaseConvert\Base::convert($n, 10, 2)`
   * `\Delight\BaseConvert\Alphabet::convert($n, \Delight\BaseConvert\Alphabet::DECIMAL, \Delight\BaseConvert\Alphabet::BINARY)`
 * `\decoct($n)` can be replaced with …
   * `\Delight\BaseConvert\Base::convert($n, 10, 8)`
   * `\Delight\BaseConvert\Alphabet::convert($n, \Delight\BaseConvert\Alphabet::DECIMAL, \Delight\BaseConvert\Alphabet::OCTAL)`
 * `\dechex($n)` can be replaced with …
   * `\Delight\BaseConvert\Alphabet::convert($n, \Delight\BaseConvert\Alphabet::DECIMAL, \Delight\BaseConvert\Alphabet::HEX_LOWERCASE)`
   * `\Delight\BaseConvert\Base::convert($n, 10, 16)` (uppercase)
 * `\hexdec($n)` can be replaced with …
   * `\Delight\BaseConvert\Alphabet::convert($n, \Delight\BaseConvert\Alphabet::HEX, \Delight\BaseConvert\Alphabet::DECIMAL)`
   * `\Delight\BaseConvert\Base::convert($n, 16, 10)`
 * `\hex2bin($n)` can be replaced with …
   * `\Delight\BaseConvert\Alphabet::convert($n, \Delight\BaseConvert\Alphabet::HEX_LOWERCASE, \Delight\BaseConvert\Alphabet::BYTE)`
 * `\bin2hex($n)` can be replaced with …
   * `\Delight\BaseConvert\Alphabet::convert($n, \Delight\BaseConvert\Alphabet::BYTE, \Delight\BaseConvert\Alphabet::HEX_LOWERCASE)`
 * `base_convert($n, $fromBase, $toBase)` can be replaced with …
   * `\Delight\BaseConvert\Base::convert($n, $fromBase, $toBase)`

## Contributing

All contributions are welcome! If you wish to contribute, please create an issue first so that your feature, problem or question can be discussed.

## License

This project is licensed under the terms of the [MIT License](https://opensource.org/licenses/MIT).
