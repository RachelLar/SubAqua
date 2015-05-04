<?php 
     
    // Start output buffering:
    ob_start();

    // Initialize a session:
    session_start();
;
    ?>
<?php

/*This  login.php script is based on Chapter 18 of
PHP and MySQL for Dynamic Web Sites: Visual QuickPro Guide (4th Edition),
and is used to carry-out the login process for the site. */

// This states a requirement to include the config file
require ('includes/config.inc.php'); 
include ('includes/header.html');

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		require (MYSQL);
		
		// This will validate the email address before logging in
		if (!empty($_POST['email'])) 
			{
				$e = mysqli_real_escape_string ($dbc, $_POST['email']);
			} 
		else 
			{
				$e = FALSE;
				echo '<div class="alert alert-danger" role="alert"><p class="error">You forgot to enter your email address!</p></div>';
			}
		
		// This will validate the password before logging in
		if (!empty($_POST['password'])) 
			{
				$p = mysqli_real_escape_string ($dbc, $_POST['password']);
			} 
		else 
			{
				$p = FALSE;
				echo '<div class="alert alert-danger" role="alert"><p class="error">You forgot to enter your password!</p></div>';
			}
		
		if ($e && $p) 
                    { // Then, IF everything is set correctly

			// This will make a query to the database
			$q = "SELECT user_id, first_name, user_level FROM users WHERE (email='$e' AND password=SHA1('$p')) AND active IS NULL";		
			$r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
			
			if (@mysqli_num_rows($r) == 1) 
				{ // Then, IF a match was made

					// This will register the values and set a session
					$_SESSION = mysqli_fetch_array ($r, MYSQLI_ASSOC); 
					mysqli_free_result($r);
					mysqli_close($dbc);
									
		                        if ($_SESSION['user_level'] == 1)
                                            {
                                                // This will redirect the Admin User to their Home page
                                                ob_end_clean(); // This will delete the buffer
                                                header("Location: admin_home.php");
                                                exit(); // This will exit the script
                                            }
                                        else 
                                            {
                                                // If they are not an Admin User, 
                                                // this will redirect to the level 0 Member User Home page
                                                ob_end_clean(); // This will delete the buffer
                                                header("Location: member_home.php");
                                                exit(); // This will exit the script
                                            }

                                } 
                else  // ELSE, if no match was made
                    {	
                        echo '<div class="alert alert-danger" role="alert">Either the ID Number and Password entered do not match those on file or you have not yet activated your account.</div>';
                    }		
            } 
        else  // ELSE, if everything it did not run correctly
            {	
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please try again.</p></div>';
            }
		
		mysqli_close($dbc);

	} // This will end of the main Login conditional.
?>
<?php include ('includes/footer.html'); ?>
