<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArchivesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArchivesTable Test Case
 */
class ArchivesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArchivesTable
     */
    public $Archives;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.archives',
        'app.easycases',
        'app.case_files',
        'app.users',
        'app.uniqs',
        'app.btprofiles',
        'app.user_subscriptions',
        'app.timezones',
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
        'app.daily_updates',
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
        'app.user_infos',
        'app.user_invitations',
        'app.user_logins',
        'app.user_notifications',
        'app.companies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Archives') ? [] : ['className' => 'App\Model\Table\ArchivesTable'];
        $this->Archives = TableRegistry::get('Archives', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Archives);

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
