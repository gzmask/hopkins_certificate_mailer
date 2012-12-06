<?php
//print_r($_POST);
/*
 * Array ( [realname] => asdfasdf [bill_address] => [bill_city] => [bill_postal] => [bill_country] => [shipping_address] => [shipping_city] => [shipping_postal] => [shipping_country] => [telephone] => [email] => asdfasf [payment] => Select Type of Card [cardno1] => 555 [cardno2] => 555 [cardno3] => 555 [cardno4] => 555 [expiry] => aasdf [ccname] => [amount] => [recaptcha_challenge_field] => 03AHJ_VusApt5pV3rxXUvQjSiigD9Zk19WB2c9sjO3VshOH-4GroCDzJK9FDmdkco2qLeZsqklUAVPGMi4n4cr6BK4dKXcIZuD1DlH0smCPiyUKP5JWQ33CMvkicHrxtX5OQU1OfAkMvsaAnqNHieOzt6ARlHfx0wGmiGqKyHU1d6-fbKOLYzdEIw [recaptcha_response_field] => ) Mail Sent.
 *
 */
  //$to = "gzmask@gmail.com";
  $to = "info.hopkins@sasktel.net";
  $subject = "hopkinsdining.com system mail: Gift Certificate Purchase";
  $message = "hopkinsdining.com purchase notification:\n";
  $message .= "real name:".$_POST[realname]."\n";
  $message .= "billing: \n";
  $message .= "    address:".$_POST[bill_address]."\n";
  $message .= "    city:".$_POST[bill_city]."\n";
  $message .= "    postal:".$_POST[bill_postal]."\n";
  $message .= "    Province/Country:".$_POST[bill_country]."\n";
  $message .= "shipping\n";
  $message .= "    address:".$_POST[shipping_address]."\n";
  $message .= "    city:".$_POST[shipping_city]."\n";
  $message .= "    postal:".$_POST[shipping_postal]."\n";
  $message .= "    country:".$_POST[shipping_country]."\n";
  $message .= "telephone:".$_POST[telephone]."\n";
  $message .= "E-mail address:".$_POST[email]."\n";
  $message .= "Type of Credit Card:".$_POST[payment]."\n";
  $message .= "Credit Card No:".$_POST[cardno1].'-'.$_POST[cardno2].'-'.$_POST[cardno3].'-'.$_POST[cardno4]."\n";
  $message .= "expiry:".$_POST[expiry]."\n";
  $message .= "credit card name:".$_POST[ccname]."\n";
  $message .= "Gift Certificate Amount:".$_POST[amount]."\n";
  $from = $_POST[email];
  $headers = "From:" . $from;
  //if ($_POST[recaptcha_challenge_field] == $_POST[recaptcha_response_field]) {
  if (true) {
    mail($to,$subject,$message,$headers);
    header("Location: https://www.hopkinsdining.com/stories/thanks");
  } else {
    echo "error";
  }
?>
