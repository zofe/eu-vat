<?php
/**
 * Created for eu-vat.
 *
 * File: CY.php
 * User: Peter de Kok <peter@eventix.io>
 * Date: 2019-08-14
 * Time: 15:40
 */

namespace Eventix\EuVat\Countries;

use Eventix\EuVat\Country;

/**
 * Class CY
 *
 * CY
 * Cyprus
 *
 * CY99999999L
 * 1 block of 9 characters
 *
 * @package Eventix\EuVat
 * @author Peter de Kok <peter@eventix.io>
 */
class CY extends Country {

    /**
     * The ISO-3166 country code
     */
    public function code(): string {
        return 'CY';
    }

    /**
     * The name of the country
     */
    public function name(): string {
        return 'Cyprus';
    }

    /**
     * Array of allowed characters.
     *
     * If only one entry is given, the string length does not matter
     * e.g.: `['A-Z0-9']`
     *
     * If multiple entries are given, the index in the array corresponds with the format's character position
     * e.g.: `['1', '2', '3', '4']`
     *
     * Can also be a nested array of allowed characters in the order they should be validated
     * e.g.: `[['1', '2', '3', '4'], ['1', '2', '3', '4', '5', '6']]`
     */
    public function getAllowedCharacters(): array {
        return ['0-9', '0-9', '0-9', '0-9', '0-9', '0-9', '0-9', '0-9', 'A-Z'];
    }
}
