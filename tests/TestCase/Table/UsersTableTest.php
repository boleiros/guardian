<?php
namespace Guardian\Test\TestCase\Model\Table;

use Guardian\Model\Table\UsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersTable Test Case
 */
class UsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Guardian\Model\Table\UsersTable
     */
    public $Users;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        // 'guardian.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Users') ? [] : ['className' => 'Guardian\Model\Table\UsersTable'];
        $this->Users = TableRegistry::get('Users', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Users);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testHasPermission()
    {
                
        $user = $this->Users->get(1);

        $this->assertTrue($user->hasPermission('user.index'));
    }

    public function testDoesNotHavePermission()
    {
                
        $user = $this->Users->get(2);

        $this->assertFalse($user->hasPermission('user.index'));
    }
    
}
