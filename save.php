<?php

$conn = mysqli_connect("localhost", "root", "root","Dodo") or die("Could not connect.");
		 mysqli_set_charset($conn,"utf8");
		if(!$conn) { 	
			echo "</script>alert('No DB!!!');</script>";
		}

         	$lname = $_POST['lname']; 
            $fname = $_POST['fname'];
            $email = $_POST['email']; 
            $adult = $_POST['adult']; 
            $child = $_POST['child']; 
            $other = $_POST['other'];
            $fromday = $_POST['start'];
            $tillday = $_POST['end'];
            $duration = $_POST['duration'];
            $flight =$_POST['flight'];
            $room = $_POST['room'];

            $newfrom = date('Y-m-d', strtotime(str_replace('-', '/', $fromday)));
            $newtill = date('Y-m-d', strtotime(str_replace('-', '/', $tillday)));

            #Store Information Back up to DB Server

            $sql = "INSERT INTO orders (lname,fname,mail,adult,child,other,fromday,tillday,duration,flight,room_type) 
            		VALUES ('$lname','$fname','$email','$adult','$child','$other','$newfrom','$newtill','$duration','$flight','$room')";
            if ($conn->query($sql) === TRUE ) {
                # Queue Mail 
                $email_from = $email;
                $email_to = 'mwathiantonyit@gmail.com';

                $body = '件名: ' . $lname ."\n\n" . 'お名前:'. $fname . "\n\n" . 'メールアドレス: ' . $email . "\n\n" . '旅行予定の時期: ' . $fromday . "\n\n" .    '日から: ' . $tillday ."\n\n". 'ケニア滞在期間' . $duration ."\n\n" .'予定フライトスケジュール:'. $flight ."\n\n". '大人'. $adult ."\n\n". 'お子様:'. $child . "\n\n" . 'その他:'. $other . "\n\n" . '部屋数:' . $room . "\n\n";

                $success = @mail($email_to, $lname, $body, 'From: <'.$email_from.'>');

       		 echo "Mr/Mrs: $lname $fname  Thank You for your Email, DodoWorld";
            }else{
                echo "<script>alert('Couldn't send mail!!!');</script>";
                echo "Error: " . $sql . "<br>" . $conn->error;

            }
            ?>