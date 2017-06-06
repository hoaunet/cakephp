<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductmodsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductmodsTable Test Case
 */
class ProductmodsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductmodsTable
     */
    public $Productmods;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.productmods',
        'app.products',
        'app.categories',
        'app.brands',
        'app.order_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Productmods') ? [] : ['className' => 'App\Model\Table\ProductmodsTable'];
        $this->Productmods = TableRegistry::get('Productmods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Productmods);

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
