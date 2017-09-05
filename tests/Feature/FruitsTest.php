<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FruitsTest extends TestCase
{
	use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
    	$this->assertTrue(true);
    }

    /**
	 * @test
	 *
	 * Test: GET /api.
	 */
    public function it_praises_the_fruits()
    {
    	$this->seed('FruitsTableSeeder');
    	$this->get('/api/fruits')
    	->seeJsonStructure([
    		'data' => [
    		'*' => [
    		'name', 'color', 'weight', 'delicious'
    		]
    		]
    		]);
    }
}
