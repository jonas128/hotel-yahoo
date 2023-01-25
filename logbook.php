<?php

require __DIR__ . "/header.php";
require __DIR__ . "/hotelFunctions.php";

$file = file_get_contents(__DIR__ . "/logbook.json");
$vacation = json_decode($file, true);
$totalCost = 0;

function getRevenue()
{
    $db = connect("hotel.db");

    $statement = $db->prepare("SELECT cost FROM bookings");
    $statement->execute();
    $costs = $statement->fetchAll();

    $totalRevenue = 0;

    foreach ($costs as $cost) {
        foreach ($cost as $revenue) {
            $totalRevenue += $revenue;
        }
    }
    return $totalRevenue;
};

?>
<main>
    <section class="vacationSection">
        <img class="heroImg" src="/images/hotel3.ico" alt="">
        <p class="headlineBig">Bookings <br>↓</p>
        <div class="vacationCards">
            <?php
            foreach ($vacation as $key => $hotelBookings) :
                foreach ($hotelBookings as $hotelBooking) :

                    // Calculates the total costs of all bookings
                    $totalCost += (int) $hotelBooking["total_cost"];
            ?>
                    <article class="vacationCard">
                        <p class="headlineSmall">Booking</p>
                        <p>Island: <?= $hotelBooking["island"] ?></p>
                        <p>Hotel: <?= $hotelBooking["hotel"] ?></p>
                        <p>Arrival Date: <?= $hotelBooking["arrival_date"] ?></p>
                        <p>Departure Date: <?= $hotelBooking["departure_date"] ?></p>
                        <p>Total Cost: <?= $hotelBooking["total_cost"] ?>$</p>
                    </article>
            <?php
                endforeach;
            endforeach;
            ?>
        </div>
        <p class="headlineBig">Factbox <br>↓</p>
        <article class="vacationFactBox">
            <div>
                <p class="headlineSmall">Booking Cost</p>
                <p>Total amount spent on vacation: <b><?= $totalCost ?>$</b></p>
            </div>
            <div>
                <p class="headlineSmall">Hotel Revenue</p>
                <p> Total amount of revenue: <b><?= getRevenue() ?>$</b> </p>
            </div>
        </article>
        <a href="index.php"><button>BACK TO HOMEPAGE</button></a>
    </section>
</main>
<?php
require __DIR__ . '/slogan.php';
