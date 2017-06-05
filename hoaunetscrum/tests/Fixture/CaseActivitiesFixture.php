<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CaseActivitiesFixture
 *
 */
class CaseActivitiesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'easycase_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Foreign key of "easycases"', 'precision' => null, 'autoIncrement' => null],
        'comment_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Foreign key of "comments"', 'precision' => null, 'autoIncrement' => null],
        'case_no' => ['type' => 'integer', 'length' => 6, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'project_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Foreign key of "projects"', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Foreign key of "users"', 'precision' => null, 'autoIncrement' => null],
        'type' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '1-New 2-Opened, 3-Closed, 4-Start, 5-Resolve, 7-Comments, 8-Deleted,10->Modified', 'precision' => null, 'autoIncrement' => null],
        'isactive' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '0-Inactive, 1-Active', 'precision' => null, 'autoIncrement' => null],
        'dt_created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'easycase_id' => ['type' => 'index', 'columns' => ['easycase_id'], 'length' => []],
            'comment_id' => ['type' => 'index', 'columns' => ['comment_id'], 'length' => []],
            'case_no' => ['type' => 'index', 'columns' => ['case_no'], 'length' => []],
            'project_id' => ['type' => 'index', 'columns' => ['project_id'], 'length' => []],
            'user_id' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'type' => ['type' => 'index', 'columns' => ['type'], 'length' => []],
            'isactive' => ['type' => 'index', 'columns' => ['isactive'], 'length' => []],
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
            'easycase_id' => 1,
            'comment_id' => 1,
            'case_no' => 1,
            'project_id' => 1,
            'user_id' => 1,
            'type' => 1,
            'isactive' => 1,
            'dt_created' => '2017-06-05 11:53:58'
        ],
    ];
}
