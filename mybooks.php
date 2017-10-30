
<?php
include_once 'partials/head.php';
$activePage = "mybooks.php";?>
<div class="hero">
   <?php
  include_once 'partials/header.php'; ?>
  <div class="hero__content">
    <h1>My books</h1>
    <p class="hero__content__text">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nulla deserunt doloremque, quo, accusantium eos dolores accusamus dolorum alias error fuga ad quibusdam at quia. Facilis porro soluta, libero saepe.

  </div>
</div>
<?php
@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);


if ($db->connect_error) {
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=index.php>Return to home page </a>");
    exit();
}

# Build the query. Users are allowed to search on title, author, or both
$query = " select * from books where loaned=1";



$stmt = $db->prepare($query);
$stmt->bind_result($isbn, $title, $author, $nopages, $editon, $published, $company, $loaned);
$stmt->execute();


 ?>

<div class="content__contain">
  <ul class="booklist">
    <li><?php
      $recordExists = 0;
     while ($stmt->fetch()):
       if($recordExists == 0 ){
         $recordExists = 1;
       // something else to display the content

      }

            ?>
   <li>

     <p ><span class="Name"><?php echo $title;  ?></span> by

     <span class="Author"><?php echo $author;  ?> </span></p>

       <div class="btns">
       <form action="delete.php" method="GET">
         <input type="submit" value='Remove' id="delete">
         <input type="hidden" name="delete" value="<?= $isbn ?>">
       </form>
       </div>

   </li>

 <?php endwhile;
 if($recordExists == 0 ){
    ?>
    <p>
      No books reserved
    </p>

    <?php
 }?>
  </ul>
</div>


<?php include_once 'partials/footer.php'; ?>
