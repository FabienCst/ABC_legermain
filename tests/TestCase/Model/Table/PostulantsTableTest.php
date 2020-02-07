<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PostulantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PostulantsTable Test Case
 */
class PostulantsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PostulantsTable
     */
    public $Postulants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Postulants',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Postulants') ? [] : ['className' => PostulantsTable::class];
        $this->Postulants = TableRegistry::getTableLocator()->get('Postulants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Postulants);

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
