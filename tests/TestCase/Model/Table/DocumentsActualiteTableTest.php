<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocumentsActualiteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocumentsActualiteTable Test Case
 */
class DocumentsActualiteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DocumentsActualiteTable
     */
    public $DocumentsActualite;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DocumentsActualite',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DocumentsActualite') ? [] : ['className' => DocumentsActualiteTable::class];
        $this->DocumentsActualite = TableRegistry::getTableLocator()->get('DocumentsActualite', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DocumentsActualite);

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
