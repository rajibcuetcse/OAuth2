<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OauthClientsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OauthClientsTable Test Case
 */
class OauthClientsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OauthClientsTable
     */
    public $OauthClients;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.oauth_clients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OauthClients') ? [] : ['className' => 'App\Model\Table\OauthClientsTable'];
        $this->OauthClients = TableRegistry::get('OauthClients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OauthClients);

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
