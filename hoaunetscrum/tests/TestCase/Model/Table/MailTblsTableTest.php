<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MailTblsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MailTblsTable Test Case
 */
class MailTblsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MailTblsTable
     */
    public $MailTbls;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mail_tbls'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MailTbls') ? [] : ['className' => 'App\Model\Table\MailTblsTable'];
        $this->MailTbls = TableRegistry::get('MailTbls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MailTbls);

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
