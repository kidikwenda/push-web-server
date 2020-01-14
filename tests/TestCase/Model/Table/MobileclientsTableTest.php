<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MobileclientsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MobileclientsTable Test Case
 */
class MobileclientsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MobileclientsTable
     */
    public $Mobileclients;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mobileclients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mobileclients') ? [] : ['className' => MobileclientsTable::class];
        $this->Mobileclients = TableRegistry::getTableLocator()->get('Mobileclients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mobileclients);

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
