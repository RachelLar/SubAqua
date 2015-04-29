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
	//$fn && $ln && $e && $p && $adn && $ad1 && $ad2 && $tc && $cou && $pc && $mob && $unon && $unam && $ucor && $ucam && $udur && $uyer && $dob && $jage && $kfn && $kln && $kem && $krel && $kpcon && $kbcon && $kadn && $kad1 && $kad2 && $ktc && $kcou && $kpc && $dgrad && $ingrad && $dmxdp && $dnit && $ddry && $dfa && $dexp && $dach && $dish && $al1 && $al2 && $agdat && $agter = FALSE;
	
	// This will check for a first name
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['first_name'])) 
            {
		$fn = mysqli_real_escape_string ($dbc, $trimmed['first_name']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your first name!</p></div>';
            }

	// This will check for a last name
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['last_name'])) 
            {
		$ln = mysqli_real_escape_string ($dbc, $trimmed['last_name']);
            } 
        else 
            {
		echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your last name!</p></div>';
            }
	
	// This will check for an email address
	if (filter_var($trimmed['email'], FILTER_VALIDATE_EMAIL)) 
            {
		$e = mysqli_real_escape_string ($dbc, $trimmed['email']);
            } 
        else 
            {
		echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter a valid email address!</p></div>';
            }

            
	// This will check for a password and match against the confirmed password
	if (preg_match ('/^\w{4,20}$/', $trimmed['password1']) ) 
            {
		if ($trimmed['password1'] == $trimmed['password2']) 
                    {
			$p = mysqli_real_escape_string ($dbc, SHA1($trimmed['password1']));
                    } 
                else
                    {
			echo '<div class="alert alert-danger" role="alert"><p class="error">Your password did not match the confirmed password!</p></div>';
                    }
            } 
        else 
            {
		echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter a valid password!</p></div>';
            }
            
  //------------------------------------------
        // This will check for an address number
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['address_number'])) 
            {
		$adn = mysqli_real_escape_string ($dbc, $trimmed['address_number']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your address number!</p></div>';
            }
            
        // This will check for an address1 
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['address1'])) 
            {
		$ad1 = mysqli_real_escape_string ($dbc, $trimmed['address1']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your address line 1!</p></div>';
            }

            
        // This will check for an address2
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['address2'])) 
            {
		$ad2 = mysqli_real_escape_string ($dbc, $trimmed['address2']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your address line 2!</p></div>';
            }
 
            
        // This will check for a town / city 
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['town_city'])) 
            {
		$tc = mysqli_real_escape_string ($dbc, $trimmed['town_city']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your town or city!</p></div>';
            }
 
            
        // This will check for a county
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['county'])) 
            {
		$cou = mysqli_real_escape_string ($dbc, $trimmed['county']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your county!</p></div>';
            }
 
            
        // This will check for a postcode
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['post_code'])) 
            {
		$pc = mysqli_real_escape_string ($dbc, $trimmed['post_code']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your postcode!</p></div>';
            }
            
            
        // This will check for a mobile number
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['mobile'])) 
            {
		$mob = mysqli_real_escape_string ($dbc, $trimmed['mobile']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your mobile number!</p></div>';
            }
            
            
        // This will check for a Uni or Non-uni student answer
	//if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['uni_or_nonuni'])) 
        //    {
		$unon = mysqli_real_escape_string ($dbc, $trimmed['uni_or_nonuni']);
        //    } 
       // else 
        //    {
        //        echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter if you are a Uni student or not!</p></div>';
        //    }
            
            
        // This will check for a Uni name
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['uni_name'])) 
            {
		$unam = mysqli_real_escape_string ($dbc, $trimmed['uni_name']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your Uni name!</p></div>';
            }    
                       
            
        // This will check for a Uni course name
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['uni_course'])) 
            {
		$ucor = mysqli_real_escape_string ($dbc, $trimmed['uni_course']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your Uni course name!</p></div>';
            }
            
                       
        // This will check for a Uni campus name
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['uni_campus'])) 
            {
		$ucam = mysqli_real_escape_string ($dbc, $trimmed['uni_campus']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your Uni campus name!</p></div>';
            }
            
            
        // This will check for the Uni duration
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['uni_duration'])) 
            {
		$udur = mysqli_real_escape_string ($dbc, $trimmed['uni_duration']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your Uni duration!</p></div>';
            }
                      
            
        // This will check for a Uni year
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['uni_year'])) 
            {
		$uyer = mysqli_real_escape_string ($dbc, $trimmed['uni_year']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your Uni year!</p></div>';
            }
                        
            
        // This will check for a date of birth
	if (preg_match ('/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/', $trimmed['dob'])) 
            {
		$dob = mysqli_real_escape_string ($dbc, $trimmed['dob']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your date of birth!</p></div>';
            }
                       
            
        // This will check for an age at join
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['years_at_join'])) 
            {
		$jage = mysqli_real_escape_string ($dbc, $trimmed['years_at_join']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your age at join!</p></div>';
            }
            
           
//----------------------------------------------------------            
            
        // This will check for a next of kin first name
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['kin_first_name'])) 
            {
		$kfn = mysqli_real_escape_string ($dbc, $trimmed['kin_first_name']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your next of kin first name!</p></div>';
            }
                       
            
        // This will check for a next of kin last name
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['kin_last_name'])) 
            {
		$kln = mysqli_real_escape_string ($dbc, $trimmed['kin_last_name']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your next of kin last name!</p></div>';
            }
            
            
        // This will check for a next of kin email 
	if (filter_var($trimmed['kin_email'], FILTER_VALIDATE_EMAIL)) 
            {
		$kem = mysqli_real_escape_string ($dbc, $trimmed['kin_email']);
            } 
        else 
            {
		echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter a valid next of kin email address!</p></div>';
            }
    
            
        // This will check for a next of kin relationship 
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['kin_relationship'])) 
            {
		$krel = mysqli_real_escape_string ($dbc, $trimmed['kin_relationship']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your next of kin relationship!</p></div>';
            }
                                    
            
        // This will check for a next of kin primary contact 
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['kin_primary_contact'])) 
            {
		$kpcon = mysqli_real_escape_string ($dbc, $trimmed['kin_primary_contact']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your next of kin primary contact!</p></div>';
            }
                        
            
        // This will check for a next of kin backup contact
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['kin_backup_contact'])) 
            {
		$kbcon = mysqli_real_escape_string ($dbc, $trimmed['kin_backup_contact']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your next of kin backup contact!</p></div>';
            }
                        
            
        // This will check for a next of kin address number
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['kin_address_number'])) 
            {
		$kadn = mysqli_real_escape_string ($dbc, $trimmed['kin_address_number']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your next of kin address number!</p></div>';
            }
            
            
        // This will check for a next of kin address1
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['kin_address1'])) 
            {
		$kad1 = mysqli_real_escape_string ($dbc, $trimmed['kin_address1']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your next of kin address line 1!</p></div>';
            }
            
            
        // This will check for a next of kin address2
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['kin_address2'])) 
            {
		$kad2 = mysqli_real_escape_string ($dbc, $trimmed['kin_address2']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your next of kin address line 2!</p></div>';
            }
                        
            
        // This will check for a next of kin town / city
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['kin_town_city'])) 
            {
		$ktc = mysqli_real_escape_string ($dbc, $trimmed['kin_town_city']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your next of kin town or city!</p></div>';
            }
            
                        
        // This will check for a next of kin county 
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['kin_county'])) 
            {
		$kcou = mysqli_real_escape_string ($dbc, $trimmed['kin_county']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your next of kin county!</p></div>';
            }
                        
            
        // This will check for a next of kin postcode 
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['kin_post_code'])) 
            {
		$kpc = mysqli_real_escape_string ($dbc, $trimmed['kin_post_code']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your next of kin postcode!</p></div>';
            }
            
//---------------------------------------------------------------            
            
        // This will check for a diver grade 
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['diver_grade'])) 
            {
		$dgrad = mysqli_real_escape_string ($dbc, $trimmed['diver_grade']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your diver grade!</p></div>';
            }
                                    
            
        // This will check for an instructor grade
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['instructor_grade'])) 
            {
		$ingrad = mysqli_real_escape_string ($dbc, $trimmed['instructor_grade']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your instructor grade!</p></div>';
            }
                        
            
        // This will check for a max dive depth 
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['dive_max_depth'])) 
            {
		$dmxdp = mysqli_real_escape_string ($dbc, $trimmed['dive_max_depth']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your max dive depth!</p></div>';
            }    
                       
            
        // This will check for a nitrox entry
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['dive_nitrox'])) 
            {
		$dnit = mysqli_real_escape_string ($dbc, $trimmed['dive_nitrox']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your nitrox info!</p></div>';
            }    
            
            
        // This will check for a drysuit
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['dive_drysuit'])) 
            {
		$ddry = mysqli_real_escape_string ($dbc, $trimmed['dive_drysuit']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your drysuit details!</p></div>';
            }    

            
        // This will check for first aid details
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['dive_first_aid'])) 
            {
		$dfa = mysqli_real_escape_string ($dbc, $trimmed['dive_first_aid']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your first aid details!</p></div>';
            }    

         // This will check for dive experience
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['dive_experience'])) 
            {
		$dexp = mysqli_real_escape_string ($dbc, $trimmed['dive_experience']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your dive experience!</p></div>';
            }    
 
 
        // This will check for dive achievements
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['dive_achieve'])) 
            {
		$dach = mysqli_real_escape_string ($dbc, $trimmed['dive_achieve']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your dive achievements!</p></div>';
            }    
             
 
        // This will check for dive issues 
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['dive_issues'])) 
            {
		$dish = mysqli_real_escape_string ($dbc, $trimmed['dive_issues']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter any issues!</p></div>';
            }    
                       
//---------------------------------------------------
            
         // This will check for an med_allergy1
	if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['allergies'])) 
            {
		$al1 = mysqli_real_escape_string ($dbc, $trimmed['allergies']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your allergy details!</p></div>';
            }    

            
         // This will check for an allergy2 
	/*if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['med_allergy2'])) 
            {
		$al2 = mysqli_real_escape_string ($dbc, $trimmed['med_allergy2']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter any other allergy details!</p></div>';
            } */   
            
 //-------------------------------------------------
            
                         
        // This will check for an agreement for holding data 
	/*if (isset($_POST['agree_data']) && ($_POST['agree_data'] == 'true'))
            {
		$agdat = $dbc ($_POST['agree_data']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your agreement for holding data!</p></div>';
            }
            
            
        // This will check for an agreement to terms
	if (isset($_POST['agreeterms']) && ($_POST['agreeterms'] == 'true'))
            {
		$agter = $dbc ($_POST['agreeterms']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your agreement to the terms!</p></div>';
            }
           */
        // This will check for an agreement for holding data 
	/*if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['agree_data'])) 
            {
		$agdat = mysqli_real_escape_string ($dbc, $trimmed['agree_data']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your agreement for holding data!</p></div>';
            }
    */        
            
        // This will check for an agreement to terms
	/*if (preg_match ('/^[a-zA-Z0-9-. ]+$/', $trimmed['agreeterms'])) 
            {
		$agter = mysqli_real_escape_string ($dbc, $trimmed['agreeterms']);
            } 
        else 
            {
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please enter your agreement to the terms!</p></div>';
            }            
 */           
            
 //---------------------------------------------           
	//if ($fn && $ln && $e && $p)
	if ($fn && $ln && $e && $p && $adn && $ad1 && $ad2 && $tc && $cou && $pc && $mob && $unon && $unam && $ucor && $ucam && $udur && $uyer && $dob && $jage && $kfn && $kln && $kem && $krel && $kpcon && $kbcon && $kadn && $kad1 && $kad2 && $ktc && $kcou && $kpc && $dgrad && $ingrad && $dmxdp && $dnit && $ddry && $dfa && $dexp && $dach && $dish && $al1) 
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
                        //$query1 = $dbc->prepare("INSERT INTO users (first_name, last_name, email, pass, active, registration_date) VALUES ( ?, ?, ?, ?, ?, ? )");
                        $regdate = date('NOW()');
                        $query1 = $dbc->prepare("INSERT INTO users (first_name, last_name, email, password, active, registration_date) VALUES ( ?, ?, ?, ?, ?, ? )");
                        // This will bind the variables to the statement
                        $query1->bind_param('ssssss', $fn, $ln, $e, $p, $a, $regdate );

                        // This will execute the statement
                        $query1->execute( );



                        // This will Prepare Query Two - Inserting into member_info table (General Member Information)....agree_data, agree_terms, removed.
                        $query2 = $dbc->prepare("INSERT INTO member_info (address_number, address1, address2, town_city, county, postcode, mobile, uni_or_nonuni, uni_name, uni_course, uni_campus, uni_duration, uni_year, dob, join_age, users_user_id) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, LAST_INSERT_ID() )" );

                        // This will bind the variables to the statement
                        $query2->bind_param('ssssssssssssisi', $adn, $ad1, $ad2, $tc, $cou, $pc, $mob, $unon, $unam, $ucor, $ucam, $udur, $uyer, $dob, $jage);

                        // This will execute the statement
                        $query2->execute( ); 



                        // This will store the last value of LAST_INSERT_ID() here
                        $queryLID = $dbc->prepare( "SELECT LAST_INSERT_ID()" );

                        $queryLID->execute();

                        $result = $queryLID->get_result();

                        $resultarray = $result->fetch_assoc();

                        $lastid = $resultarray['LAST_INSERT_ID()'];

                        // echo( $lastid );

                        // print_r( $lastid);



                        // This will Prepare Query Three - Inserting into member_nextofkin table (Next of Kin Information
                        $query3 = $dbc->prepare("INSERT INTO member_nextofkin (kin_first_name, kin_last_name, kin_email, kin_relationship, kin_primary_contact, kin_backup_contact, kin_address_number, kin_address1, kin_address2, kin_town_city, kin_county, kin_postcode, member_info_member_info_id ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )");

                        // This will bind the variables to the statement
                        $query3->bind_param('ssssssssssssi', $kfn, $kln, $kem, $krel, $kpcon, $kbcon, $kadn, $kad1, $kad2, $ktc, $kcou, $kpc, $lastid );

                        // This will execute the statement
                        $query3->execute( ); 



                        // This will Prepare Query Four - Inserting into member_dive_info table (Previous Diving Information)
                        $query4 = $dbc->prepare("INSERT INTO member_dive_info (diver_grade, instructor_grade, dive_max_depth, dive_nitrox, dive_drysuit, dive_first_aid, dive_experience, dive_achieve, dive_issues, member_info_member_info_id) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )" );

                        // This will bind the variables to the statement
                        $query4->bind_param('sssssssssi', $dgrad , $ingrad, $dmxdp, $dnit, $ddry, $dfa, $dexp, $dach, $dish, $lastid );

                        // This will execute the statement
                        $query4->execute( ); 



                        // This will Prepare Query Five - Inserting into member_medical table (Medical Information)
                        $query5 = $dbc->prepare("INSERT INTO member_medical (med_allergy1, member_info_member_info_id ) VALUES ( ?, ? )" );

                        // This will bind the variables to the statement
                        $query5->bind_param('si', $al1, $lastid);

                        // This will execute the statement
                        $query5->execute( ); 
                     


                        
			if (mysqli_affected_rows($dbc) == 1)  // If it ran OK.
                            {
                                // This will send the registration email
                                $body = "Thank you for registering at <whatever site>. To activate your account, please click on this link:\n\n";
                                $body .= ('BASE_URL') . 'activate.php?x=' . urlencode($e) . "&y=$a";
                                mail($trimmed['email'], 'Registration Confirmation', $body, 'From: admin@sucs.com');

                                // This will finish the page
                                echo '<h3>Thank you for registering!</h3><p>A confirmation email has been sent to your address.</p><p> Please click on the link in that email in order to activate your account.</p></div>';
                                //include ('includes/footer.html'); // Include the HTML footer.
                                exit(); // Stop the page.

                            } 
                        else 
                            { // ELSE, if it did not run correctly
				echo '<div class="alert alert-danger" role="alert"><p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p></div>';
                            }
			
                    } 
                    else 
                        { //  ELSE, it will advise the email address is not available
                            echo '<div class="alert alert-danger" role="alert"><p class="error">That email address has already been registered. If you have forgotten your password, use the link at right to have your password sent to you.</p></div>';
                        }
		
	} 
        else 
            { // ELSE, if one of the data tests failed it will advise to try again
		echo '<div class="alert alert-danger" role="alert"><p class="error">Please try again.</p>';
            }

	mysqli_close($dbc);

    } // End
?>


