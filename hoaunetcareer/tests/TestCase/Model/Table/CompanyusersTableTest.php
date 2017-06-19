<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompanyusersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompanyusersTable Test Case
 */
class CompanyusersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompanyusersTable
     */
    public $Companyusers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.companyusers',
        'app.companies',
        'app.company_uniqs',
        'app.users',
        'app.uniqs',
        'app.btprofiles',
        'app.usersubscriptions',
        'app.timezones',
        'app.provinces',
        'app.countries',
        'app.address_formats',
        'app.schools',
        'app.newsletters',
        'app.careers',
        'app.levels',
        'app.userinfos',
        'app.userlogins'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Companyusers') ? [] : ['className' => CompanyusersTable::class];
        $this->Companyusers = TableRegistry::get('Companyusers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Companyusers);

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
