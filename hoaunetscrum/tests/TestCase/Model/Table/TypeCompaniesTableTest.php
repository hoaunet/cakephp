<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeCompaniesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeCompaniesTable Test Case
 */
class TypeCompaniesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeCompaniesTable
     */
    public $TypeCompanies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.type_companies',
        'app.companies',
        'app.types',
        'app.case_settings',
        'app.easycases'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TypeCompanies') ? [] : ['className' => 'App\Model\Table\TypeCompaniesTable'];
        $this->TypeCompanies = TableRegistry::get('TypeCompanies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TypeCompanies);

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
