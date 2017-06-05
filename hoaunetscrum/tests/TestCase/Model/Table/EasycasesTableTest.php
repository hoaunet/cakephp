<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EasycasesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EasycasesTable Test Case
 */
class EasycasesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EasycasesTable
     */
    public $Easycases;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.easycases',
        'app.uniqs',
        'app.projects',
        'app.users',
        'app.btprofiles',
        'app.user_subscriptions',
        'app.timezones',
        'app.daily_updates',
        'app.companies',
        'app.subscriptions',
        'app.archives',
        'app.case_files',
        'app.comments',
        'app.case_recents',
        'app.case_templates',
        'app.company_users',
        'app.company_uniqs',
        'app.custom_filters',
        'app.project_uniqs',
        'app.filter_types',
        'app.filter_members',
        'app.dailyupdate_notifications',
        'app.default_project_template_cases',
        'app.templates',
        'app.default_project_templates',
        'app.log_activities',
        'app.milestones',
        'app.project_template_cases',
        'app.project_templates',
        'app.project_users',
        'app.template_module_cases',
        'app.transactions',
        'app.btsubscriptions',
        'app.plans',
        'app.invoices',
        'app.type_companies',
        'app.types',
        'app.case_settings',
        'app.user_invitations',
        'app.invitors',
        'app.case_actions',
        'app.case_activities',
        'app.case_filters',
        'app.case_user_emails',
        'app.case_user_views',
        'app.easycase_milestones',
        'app.email_reminders',
        'app.os_session_logs',
        'app.save_reports',
        'app.user_infos',
        'app.user_logins',
        'app.user_notifications',
        'app.case_file_drives'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Easycases') ? [] : ['className' => 'App\Model\Table\EasycasesTable'];
        $this->Easycases = TableRegistry::get('Easycases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Easycases);

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
