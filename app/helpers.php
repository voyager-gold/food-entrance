<?php

function getStars($rating) {

  // Round to nearest half
  $rating = round($rating * 2) / 2;
  $output = [];

  // Append all the filled whole stars
  for ($i = $rating; $i >= 1; $i--)
    $output[] = '<i class="fa fa-star" aria-hidden="true" style="color: gold;"></i>&nbsp;';

  // If there is a half a star, append it
  if ($i == .5) $output[] = '<i class="fa fa-star-half-o" aria-hidden="true" style="color: gold;"></i>&nbsp;';

  // Fill the empty stars
  for ($i = (5 - $rating); $i >= 1; $i--)
    $output[] = '<i class="fa fa-star-o" aria-hidden="true" style="color: gold;"></i>&nbsp;';

  return join("",$output);

}


function sendSMS($number, $message)
{
  // Account details
  $apiKey = urlencode('PlfU4yW3uc8-Jva0w5EyzaBh3Pbnjye1QIaSBYnN47');
  
  // Message details
  
  $sender = urlencode('TXTLCL');
  $message = rawurlencode($message);
 
  $number = '91' . $number;
  
  // Prepare data for POST request
  $data = array('apikey' => $apiKey, 'numbers' => $number, "sender" => $sender, "message" => $message);
 
  // Send the POST request with cURL
  $ch = curl_init('https://api.textlocal.in/send/');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  
  // Process your response here
  return $response;
}

