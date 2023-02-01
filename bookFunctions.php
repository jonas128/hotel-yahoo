<?php

declare(strict_types=1);

require 'vendor/autoload.php';

function checkRoomAvailability(object $hotelDb, string $roomNumber, string $arrivalDate, string $departureDate)
{
          $hotelDb = connect('hotel.db');

          $dateQuery = 'SELECT * FROM bookings
    WHERE
    room_id = :roomnumber
    AND
    (arrival_date <= :arrivalDate
    or arrival_date < :departureDate )
    AND
    (departure_date > :arrivalDate or
    departure_date >:departureDate)';
          $statement = $hotelDb->prepare($dateQuery);
          $statement->bindParam(':roomnumber', $roomNumber, PDO::PARAM_INT);
          $statement->bindParam(':arrivalDate', $arrivalDate, PDO::PARAM_STR);
          $statement->bindParam(':departureDate', $departureDate, PDO::PARAM_STR);
          $statement->execute();
          $bookings = $statement->fetchAll(PDO::FETCH_ASSOC);
          return $bookings;
}

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

function transferCodeCheck($transferCode, $totalCost): bool
{
          $client = new GuzzleHttp\Client();

          $response = [
                    'form_params' => [
                              'transferCode' => $transferCode,
                              'totalcost' => $totalCost
                    ]
          ];

          $response = $client->post("https://www.yrgopelago.se/centralbank/transferCode", $response);
          $response = $response->getBody()->getContents();
          $response = json_decode($response, true);
          if (isset($response['error'])) {
                    return false;
          } else {
                    return true;
          }
}

function transferCodeDeposit($transferCode, $name): bool
{
          $client = new GuzzleHttp\Client();

          $response = [
                    'form_params' => [
                              'transferCode' => $transferCode,
                              'user' => $name
                    ]
          ];
          $response = $client->post("https://www.yrgopelago.se/centralbank/deposit", $response);
          $response = $response->getBody()->getContents();
          $response = json_decode($response, true);
          if (isset($response['error'])) {
                    return false;
          } else {
                    return true;
          }
}
