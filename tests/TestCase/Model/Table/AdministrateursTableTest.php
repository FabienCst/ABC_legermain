<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdministrateursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdministrateursTable Test Case
 */
class AdministrateursTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AdministrateursTable
     */
    public $Administrateurs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Administrateurs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Administrateurs') ? [] : ['className' => AdministrateursTable::class];
        $this->Administrateurs = TableRegistry::getTableLocator()->get('Administrateurs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Administrateurs);

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
