<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserinfosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserinfosTable Test Case
 */
class UserinfosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserinfosTable
     */
    public $Userinfos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.userinfos',
        'app.users',
        'app.uniqs',
        'app.btprofiles',
        'app.usersubscriptions',
        'app.articles',
        'app.categories',
        'app.companyusers',
        'app.companies',
        'app.company_uniqs',
        'app.newsletters',
        'app.careers',
        'app.levels',
        'app.resumes',
        'app.degrees',
        'app.salaries',
        'app.schools',
        'app.userlogins',
        'app.provinces',
        'app.countries',
        'app.address_formats'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Userinfos') ? [] : ['className' => UserinfosTable::class];
        $this->Userinfos = TableRegistry::get('Userinfos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Userinfos);

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
