<?php
	//ensure the script only runs if there is a page number posted to this page
	if (isset($_POST['pn'])) {
		$rpp = preg_replace('#[^0-9]#', '', $_POST['rpp']);
		$last = preg_replace('#[^0-9]#', '', $_POST['last']);
		$pn = preg_replace('#[^0-9]#', '', $_POST['pn']);

		//make sure the page number isnt below 1 or more than $last page

		if ($pn < 1) {
			$pn = 1;
		}else if($pn > $last){
			$pn = $last;
		}

		//connect to db
		include 'config/dbconfig.php';

		//set a range of rows to query for the choosen $pn
		$limit = 'LIMIT '. ($pn -1 ) * $rpp . ','.$rpp;
		$sql = "SELECT article_id, author, title, date, content FROM articles ORDER BY article_id DESC $limit";
		$query = mysqli_query($conn, $sql);
		$dataString = '';
		while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			$id = $row['article_id'];
			$author = $row['author'];
			$title = $row['title'];
			$content = $row['content'];

			$dataString .= $id.'|'.$author.'|'.$title.'|'.$content.'||';
		}
		mysqli_close($conn); //close db connection
		echo $dataString; //echo the results back to javascript
		exit();
	}
?>

<?php
    include 'config/dbconfig.php';
    $sql = "SELECT COUNT(article_id) FROM articles";
    $query = mysqli_query($sql,$conn);
    $row = mysqli_fetch_row($query);

    $total_rows = $row[0]; //get the row count

    $rpp = 6; //results per page

    //get last page number
    $last = ceil($total_rows/$rpp);
    //Ensure $last cannot be less than 1
    if ($last < 1) {
        $last = 1;
    }
?>
<?php include('head/head.php');?> 
<?php include('head/menu.php');?>
<div id="pagination_controls">
    
</div>
<div id="results_box">
    
</div>
<script type="text/javascript">
    request_page(1);
</script>

<?php include 'head/footer.php';?>