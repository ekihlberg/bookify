<?php
#first you have to start a session
session_start();

#assign a value to the $_SESSION superglobal array

// $_SESSION['userid']=1;

#unset using unset

// unset($_SESSION['userid']);

#check if set


#if you want to remove all session values, use session_destroy

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

#this function is for older PHP versions that use Magic Quotes.
#
//    function escapestring($input) {
//    if (get_magic_quotes_gpc()) {
//    $input = stripslashes($input);
//    }
//
//    @ $db = new mysqli('localhost', 'root', '', 'testinguser');
//
//
//    return mysqli_real_escape_string($db, $input);
//
//    }
include_once 'partials/head.php';

$activePage = "about.php";?>
<div class="hero log" >
<?php
?>
<div class="hero__content">
<h1>Loggin!</h1>
<!-- <p class="hero__content__text">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nulla deserunt doloremque, quo, accusantium eos dolores accusamus dolorum alias error fuga ad quibusdam at quia. Facilis porro soluta, libero saepe.
</p> -->

<?php
@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if ($db->connect_error) {
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=index.php>Return to home page </a>");
    exit();
}

    #the mysqli_real_espace_string function helps us solve the SQL Injection
    #it adds forward-slashes in front of chars that we can't store in the username/pass
    #in order to excecute a SQL Injection you need to use a ' (apostrophe)
    #Basically we want to output something like \' in front, so it is ignored by code and processed as text

if (isset($_POST['username'], $_POST['userpass'])) {
    #with statement under we're making it SQL Injection-proof
    $uname = mysqli_real_escape_string($db, $_POST['username']);

    #without function, so here you can try to implement the SQL injection
    #various types to do it, either add ' -- to the end of a username, which will comment out
    #or simply use
    #' OR '1'='1' #
    #$uname = $_POST['username'];

    #here we hash the password, and we want to have it hashed in the database as well
    #optimally when you create a user (through code) you simply send a hash
    #hasing can be done using different methods, MD5, SHA1 etc.

    $upass = sha1($_POST['userpass']);

    #just to see what we are selecting, and we can use it to test in phpmyadmin/heidisql

    // echo "SELECT * FROM user WHERE username = '{$uname}' AND userpw = '{$upass}'";

    $query = ("SELECT * FROM User WHERE username = '{$uname}' "."AND userpw = '{$upass}'");


    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->store_result();

    #here we create a new variable 'totalcount' just to check if there's at least
    #one user with the right combination. If there is, we later on print out "access granted"
    $totalcount = $stmt->num_rows();



}
?>



        <form method="POST" class="login__form" action="">
            <input type="text" class="input" placeholder="Username" name="username">
            <input type="password" class="input" placeholder="Password" name="userpass">

            <input type="submit" class="btn"  value="Log in">

        </form>
        <?php


            //
            if (isset($totalcount)) {
                if ($totalcount == 0) {
                    echo '<p>Wrong password</p>';
                } else {
                    $_SESSION['userid'] = 1;
                    echo '<p>Welcome! Correct password.</p>';
                    ?>
                    <script type="text/javascript">
                    window.location.href = "http://localhost:8888/jth/admin/index.php";

                    </script>
                    <?php
                }
            }

            // if (isset($_SESSION['userid'])):
            //     echo $_SESSION['userid'];
            //
            // else:
            //     echo "Not set";
            //  endif;
             ?>
      </div>
      </div>
    </body>
</html>
