<?php

/*This  login.php script is based on Chapter 11 of
PHP and MySQL for Dynamic Web Sites: Visual QuickPro Guide (4th Edition),
and is used to carry-out the login process for the site. */

// This states a requirement to include the config file
require ('includes/config.inc.php'); 
include ('includes/admin_header.html');

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
	// Check for an uploaded file:
	if (isset($_FILES['upload'])) 
            {		
		// Validate the type. This example allows for
                //JPEG, PNG or GIF
		$allowed = array ('image/pjpeg', 'image/jpeg', 'image/JPG', 'image/X-PNG', 'image/PNG', 'image/png', 'image/x-png', 'image/gif'); 
		if (in_array($_FILES['upload']['type'], $allowed)) 
                    {		
			// Move the file over.
			if (move_uploaded_file ($_FILES['upload']['tmp_name'], "member_photos/{$_FILES['upload']['name']}")) 
                            {
                                echo '<div class="alert alert-success" role="alert"><p>The file has been uploaded!</p></div>';
                                $thefile = $_FILES['upload']['name'];  
                                $photolink = $thefile;
                            } // End of move... IF.		
                    } 
                else 
                    { // Invalid type.
			echo '<div class="alert alert-danger" role="alert"><p class="error">Please upload a JPEG or PNG image.</p></div>';
                    }

	} // End of isset($_FILES['upload']) IF.
	
	// Check for an error
	if ($_FILES['upload']['error'] > 0) {
		echo '<div class="alert alert-danger" role="alert"><p class="error">The file could not be uploaded because: <strong>';
	
		// Print a message based upon the error.
		switch ($_FILES['upload']['error']) {
			case 1:
				print 'The file exceeds the upload_max_filesize setting in php.ini.';
				break;
			case 2:
				print 'The file exceeds the MAX_FILE_SIZE setting in the HTML form.';
				break;
			case 3:
				print 'The file was only partially uploaded.';
				break;
			case 4:
				print 'No file was uploaded.';
				break;
			case 6:
				print 'No temporary folder was available.';
				break;
			case 7:
				print 'Unable to write to the disk.';
				break;
			case 8:
				print 'File upload stopped.';
				break;
			default:
				print 'A system error occurred.';
				break;
		} // End of switch.
		
		print '</strong></p></div>';
	
	} // End of error IF.
	
	// Delete the file if it still exists:
	if (file_exists ($_FILES['upload']['tmp_name']) && is_file($_FILES['upload']['tmp_name']) ) 
            {
		unlink ($_FILES['upload']['tmp_name']);
            }			
} // End of the submitted conditional.


if ($_SERVER['REQUEST_METHOD'] == 'POST') // This handles the form
    { 
        // This states a requirement for a database connection
        require (MYSQL);

        // This will Trim away the white-space of all the incoming data
        $trimmed = array_map('trim', $_POST);        

        // This will check for a Member Info ID number
        if (preg_match ('/^[1-9][0-9]*$/', $trimmed['member_info_member_info_id']))
            {
                $minfid = mysqli_real_escape_string ($dbc, $trimmed['member_info_member_info_id']);
            }
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter the Member Info ID Number!</p></div>';
            }

        // Then, IF everything is set correctly            
        if ($minfid)  
            {                      
                // This will add the picture to the database
                //$q = "INSERT INTO member_admin (picture) VALUES ('$photolink')  member_info_member_info_id = '$minfid'";
                $q = "UPDATE member_admin SET picture = '$photolink' WHERE member_info_member_info_id = '$minfid'";
                $r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

                if (mysqli_affected_rows($dbc) == 1)
                    { // Then IF it ran correctly

                        // This will finish the page
                        echo '<div class="alert alert-success" role="alert"><p>Your picture was added to the database.</p></div>';
                        //exit(); // This will stop the page.
                    } 
                else  // ELSE, if it did not run correctly
                    {
                        echo '<div class="alert alert-danger" role="alert"><p class="error">You could not save the link to the database due to a system error. We apologize for any inconvenience.</p></div>';
                    }  
             }
        else  // ELSE, if one of the data tests failed it will advise to try again
            {   
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please try again.</p></div>';
            }

        mysqli_close($dbc);

    } // This will end of the main Submit conditional.
?>

<?php include ('includes/admin_footer.html'); ?>
