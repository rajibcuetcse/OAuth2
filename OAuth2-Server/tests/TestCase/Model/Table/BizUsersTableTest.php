<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BizUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BizUsersTable Test Case
 */
class BizUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BizUsersTable
     */
    public $BizUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('BizUsers') ? [] : ['className' => 'App\Model\Table\BizUsersTable'];
        $this->BizUsers = TableRegistry::get('BizUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BizUsers);

        parent::tearDown();
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
