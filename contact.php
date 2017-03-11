<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);

    if($name == "" OR $email == "" OR $message == "") {
    	echo "Please fill out all fields, thanks duuuude!";
    	exit;
    }

    //Email header injection prevention
    foreach( $_POST as $value ){
    		if( stripos($value,'Content-Type:') !== FALSE ){
    				echo "There was a problem with the information you entered.";
    				exit;
    		}
    }

    if ($_POST["address" !== ""]) {
      exit;
    }

//PHP Mailer
  require_once("inc/phpMailer/class.phpmailer.php");
  $mail = new phpMailer();

//not working...
  if($mail->ValidateAddress($email)){
    echo "Invalid E-Mail Adress...";
    exit;
  }

  $email_body = "";
  $email_body = $email_body . "Name: " . $name . "<br>";
  $email_body = $email_body .  "Email: " . $email . "<br>";
  $email_body = $email_body .  "Message: " . $message;


  $mail->SetFrom($email, $name);
  $address = "bsidemerch@gmail.com";
  $mail->AddAddress($address, "B-Side Merchandise");
  $mail->Subject = "B-Side Merchandise Contact Form | " . $name;
  $mail->MsgHTML($email_body);

  if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    exit;
  };


  header("Location: contact.php?status=thanks");
  exit;
}
?>

<?php
$pageTitle = "Contact";
$section = "contact";
include("inc/header.php");
?>

    <div class="section page">
      <div class="wrapper">
        <h1>Contact</h1>

        <?php if(isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
         <p>Thanks for the Email! We'll get back to you soon.</p>
        <?php } else {?>
        <p>Let us know what you think!</p>
        <form method="post" action="contact.php">
          <table>

            <tr>
              <th>
                <label for="name">Name</label>
              </th>
              <td>
                <input name="name" type="text" id="name">
              </td>
            </tr>

            <tr>
              <th>
                <label for="email">E-mail</label>
              </th>
              <td>
                <input name="email" type="text" id="email">
              </td>
            </tr>

            <tr>
              <th>
                <label for="message">Message</label>
              </th>
              <td>
                <textarea name="message" id="message" rows="4" cols="80" placeholder="Leave us a message!"></textarea>
              </td>
            </tr>

            <tr style="display: none;">
              <th>
                <label for="address">Address</label>
              </th>
              <td>
                <input name="address" type="address" id="address">
                <p>Humans: leave this blank.</p>
              </td>
            </tr>

          </table>
          <input type="submit" name="" value="Send">
        </form>
        <?php } ?>
      </div>
    </div>

<?php include("inc/footer.php"); ?>
