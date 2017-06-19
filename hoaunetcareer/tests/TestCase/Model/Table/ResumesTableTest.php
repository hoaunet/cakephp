<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResumesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResumesTable Test Case
 */
class ResumesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResumesTable
     */
    public $Resumes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.resumes',
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
        'app.degrees',
        'app.salaries'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Resumes') ? [] : ['className' => ResumesTable::class];
        $this->Resumes = TableRegistry::get('Resumes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Resumes);

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
