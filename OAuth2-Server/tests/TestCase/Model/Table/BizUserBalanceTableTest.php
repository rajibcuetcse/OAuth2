<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BizUserBalanceTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BizUserBalanceTable Test Case
 */
class BizUserBalanceTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BizUserBalanceTable
     */
    public $BizUserBalance;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.biz_user_balance',
        'app.biz_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BizUserBalance') ? [] : ['className' => 'App\Model\Table\BizUserBalanceTable'];
        $this->BizUserBalance = TableRegistry::get('BizUserBalance', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BizUserBalance);

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
