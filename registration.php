<?php 
/*This register.php script is based on Chapter 18 of
PHP and MySQL for Dynamic Web Sites: Visual QuickPro Guide (4th Edition).
This page will display the html registration page and process the php request.*/

// This states a requirement to include the config file.
require ('includes/config.inc.php');
$page_title = 'Registration';
//include ('includes/header.html');

if ($_SERVER['REQUEST_METHOD'] == 'POST') // Handle the form.
    {
	// This states a requirement for a database connection
	require (MYSQL);
	
        // This will Trim away the white-space of all the incoming data
	$trimmed = array_map('trim', $_POST);

	// This will assume invalid values
	$fn = $ln = $e = $p = FALSE;
	
	// This will check for a first name
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['first_name'])) 
            {
		$fn = mysqli_real_escape_string ($dbc, $trimmed['first_name']);
            } 
        else 
            {
                echo '<p class="error">Please enter your first name!</p>';
            }

	// This will check for a last name
	if (preg_match ('/^[A-Z \'.-]{2,40}$/i', $trimmed['last_name'])) 
            {
		$ln = mysqli_real_escape_string ($dbc, $trimmed['last_name']);
            } 
        else 
            {
		echo '<p class="error">Please enter your last name!</p>';
            }
	
	// This will check for an email address
	if (filter_var($trimmed['email'], FILTER_VALIDATE_EMAIL)) 
            {
		$e = mysqli_real_escape_string ($dbc, $trimmed['email']);
            } 
        else 
            {
		echo '<p class="error">Please enter a valid email address!</p>';
            }

            
	// This will check for a password and match against the confirmed password
	if (preg_match ('/^\w{4,20}$/', $trimmed['password1']) ) 
            {
		if ($trimmed['password1'] == $trimmed['password2']) 
                    {
			$p = mysqli_real_escape_string ($dbc, $trimmed['password1']);
                    } 
                else
                    {
			echo '<p class="error">Your password did not match the confirmed password!</p>';
                    }
            } 
        else 
            {
		echo '<p class="error">Please enter a valid password!</p>';
            }
            
  //------------------------------------------
        // This will check for an address number
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['address_number'])) 
            {
		$adn = mysqli_real_escape_string ($dbc, $trimmed['address_number']);
            } 
        else 
            {
                echo '<p class="error">Please enter your address number!</p>';
            }
            
        // This will check for an address1 
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['address1'])) 
            {
		$ad1 = mysqli_real_escape_string ($dbc, $trimmed['address1']);
            } 
        else 
            {
                echo '<p class="error">Please enter your address line 1!</p>';
            }

            
        // This will check for an address2
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['address2'])) 
            {
		$ad2 = mysqli_real_escape_string ($dbc, $trimmed['address2']);
            } 
        else 
            {
                echo '<p class="error">Please enter your address line 2!</p>';
            }
 
            
        // This will check for a town / city 
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['town_city'])) 
            {
		$tc = mysqli_real_escape_string ($dbc, $trimmed['town_city']);
            } 
        else 
            {
                echo '<p class="error">Please enter your town or city!</p>';
            }
 
            
        // This will check for a county
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['county'])) 
            {
		$cou = mysqli_real_escape_string ($dbc, $trimmed['county']);
            } 
        else 
            {
                echo '<p class="error">Please enter your county!</p>';
            }
 
            
        // This will check for a postcode
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['postcode'])) 
            {
		$pc = mysqli_real_escape_string ($dbc, $trimmed['postcode']);
            } 
        else 
            {
                echo '<p class="error">Please enter your postcode!</p>';
            }
            
            
        // This will check for a mobile number
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['mobile'])) 
            {
		$mob = mysqli_real_escape_string ($dbc, $trimmed['mobile']);
            } 
        else 
            {
                echo '<p class="error">Please enter your mobile number!</p>';
            }
            
            
        // This will check for a Uni or Non-uni student answer
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['uni_or_nonuni'])) 
            {
		$unon = mysqli_real_escape_string ($dbc, $trimmed['uni_or_nonuni']);
            } 
        else 
            {
                echo '<p class="error">Please enter if you are a Uni student or not!</p>';
            }
            
            
        // This will check for a Uni name
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['uni_name'])) 
            {
		$unam = mysqli_real_escape_string ($dbc, $trimmed['uni_name']);
            } 
        else 
            {
                echo '<p class="error">Please enter your Uni name!</p>';
            }    
                       
            
        // This will check for a Uni course name
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['uni_course'])) 
            {
		$ucor = mysqli_real_escape_string ($dbc, $trimmed['uni_course']);
            } 
        else 
            {
                echo '<p class="error">Please enter your Uni course name!</p>';
            }
            
                       
        // This will check for a Uni campus name
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['uni_campus'])) 
            {
		$ucam = mysqli_real_escape_string ($dbc, $trimmed['uni_campus']);
            } 
        else 
            {
                echo '<p class="error">Please enter your Uni campus name!</p>';
            }
            
            
        // This will check for the Uni duration
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['uni_duration'])) 
            {
		$udur = mysqli_real_escape_string ($dbc, $trimmed['uni_duration']);
            } 
        else 
            {
                echo '<p class="error">Please enter your Uni duration!</p>';
            }
                      
            
        // This will check for a Uni year
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['uni_year'])) 
            {
		$uyer = mysqli_real_escape_string ($dbc, $trimmed['uni_year']);
            } 
        else 
            {
                echo '<p class="error">Please enter your Uni year!</p>';
            }
                        
            
        // This will check for a date of birth
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['dob'])) 
            {
		$dob = mysqli_real_escape_string ($dbc, $trimmed['dob']);
            } 
        else 
            {
                echo '<p class="error">Please enter your date of birth!</p>';
            }
                       
            
        // This will check for an age at join
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['join_age'])) 
            {
		$jage = mysqli_real_escape_string ($dbc, $trimmed['join_age']);
            } 
        else 
            {
                echo '<p class="error">Please enter your age at join!</p>';
            }
            
                       
        // This will check for an agreement for holding data 
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['agree_data'])) 
            {
		$agdat = mysqli_real_escape_string ($dbc, $trimmed['agree_data']);
            } 
        else 
            {
                echo '<p class="error">Please enter your agreement for holding data!</p>';
            }
            
            
        // This will check for an agreement to terms
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['agree_terms'])) 
            {
		$fn = mysqli_real_escape_string ($dbc, $trimmed['agree_terms']);
            } 
        else 
            {
                echo '<p class="error">Please enter your agreement to the terms!</p>';
            }
            
