

  <?php


  $books = array();
  $books[] = array("title" => "Wordpress for you", "author" => "Johan Kohlin");
  $books[] = array("title" => "PHP the easy way", "author" => "John Bauer");
  $books[] = array("title" => "The big bad wolf", "author" => "R. K. Rowling");
  $books[] = array("title" => "No Idea", "author" => "Nolan Ideos");


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
  			<form action="" method="post" id="addName">
  				<input type="search" name="search" placeholder="Search books here...">
  				<input type="submit" value=" " id="SearchBtn">
  			</form>
  		</div>


  		<div id="new">
  			<h2>Add new</h2>
  			<form action="/author_list/index.php" method="post" id="addName">
  				<input type="text" name="name" placeholder="Name">
  				<textarea name="author" placeholder="Author"></textarea>
  				<input type="submit" value="Add">
  			</form>

  		</div>

  		<div id="list">


      <ul class="booklist">
        <?php foreach ($books as $book) {
                    $title = $book['title'];
                    $author = $book['author'];


                 ?>
        <li>

          <p ><span class="Name"><?php echo $title;  ?></span> by

          <span class="Author"><?php echo $author;  ?> </span></p>
          <div class="btns">
          <form action="" method="post">
            <input type="hidden" name="id" value="<?= $author_data['ID'] ?>">
            <input type="submit" value='' id="book">
            <input type="submit" value='' id="delete">

          </form>

          <form action="/" method="post">
            <input type="submit" name="" value='' id="change">
          </form>
          </div>



        </li>
      <?php } ?>

      </ul>

  	</div>

  	<div>


</div>

<?php include_once 'partials/footer.php'; ?>
