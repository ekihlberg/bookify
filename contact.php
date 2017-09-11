

  <?php
  include_once 'partials/head.php';
  $activePage = "contact.php"; ?>
  <div class="hero">
     <?php
    include_once 'partials/header.php'; ?>
    <div class="hero__content">
      <h1>Contact</h1>
      <p class="hero__content__text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nulla deserunt doloremque, quo, accusantium eos dolores accusamus dolorum alias error fuga ad quibusdam at quia. Facilis porro soluta, libero saepe.

    </div>
  </div>

<div class="contact-form">

<form class="" id="contactform" action="" method="post">
  <h2>Send message</h2>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name">
  <label for="email">E-mail:</label>
  <input type="email" id="email" name="email">
  <label for="message">Message:</label>
  <textarea name="message" id="message" rows="8" cols="80"></textarea>
  <input type="submit" name="" class="btn" value="Send">
</form>
</div>
<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "test@ekihlberg.se";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>


<?php include_once 'partials/footer.php'; ?>
