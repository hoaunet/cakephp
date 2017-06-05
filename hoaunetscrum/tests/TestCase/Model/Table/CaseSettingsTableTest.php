<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CaseSettingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CaseSettingsTable Test Case
 */
class CaseSettingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CaseSettingsTable
     */
    public $CaseSettings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.case_settings',
        'app.projects',
        'app.types',
        'app.companies',
        'app.easycases',
        'app.type_companies',
        'app.users',
        'app.uniqs',
        'app.btprofiles',
        'app.user_subscriptions',
        'app.timezones',
        'app.daily_updates',
        'app.archives',
        'app.case_files',
        'app.comments',
        'app.case_actions',
        'app.case_activities',
        'app.case_filters',
        'app.case_recents',
        'app.case_templates',
        'app.case_user_emails',
        'app.case_user_views',
        'app.company_users',
        'app.custom_filters',
        'app.dailyupdate_notifications',
        'app.default_project_template_cases',
        'app.default_project_templates',
        'app.easycase_milestones',
        'app.email_reminders',
        'app.log_activities',
        'app.milestones',
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
        'app.user_notifications'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CaseSettings') ? [] : ['className' => 'App\Model\Table\CaseSettingsTable'];
        $this->CaseSettings = TableRegistry::get('CaseSettings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CaseSettings);

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
