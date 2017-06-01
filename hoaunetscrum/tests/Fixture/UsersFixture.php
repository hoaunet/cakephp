<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 *
 */
class UsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'uniq_id' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'btprofile_id' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'usersubscription_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'credit_cardtoken' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'card_number' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Only last 4degit of card', 'precision' => null, 'fixed' => null],
        'expiry_date' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'is_beta' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '1 For beta user ,0 - Default', 'precision' => null, 'autoIncrement' => null],
        'last_name' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'short_name' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'istype' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => '3', 'comment' => '1-Super Admin, 2-Internal User, 3-External User', 'precision' => null, 'autoIncrement' => null],
        'photo' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'photo_reset' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'isactive' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '1 - ACTIVE, 2 - INACTIVE . 2-Disabled ,3- Deleted user', 'precision' => null, 'autoIncrement' => null],
        'timezone_id' => ['type' => 'integer', 'length' => 6, 'unsigned' => false, 'null' => true, 'default' => '26', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'isemail' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '1-Send Email, 0-Don\'t Send', 'precision' => null, 'autoIncrement' => null],
        'is_agree' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '0: No, 1: Yes', 'precision' => null, 'autoIncrement' => null],
        'usersub_type' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '0->Free User, 1->Paid User', 'precision' => null, 'autoIncrement' => null],
        'est_billing_amount' => ['type' => 'float', 'length' => 10, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'dt_created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'dt_updated' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'dt_last_login' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'dt_last_logout' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'query_string' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'update_email' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'update_random' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'gaccess_token' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'ip' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'sig' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'desk_notify' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'active_dashboard_tab' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '7', 'comment' => 'Sum of Binary values which will show tabs accordingly', 'precision' => null, 'autoIncrement' => null],
        'is_moderator' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '0: No grant privilege, 1: Yes', 'precision' => null, 'autoIncrement' => null],
        'show_default_inner' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'uniq_id' => ['type' => 'index', 'columns' => ['uniq_id'], 'length' => []],
            'istype' => ['type' => 'index', 'columns' => ['istype'], 'length' => []],
            'isactive' => ['type' => 'index', 'columns' => ['isactive'], 'length' => []],
            'isemail' => ['type' => 'index', 'columns' => ['isemail'], 'length' => []],
            'timezone_id' => ['type' => 'index', 'columns' => ['timezone_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'uniq_id_2' => ['type' => 'unique', 'columns' => ['uniq_id'], 'length' => []],
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
            'uniq_id' => 'Lorem ipsum dolor sit amet',
            'btprofile_id' => 'Lorem ipsum dolor sit amet',
            'usersubscription_id' => 1,
            'credit_cardtoken' => 'Lorem ipsum dolor sit amet',
            'card_number' => 'Lorem ipsum dolor sit amet',
            'expiry_date' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet',
            'password' => 'Lorem ipsum dolor sit amet',
            'name' => 'Lorem ipsum dolor sit amet',
            'is_beta' => 1,
            'last_name' => 'Lorem ipsum dolor sit amet',
            'short_name' => 'Lorem ',
            'istype' => 1,
            'photo' => 'Lorem ipsum dolor sit amet',
            'photo_reset' => 'Lorem ipsum dolor sit amet',
            'isactive' => 1,
            'timezone_id' => 1,
            'isemail' => 1,
            'is_agree' => 1,
            'usersub_type' => 1,
            'est_billing_amount' => 1,
            'dt_created' => '2017-06-01 08:03:13',
            'dt_updated' => '2017-06-01 08:03:13',
            'dt_last_login' => '2017-06-01 08:03:13',
            'dt_last_logout' => '2017-06-01 08:03:13',
            'query_string' => 'Lorem ipsum dolor sit amet',
            'update_email' => 'Lorem ipsum dolor sit amet',
            'update_random' => 'Lorem ipsum dolor sit amet',
            'gaccess_token' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'ip' => 'Lorem ipsum d',
            'sig' => 'Lorem ipsum dolor sit amet',
            'desk_notify' => 1,
            'active_dashboard_tab' => 1,
            'is_moderator' => 1,
            'show_default_inner' => 1
        ],
    ];
}
