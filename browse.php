

  <?php
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
    <?php
  //
  // $connection = new mysqli( 'localhost', 'root', 'root', 'author_list' ); //anslutnint till databas
  //
  // if( $connection->connect_errno ) {
  // 	//Funktion som visar att avslutningen inte fungerar.
  //
  // 	$err_msg = 'Det fungerar inte!: (' . $connection->connect_errno . ') ' . $connection->connect_error; //detta skrivs ut om det är så.
  //
  // 	exit($err_msg);
  //
  // }
  //
  //
  //
  // if( isset($_POST['newName'])){
  // 		$changeId = $_POST['changeID'];
  // 		$newName = $_POST['newName'];
  // 		$update_sql = "UPDATE author_data SET Name = '$newName' WHERE ID = '$changeId'" ;
  // 		$update_sql = "UPDATE author_data SET Updated = NOW() WHERE ID = '$changeId'";
  // 		$update_result = $connection->query($update_sql);
  //
  //
  // 	if(isset($_POST['newDef']) && $_POST['newDef']!= ""){
  // 		$newDef = $_POST['newDef'];
  //
  // 		$update_sql = "UPDATE author_data SET Author = '$newDef' WHERE ID = '$changeId'" ;
  // 		$update_result = $connection->query($update_sql);
  // 	}
  //
  // }
  //
  // if( isset($_POST['name']) ) {
  // 	//om name author är isset. Om content är satt, för vi vill lägga till en to do. funktionen förklara du variabelen fungerar.
  //
  // 	$name = $_POST['name']; //deklarera variaveln
  // 	//Gör så att PHP förstår vilken som är det satta värdet
  //
  // 	//om detta väde är satt ska det sätta innom {}. (isset kollar om POST från html har värdet author)
  // 	if( isset($_POST['author']) ) {
  //
  // 		$author = $_POST['author']; //deklarera variaveln
  // 		$add_sql = "INSERT INTO author_data SET Name='$name', Author='$author'";
  // 		//nu lärgger vi till sql databas. När vi fått content(name)
  // 		//var_dump($_POST);
  // 	}
  //
  // 	elseif (isset($_POST['name']) && isset($_POST['author']) ){
  // 		$add_sql = "INSERT INTO author_data SET Name='$name'";
  // 		//om det inte är sant så händer detta.
  // 		//var_dump($_POST);
  //
  // 	}
  //
  // 	$add_result=$connection->query($add_sql);
  // }
  //
  // if( isset($_POST['id'])){
  // 	$ID = $_POST['id'];
  // 	$remove_sql = "DELETE FROM author_data WHERE ID = '$ID'";
  // 	$remove_result=$connection->query($remove_sql);
  // }
  //
  //
  // $select_sql = "SELECT * FROM author_data ORDER BY Name"; //visar data från tabellen i DB:en
  //
  // if (isset($_POST['search'])) {
  // 	$search = $_POST['search'];
  // 	$select_sql = "SELECT * FROM author_data WHERE Name OR Author LIKE '%$search%'";
  // }
  //
  // $select_result = $connection->query($select_sql); //gör det.
  //
  // ?>





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
  			<!-- <?php
  			if( isset($select_result) && $select_result->num_rows > 0 ): ?>
  			<ul>
  				<?php

  				while( $author_data = $select_result->fetch_assoc() ):

  					?>


  					<li>

  						<p class="Name"><?php echo $author_data['Name']; ?> </p>
  						<form action="" method="post">
  							<input type="submit" value='Delete'>
  							<input type="hidden" name="id" value="<?= $author_data['ID'] ?>">
  						</form>

  						<form action="/" method="post">
  							<input type="submit" name="" value='Change'>
  							<input type="hidden" name="change" value="<?= $author_data['ID']; ?>">
  							<input type="hidden" name="Name" value="<?= $author_data['Name']; ?>">
  							<input type="hidden" name="Author" value="<?= $author_data['Author']; ?>">

  						</form>
  						<p class="Author" ><?php echo $author_data['Author']; ?> </p>


  					</li>

  				<?php endwhile;?>
  			</ul>
  		<?php endif;?> -->

      <ul class="booklist">
        <li>

          <p ><span class="Name">Pippi Långstrump</span> by

          <span class="Author">Astrid lindgren </span></p>
          <div class="btns">
          <form action="" method="post">
            <input type="hidden" name="id" value="<?= $author_data['ID'] ?>">
            <input type="submit" value='' id="book">
            <input type="submit" value='' id="delete">

          </form>

          <form action="/" method="post">
            <input type="submit" name="" value='' id="change">
            <input type="hidden" name="change" value="<?= $author_data['ID']; ?>">
            <input type="hidden" name="Name" value="<?= $author_data['Name']; ?>">
            <input type="hidden" name="Author" value="<?= $author_data['Author']; ?>">

          </form>
          </div>



        </li>
        <li>

          <p ><span class="Name">Nyckeln till frihet </span> by

          <span class="Author">John Doe </span></p>
          <div class="btns">
          <form action="" method="post">
            <input type="hidden" name="id" value="<?= $author_data['ID'] ?>">
            <input type="submit" value='' id="book">
            <input type="submit" value='' id="delete">

          </form>

          <form action="/" method="post">
            <input type="submit" name="" value='' id="change">
            <input type="hidden" name="change" value="<?= $author_data['ID']; ?>">
            <input type="hidden" name="Name" value="<?= $author_data['Name']; ?>">
            <input type="hidden" name="Author" value="<?= $author_data['Author']; ?>">

          </form>
          </div>



        </li>
        <li>

          <p ><span class="Name">Nyckeln till frihet </span> by

          <span class="Author">John Doe </span></p>
          <div class="btns">
          <form action="" method="post">
            <input type="hidden" name="id" value="<?= $author_data['ID'] ?>">
            <input type="submit" value='' id="book">
            <input type="submit" value='' id="delete">

          </form>

          <form action="/" method="post">
            <input type="submit" name="" value='' id="change">
            <input type="hidden" name="change" value="<?= $author_data['ID']; ?>">
            <input type="hidden" name="Name" value="<?= $author_data['Name']; ?>">
            <input type="hidden" name="Author" value="<?= $author_data['Author']; ?>">

          </form>
          </div>



        </li>
      </ul>

  	</div>

  	<div>


</div>

<?php include_once 'partials/footer.php'; ?>
