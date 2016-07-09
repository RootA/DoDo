<?php include 'head/head.php';?>
<?php include 'head/menu.php';?>

    <section class="no-margin">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6708.416898949613!2d36.80537183272324!3d-1.2632914989343975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1460197795069" width="100%" height="200" frameborder="0" style="border:0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </section>

    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
                <h4>サファリツアー、ケニア旅行、撮影コーディネートなど、ケニアのことなら何でもお気軽にお問い合わせ下さい。 </h4>
                <div class="status alert alert-success" style="display: none"></div>
                <h5>＊必須項目</h5>
                <form action="mailtest.php" method="post"   class="contact-form" name="" id="myform" >
                  <div class="row-fluid">
                    <div class="span5">
                     <label>件名</label>
                        <input type="text" class="input-block-level form-control" placeholder="Your First Name" id="lname" name="lname">
                        <label>お名前＊</label>
                        <input type="text" class="input-block-level form-control" required="required" placeholder="Your First Name" id="fname" name="fname">
                         <label>メールアドレス＊</label>
                        <input type="email" class="input-block-level form-control" required="required" placeholder="" id="email" name="email">
                        <label>人数</label>
                        <label>大人</label>
                        <input type="number" class="input-block-level form-control" required="required" placeholder="0" id="adult" name="adult">
                        <label>お子様</label>
                        <input type="number" class="input-block-level form-control" required="required" placeholder="0" id="child" name="child">
                        <label>その他  </label>
                        <textarea placeholder="ご希望・ご質問等ご記入下さい" id="other" required="required" class="input-block-level form-control" rows="8" name="other"></textarea>
                    </div>
                    <div class="span7">
                        <label>旅行予定の時期 (MM/DD/YYYY)</label>
                        <input type="date" class="input-block-level form-control" required="required" placeholder="MM/DD/YYYY" id="start" name="start">
                        <label>日から(MM/DD/YYYY)</label>
                        <input type="date" class="input-block-level form-control" required="required" placeholder="MM/DD/YYYY" id="end" name="end">
                        <label>ケニア滞在期間</label>
                        <input type="text" class="input-block-level form-control" required="required" placeholder="日間" id="duration" name="duration">
                        <label>予定フライトスケジュール：（ケニア発着の時間によって日程内容が変わります）</label>
                        <textarea placeholder="例：ナイロビ着 ：8月10日 QR532便 12：50着"  required="required" class=" form-controlinput-block-level" rows="8" id="flight" name="flight"></textarea>
                        <div class="row-fluid">
                            <p></p>
                        <div class="form-group">
                          <label for="sel1">部屋数:</label>
                          <select class="form-control" id="room" name="room">
                            <option value="シングル">シングル</option>
                            <option value="ツイン">ツイン</option>
                            <option value="ダブル">ダブル</option>
                            <option value="トリプル ">トリプル </option>
                          </select>
                        </div>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-large pull-right" id="send" name="send"value="メッセージを送る" >
            </form>
        </div>

        <div class="span3">
            <!-- <h4>住所</h4> -->
            <p></p>
            <p>住所
                <i class="icon-map-marker pull-left"></i> <br>
                <p>DODOWORLD TOURS AND TRAVEL <br>
                1st Floor, Unga House,WestLands  <br>
                P.O. BOX 837-00606, NAIROBI, KENYA</p>
            </p>
            <p>メール
                <i class="icon-envelope"></i> &nbsp;info@dodoworld.com
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;+254 721 381 298 <br>
                <i class="icon-phone"></i> &nbsp;+254 20 445 0015
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp;http://www.dodoworld.com
            </p>
        </div>

    </div>

</section>
<?php include 'head/footer.php';?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#send").click(function(){
        var name = $("#lname").val();
        var email = $("#email").val();
        var fname = $("#fname").val();
        var adult = $("#adult   ").val();
        var child = $("#child").val();
        var other = $("#other").val();
        var fromday = $("#start").val();
        var till = $("#end").val();
        var duration = $("#duration").val();
        var flight = $("#flight").val();
        var room = $("#room option:selected").text();

        // Returns successful data submission message when the entered information is stored in database.
        var dataString = 'lname='+ name + '&email='+ email + '&fname='+ fname + '&adult='+ adult + '&child='+ child + '&other='+ other +'&start='+ fromday + '&end='+ till + '&duration='+ duration + '&flight='+ flight + '&room='+ room;
        if(name==''||email==''||fname==''||adult=='')
        {
            alert("Please Fill All Fields");
        }
        else
            {
                // AJAX Code To Submit Form.
                $.ajax({
                    type: "POST",
                    url: "mailtest.php",
                    data: dataString,
                    cache: false,
                    success: function(result){
                        alert(result);
                    }
                    });
            }
        return false;
        });
});
</script>
