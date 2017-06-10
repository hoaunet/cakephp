<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 *
 */
class ProductsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'products_name' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'products_quantity' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'products_model' => ['type' => 'string', 'length' => 12, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'products_image' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'products_description' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'products_url' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'products_price' => ['type' => 'decimal', 'length' => 15, 'precision' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'products_date_added' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'products_last_modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'products_date_available' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'products_weight' => ['type' => 'decimal', 'length' => 5, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'products_status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'products_tax_class_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'manufacturers_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'products_viewed' => ['type' => 'integer', 'length' => 5, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'products_ordered' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'categories_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_manufacturers_id' => ['type' => 'index', 'columns' => ['manufacturers_id'], 'length' => []],
            'fk_categories_id' => ['type' => 'index', 'columns' => ['categories_id'], 'length' => []],
        ],
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
            'products_name' => 'Lorem ipsum dolor sit amet',
            'products_quantity' => 1,
            'products_model' => 'Lorem ipsu',
            'products_image' => 'Lorem ipsum dolor sit amet',
            'products_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'products_url' => 'Lorem ipsum dolor sit amet',
            'products_price' => 1.5,
            'products_date_added' => '2017-06-08 09:08:01',
            'products_last_modified' => '2017-06-08 09:08:01',
            'products_date_available' => '2017-06-08 09:08:01',
            'products_weight' => 1.5,
            'products_status' => 1,
            'products_tax_class_id' => 1,
            'manufacturers_id' => 1,
            'products_viewed' => 1,
            'products_ordered' => 1,
            'categories_id' => 1
        ],
    ];
}
