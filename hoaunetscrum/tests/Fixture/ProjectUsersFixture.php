<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProjectUsersFixture
 *
 */
class ProjectUsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'project_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Foreign key of "projects"', 'precision' => null, 'autoIncrement' => null],
        'company_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Foreign key of "users"', 'precision' => null, 'autoIncrement' => null],
        'istype' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => '2', 'comment' => '1-Admin, 2-Moderator, 3-Viewer', 'precision' => null, 'autoIncrement' => null],
        'default_email' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '0-No, 1-Yes', 'precision' => null, 'autoIncrement' => null],
        'dt_visited' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'project_id' => ['type' => 'index', 'columns' => ['project_id'], 'length' => []],
            'user_id' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'istype' => ['type' => 'index', 'columns' => ['istype'], 'length' => []],
            'company_id' => ['type' => 'index', 'columns' => ['company_id'], 'length' => []],
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
            'project_id' => 1,
            'company_id' => 1,
            'user_id' => 1,
            'istype' => 1,
            'default_email' => 1,
            'dt_visited' => '2017-06-05 12:18:12'
        ],
    ];
}
