<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogTypesTable Test Case
 */
class LogTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LogTypesTable
     */
    public $LogTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.log_types',
        'app.log_activities',
        'app.companies',
        'app.uniqs',
        'app.subscriptions',
        'app.archives',
        'app.easycases',
        'app.projects',
        'app.users',
        'app.btprofiles',
        'app.user_subscriptions',
        'app.timezones',
        'app.daily_updates',
        'app.case_actions',
        'app.case_activities',
        'app.comments',
        'app.case_files',
        'app.case_filters',
        'app.case_recents',
        'app.case_settings',
        'app.types',
        'app.type_companies',
        'app.case_templates',
        'app.case_user_emails',
        'app.case_user_views',
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
        'app.easycase_milestones',
        'app.milestones',
        'app.email_reminders',
        'app.os_session_logs',
        'app.project_template_cases',
        'app.project_templates',
        'app.project_users',
        'app.save_reports',
        'app.template_module_cases',
        'app.transactions',
        'app.btsubscriptions',
        'app.plans',
        'app.invoices',
        'app.user_infos',
        'app.user_invitations',
        'app.invitors',
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
        $config = TableRegistry::exists('LogTypes') ? [] : ['className' => 'App\Model\Table\LogTypesTable'];
        $this->LogTypes = TableRegistry::get('LogTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LogTypes);

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
