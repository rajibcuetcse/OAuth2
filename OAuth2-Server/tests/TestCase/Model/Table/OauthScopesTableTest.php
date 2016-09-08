<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OauthScopesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OauthScopesTable Test Case
 */
class OauthScopesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OauthScopesTable
     */
    public $OauthScopes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.oauth_scopes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OauthScopes') ? [] : ['className' => 'App\Model\Table\OauthScopesTable'];
        $this->OauthScopes = TableRegistry::get('OauthScopes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OauthScopes);

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
