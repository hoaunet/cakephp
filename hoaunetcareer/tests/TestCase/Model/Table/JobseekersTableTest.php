<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobseekersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobseekersTable Test Case
 */
class JobseekersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JobseekersTable
     */
    public $Jobseekers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.jobseekers',
        'app.users',
        'app.uniqs',
        'app.btprofiles',
        'app.usersubscriptions',
        'app.timezones',
        'app.provinces',
        'app.countries',
        'app.address_formats',
        'app.schools',
        'app.companyusers',
        'app.companies',
        'app.company_uniqs',
        'app.newsletters',
        'app.careers',
        'app.levels',
        'app.userinfos',
        'app.userlogins',
        'app.degrees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Jobseekers') ? [] : ['className' => JobseekersTable::class];
        $this->Jobseekers = TableRegistry::get('Jobseekers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jobseekers);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
