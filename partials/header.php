<?php
$pages = array();
$pages["about.php"] = "About";
$pages["browse.php"] = "Browse Books";
$pages["mybooks.php"] = "My Books";
$pages["gallery.php"] = "Images";
$pages["contact.php"] = "Contact";


 ?>

 <header>
   <p class="logo"><a href="/jth/">Bookify</a></p>
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
