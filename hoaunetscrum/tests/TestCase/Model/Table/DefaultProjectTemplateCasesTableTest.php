<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DefaultProjectTemplateCasesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DefaultProjectTemplateCasesTable Test Case
 */
class DefaultProjectTemplateCasesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DefaultProjectTemplateCasesTable
     */
    public $DefaultProjectTemplateCases;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.default_project_template_cases',
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
        'app.case_files',
        'app.projects',
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
        'app.templates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DefaultProjectTemplateCases') ? [] : ['className' => 'App\Model\Table\DefaultProjectTemplateCasesTable'];
        $this->DefaultProjectTemplateCases = TableRegistry::get('DefaultProjectTemplateCases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DefaultProjectTemplateCases);

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
