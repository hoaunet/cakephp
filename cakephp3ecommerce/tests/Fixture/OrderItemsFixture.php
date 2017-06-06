<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrderItemsFixture
 *
 */
class OrderItemsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'order_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'product_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'quantity' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'weight' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => true, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'price' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => ''],
        'subtotal' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => ''],
        'productmod_name' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
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
            'order_id' => 1,
            'product_id' => 1,
            'name' => 'Lorem ipsum dolor sit amet',
            'quantity' => 1,
            'weight' => 1.5,
            'price' => 1.5,
            'subtotal' => 1.5,
            'productmod_name' => 'Lorem ipsum dolor sit amet',
            'created' => '2017-06-05 07:47:30',
            'modified' => '2017-06-05 07:47:30'
        ],
    ];
}
