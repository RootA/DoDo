
<?php include('head/head.php');?> 
<?php include('head/menu.php');?>

<?php     
    session_start();
    $article = $_GET['article'];
    $_SESSION['article_id'] = $article;
    $rt = $_SESSION['article_id'];
    if (isset($_SESSION['article_id'])) {
       
    }else{
        echo "<script>alert('No Session SET');</script>";
    }
?>
    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1><img src="img/hitorigoto/title.png" style="height: 50px"></h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                        <li><a href="blog.php">ブログ </a> <span class="divider">/</span></li>
                        <li class="active">ブログ Item</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title --> 

    <section id="about-us" class="container">
        <div class="row-fluid">
            <div class="span8">
                <div class="blog">
                    <div class="blog-item well">
<?php
include 'config/dbconfig.php';
    $sql = "SELECT * FROM articles WHERE article_id = '$rt'";
    $run = $conn->query($sql);
    for ($data=0; $data=mysqli_fetch_array($run); $data++) {
            $title=$data['title'];
            $author=$data['author'];
            $content = $data['content'];
            $date = $data['date'];
    }

?>
                        <a href="#"><h2><?php echo stripcslashes($title);?></h2></a>
                        <div class="blog-meta clearfix">
                            <p class="pull-left">
                              <i class="icon-user"></i> by <a href="#"><?php echo stripcslashes($author);?></a> | <i class="icon-folder-close"></i> Category <a href="#">Bootstrap</a> | <i class="icon-calendar"></i> <?php echo $date;?>
                          </p>
                          <p class="pull-right"><i class="icon-comment pull"></i> <a href="#comments">3 Comments</a></p>
                      </div>
                      <p><img src="images/sample/blog1.jpg" width="100%" alt="" /></p>
                      <p><?php echo stripcslashes($content);?></p>                     
