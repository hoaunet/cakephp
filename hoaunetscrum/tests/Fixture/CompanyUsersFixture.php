<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CompanyUsersFixture
 *
 */
class CompanyUsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'company_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'company_uniq_id' => ['type' => 'string', 'length' => 250, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_type' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '1-owner,2-Admin,3-member', 'precision' => null, 'autoIncrement' => null],
        'is_active' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '0-Inactive, 1-Active,2- Not confirmed , 3- Deleted user', 'precision' => null, 'autoIncrement' => null],
        'est_billing_amt' => ['type' => 'float', 'length' => 10, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '0.00', 'comment' => 'Keep the estimated billing amount for the period'],
        'act_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'billing_start_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'billing_end_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'company_id' => ['type' => 'index', 'columns' => ['company_id'], 'length' => []],
            'user_id' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'user_type' => ['type' => 'index', 'columns' => ['user_type'], 'length' => []],
            'is_active' => ['type' => 'index', 'columns' => ['is_active'], 'length' => []],
            'company_uniq_id' => ['type' => 'fulltext', 'columns' => ['company_uniq_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'latin1_swedish_ci'
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
            'company_id' => 1,
            'company_uniq_id' => 'Lorem ipsum dolor sit amet',
            'user_id' => 1,
            'user_type' => 1,
            'is_active' => 1,
            'est_billing_amt' => 1,
            'act_date' => '2017-06-05 12:00:08',
            'billing_start_date' => '2017-06-05 12:00:08',
            'billing_end_date' => '2017-06-05 12:00:08',
            'created' => '2017-06-05 12:00:08',
            'modified' => '2017-06-05 12:00:08'
        ],
    ];
}
