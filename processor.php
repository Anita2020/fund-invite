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
$body = "Hi " . $friendName . ". " . "Here is an opportunity for you to be a part of the success story of our future leaders.I am inviting you to the African Women in Leadership Organisation Induction and Fundraising Dinner.I hope to see you there.Click on this link to get your own special invitation.
Venue:D'Podium International Event Center No31b Aromire Road along Adeniyi Jones,Ikeja.
Time:5.30pm";
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