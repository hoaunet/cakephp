<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DefaultTemplatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DefaultTemplatesTable Test Case
 */
class DefaultTemplatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DefaultTemplatesTable
     */
    public $DefaultTemplates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.default_templates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DefaultTemplates') ? [] : ['className' => 'App\Model\Table\DefaultTemplatesTable'];
        $this->DefaultTemplates = TableRegistry::get('DefaultTemplates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DefaultTemplates);

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
