
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


<div class="content__contain">
  <ul class="booklist">
    <li>
      <p ><span class="Name">Nyckeln till frihet </span> by

      <span class="Author">John Doe </span></p>

      <form action="" method="post">
        <input type="hidden" name="id" value="<?= $author_data['ID'] ?>">
        <input type="submit" value='Delete'>

      </form>

    </li>
    <li>

      <p ><span class="Name">Pippi Långstrump</span> by

      <span class="Author">Astrid lindgren </span></p>

      <form action="" method="post">
        <input type="hidden" name="id" value="<?= $author_data['ID'] ?>">
        <input type="submit"  value='Delete'>

      </form>
    </li>
  </ul>
</div>


<?php include_once 'partials/footer.php'; ?>
