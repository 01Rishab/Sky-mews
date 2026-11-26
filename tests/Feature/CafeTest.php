<?php

namespace Tests\Feature;

use Tests\TestCase;

class CafeTest extends TestCase
{
    public function test_the_cafe_homepage_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Sky Mews');
        $response->assertSee('Guwahati');
        $response->assertSee('Rooftop');
    }

    public function test_table_reservation_can_be_submitted(): void
    {
        $response = $this->postJson('/reserve', [
            'guest_name' => 'Aarav Baruah',
            'phone' => '+91 98640 12345',
            'guests' => 2,
            'date' => '2026-11-30',
            'time' => '04:30 PM',
            'seating' => 'rooftop',
            'notes' => 'Sunset celebration'
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => 'success'
        ]);
    }
}
