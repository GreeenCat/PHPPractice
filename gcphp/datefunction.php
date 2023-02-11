<?php
echo "Date function<br>";
$d = date("d.m.y"); // l for getting day | d for date | D for short day | j for getting no 0
echo "Todays date is " . $d;
echo "<br>";
// 3 types of dates
echo date('l jS \of F Y h:i:s A');
echo "<br>";
// Prints: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo "<br>";
/* use the constants in the format parameter */
// prints something like: Wed, 25 Sep 2013 15:28:57 -0700
echo date(DATE_RFC2822);


// <?php
// // Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// // Mountain Standard Time (MST) Time Zone

// $today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
// $today = date("m.d.y");                         // 03.10.01
// $today = date("j, n, Y");                       // 10, 3, 2001
// $today = date("Ymd");                           // 20010310
// $today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
// $today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
// $today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
// $today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
// $today = date("H:i:s");                         // 17:16:18
// $today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)
// 


?>







