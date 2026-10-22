<?php

namespace Tests\Feature;

use App\Models\Karyawan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_karyawan_index_uses_pagination(): void
    {
        Karyawan::factory()->count(15)->create();

        $response = $this->get('/karyawan');

        $response->assertStatus(200)
            ->assertViewHas('karyawans', function ($karyawans) {
                return $karyawans->hasPages();
            });
    }
}