//----------------------------------------------------------            
            
        // This will check for a next of kin first name
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['kin_first_name'])) 
            {
		$kfn = mysqli_real_escape_string ($dbc, $trimmed['kin_first_name']);
            } 
        else 
            {
                echo '<p class="error">Please enter your next of kin first name!</p>';
            }
                       
            
        // This will check for a next of kin last name
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['kin_last_name'])) 
            {
		$kln = mysqli_real_escape_string ($dbc, $trimmed['kin_last_name']);
            } 
        else 
            {
                echo '<p class="error">Please enter your next of kin last name!</p>';
            }
            
            
        // This will check for a next of kin email 
	if (filter_var($trimmed['kin_email'], FILTER_VALIDATE_EMAIL)) 
            {
		$e = mysqli_real_escape_string ($dbc, $trimmed['kin_email']);
            } 
        else 
            {
		echo '<p class="error">Please enter a valid next of kin email address!</p>';
            }
    
            
        // This will check for a next of kin relationship 
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['kin_relationship'])) 
            {
		$krel = mysqli_real_escape_string ($dbc, $trimmed['kin_relationship']);
            } 
        else 
            {
                echo '<p class="error">Please enter your next of kin relationship!</p>';
            }
                                    
            
        // This will check for a next of kin primary contact 
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['kin_primary_contact'])) 
            {
		$kpcon = mysqli_real_escape_string ($dbc, $trimmed['kin_primary_contact']);
            } 
        else 
            {
                echo '<p class="error">Please enter your next of kin primary contact!</p>';
            }
                        
            
        // This will check for a next of kin backup contact
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['kin_backup_contact'])) 
            {
		$kbcon = mysqli_real_escape_string ($dbc, $trimmed['kin_backup_contact']);
            } 
        else 
            {
                echo '<p class="error">Please enter your next of kin backup contact!</p>';
            }
                        
            
        // This will check for a next of kin address number
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['kin_address_number'])) 
            {
		$kadn = mysqli_real_escape_string ($dbc, $trimmed['kin_address_number']);
            } 
        else 
            {
                echo '<p class="error">Please enter your next of kin address number!</p>';
            }
            
            
        // This will check for a next of kin address1
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['kin_address1'])) 
            {
		$kad1 = mysqli_real_escape_string ($dbc, $trimmed['kin_address1']);
            } 
        else 
            {
                echo '<p class="error">Please enter your next of kin address line 1!</p>';
            }
            
            
        // This will check for a next of kin address2
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['kin_address2'])) 
            {
		$kad2 = mysqli_real_escape_string ($dbc, $trimmed['kin_address2']);
            } 
        else 
            {
                echo '<p class="error">Please enter your next of kin address line 2!</p>';
            }
                        
            
        // This will check for a next of kin town / city
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['kin_town_city'])) 
            {
		$ktc = mysqli_real_escape_string ($dbc, $trimmed['kin_town_city']);
            } 
        else 
            {
                echo '<p class="error">Please enter your next of kin town or city!</p>';
            }
            
                        
        // This will check for a next of kin county 
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['kin_county'])) 
            {
		$kcou = mysqli_real_escape_string ($dbc, $trimmed['kin_county']);
            } 
        else 
            {
                echo '<p class="error">Please enter your next of kin county!</p>';
            }
                        
            
        // This will check for a next of kin postcode 
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['kin_postcode'])) 
            {
		$fn = mysqli_real_escape_string ($dbc, $trimmed['kin_postcode']);
            } 
        else 
            {
                echo '<p class="error">Please enter your next of kin postcode!</p>';
            }
            
