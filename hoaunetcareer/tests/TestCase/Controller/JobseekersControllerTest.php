<?php
namespace App\Test\TestCase\Controller;

use App\Controller\JobseekersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\JobseekersController Test Case
 */
class JobseekersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.jobseekers',
        'app.users',
        'app.uniqs',
        'app.btprofiles',
        'app.usersubscriptions',
        'app.timezones',
        'app.provinces',
        'app.countries',
        'app.address_formats',
        'app.schools',
        'app.companyusers',
        'app.companies',
        'app.company_uniqs',
        'app.newsletters',
        'app.careers',
        'app.levels',
        'app.userinfos',
        'app.userlogins',
        'app.degrees'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
