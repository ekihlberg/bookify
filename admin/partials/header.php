<?php
$pages = array();
$pages["index.php"] = "All books";
$pages["addbook.php"] = "Add book";
$pages["gallery__upload.php"] = "Upload image";


 ?>

 <header >
   <div class="loginlogo">
   <p class="logo"><a href="/jth/admin">Bookify</a></p>
   - Admin
   </div>
   <nav class="main-menu">
       <ul>
<?php foreach($pages as $url=>$title):?>
  <li>
       <a <?php if($url === $current_page):?>class="active"<?php endif;?> href="<?php echo $url;?>">
         <?php echo $title;?>
      </a>
  </li>

<?php endforeach;?>
      </ul>
    </nav>
</header>
