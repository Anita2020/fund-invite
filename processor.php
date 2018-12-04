<?php
// Pull in the configuration file
require 'config.php';
// Capture Post Data
$name = $_POST['name'];
$friendName = $_POST['friendName'];
$phone = $_POST['phone'];
//Send SMS
// prepare the parameters
$url = 'https://www.bulksmsnigeria.com/api/v1/sms/create';
$from = $name;
$body = "Hi " . $friendName . "Invite a friend to be a part of the change you want to see in the world,Together we can make a differnce.Join us on the 17th of december 2018 at the D'podium 31b Aromire road off adeniyi jones,ikeja.Time:5:30pm.";
$myvars = 'api_token=' . $smstoken . '&from=' . $from . '&to=' . $phone .  '&body=' . $body;
//start CURL
// create curl resource
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $myvars);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_exec($ch);
echo 'success';