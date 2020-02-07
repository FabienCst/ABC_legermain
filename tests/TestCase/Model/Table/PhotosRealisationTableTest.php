<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PhotosRealisationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PhotosRealisationTable Test Case
 */
class PhotosRealisationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PhotosRealisationTable
     */
    public $PhotosRealisation;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PhotosRealisation',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PhotosRealisation') ? [] : ['className' => PhotosRealisationTable::class];
        $this->PhotosRealisation = TableRegistry::getTableLocator()->get('PhotosRealisation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PhotosRealisation);

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
