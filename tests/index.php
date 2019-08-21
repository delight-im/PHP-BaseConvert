<?php

/*
 * PHP-BaseConvert (https://github.com/delight-im/PHP-BaseConvert)
 * Copyright (c) delight.im (https://www.delight.im/)
 * Licensed under the MIT License (https://opensource.org/licenses/MIT)
 */

// enable error reporting
\error_reporting(\E_ALL);
\ini_set('display_errors', 'stdout');

// enable assertions
\ini_set('assert.active', 1);
@\ini_set('zend.assertions', 1);
\ini_set('assert.exception', 1);

\header('Content-Type: text/plain; charset=utf-8');

require __DIR__.'/../vendor/autoload.php';

$sourceAlphabet = \Delight\BaseConvert\Alphabet::BINARY;

(\Delight\BaseConvert\Alphabet::convert(null, $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', $sourceAlphabet, $sourceAlphabet) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01', $sourceAlphabet, $sourceAlphabet) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01000010', $sourceAlphabet, $sourceAlphabet) === '1000010') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('11100011', $sourceAlphabet, $sourceAlphabet) === '11100011') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('00110110', $sourceAlphabet, $sourceAlphabet) === '110110') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('11000110', $sourceAlphabet, $sourceAlphabet) === '11000110') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('10001111', $sourceAlphabet, $sourceAlphabet) === '10001111') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('1111100011011110010000011101101110000000', $sourceAlphabet, $sourceAlphabet) === '1111100011011110010000011101101110000000') or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert(null, $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01000010', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '66') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('11100011', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '227') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('00110110', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '54') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('11000110', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '198') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('10001111', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '143') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('1111100011011110010000011101101110000000', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '1068880747392') or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert(null, $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01000010', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '56') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('11100011', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '16B') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('00110110', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '46') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('11000110', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '146') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('10001111', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === 'BB') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('1111100011011110010000011101101110000000', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '1531A5BBB400') or \fail(__LINE__);

$sourceAlphabet = \Delight\BaseConvert\Alphabet::OCTAL;

(\Delight\BaseConvert\Alphabet::convert(null, $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', $sourceAlphabet, $sourceAlphabet) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01', $sourceAlphabet, $sourceAlphabet) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('024', $sourceAlphabet, $sourceAlphabet) === '24') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('026', $sourceAlphabet, $sourceAlphabet) === '26') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('132', $sourceAlphabet, $sourceAlphabet) === '132') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('013', $sourceAlphabet, $sourceAlphabet) === '13') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('217', $sourceAlphabet, $sourceAlphabet) === '217') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('4562245003000071200000100340005636710000', $sourceAlphabet, $sourceAlphabet) === '4562245003000071200000100340005636710000') or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert(null, $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('024', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '20') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('026', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '22') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('132', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '90') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('013', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '11') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('217', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '143') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('4562245003000071200000100340005636710000', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '784790447634685127626847041410011136') or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert(null, $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('024', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '18') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('026', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '1A') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('132', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '76') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('013', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === 'B') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('217', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === 'BB') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('4562245003000071200000100340005636710000', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '1AB6129356544064AB922318896219B140') or \fail(__LINE__);

$sourceAlphabet = \Delight\BaseConvert\Alphabet::DECIMAL;

(\Delight\BaseConvert\Alphabet::convert('null', $sourceAlphabet, \Delight\BaseConvert\Alphabet::ALPHANUMERIC_HUMAN) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, \Delight\BaseConvert\Alphabet::ALPHANUMERIC_HUMAN) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, \Delight\BaseConvert\Alphabet::ALPHANUMERIC_HUMAN) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, \Delight\BaseConvert\Alphabet::ALPHANUMERIC_HUMAN) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', $sourceAlphabet, \Delight\BaseConvert\Alphabet::ALPHANUMERIC_HUMAN) === '3') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01', $sourceAlphabet, \Delight\BaseConvert\Alphabet::ALPHANUMERIC_HUMAN) === '4') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('146', $sourceAlphabet, \Delight\BaseConvert\Alphabet::ALPHANUMERIC_HUMAN) === '9x') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('126', $sourceAlphabet, \Delight\BaseConvert\Alphabet::ALPHANUMERIC_HUMAN) === '9V') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('87', $sourceAlphabet, \Delight\BaseConvert\Alphabet::ALPHANUMERIC_HUMAN) === '7R') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('153', $sourceAlphabet, \Delight\BaseConvert\Alphabet::ALPHANUMERIC_HUMAN) === 'CF') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('219', $sourceAlphabet, \Delight\BaseConvert\Alphabet::ALPHANUMERIC_HUMAN) === 'Fw') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('3012001200067890000406780000912050034500', $sourceAlphabet, \Delight\BaseConvert\Alphabet::ALPHANUMERIC_HUMAN) === '4tYhrL3q7ydJrqrj4hp7WjHkWJ') or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert('null', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', $sourceAlphabet, $sourceAlphabet) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01', $sourceAlphabet, $sourceAlphabet) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('146', $sourceAlphabet, $sourceAlphabet) === '146') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('126', $sourceAlphabet, $sourceAlphabet) === '126') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('87', $sourceAlphabet, $sourceAlphabet) === '87') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('153', $sourceAlphabet, $sourceAlphabet) === '153') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('219', $sourceAlphabet, $sourceAlphabet) === '219') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('3012001200067890000406780000912050034500', $sourceAlphabet, $sourceAlphabet) === '3012001200067890000406780000912050034500') or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert('null', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('146', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '102') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('126', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === 'A6') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('87', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '73') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('153', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '109') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('219', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '163') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('3012001200067890000406780000912050034500', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '42BB01249309BB058B772A3601414A7A21B70') or \fail(__LINE__);

$sourceAlphabet = \Delight\BaseConvert\Alphabet::HEX;

(\Delight\BaseConvert\Alphabet::convert('null', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', $sourceAlphabet, $sourceAlphabet) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01', $sourceAlphabet, $sourceAlphabet) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('60', $sourceAlphabet, $sourceAlphabet) === '60') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('D5', $sourceAlphabet, $sourceAlphabet) === 'D5') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('D7', $sourceAlphabet, $sourceAlphabet) === 'D7') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('D8', $sourceAlphabet, $sourceAlphabet) === 'D8') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('81', $sourceAlphabet, $sourceAlphabet) === '81') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('7000450089A0000012000BCD00604500323EF100', $sourceAlphabet, $sourceAlphabet) === '7000450089A0000012000BCD00604500323EF100') or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert('null', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('60', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '96') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('D5', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '213') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('D7', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '215') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('D8', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '216') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('81', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '129') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('127000450089A00000000BCD00604500323EF100', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '105259540817262448627958480599765632799008026880') or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert('null', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('60', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '80') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('D5', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '159') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('D7', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '15B') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('D8', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '160') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('81', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === 'A9') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('127000450089A00000000BCD00604500323EF100', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '4189761600A485232B43B98901135954A73678144A80') or \fail(__LINE__);

$sourceAlphabet = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrst';

(\Delight\BaseConvert\Alphabet::convert('null', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', $sourceAlphabet, $sourceAlphabet) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01', $sourceAlphabet, $sourceAlphabet) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('jk6pJ', $sourceAlphabet, $sourceAlphabet) === 'jk6pJ') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Oj9gTk6pJ', $sourceAlphabet, $sourceAlphabet) === 'Oj9gTk6pJ') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Oj9gTdaCsk6pJ', $sourceAlphabet, $sourceAlphabet) === 'Oj9gTdaCsk6pJ') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Oj9gTrh51W2oqdaCsk6pJ', $sourceAlphabet, $sourceAlphabet) === 'Oj9gTrh51W2oqdaCsk6pJ') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Oj9gTrh51WFiHDMYQnbE0UG38ZfS2oqdaCsk6pJ', $sourceAlphabet, $sourceAlphabet) === 'Oj9gTrh51WFiHDMYQnbE0UG38ZfS2oqdaCsk6pJ') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Oj9gIlcBeAL4PRKNmV7XtTrh51WFiHDMYQnbE0UG38ZfS2oqdaCsk6pJ', $sourceAlphabet, $sourceAlphabet) === 'Oj9gIlcBeAL4PRKNmV7XtTrh51WFiHDMYQnbE0UG38ZfS2oqdaCsk6pJ') or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert('null', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('jk6pJ', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '450652347') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Oj9gTk6pJ', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '2399235738855611') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Oj9gTdaCsk6pJ', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '23595274265646990162107') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Oj9gTrh51W2oqdaCsk6pJ', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '2282071495183957594570419775349782715') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Oj9gTrh51WFiHDMYQnbE0UG38ZfS2oqdaCsk6pJ', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '66944319685967029910132163452543651934515797367220271211512631982267') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Oj9gIlcBeAL4PRKNmV7XtTrh51WFiHDMYQnbE0UG38ZfS2oqdaCsk6pJ', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '35067933294761636871761269853053153998602484754757725721939281135752073275216219012471886544959675') or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert('null', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('01', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('jk6pJ', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '106B0A223') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Oj9gTk6pJ', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '1A510BB6263204B') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Oj9gTdaCsk6pJ', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '61A31A49A43AAB45B030B') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Oj9gTrh51W2oqdaCsk6pJ', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '569188B371036A8B43389983460615830B') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Oj9gTrh51WFiHDMYQnbE0UG38ZfS2oqdaCsk6pJ', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '83008A5B2A3AA4B5436962677A5843AA5A3546351314B0B320B662915577B63') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Oj9gIlcBeAL4PRKNmV7XtTrh51WFiHDMYQnbE0UG38ZfS2oqdaCsk6pJ', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '27565552A9A0B863B96278A7A25754328542A360227A82603477933759BB4B7187B189359140416909560729A77') or \fail(__LINE__);

