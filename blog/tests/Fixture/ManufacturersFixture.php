<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ManufacturersFixture
 *
 */
class ManufacturersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'manufacturers_name' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'manufacturers_image' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'date_added' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'last_modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
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
            'manufacturers_name' => 'Lorem ipsum dolor sit amet',
            'manufacturers_image' => 'Lorem ipsum dolor sit amet',
            'date_added' => '2017-06-08 09:07:09',
            'last_modified' => '2017-06-08 09:07:09'
        ],
    ];
}
