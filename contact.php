<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);



if($name == "" OR $email == "" OR $message == "") {
	echo "no info dummy";
	exit;
}
foreach( $_POST as $value ){
		if( stripos($value,'Content-Type:') !== FALSE ){
				echo "There was a problem with the information you entered.";
				exit;
		}
}

  $email_body = "";
  $email_body = $email_body . "Name: " . $name . "\n";
  $email_body = $email_body .  "Email: " . $email . "\n";
  $email_body = $email_body .  "Message: " . $message;

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
          </table>
          <input type="submit" name="" value="Send">
        </form>
        <?php } ?>
      </div>
    </div>

<?php include("inc/footer.php"); ?>