$sourceAlphabet = \Delight\BaseConvert\Alphabet::ALPHA_HUMAN;

(\Delight\BaseConvert\Alphabet::convert('null', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, $sourceAlphabet) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('C', $sourceAlphabet, $sourceAlphabet) === 'C') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('CF', $sourceAlphabet, $sourceAlphabet) === 'F') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Mbc', $sourceAlphabet, $sourceAlphabet) === 'Mbc') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('rMbc', $sourceAlphabet, $sourceAlphabet) === 'rMbc') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('rxmMbc', $sourceAlphabet, $sourceAlphabet) === 'rxmMbc') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('rxmMbcWYNVfH', $sourceAlphabet, $sourceAlphabet) === 'rxmMbcWYNVfH') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('pTvRPrxmMbcWYNVfH', $sourceAlphabet, $sourceAlphabet) === 'pTvRPrxmMbcWYNVfH') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('pTvRPrnhdCykLxmMbcWYNVfH', $sourceAlphabet, $sourceAlphabet) === 'pTvRPrnhdCykLxmMbcWYNVfH') or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert('null', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('C', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('CF', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Mbc', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '7045') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('rMbc', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '977344') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('rxmMbc', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '1094252758') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('rxmMbcWYNVfH', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '1413192387433400246') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('pTvRPrxmMbcWYNVfH', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '50102203229818804465653287') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('pTvRPrnhdCykLxmMbcWYNVfH', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DECIMAL) === '2135277890909882387351758170070037471') or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert('null', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('-1', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('C', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('CF', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Mbc', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '40B1') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('rMbc', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '3B1714') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('rxmMbc', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '26656815A') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('rxmMbcWYNVfH', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '77882B203A3698132') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('pTvRPrxmMbcWYNVfH', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '7690828449234B83BB19979B') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('pTvRPrnhdCykLxmMbcWYNVfH', $sourceAlphabet, \Delight\BaseConvert\Alphabet::DUODECIMAL_UPPERCASE) === '52573B35204A69951A732252388382033B') or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert(null, \Delight\BaseConvert\Alphabet::BYTE, \Delight\BaseConvert\Alphabet::OCTAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('', \Delight\BaseConvert\Alphabet::BYTE, \Delight\BaseConvert\Alphabet::OCTAL) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', \Delight\BaseConvert\Alphabet::BYTE, \Delight\BaseConvert\Alphabet::OCTAL) === '37076174') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('|||', \Delight\BaseConvert\Alphabet::BYTE, \Delight\BaseConvert\Alphabet::HEX) === '7C7C7C') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert("\x7c\x7c\x7c", \Delight\BaseConvert\Alphabet::BYTE, \Delight\BaseConvert\Alphabet::HEX) === '7C7C7C') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('0', \Delight\BaseConvert\Alphabet::DECIMAL, \Delight\BaseConvert\Alphabet::BYTE) === "\0") or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('EF15', \Delight\BaseConvert\Alphabet::HEX, \Delight\BaseConvert\Alphabet::BYTE) === "\xef\x15") or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('ef15ef15', \Delight\BaseConvert\Alphabet::HEX_LOWERCASE, \Delight\BaseConvert\Alphabet::BYTE) === "\xef\x15\xef\x15") or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert("\x44\x25\x31\x3d", \Delight\BaseConvert\Alphabet::BYTE, \Delight\BaseConvert\Alphabet::OCTAL) === '10411230475') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert("\x5e\xbe\x75\x66\x2b\x26\x57\x44\x39\xea\x3c\x22\x19\x3b\x3e\xf0", \Delight\BaseConvert\Alphabet::BYTE, \Delight\BaseConvert\Alphabet::OCTAL) === '1365747254612623127210347521702103116637360') or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert('C2760', \Delight\BaseConvert\Alphabet::HEX_UPPERCASE, \Delight\BaseConvert\Alphabet::VIGESIMAL_UPPERCASE) === '4JB5C') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('FC2359760', \Delight\BaseConvert\Alphabet::HEX_UPPERCASE, \Delight\BaseConvert\Alphabet::VIGESIMAL_UPPERCASE) === '2CHAHA3F4') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('D8EA1FC23597604B', \Delight\BaseConvert\Alphabet::HEX_UPPERCASE, \Delight\BaseConvert\Alphabet::VIGESIMAL_UPPERCASE) === '9AG008AIAE74CJF') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('c2760', \Delight\BaseConvert\Alphabet::HEX_LOWERCASE, \Delight\BaseConvert\Alphabet::VIGESIMAL_UPPERCASE) === '4JB5C') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('fc2359760', \Delight\BaseConvert\Alphabet::HEX_LOWERCASE, \Delight\BaseConvert\Alphabet::VIGESIMAL_UPPERCASE) === '2CHAHA3F4') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('d8ea1fc23597604b', \Delight\BaseConvert\Alphabet::HEX_LOWERCASE, \Delight\BaseConvert\Alphabet::VIGESIMAL_UPPERCASE) === '9AG008AIAE74CJF') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('C2760', \Delight\BaseConvert\Alphabet::HEX, \Delight\BaseConvert\Alphabet::VIGESIMAL_LOWERCASE) === '4jb5c') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('FC2359760', \Delight\BaseConvert\Alphabet::HEX, \Delight\BaseConvert\Alphabet::VIGESIMAL_LOWERCASE) === '2chaha3f4') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('D8EA1FC23597604B', \Delight\BaseConvert\Alphabet::HEX, \Delight\BaseConvert\Alphabet::VIGESIMAL_LOWERCASE) === '9ag008aiae74cjf') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('c2760', \Delight\BaseConvert\Alphabet::HEX, \Delight\BaseConvert\Alphabet::VIGESIMAL_LOWERCASE) === '4jb5c') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('fc2359760', \Delight\BaseConvert\Alphabet::HEX, \Delight\BaseConvert\Alphabet::VIGESIMAL_LOWERCASE) === '2chaha3f4') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('d8ea1fc23597604b', \Delight\BaseConvert\Alphabet::HEX, \Delight\BaseConvert\Alphabet::VIGESIMAL_LOWERCASE) === '9ag008aiae74cjf') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('4JB5C', \Delight\BaseConvert\Alphabet::VIGESIMAL_UPPERCASE, \Delight\BaseConvert\Alphabet::HEX_UPPERCASE) === 'C2760') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('2CHAHA3F4', \Delight\BaseConvert\Alphabet::VIGESIMAL_UPPERCASE, \Delight\BaseConvert\Alphabet::HEX_UPPERCASE) === 'FC2359760') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('9AG008AIAE74CJF', \Delight\BaseConvert\Alphabet::VIGESIMAL_UPPERCASE, \Delight\BaseConvert\Alphabet::HEX_UPPERCASE) === 'D8EA1FC23597604B') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('4JB5C', \Delight\BaseConvert\Alphabet::VIGESIMAL_UPPERCASE, \Delight\BaseConvert\Alphabet::HEX_LOWERCASE) === 'c2760') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('2CHAHA3F4', \Delight\BaseConvert\Alphabet::VIGESIMAL_UPPERCASE, \Delight\BaseConvert\Alphabet::HEX_LOWERCASE) === 'fc2359760') or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('9AG008AIAE74CJF', \Delight\BaseConvert\Alphabet::VIGESIMAL_UPPERCASE, \Delight\BaseConvert\Alphabet::HEX_LOWERCASE) === 'd8ea1fc23597604b') or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert('EF15', \Delight\BaseConvert\Alphabet::HEX_UPPERCASE, \Delight\BaseConvert\Alphabet::BYTE) === "\xef\x15") or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('Ef15', \Delight\BaseConvert\Alphabet::HEX_UPPERCASE, \Delight\BaseConvert\Alphabet::BYTE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('ef15', \Delight\BaseConvert\Alphabet::HEX_UPPERCASE, \Delight\BaseConvert\Alphabet::BYTE) === "\xef\x15") or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('ef15', \Delight\BaseConvert\Alphabet::HEX_LOWERCASE, \Delight\BaseConvert\Alphabet::BYTE) === "\xef\x15") or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('eF15', \Delight\BaseConvert\Alphabet::HEX_LOWERCASE, \Delight\BaseConvert\Alphabet::BYTE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('EF15', \Delight\BaseConvert\Alphabet::HEX_LOWERCASE, \Delight\BaseConvert\Alphabet::BYTE) === "\xef\x15") or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('ef15', \Delight\BaseConvert\Alphabet::HEX, \Delight\BaseConvert\Alphabet::BYTE) === "\xef\x15") or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('eF15', \Delight\BaseConvert\Alphabet::HEX, \Delight\BaseConvert\Alphabet::BYTE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('EF15', \Delight\BaseConvert\Alphabet::HEX, \Delight\BaseConvert\Alphabet::BYTE) === "\xef\x15") or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert('EF15', '0123456789ABCDEF', \Delight\BaseConvert\Alphabet::BYTE) === "\xef\x15") or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('EF15', '0123456789AbcdeF', \Delight\BaseConvert\Alphabet::BYTE) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('EF15', '0123456789abcdef', \Delight\BaseConvert\Alphabet::BYTE) === "\xef\x15") or \fail(__LINE__);

