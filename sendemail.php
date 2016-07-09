<?php
    include ('config/dbconfig.php');
	// $status = array(
	// 	'type'=>'success',
	// 	'message'=>'Email sent!'
	// );

    if (isset($_POST['send'])) {
        # process information
        # Authenticate all data
        # Store in the DB
        # Formulate an Email 
        # Send to both Dodo and Client Mail Box

            $lname = stripslashes($_POST['lname']); 
            $fname = stripslashes($_POST['fname']);
            $email = stripslashes($_POST['email']); 
            $adult = stripslashes($_POST['adult']); 
            $child = stripslashes($_POST['child']); 
            $other = stripslashes($_POST['other']);
            $fromday = stripslashes($_POST['start']);
            $tillday = stripslashes($_POST['end']);
            $duration = stripslashes($_POST['duration']);
            $flight = stripslashes($_POST['flight']);
            $room = stripslashes($_POST['room']);

            $newfrom = date_format($fromday,'%Y-%m-%d');
            $newtill = date_format($tillday,'%Y-%m-%d');

            #Store Information Back up to DB Server

            $sql = "INSERT INTO orders (lname,fname,mail,adult,child,other,fromday,tillday,duration,flight,room_type) VALUES ('$lname','$fname','$email','$adult','$child','$other','$newfrom','$newtill','$duration','$flight','$room')";
            if ($conn->query($sql) === TRUE ) {
                # Queue Mail 
                $email_from = $email;
                $email_to = 'mwathiantonyit@gmail.com';

                $body = '件名: ' . $lname ."\n\n" . 'お名前:'. $fname . "\n\n" . 'メールアドレス: ' . $email . "\n\n" . '旅行予定の時期: ' . $fromday . "\n\n" .    '日から: ' . $tillday ."\n\n". 'ケニア滞在期間' . $duration ."\n\n" .'予定フライトスケジュール:'. $flight ."\n\n". '大人'. $adult ."\n\n". 'お子様:'. $child . "\n\n" . 'その他:'. $other . "\n\n" . '部屋数:' . $room . "\n\n";

                $success = @mail($email_to, $lname, $body, 'From: <'.$email_from.'>');

            }else{
                echo "</script>alert('Couldn't send mail!!!');</script>";
                echo "Error: " . $sql . "<br>" . $conn->error;

            }

    }else{
        echo "</script>alert('Couldn't Work!!!');</script>";
    }
?>