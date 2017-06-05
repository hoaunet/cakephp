<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TimezonesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TimezonesTable Test Case
 */
class TimezonesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TimezonesTable
     */
    public $Timezones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.timezones',
        'app.daily_updates',
        'app.users',
        'app.uniqs',
        'app.btprofiles',
        'app.user_subscriptions',
        'app.archives',
        'app.easycases',
        'app.case_files',
        'app.companies',
        'app.case_actions',
        'app.case_activities',
        'app.case_filters',
        'app.case_recents',
        'app.case_settings',
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
        'app.projects',
        'app.save_reports',
        'app.template_module_cases',
        'app.transactions',
        'app.btsubscriptions',
        'app.plans',
        'app.invoices',
        'app.user_infos',
        'app.user_invitations',
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
        $config = TableRegistry::exists('Timezones') ? [] : ['className' => 'App\Model\Table\TimezonesTable'];
        $this->Timezones = TableRegistry::get('Timezones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Timezones);

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
