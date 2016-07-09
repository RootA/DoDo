<html>
   
   <head>
      <title>Paging Using PHP</title>
   </head>
   
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'onepiece';
         
         $rec_limit = 5;
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
         
         if(!$conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         mysqli_select_db('Dodo');
         
         /* Get total number of records */
         $sql = "SELECT count(article_id) FROM articles ";
         $retval = mysqli_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
         $row = mysqli_fetch_array($retval, MYSQL_NUM );
         $rec_count = $row[0];
         
         if( isset($_GET['page'] ) ) {
            $page = $_GET['page'] + 1;
            $offset = $rec_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }
         
         $left_rec = $rec_count - ($page * $rec_limit);
         $sql = "SELECT article_id, title, content". 
            "FROM articles".
            "LIMIT $offset, $rec_limit";
            
         $retval = mysqli_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not get data: ' . mysqli_error());
         }
         while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
            echo "EMP ID :{$row['article_id']}  <br> ".
               "EMP NAME : {$row['title']} <br> ".
               "EMP SALARY : {$row['content']} <br> ".
               "--------------------------------<br>";
         }
         
         if( $page > 0 ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a> |";
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $page == 0 ) {
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a>";
            }
         }
         mysqli_close($conn);
      ?>
      
   </body>
</html>