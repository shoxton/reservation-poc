<?php

namespace Tests\Unit;

use App\Models\Reservation;
use PHPUnit\Framework\TestCase;

class ReservationTest extends TestCase
{
    public function test_reservation_is_not_null(): void
    {

        $reservation = new Reservation();

        $this->assertNotNull($reservation);

    }
}
