<?php
    include 'dbconfig.php';

    $count = $conn->query('SELECT NULL FROM articles');
    $num = mysqli_num_rows($count);

    if (isset($_GET['page'])) {
        $page = preg_replace("#[^0-9]#", "",$_GET["page"];
    }else{
        $page = 1;
    }

    $perpage = 5;
    $lastpage = ceil($num/$perpage);

    if ($page < 1) {
        $page = 1;
    }elseif ($page > $lastpage) {
        $page = $lastpage;
    }
    $limit = "LIMIT".($page - 1)*$perpage.",$perpage";
    $query = $conn->query("SELECT article_id FROM articles ORDER BY article_id DESC '$limit'");
    if(!$query ) {
       die('Could not get data: ' . mysqli_error($query));
    }
    if ($lastpage != 1) {

        if ($page != $lastpage) {
            $next = $page + 1;
            $pagination.='<a href="dbhelper.php?page='.$next.'">NEXT</a>';
        }
        if ($page != 1) {
            $prev = $page - 1;
            $pagination.='<a href="dbhelper.php?page='.$prev.'">PREV</a>';
        }
    }
    while ($row=mysqli_fetch_array($query)) {
        $output.= $row['article_id']."<hr/>";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php echo $output;?>
<?php echo $pagination;?>
</body>
</html>