//---------------------------------------------------------------            
            
        // This will check for a diver grade 
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['diver_grade'])) 
            {
		$dgrad = mysqli_real_escape_string ($dbc, $trimmed['diver_grade']);
            } 
        else 
            {
                echo '<p class="error">Please enter your diver grade!</p>';
            }
                                    
            
        // This will check for an instructor grade
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['instructor_grade'])) 
            {
		$ingrad = mysqli_real_escape_string ($dbc, $trimmed['instructor_grade']);
            } 
        else 
            {
                echo '<p class="error">Please enter your instructor grade!</p>';
            }
                        
            
        // This will check for a max dive depth 
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['dive_max_depth'])) 
            {
		$dmxdp = mysqli_real_escape_string ($dbc, $trimmed['dive_max_depth']);
            } 
        else 
            {
                echo '<p class="error">Please enter your max dive depth!</p>';
            }    
                       
            
        // This will check for a nitrox entry
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['dive_nitrox'])) 
            {
		$dnit = mysqli_real_escape_string ($dbc, $trimmed['dive_nitrox']);
            } 
        else 
            {
                echo '<p class="error">Please enter your nitrox info!</p>';
            }    
            
            
        // This will check for a drysuit
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['dive_drysuit'])) 
            {
		$ddry = mysqli_real_escape_string ($dbc, $trimmed['dive_drysuit']);
            } 
        else 
            {
                echo '<p class="error">Please enter your drysuit details!</p>';
            }    

            
        // This will check for first aid details
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['dive_first_aid'])) 
            {
		$dfa = mysqli_real_escape_string ($dbc, $trimmed['dive_first_aid']);
            } 
        else 
            {
                echo '<p class="error">Please enter your first aid details!</p>';
            }    

         // This will check for dive experience
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['dive_experience'])) 
            {
		$dexp = mysqli_real_escape_string ($dbc, $trimmed['dive_experience']);
            } 
        else 
            {
                echo '<p class="error">Please enter your dive experience!</p>';
            }    
 
 
        // This will check for dive achievements
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['dive_achieve'])) 
            {
		$dach = mysqli_real_escape_string ($dbc, $trimmed['dive_achieve']);
            } 
        else 
            {
                echo '<p class="error">Please enter your dive achievements!</p>';
            }    
             
 
        // This will check for dive issues 
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['dive_issues'])) 
            {
		$dish = mysqli_real_escape_string ($dbc, $trimmed['dive_issues']);
            } 
        else 
            {
                echo '<p class="error">Please enter any issues!</p>';
            }    
                       
