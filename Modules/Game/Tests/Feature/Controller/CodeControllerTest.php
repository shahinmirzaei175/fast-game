<?php

namespace Modules\Game\Tests\Feature\Controller;

use Modules\Game\Entities\Code;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CodeControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_method()
    {
        $code = Code::factory()->make();
        $this->withHeaders([
            'Accept' => 'application/json'
        ])->postJson('/api/codes',$code->toArray())
            ->assertCreated()
            ->assertJsonStructure(
                [
                    'data' => [
                        'id',
                        'code',
                        'count',
                        'created_at',
                        'updated_at',
                    ]
                ]);
        $this->assertDatabaseHas('codes', $code->toArray());

    }

    public function test_update_method()
    {
        $code = Code::factory()->create();

        $this->withHeaders([
            'Accept' => 'application/json'
        ])->putJson('/api/codes/'.$code->id,[
            'code' =>  "new-code",
            'count' =>  1000,
        ])
            ->assertOk()
            ->assertJson([
                "data" => [
                    "code"           => "new-code",
                    "count"             => 1000,
                ]
            ]);
    }

    public function test_delete_method()
    {
        $code = Code::factory()->create();
        $this->withHeaders([
            'Accept' => 'application/json'
        ])->deleteJson('/api/codes/'.$code->id)
            ->assertStatus(200);
        $this->assertDatabaseMissing('codes',$code->toArray());
    }

    public function test_index_method()
    {
        $this->withHeaders([
            'Accept' => 'application/json'
        ])->getJson('/api/codes')->assertOk();

    }
}
