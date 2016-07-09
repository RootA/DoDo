<?php include 'head/head.php';?>
<?php include 'head/menu.php';?>

    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>DoDoWorldに ついて</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                        <li class="active">DoDoWorldに ついて</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->   

    <section id="about-us" class="container main">
        <div class="row-fluid">
            <div class="span6">
                <h2>資格等</h2>
                <p>資格等 </p>
                <ul>
                    <li>CERTIFICATE OF INCORPORATION(法人組織認可登録)</li>
                    <li>MINISTRY OF TOURISM & WILDLIFE(観光省旅行業登録)</li>
                    <li>MINISTRY OF COMMERCE AND INDUSTRY(通産省商業登録)</li>
                    <li>CITY COUNCIL OF NAIROBI(ナイロビ市議会登録)</li>
                    <li>INTERNATIONAL AIR TRANSPORT ASSOCIATION (国際航空運送協会)</li>
                    <li>KENYA ASSOCIATION OF TOUR OPERATORS(ケニヤ旅行業協会会員)</li>
                    <li>KENYA ASSOCIATION OF TRAVEL AGENTS(ケニヤ航空運送協会会員)</li>
                    <li>MEMBER OF FLYING DOCTORS SOCIETY OF AFRICA　
        （フライングドクター緊急時移送システム特別エージェント）</li>
                </ul>
                

            </div>
         <!--    <div class="span6">
                <h2>Our Skills</h2>
                <div>
                    <div class="progress"><div class="bar" style="width: 80%; text-align:left; padding-left:10px;">Wordpress</div></div>
                    <div class="progress progress-warning"><div class="bar" style="width: 70%; text-align:left; padding-left:10px;">Joomla</div></div>
                    <div class="progress progress-info"><div class="bar" style="width: 60%; text-align:left; padding-left:10px;">Drupal</div></div>
                    <div class="progress progress-danger"><div class="bar" style="width: 90%; text-align:left; padding-left:10px;">Magento</div></div>
                </div>
            </div> -->
            <div class="span6">
                <h2>チーム</h2>
                <div>
                    <img src="img/home/staff.jpg">
                </div>
            </div>
        </div>

        <hr>

        <div class="row-fluid">
        <!--     <div class="span3">
                <div class="box">
                    <p><img src="img/home/staff.jpg" alt="" ></p>
                    <h5>遠藤 San</h5>
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> 
                </div>
            </div> -->

            <h4 class="pull-right">『動物の話、食べ物の話、郷土民芸品の話など大好きな私達です』</h4>
            </div>
        </div>
        <p>&nbsp;</p>
        <p></p>
        <hr>

        <div class="row-fluid">
            <div class="span6">
                <h3>業務内容</h3>
                <p class="center">航空券予約販売、国内外旅行手配、 宿泊手配、カーハイヤー、通訳、撮影コーディネート、ガイド、リサーチ、会議・シンポジウム手配、キャンピングツアー、登山、釣り(海・川・湖・渓流)、各種スポーツ、バルーンサファリ、ウオーキングサファリ、ホームステイ、マラソン、秘境探検ツアー、ラフティング、アフリカ料理案内、ＮＧＯ訪問等以上各種手続代行(ビザ申請、許可申請、各種荷物の発送・受け取り等)</p>
            </div>
            <div class="span6">
                <h3>撮影記録</h3>
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                          撮影記録（２０１５年）
                      </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse">
                    <div class="accordion-inner">
                    <ul>
                        <li>毎日放送　　　　：チチンプイプイ『リアル世界くん』</li>
                        <li>ＮＴＶ　　　　　：自衛隊の活動</li>
                        <li>ＮＨＫ　　　　　：ためしてガッテン『ナイロビ共同水場』</li>
                    </ul>
                  </div>
              </div>
          </div>
          <div class="accordion-group">
              <div class="accordion-heading">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                     
                    </a>
                </div>
          <div id="collapseTwo" class="accordion-body collapse">
            <div class="accordion-inner">
              
          </div>
      </div>
  </div>
  <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
          
      </a>
  </div>
  <div id="collapseThree" class="accordion-body collapse">
    <div class="accordion-inner">
      
  </div>
</div>
</div>
</div>
</div>
</div>
</section>

<?php include 'head/footer.php';?>

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<!--お問い合わせ form-->
<div class="modal hide fade in" id="contactform" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4 class="text-center">お問い合わせ</h4>
    </div>
    <div class="modal-body">
        <form class="span4" action="mail.php" method="post">
            <div class="form-group">
                <input type="text" class="input-large" placeholder="Your name" name="client_name" />
                <input type="text" class="input-large" placeholder="Your email" name="client_email" />
                <textarea class="form-control span5" rows="10" name="client_message"></textarea>
            </div>
        </form>
        <button type="submit" class="btn btn-block btn-primary">SEND MESSAGE</button>
    </div>
</div>

<!--/お問い合わせ form-->