

<?php
    // Start the session
    //ob_start();
    //session_start();
	

    // Check to see if actually logged in. If not, redirect to login page
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
        //header("Location: user.php");
    }
?>

<h3>Logged In!</h3>
<form method="post" action="logout.php">
    <input type="submit" value="Logout">
</form>