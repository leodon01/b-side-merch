<?php
$pageTitle = "Contact";
$section = "contact";
include("inc/header.php"); ?>

    <div class="section page">
      <div class="wrapper">
        <h1>Contact</h1>
        <p>Let us know what you think!</p>
        <form method="post" action="contact-process.php">
          <table>

            <tr>
              <th>
                <label for="name">Name</label>
              </th>
              <td>
                <input name="name" type="text" id="name" >
              </td>
            </tr>

            <tr>
              <th>
                <label for="email">E-mail</label>
              </th>
              <td>
                <input name="email" type="text" id="email" value="email" >
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
      </div>
    </div>

<?php include("inc/footer.php"); ?>
