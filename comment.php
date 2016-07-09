<?php
	session_start();

	$id = $_GET['comment'];
	$_SESSION['comment'] = $id;
    $rt = $_SESSION['comment'];

    include 'config/dbconfig.php';



    #set all variables to null;
    $name = $comment = $email = "";


    #fetch the data
    if (isset($_POST['commented'])) {
        
        $name = testinput($_POST['name']);
        $email = testinput($_POST['email']);
        $comment = testinput($_POST['message']);


        if ($name =='' || $email =='' || $comment =='') {
            $error = "<div class='alert alert-warning'> Ensure all required (*) fields are filled</div>";
            
        }else{


            #add comment to the article store
            $sql = "INSERT INTO comments (article_id,comment,comment_by,email) VALUES ('$rt','$comment','$name','$email')";
            $run = $conn->query($sql);

            if (!$run) {
                echo "<script>alert('Sorry Could not take the comment!!')</script>";
                echo "<script>window.open('blog-item.php?article=$rt,'_self')</script>";
            }else{
            echo "<script>alert('Thank You, Get back to you Soon!!')</script>";
            echo "<script>window.open('blog-item.php?article=$rt,'_self')</script>";
            }
        }
     }

     function testinput($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }