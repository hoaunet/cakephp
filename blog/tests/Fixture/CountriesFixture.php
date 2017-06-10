<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CountriesFixture
 *
 */
class CountriesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'countries_name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'countries_iso_code_2' => ['type' => 'string', 'fixed' => true, 'length' => 2, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'countries_iso_code_3' => ['type' => 'string', 'fixed' => true, 'length' => 3, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'address_format_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'countries_name' => 'Lorem ipsum dolor sit amet',
            'countries_iso_code_2' => '',
            'countries_iso_code_3' => 'L',
            'address_format_id' => 1
        ],
    ];
}
