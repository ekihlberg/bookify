

  <?php
  include_once 'partials/head.php';
$activePage = "about.php";?>
<div class="hero">
   <?php
  include_once 'partials/header.php'; ?>
  <div class="hero__content">
    <h1>Images</h1>
    <p class="hero__content__text">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nulla deserunt doloremque, quo, accusantium eos dolores accusamus dolorum alias error fuga ad quibusdam at quia. Facilis porro soluta, libero saepe.

  </div>
</div>


<div class="content__contain">

<?php




                 $dirname = "uploadedfiles/";
                  $images = glob($dirname."*");

                  foreach($images as $image) {
                     echo '<img src="'.$image.'" /><br />';
                  };



                  ?>


</div>

<?php include_once 'partials/footer.php'; ?>
