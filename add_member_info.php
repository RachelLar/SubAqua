<?php


// This states a requirement to include the config file
require ('includes/config.inc.php'); 


if ($_SERVER['REQUEST_METHOD'] == 'POST') // This handles the form
    { 
        // This states a requirement for a database connection
        require (MYSQL);

        // This will Trim away the white-space of all the incoming data
        $trimmed = array_map('trim', $_POST);

        

        // This will check for a Topic ID number
        if (preg_match ('/^[1-9][0-9]*$/', $trimmed['member_info_member_info_id']))
            {
                $minfid = mysqli_real_escape_string ($dbc, $trimmed['member_info_member_info_id']);
            }
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter the Member Info ID Number!</p></div>';
            }
            
        // This will check for BSAC information
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['bsac'])) 
            {
		$bsac = mysqli_real_escape_string ($dbc, $trimmed['bsac']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter the BSAC information or state none!</p></div>';
            }
            
        // This will check for Solent information
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['solent'])) 
            {
		$sol = mysqli_real_escape_string ($dbc, $trimmed['solent']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter the Solent information or state none!</p></div>';
            }
            
            
        // This will check for Andark information
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['andark'])) 
            {
		$adrk = mysqli_real_escape_string ($dbc, $trimmed['andark']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter the Andark information or state none!</p></div>';
            }  
            
        // This will check for Polo information
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['polo'])) 
            {
		$polo = mysqli_real_escape_string ($dbc, $trimmed['polo']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter the Polo information or state none!</p></div>';
            }  

        // Then, IF everything is set correctly            
        if ($minfid && $bsac && $sol && $adrk && $polo)  
            {
                // This will make sure the member_info_id is not already in use
                $q = "SELECT member_admin_id FROM member_admin WHERE member_info_member_info_id='$minfid'";
                $r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

                if (mysqli_num_rows($r) == 0)  // IF available
                    {                      
                    // This will add the payment information to the database
                    $q = "INSERT INTO member_admin (bsac, solent, andark, polo, member_info_member_info_id) VALUES ( '$bsac', '$sol', '$adrk', '$polo', $minfid')";
                    $r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

                    if (mysqli_affected_rows($dbc) == 1)
                        { // Then IF it ran correctly

                            // This will finish the page
                            echo '<div class="alert alert-success" role="alert"><p>Your information was added to the database.</p></div>';
                            exit(); // This will stop the page.
                        } 
                    else  // ELSE, if it did not run correctly
                        {
                            echo '<div class="alert alert-danger" role="alert"><p class="error">You could not save the information to the database due to a system error. We apologise for any inconvenience.</p></div>';
                        }  
                            } 
                else  // ELSE, it will advise the email address is not available
                    {    
                        echo '<div class="alert alert-danger" role="alert"><p class="error">That member_info_id has already been registered.</p></div>';
                    }
            } 
        else  // ELSE, if one of the data tests failed it will advise to try again
            {   
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please try again.</p></div>';
            }

        mysqli_close($dbc);

    } // This will end of the main Submit conditional.
?>

