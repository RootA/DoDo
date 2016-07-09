<?php include('head/head.php');?> 
<?php include('head/menu.php');?>

    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1><img src="img/hitorigoto/title.png" style="height: 50px"></h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                        <li class="active">ブログ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->         

    <section id="about-us" class="container main">
        <div class="row-fluid">
            <div class="span8">
                <div class="blog">
                    <div class="blog-item well">
                    <?php
                        $query1=mysql_connect("localhost","root","onepiece");
                        mysql_set_charset("utf8",$query1);
                        mysql_select_db("Dodo",$query1);

                        $start=0;
                        $limit=5;

                        if(isset($_GET['id']))
                        {
                            $id=$_GET['id'];
                            $start=($id-1)*$limit;
                        }

                        $query=mysql_query("select * from articles LIMIT $start, $limit");

                        echo "<div>";
                        while($data=mysql_fetch_array($query))
                        {
                                                    $id = $data['article_id'];
                                                    $title = $data['title'];
                                                    $content = $data['content'];
                                                    $author = $data['author'];
                                                    $date = $data['date'];

                            echo "<a><h2>".$title."</h2></a>";
                            echo "<div class='blog-meta clearfix'>
                                        <p class='pull-left'>
                                            <i class='icon-user'></i> by <a href='#'>".$author;
                            echo "</a> | <i class='icon-folder-close'></i> | 
                                            <i class='icon-calendar'></i>" .$date."</p> </div>";
                            echo "<p>".substr($content, 0, 400)."</p>";
                            echo "<a class='btn btn-link' href='blog-item.php?article=".$id."'>続きを読む <i class='icon-angle-right'></i> ";
                            echo "</a>";
                        }
                        echo "</div>";


                        $rows=mysql_num_rows(mysql_query("select *from articles"));
                        $total=ceil($rows/$limit);

                        //  

                        echo "<div class='pagination'>
                        <ul class='page'>";
                                for($i=1;$i<=$total;$i++)
                                {
                                    if($i==$id) { echo "<li class='current'>".$i."</li>"; }
                                    
                                    else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
                                }
                        echo "</div>";
                                            ?>
                                    
                  </div>
                  <!-- End Blog Item -->



              <div class="gap"></div>
       
              <!-- Paginationa -->
 <!--              <div class="pagination">
                <ul>
                    <li><a href="#"><i class="icon-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class="icon-angle-right"></i></a></li>
                </ul>
            </div> -->
        </div>
    </div>
    <aside class="span4">
        <div class="widget search">
            <form>
                <input type="text" class="input-block-level" placeholder="Search">
            </form>
        </div>
        <!-- /.search -->

        <div class="widget ads">
            <div class="row-fluid">
                <div class="span6">
                    <a href="#"><img src="img/safari/tent.jpg" alt=""></a>
                </div>

                <div class="span6">
                    <a href="#"><img src="img/safari/zebra.jpg" alt=""></a>
                </div>
            </div>
            <p> </p>
            <div class="row-fluid">
                <div class="span6">
                    <a href="#"><img src="img/safari/pug.jpg" alt=""></a>
                </div>

                <div class="span6">
                    <a href="#"><img src="img/safari/zou.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <!-- /.ads -->

        <div class="widget widget-popular">
            <h3>Popular Posts</h3>
            <div class="widget-blog-items">
                <div class="widget-blog-item media">
                   <?php
                        include 'config/dbconfig.php';
                        $sql = 'SELECT * FROM articles ORDER BY date DESC LIMIT 6';
                        $result = $conn->query($sql);
                        for($i=0; $data=mysqli_fetch_array($result); $i++) 
                        {

                            $title = $data['title'];
                        
                    ?>

                    <div class="media-body">
                        <a href="#"><h5><?php echo $title;?></h5></a>
                    </div>
                     <?php } ?> 
                </div>
            </div>                  
        </div>  
        <!-- End Popular Posts -->        

    </aside>
</div>

</section>

<?php include 'head/footer.php';?>