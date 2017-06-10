<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductcategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductcategoriesTable Test Case
 */
class ProductcategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductcategoriesTable
     */
    public $Productcategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.productcategories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Productcategories') ? [] : ['className' => ProductcategoriesTable::class];
        $this->Productcategories = TableRegistry::get('Productcategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Productcategories);

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
