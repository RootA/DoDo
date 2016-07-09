<?php

require("phpmailer/class.phpmailer.php");
                    
                    $mail = new PHPMailer();
$mail->CharSet = "UTF-8";

                    $mail->IsSMTP();                                      // set mailer to use SMTP
                    $mail->Host = "localhost";  // specify main and backup server
                    $mail->SMTPAuth = true;     // turn on SMTP authentication
                    $mail->Username = "mailtest@dodoworld.com";  // SMTP username
                    $mail->Password = "MeganeRoot222"; // SMTP password

                    $mail->From = "mailtest@dodoworld.com";
                    $mail->FromName = "DODO WORLD";

                    $mail->AddAddress("mwathiantonyit@gmail.com");

                    $mail->WordWrap = 200;                                 // set word wrap to 50 characters
                    $mail->IsHTML(true);                                  // set email format to HTML

                    $mail->Subject = "DODO INFO";
                    $body = " 件名:  . $lname <br>. お名前: . $fname <br>. メールアドレス: . $email <br>.  旅行予定の時期: . $fromday <br>.    日から: . $tillday <br>. ケニア滞在期間: . $duration <br>. 予定フライトスケジュール: . $flight <br>. 大人: . $adult <br>. 'お子様:'. $child <br>.  その他: . $other <br>. 部屋数: $room  ";

                   //mb_language("ja");
                   //$bodyjp = mb_convert_encoding($body, "UTF-8","UTF-8")
                    $mail->Body    = "$body";

                   // $mail->AltBody = " '件名: ' . $lname ."\n\n" . 'お名前:'. $fname . "\n\n" . 'メールアドレス: ' . $email . "\n\n" . '旅行予定の時期: ' . $fromday . "\n\n" .    '日から: ' . $tillday ."\n\n". 'ケニア滞在期間:' . $duration ."\n\n" .'予定フライトスケジュール:'. $flight ."\n\n". '大人:'. $adult ."\n\n". 'お子様:'. $child . "\n\n" . 'その他:'. $other . "\n\n" . '部屋数:' . $room . "\n\n"";

                    if(!$mail->Send())
                    {
                       echo "Message could not be sent. <p>";
                       echo "Mailer Error: " . $mail->ErrorInfo;
                       exit;
                    }

                    echo "$fname $lname あなたのお問い合わせいただきありがとうございます."; 

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
                           echo "Success";

                        }
                        echo "failed";
            ?>