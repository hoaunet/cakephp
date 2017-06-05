<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogActivitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogActivitiesTable Test Case
 */
class LogActivitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LogActivitiesTable
     */
    public $LogActivities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.case_file_drives',
        'app.log_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LogActivities') ? [] : ['className' => 'App\Model\Table\LogActivitiesTable'];
        $this->LogActivities = TableRegistry::get('LogActivities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LogActivities);

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
