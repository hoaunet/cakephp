<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectUsersTable Test Case
 */
class ProjectUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjectUsersTable
     */
    public $ProjectUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.project_users',
        'app.projects',
        'app.uniqs',
        'app.users',
        'app.btprofiles',
        'app.user_subscriptions',
        'app.timezones',
        'app.daily_updates',
        'app.companies',
        'app.subscriptions',
        'app.archives',
        'app.easycases',
        'app.types',
        'app.case_settings',
        'app.type_companies',
        'app.case_actions',
        'app.case_activities',
        'app.comments',
        'app.case_file_drives',
        'app.case_files',
        'app.case_recents',
        'app.case_user_emails',
        'app.case_user_views',
        'app.easycase_milestones',
        'app.milestones',
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
        'app.log_types',
        'app.project_template_cases',
        'app.project_templates',
        'app.template_module_cases',
        'app.transactions',
        'app.btsubscriptions',
        'app.plans',
        'app.invoices',
        'app.user_invitations',
        'app.invitors',
        'app.case_filters',
        'app.email_reminders',
        'app.os_session_logs',
        'app.save_reports',
        'app.user_infos',
        'app.user_logins',
        'app.user_notifications',
        'app.project_technologies',
        'app.technologies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProjectUsers') ? [] : ['className' => 'App\Model\Table\ProjectUsersTable'];
        $this->ProjectUsers = TableRegistry::get('ProjectUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjectUsers);

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