<!-- 
                    <div class="user-info media box">
                        <div class="pull-left">
                            <img src="images/sample/avatar.jpg" alt="" />
                        </div>
                        <div class="media-body">
                            <h5 style="margin-top: 0">John Doe</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</p>
                            <div class="author-meta">
                                <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                            </div>
                        </div>
                    </div> -->

                    <p>&nbsp;</p>
                    <div id="disqus_thread"></div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */
    /*
    var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
        var d = document, s = d.createElement('script');
        
        s.src = '//https.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                    <div id="comments" class="comments">
                        <h4>3 Comments</h4>
                        <div class="comments-list">
                            <div class="comment media">
<?php
include 'config/dbconfig.php';
    $sql = "SELECT * FROM comments WHERE article_id = '$rt'";
    $run = $conn->query($sql);
    for ($data=0; $data=mysqli_fetch_array($run); $data++) {
            $comment=$data['comment'];
            $postedby=$data['comment_by'];
            $commentdate = $data['comment_date'];



?>
                                <div class="pull-left">
                                    <img class="avatar" src="img/icon/lodge.png" alt="" />  
                                </div>

                                <div class="media-body">
                                    <strong> Posted by <a href="#"><?php echo stripcslashes($postedby);?></a></strong><br>
                                    <small><?php echo $commentdate;?></small><br>
                                    <p><?php echo stripcslashes($comment);?></p>
                                </div>
                            </div>

<?php } ?>
      <!--                       <div class="comment media">
                                <div class="pull-left">
                                    <img class="avatar" src="images/sample/cAvatar2.jpg" alt="" />     
                                </div>

                                <div class="media-body">
                                    <strong>Posted by <a href="#">Krikor</a></strong><br>
                                    <small>Thursday, 01 March 2012 15:26</small><br>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage</p>
                                </div>
                            </div> -->
                        </div>

                        <!-- Start Comment Form -->
         <!--                <div class="comment-form">
                            <h4>Leave a Comment</h4>
                            <p class="muted">Make sure you enter the (*) required information where indicated. HTML code is not allowed.</p>
                            <form  id="comment-form" action="comment.php" method="post">
                                <div class="row-fluid">
                                    <div class="span4">
                                        <input type="text" name="name" required="required" class="input-block-level form-control" placeholder="Name" required="required" />
                                    </div>
                                    <div class="span4">
                                        <input type="email" name="email" required="required" class="input-block-level form-control" placeholder="Email" required="required" />
                                    </div>
                                    <div class="span4">
                                        <input type="url" name="time" class="input-block-level form-control" placeholder="" value=<?php 
                                        $time=date("Y-m-d"); echo "$time"; ?> readonly />
                                    </div>
                                </div>
                                <textarea rows="10" name="message" id="message" required="required" class="input-block-level" placeholder="Message" required="required"></textarea>
                                <button type="submit" class="btn btn-large btn-primary" name="commented"><a href="comment.php?comment=<?php echo $rt;?>">Submit Comment</a></button>
                            </form>
                        </div> -->
                        <!-- End Comment Form -->
                    </div>

                </div>
                <!-- End Blog Item -->

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
                            $date = $data['date'];
                        
                    ?>
                    <div class="pull-left">
                        <div class="date">
                            <span class="month"><?php echo $date;?></span>
                            <!-- <span class="day">24</span> -->
                        </div>
                    </div>
                    <div class="media-body">
                        <a href="#"><h5><?php echo $title;?></h5></a>
                    </div>
                     <?php } ?> 
                </div>
<!-- 
                <div class="widget-blog-item media">
                    <div class="pull-left">
                        <div class="date">
                            <span class="month">Jun</span>
                            <span class="day">24</span>
                        </div>
                    </div>
                    <div class="media-body">
                        <a href="#"><h5>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</h5></a>
                    </div>
                </div>

                <div class="widget-blog-item media">
                    <div class="pull-left">
                        <div class="date">
                            <span class="month">Jun</span>
                            <span class="day">24</span>
                        </div>
                    </div>
                    <div class="media-body">
                        <a href="#"><h5>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</h5></a>
                    </div>
                </div>
 -->
            </div>                  
        </div>  
            <!-- End Popular Posts -->        

<!--             <div class="widget">
                <h3>Blog Categories</h3>
                <div>
                    <div class="row-fluid">
                        <div class="span6">
                            <ul class="unstyled">
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Updates</a></li>
                                <li><a href="#">Tutorial</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                        </div>

                        <div class="span6">
                            <ul class="unstyled">
                                <li><a href="#">Joomla</a></li>
                                <li><a href="#">Wordpress</a></li>
                                <li><a href="#">Drupal</a></li>
                                <li><a href="#">Magento</a></li>
                                <li><a href="#">Bootstrap</a></li>
                            </ul>
                        </div>
                    </div>

                </div>                       
            </div> -->
            <!-- End Category Widget -->

<!--             <div class="widget">
                <h3>Tag Cloud</h3>
                <ul class="tag-cloud unstyled">
                    <li><a class="btn btn-mini btn-primary" href="#">CSS3</a></li>
                    <li><a class="btn btn-mini btn-primary" href="#">HTML5</a></li>
                    <li><a class="btn btn-mini btn-primary" href="#">WordPress</a></li>
                    <li><a class="btn btn-mini btn-primary" href="#">Joomla</a></li>
                    <li><a class="btn btn-mini btn-primary" href="#">Drupal</a></li>
                    <li><a class="btn btn-mini btn-primary" href="#">Bootstrap</a></li>
                    <li><a class="btn btn-mini btn-primary" href="#">jQuery</a></li>
                    <li><a class="btn btn-mini btn-primary" href="#">Tutorial</a></li>
                    <li><a class="btn btn-mini btn-primary" href="#">Update</a></li>
                </ul>
            </div>  -->
            <!-- End Tag Cloud Widget -->

   <!--          <div class="widget">
                <h3>Archive</h3>
                <ul class="archive arrow">
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                    <li><a href="#">March 2013</a></li>
                    <li><a href="#">February 2013</a></li>
                </ul>
            </div>  -->
            <!-- End Archive Widget -->   

        </aside>
    </div>

</section>

<?php include('head/footer.php');?>