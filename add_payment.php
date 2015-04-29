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
            
        // This will check for a payment description
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['payment_description'])) 
            {
		$paydes = mysqli_real_escape_string ($dbc, $trimmed['payment_description']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter the payment description!</p></div>';
            }
            
        // This will check for a payment type
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['payment_type'])) 
            {
		$payty = mysqli_real_escape_string ($dbc, $trimmed['payment_type']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter the payment type!</p></div>';
            }
            
            
        // This will check for a payment amount
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['payment_amount'])) 
            {
		$payam = mysqli_real_escape_string ($dbc, $trimmed['payment_amount']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter the payment amount!</p></div>';
            }    

        // Then, IF everything is set correctly            
        if ($minfid && $paydes && $payty && $payam)  
            {                      
                // This will add the payment information to the database
                $q = "INSERT INTO member_admin_payment (payment_description, payment_type, payment_amount, member_info_member_info_id) VALUES ( '$paydes', '$payty', '$payam', '$minfid')";
                $r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

                if (mysqli_affected_rows($dbc) == 1)
                    { // Then IF it ran correctly

                        // This will finish the page
                        echo '<div class="alert alert-success" role="alert"><p>Your payment information was added to the database.</p></div>';
                        exit(); // This will stop the page.
                    } 
                else  // ELSE, if it did not run correctly
                    {
                        echo '<div class="alert alert-danger" role="alert"><p class="error">You could not save the payment information to the database due to a system error. We apologize for any inconvenience.</p></div>';
                    }  
             }
        else  // ELSE, if one of the data tests failed it will advise to try again
            {   
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please try again.</p></div>';
            }

        mysqli_close($dbc);

    } // This will end of the main Submit conditional.
?>

