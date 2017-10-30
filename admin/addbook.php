<?php
session_start();

if (!isset($_SESSION['userid'])) {
    header("location: login.php");
}
include_once 'partials/head.php';
include_once 'partials/header.php';
?>

<?php
if (isset($_POST['newbooktitle'])) {
    // This is the postback so add the book to the database
    # Get data from form
    $newbooktitle = trim($_POST['newbooktitle']);
    $newbookauthor = trim($_POST['newbookauthor']);

    if (!$newbooktitle || !$newbookauthor) {
        printf("You must specify both a title and an author");
        printf("<br><a href=index.php>Return to home page </a>");
        exit();
    }

    $newbooktitle = addslashes($newbooktitle);
    $newbookauthor = addslashes($newbookauthor);

    # Open the database using the "librarian" account
@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

    if ($db->connect_error) {
        echo "could not connect: " . $db->connect_error;
        printf("<br><a href=index.php>Return to home page </a>");
        exit();
    }
    // Prepare an insert statement and execute it
    $stmt = $db->prepare("insert into books values (NULL, ?, ?, NULL, NULL, NULL, NULL, '0')");
    $stmt->bind_param('ss', $newbooktitle, $newbookauthor);
    $stmt->execute();
    printf("<br>Book Added!");
    printf("<br><a href=index.php>Return to home page </a>");
    exit;
}

// Not a postback, so present the book entry form
?>

<h2>Add a new book</h2>

<form action="addbook.php" method="POST">
    <table>
        <tbody>
            <tr>
                <td>Title:</td>
                <td><INPUT type="text" name="newbooktitle"></td>
            </tr>
            <tr>
                <td>Author:</td>
                <td><INPUT type="text" name="newbookauthor"></td>
            </tr>
            <tr>
                <td></td>
                <td><INPUT type="submit" name="submit" value="Add Book"></td>
            </tr>
        </tbody>
    </table>
</form>
<?php include("partials/footer.php"); ?>
