<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TimezoneNamesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TimezoneNamesTable Test Case
 */
class TimezoneNamesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TimezoneNamesTable
     */
    public $TimezoneNames;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.timezone_names'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TimezoneNames') ? [] : ['className' => 'App\Model\Table\TimezoneNamesTable'];
        $this->TimezoneNames = TableRegistry::get('TimezoneNames', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TimezoneNames);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
