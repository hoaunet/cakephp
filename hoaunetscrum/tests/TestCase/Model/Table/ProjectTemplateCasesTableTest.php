<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectTemplateCasesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectTemplateCasesTable Test Case
 */
class ProjectTemplateCasesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjectTemplateCasesTable
     */
    public $ProjectTemplateCases;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.project_template_cases',
        'app.users',
        'app.uniqs',
        'app.btprofiles',
        'app.user_subscriptions',
        'app.timezones',
        'app.daily_updates',
        'app.companies',
        'app.subscriptions',
        'app.archives',
        'app.easycases',
        'app.projects',
        'app.case_activities',
        'app.comments',
        'app.case_file_drives',
        'app.case_files',
        'app.case_recents',
        'app.case_settings',
        'app.types',
        'app.type_companies',
        'app.case_user_views',
        'app.easycase_milestones',
        'app.milestones',
        'app.project_technologies',
        'app.technologies',
        'app.project_users',
        'app.template_module_cases',
        'app.user_invitations',
        'app.invitors',
        'app.case_actions',
        'app.case_user_emails',
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
        'app.project_templates',
        'app.transactions',
        'app.btsubscriptions',
        'app.plans',
        'app.invoices',
        'app.case_filters',
        'app.email_reminders',
        'app.os_session_logs',
        'app.save_reports',
        'app.user_infos',
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
        $config = TableRegistry::exists('ProjectTemplateCases') ? [] : ['className' => 'App\Model\Table\ProjectTemplateCasesTable'];
        $this->ProjectTemplateCases = TableRegistry::get('ProjectTemplateCases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjectTemplateCases);

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
