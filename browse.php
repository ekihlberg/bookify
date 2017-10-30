

  <?php
  // database

  // $books = array();
  // $books[] = array("title" => "RUM", "author" => "Alexander Schulman");
  // $books[] = array("title" => "Pippi Långstrump", "author" => "Astrid Lindgren");
  // $books[] = array("title" => "Stora pekboken", "author" => "Anonoym Anonymsson");
  // $books[] = array("title" => "Vem vet", "author" => "Elsa Svensson");
  // $books[] = array("title" => "The Book", "author" => "John Doe");
  //



include_once 'partials/head.php';
  $activePage = "browse.php";?>
  <div class="hero">
     <?php
    include_once 'partials/header.php'; ?>
    <div class="hero__content">
      <h1>Browse books</h1>
      <p class="hero__content__text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nulla deserunt doloremque, quo, accusantium eos dolores accusamus dolorum alias error fuga ad quibusdam at quia. Facilis porro soluta, libero saepe.

    </div>
  </div>



  <div class="content__contain">
  			<div id="search">
          <form method="post">
            <INPUT type="text" name="searchtitle" placeholder="Search title or author">
            <INPUT type="submit" name="submit" value="Search">
          </form>
  		  </div>





        <?php
        $searchtitle = "";

        if (isset($_POST) && !empty($_POST)) {
        # Get data from form
            $searchtitle = trim($_POST['searchtitle']);

        }
        $searchtitle = addslashes($searchtitle);

        @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);


        if ($db->connect_error) {
            echo "could not connect: " . $db->connect_error;
            printf("<br><a href=index.php>Return to home page </a>");
            exit();
        }

        # Build the query. Users are allowed to search on title, author, or both
        $query = " select * from books";

        if ($searchtitle) {
            $query = $query . " where title OR author like '%" . $searchtitle . "%'";
        }



      $stmt = $db->prepare($query);
      $stmt->bind_result($isbn, $title, $author, $nopages, $editon, $published, $company, $loaned);
      $stmt->execute();




      ?>
        <div id="list">


        <ul class="booklist">
        <?php

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
         <?php if (!$loaned): ?>
           <div class="btns">
           <form action="reserved.php" method="GET">
             <input type="submit" value='' id="book">
             <input type="hidden" name="bookid" value="<?= $isbn ?>">
           </form>
           </div>
         <?php endif; ?>

       </li>

     <?php endwhile;
     if($recordExists == 0 ){
        ?>
        <p>
          There is no book matching that Search
        </p>

        <?php
     }?>



              </ul></div>


        <?php







      ?>








</div>

<?php include_once 'partials/footer.php'; ?>
