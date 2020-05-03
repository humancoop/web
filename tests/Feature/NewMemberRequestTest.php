<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\NewMemberInfo;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewMemberRequestTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPostingTheNewMemberForm()
    {
        $this->assertEquals(0, NewMemberInfo::count());
        $data = factory(NewMemberInfo::class)->make()->toArray();
        $response = $this->post('/socio', $data);
        $response->assertStatus(200);
        $this->assertEquals(1, NewMemberInfo::count());
        $this->assertEquals($data['full_name'], NewMemberInfo::first()->full_name);
    }
}