(\Delight\BaseConvert\Alphabet::convert('10', null, \Delight\BaseConvert\Alphabet::BINARY) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('10', '', \Delight\BaseConvert\Alphabet::BINARY) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('10', '0', \Delight\BaseConvert\Alphabet::BINARY) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('10', \Delight\BaseConvert\Alphabet::BINARY, null) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('10', \Delight\BaseConvert\Alphabet::BINARY, '') === null) or \fail(__LINE__);
(\Delight\BaseConvert\Alphabet::convert('10', \Delight\BaseConvert\Alphabet::BINARY, '0') === null) or \fail(__LINE__);

(\Delight\BaseConvert\Base::convert(null, 41, 5) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Base::convert('', 55, 40) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Base::convert('|||', 30, 52) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Base::convert('-1', 3, 23) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Base::convert('0', 12, 39) === '0') or \fail(__LINE__);
(\Delight\BaseConvert\Base::convert('376594866', 10, 2) === '10110011100100110000110110010') or \fail(__LINE__);
(\Delight\BaseConvert\Base::convert('2634460662', 8, 16) === '167261B2') or \fail(__LINE__);
(\Delight\BaseConvert\Base::convert('848490771450709310', 10, 16) === 'BC671DC7384453E') or \fail(__LINE__);
(\Delight\BaseConvert\Base::convert('57063435616341042476', 8, 2) === '101111000110011100011101110001110011100001000100010100111110') or \fail(__LINE__);

(\Delight\BaseConvert\Base::convert('ef15', 16, 8) === '167425') or \fail(__LINE__);
(\Delight\BaseConvert\Base::convert('eF15', 16, 8) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Base::convert('EF15', 16, 8) === '167425') or \fail(__LINE__);

(\Delight\BaseConvert\Base::convert('10', null, 2) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Base::convert('10', '', 2) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Base::convert('10', 0, 2) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Base::convert('10', 2, null) === null) or \fail(__LINE__);
(\Delight\BaseConvert\Base::convert('10', 2, '') === null) or \fail(__LINE__);
(\Delight\BaseConvert\Base::convert('10', 2, 0) === null) or \fail(__LINE__);

echo 'ALL TESTS PASSED' . "\n";

function fail($lineNumber) {
	exit('Error in line ' . $lineNumber);
}
