<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AddFunctionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
        
    //   $test = 1;
    // }
    public function assertResponseStatus($code):void
	{
		$result = $this->assertEquals($code, ' 200');
	}
}
