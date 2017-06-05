<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EasycasesFixture
 *
 */
class EasycasesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'uniq_id' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'case_no' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'case_count' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'project_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Foreign key of "projects"', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Foreign key of "users"', 'precision' => null, 'autoIncrement' => null],
        'updated_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'type_id' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Foreign key of "case_types"', 'precision' => null, 'autoIncrement' => null],
        'priority' => ['type' => 'string', 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'title' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'message' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'estimated_hours' => ['type' => 'decimal', 'length' => 6, 'precision' => 1, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'hours' => ['type' => 'decimal', 'length' => 6, 'precision' => 1, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'completed_task' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'assign_to' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Foreign Key of "users"', 'precision' => null, 'autoIncrement' => null],
        'due_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'istype' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '1-Post, 2-Comment', 'precision' => null, 'autoIncrement' => null],
        'format' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '1-Files&Details, 2-Details, 3-Files', 'precision' => null, 'autoIncrement' => null],
        'status' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '1-Open, 2-Closed', 'precision' => null, 'autoIncrement' => null],
        'legend' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '1-New 2-Opened, 3-Closed, 4-Start, 5-Resolve, 6- Modified', 'precision' => null, 'autoIncrement' => null],
        'isactive' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '0-Inactive,1-Active', 'precision' => null, 'autoIncrement' => null],
        'dt_created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'actual_dt_created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'reply_type' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '1-> Case Type changes, 2-> Assign to , 3 -> Due Date,4 -> Priority ', 'precision' => null, 'autoIncrement' => null],
        'is_chrome_extension' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '0: No, 1: Yes', 'precision' => null],
        'from_email' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'uniq_id' => ['type' => 'index', 'columns' => ['uniq_id'], 'length' => []],
            'case_no' => ['type' => 'index', 'columns' => ['case_no'], 'length' => []],
            'project_id' => ['type' => 'index', 'columns' => ['project_id'], 'length' => []],
            'user_id' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'isactive' => ['type' => 'index', 'columns' => ['isactive'], 'length' => []],
            'legend' => ['type' => 'index', 'columns' => ['legend'], 'length' => []],
            'status' => ['type' => 'index', 'columns' => ['status'], 'length' => []],
            'format' => ['type' => 'index', 'columns' => ['format'], 'length' => []],
            'istype' => ['type' => 'index', 'columns' => ['istype'], 'length' => []],
            'assign_to' => ['type' => 'index', 'columns' => ['assign_to'], 'length' => []],
            'priority' => ['type' => 'index', 'columns' => ['priority'], 'length' => []],
            'type_id' => ['type' => 'index', 'columns' => ['type_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'utf8_general_ci'
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
            'case_no' => 1,
            'case_count' => 1,
            'project_id' => 1,
            'user_id' => 1,
            'updated_by' => 1,
            'type_id' => 1,
            'priority' => 'Lo',
            'title' => 'Lorem ipsum dolor sit amet',
            'message' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'estimated_hours' => 1.5,
            'hours' => 1.5,
            'completed_task' => 1,
            'assign_to' => 1,
            'due_date' => '2017-06-05',
            'istype' => 1,
            'format' => 1,
            'status' => 1,
            'legend' => 1,
            'isactive' => 1,
            'dt_created' => '2017-06-05 12:08:36',
            'actual_dt_created' => '2017-06-05 12:08:36',
            'reply_type' => 1,
            'is_chrome_extension' => 1,
            'from_email' => 1
        ],
    ];
}
