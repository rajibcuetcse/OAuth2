<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserBalanceTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserBalanceTable Test Case
 */
class UserBalanceTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserBalanceTable
     */
    public $UserBalance;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_balance',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserBalance') ? [] : ['className' => 'App\Model\Table\UserBalanceTable'];
        $this->UserBalance = TableRegistry::get('UserBalance', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserBalance);

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