//---------------------------------------------------
            
         // This will check for an med_allergy1
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['med_allergy1'])) 
            {
		$al1 = mysqli_real_escape_string ($dbc, $trimmed['med_allergy1']);
            } 
        else 
            {
                echo '<p class="error">Please enter your allergy details!</p>';
            }    

            
         // This will check for an allergy2 
	if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['med_allergy2'])) 
            {
		$al2 = mysqli_real_escape_string ($dbc, $trimmed['med_allergy2']);
            } 
        else 
            {
                echo '<p class="error">Please enter any other allergy details!</p>';
            }    
            
            
 //---------------------------------------------           
	//if ($fn && $ln && $e && $p)
	if ($fn && $ln && $e && $p && $adn && $ad1 && $ad2 && $tc && $cou && $pc && $mob && $unon && $unam && $ucor && $ucam && $udur && $uyer && $dob && $jage && $agdat && $agter && $kfn && $kln && $kem && $krel && $kpcon && $kbcon && $kadn && $kad1 && $kad2 && $ktc && $kcou && $kpc && $dgrad && $ingrad && $dmxdp && $dnit && $ddry && $dfa && $dexp && $dach && $dish && $al1 && $al2) 
            { // Then, IF everything is set correctly

		// This will make sure the email address is available
		$q = "SELECT user_id FROM users WHERE email='$e'";
		$r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
		
		if (mysqli_num_rows($r) == 0) 
                    { // IF available.

			// This will create the activation code
			$a = md5(uniqid(rand(), true));

			// This will add the user to the database
			//$q = "INSERT INTO users (first_name, last_name, email, pass, active, registration_date) VALUES ('$fn', '$ln', '$e', SHA1('$p'), '$a', NOW() )";
			//$r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

                        // This will set up the query using the values that were passed via the URL from the form
                        // This uses prepared statements to improve security, and is
                        // based on guidance and ideas from Kevin Wilson @ BPC. 


                        // This will Prepare Query One - Inserting into users table (Site User Information)
                        $query1 = $connect->prepare("INSERT INTO users (first_name, last_name, email, pass, active, registration_date) VALUES ( ?, ?, ?, ?, ?, ? )" );

                        // This will bind the variables to the statement
                        $query1->bind_param('$fn', '$ln', '$e', SHA1('$p'), '$a', NOW() );

                        // This will execute the statement
                        $query1->execute( );



                        // This will Prepare Query Two - Inserting into member_info table (General Member Information)
                        $query2 = $connect->prepare("INSERT INTO member_info (address_number, address1, address2, town_city, county, postcode, mobile, uni_or_nonuni, uni_name, uni_course, uni_campus, uni_duration, uni_year, dob, join_age, agree_data, agree_terms, users_user_id) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, LAST_INSERT_ID() )" );

                        // This will bind the variables to the statement
                        $query2->bind_param($adn, $ad1, $ad2, $tc, $cou, $pc, $mob, $unon, $unam, $ucor, $ucam, $udur, $uyer, $dob, $jage, $agdat, $agter);

                        // This will execute the statement
                        $query2->execute( ); 



                        // This will store the last value of LAST_INSERT_ID() here
                        $queryLID = $connect->prepare( "SELECT LAST_INSERT_ID()" );

                        $queryLID->execute();

                        $result = $queryLID->get_result();

                        $resultarray = $result->fetch_assoc();

                        $lastid = $resultarray['LAST_INSERT_ID()'];

                        // echo( $lastid );

                        // print_r( $lastid);



                        // This will Prepare Query Three - Inserting into member_nextofkin table (Next of Kin Information
                        $query3 = $connect->prepare("INSERT INTO member_nextofkin (kin_first_name, kin_last_name, kin_email, kin_relationship, kin_primary_contact, kin_backup_contact, kin_address_number, kin_address1, kin_address2, kin_town_city, kin_county, kin_postcode, member_info_member_info_id ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )");

                        // This will bind the variables to the statement
                        $query3->bind_param($kfn, $kln, $kem, $krel, $kpcon, $kbcon, $kadn, $kad1, $kad2, $ktc, $kcou, $kpc, $lastid );

                        // This will execute the statement
                        $query3->execute( ); 



                        // This will Prepare Query Four - Inserting into member_dive_info table (Previous Diving Information)
                        $query4 = $connect->prepare("INSERT INTO member_dive_info (diver_grade, instructor_grade, dive_max_depth, dive_nitrox, dive_drysuit, dive_first_aid, dive_experience, dive_achieve, dive_issues, member_info_member_info_id) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )" );

                        // This will bind the variables to the statement
                        $query4->bind_param($dgrad , $ingrad, $dmxdp, $dnit, $ddry, $dfa, $dexp, $dach, $dish, $lastid );

                        // This will execute the statement
                        $query4->execute( ); 



                        // This will Prepare Query Five - Inserting into member_medical table (Medical Information)
                        $query5 = $connect->prepare("INSERT INTO member_medical (med_allergy1, med_allergy2, member_info_member_info_id ) VALUES ( ?, ?, ? )" );

                        // This will bind the variables to the statement
                        $query5->bind_param($al1, $al2, $lastid);

                        // This will execute the statement
                        $query5->execute( ); 
                     


                        
			if (mysqli_affected_rows($dbc) == 1)  // If it ran OK.
                            {
                                // This will send the registration email
                                $body = "Thank you for registering at <whatever site>. To activate your account, please click on this link:\n\n";
                                $body .= BASE_URL . 'activate.php?x=' . urlencode($e) . "&y=$a";
                                mail($trimmed['email'], 'Registration Confirmation', $body, 'From: admin@sucs.com');

                                // This will finish the page
                                echo '<h3>Thank you for registering! A confirmation email has been sent to your address. Please click on the link in that email in order to activate your account.</h3>';
                                include ('includes/footer.html'); // Include the HTML footer.
                                exit(); // Stop the page.

                            } 
                        else 
                            { // ELSE, if it did not run correctly
				echo '<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';
                            }
			
                    } 
                    else 
                        { //  ELSE, it will advise the email address is not available
                            echo '<p class="error">That email address has already been registered. If you have forgotten your password, use the link at right to have your password sent to you.</p>';
                        }
		
	} 
        else 
            { // ELSE, if one of the data tests failed it will advise to try again
		echo '<p class="error">Please try again.</p>';
            }

	mysqli_close($dbc);

    } // End
?>


<?php include ('includes/footer.html'); ?>
