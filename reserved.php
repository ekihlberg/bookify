<?php
include_once 'partials/head.php';
  $activePage = "browse.php";?>
  <div class="hero">
     <?php
    include_once 'partials/header.php'; ?>
  </div>

<?php


$bookid = trim($_GET['bookid']);
echo '<INPUT type="hidden" name="bookid" value=' . $bookid . '>';

$bookid = trim($_GET['bookid']);      // From the hidden field
$bookid = addslashes($bookid);

@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

    if ($db->connect_error) {
        echo "could not connect: " . $db->connect_error;
        printf("<br><a href=index.php>Return to home page </a>");
        exit();
    }



    // Prepare an update statement and execute it
    $stmt = $db->prepare("UPDATE books SET loaned=1 WHERE isbn = ?");
    $stmt->bind_param('i', $bookid);
    $stmt->execute();
    ?>
    <div class="content__contain">
      <p>Du har nu reserverat din bok</p>

    </div>
    <?php
    exit;
