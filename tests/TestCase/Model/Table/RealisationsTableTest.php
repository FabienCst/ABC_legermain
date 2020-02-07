<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RealisationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RealisationsTable Test Case
 */
class RealisationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RealisationsTable
     */
    public $Realisations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Realisations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Realisations') ? [] : ['className' => RealisationsTable::class];
        $this->Realisations = TableRegistry::getTableLocator()->get('Realisations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Realisations);

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
