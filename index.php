<?php
require(__DIR__ . '/vendor/autoload.php');
require __DIR__ . '/hotelFunctions.php';
require __DIR__ . '/header.php';
?>

<header>
     <?php require __DIR__ . '/date.php'; ?>
</header>

<main>
     <!-- introduction -->
     <div class="history">
          <img width="700" height="200" alt="history" src="images/pelago.jpeg">
          <button id="light">
               +hotel light switch button+
          </button>
     </div>
     <p>Yahoos are legendary beings in the 1726 satirical novel Gulliver's Travels written by Jonathan Swift. The word "yahoo" was coined by Jonathan Swift in the fourth section of Gulliver's Travels and has since entered the English language more broadly. The Yahoo Hotel is the one and only on Gooh-Gooh Island nicely located in the Yrgopelago. Hotel Yahoo has no connection to <a href="https://sv.wikipedia.org/wiki/Sexbranschen">the sex industry</a>, but we do offer API therapy as an extra feature. We save all your bookings in our database so there is no double booking, but our calendar is not built with PHP. It is a fake mock calendar that uses JavaScript. Therefore Hotel Yahoo has only a two star rating instead of three.</p>

     <!-- calendar -->
     <div class="calendar">
          <h3>Cheap room Closer to Nature (4$) -></h3>
          <img width="350" height="350" alt="room1" src="images/room1.jpeg">
          <table cellspacing="0">
               <tbody>
                    <tr class="weekdays">
                         <th>@Mon</th>
                         <th>@Tue</th>
                         <th>@Wed</th>
                         <th>@Thu</th>
                         <th>@Fri</th>
                         <th>@Sat</th>
                         <th>@Sun</th>
                    </tr>
                    <tr>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td class="room1 room2">1</td>
                    </tr>
                    <tr>
                         <td class="room1 room3">2</td>
                         <td class="room2 room3">3</td>
                         <td class="room2 room3">4</td>
                         <td class="room2 room3">5</td>
                         <td class="room1 room3">6</td>
                         <td class="room1 room3">7</td>
                         <td class="room1 room2">8</td>
                    </tr>
                    <tr>
                         <td class="room3">9</td>
                         <td class="room2">10</td>
                         <td class="room2">11</td>
                         <td class="room1">12</td>
                         <td class="room2">13</td>
                         <td class="room2">14</td>
                         <td class="room2">15</td>
                    </tr>
                    <tr>
                         <td class="room2">16</td>
                         <td class="room1">17</td>
                         <td class="room3">18</td>
                         <td class="room3">19</td>
                         <td class="room3">20</td>
                         <td class="room3">21</td>
                         <td class="room3">22</td>
                    </tr>
                    <tr>
                         <td class="room1">23</td>
                         <td class="room1">24</td>
                         <td class="room1">25</td>
                         <td class="room1">26</td>
                         <td class="room1">27</td>
                         <td class="room1">28</td>
                         <td class="room1 room3">29</td>
                    </tr>
                    <tr>
                         <td class="room1 room2">30</td>
                         <td class="room1 room2">31</td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                    </tr>
               </tbody>
          </table>
     </div>

     <!-- change room button -->
     <div class="change">
          <button id="newroom">
               CHANGE ROOM
          </button>
     </div>

     <!-- booking form -->
     <form action="./booking.php" method="POST">

          <p>HOTEL YAHOO BOOKING FORM</p>

          <label for="name">Name</label>
          <input class="name" type="text" name="name">

          <label for="room">Room</label>
          <select name="room" id="choose-room">
               <option value="1" id="budget">Nature 4$</option>
               <option value="2" id="standard">Old B(o)y 5$</option>
               <option value="3" id="luxury">Delux-API 6$</option>
          </select>


          <label for="arrival">Arrival</label>
          <input class="date" type="date" name="arrival" min="2023-01-01" max="2023-01-31" id="arrival">

          <label for="departure">Departure</label>
          <input class="date" type="date" name="departure" min="2023-01-01" max="2023-01-31" id="departure">

          <p>DISCOUNT: select all extra features and get a 1$ instant cashback!</p>

          <div class="features">
               <input type="checkbox" name="features[]" value="2" id="food">
               <label for="features">A Gooh dish (2$)</label>

               <input type="checkbox" name="features[]" value="1" id="email">
               <label for="features">Yahoo e@mail service (1$)</label>

               <input type="checkbox" name="features[]" value="3" id="therapy">
               <label for="features">API therapist (3$)</label>
          </div>

          <p>Please choose room & optional extras, enter your transfer code and click the book button</p>


          <label for="transfercode">Transfercode</label>
          <input class="transfer-code" type="text" name="transfercode">

          <button class="submit-button" type="submit" name="submit">
               BOOK ROOM
          </button>
     </form>
</main>

<?php
require __DIR__ . '/slogan.php';
?>

<script src="script.js"></script>
