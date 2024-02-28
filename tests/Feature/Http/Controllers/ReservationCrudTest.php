<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReservationCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_post_reservations_creates_new_reservation(): void
    {

        $reservationInput = Reservation::factory()->make(['reservable_type' => 'FoobarType']);

        $this->post(route('reservation.store'), $reservationInput->toArray())
            ->assertStatus(201);

        $this->assertDatabaseHas('reservations', [
            'reservable_type' => $reservationInput->reservable_type,
            'starts_at' => $reservationInput->starts_at,
            'ends_at' => $reservationInput->ends_at,
        ]);

    }
}
