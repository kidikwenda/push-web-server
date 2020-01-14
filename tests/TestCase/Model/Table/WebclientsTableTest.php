<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WebclientsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WebclientsTable Test Case
 */
class WebclientsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WebclientsTable
     */
    public $Webclients;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Webclients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Webclients') ? [] : ['className' => WebclientsTable::class];
        $this->Webclients = TableRegistry::getTableLocator()->get('Webclients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Webclients);

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
