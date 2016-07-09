<?php include('head/head.php');?> 
<?php include('head/menu.php');?>

    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>お申し込みからご旅行まで</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a> <span class="divider">/</span></li></li>
                        <li class="active">お申し込みからご旅行まで</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->

    <section id="pricing-table" class="container">
        <div class="center">
            <!-- <h2>Pellentesque habitant morbi tristique senectus et netus</h2> -->
            <h2>申込み・お支払・キャンセルのご案内</h2>
        </div>

        <div class="big-gap"></div>

        <div class="row-fluid center clearfix">
            <div class="span6">
                <ul class="plan plan3 featured">
                    <li class="plan-name">
                        <h3>申込み方法・用紙</h3>
                    </li>
                    <li class="plan-price">
                        <!-- <strong>Lorem<span class="fa fa-globe"></span></strong>  -->
                    </li>

<!--                     <li class="plan-action">
                        <a href="#" class="btn btn-transparent">Signup Now!</a>
                    </li> -->
                </ul>
            </div>
            <div class="span6">
                <ul class="plan plan1">
                    <li class="plan-name">
                        <h3>お支払・キャンセルのご案内</h3>
                    </li>
                    <li class="plan-price">
                        <!-- <strong>Lorem</strong> -->
                    </li>
<!--                     <li class="plan-action">
                        <a href="#" class="btn btn-transparent">Signup Now!</a>
                    </li> -->
                </ul>
            </div>

      
        </div>
<br>
<div class="row-fluid center clearfix">
<hr>
<img src="img/order/Picture1.png">
    <h3>＜日本からのご送金について＞</h3>
    <p>弊社はケニア現地法人のため、現地の銀行口座へのご送金をお願いしております。
USドルにてのお支払いとなり、ご送金は、最寄の銀行の海外送金カウンターにて、その銀行の為替レートで日本円に換算されます。
そのご料金を銀行にお支払い頂くくことで、送金手続きが完了となります。
 大手銀行の場合には数日で弊社銀行口座にて入金の確認が出来ますが、ゆうちょをご利用の場合には仲介銀行を経由致しますので、入金確認に1週間以上
かかることがございます。なお、ご送金にかかる手数料はお客様にてご負担いただいておりますので、予めご了承ください。</p>
<hr>
<h3>＜キャンセルについて＞</h3>
<p>ご旅行のキャンセルは、お客様のご日程やご利用になるロッジによって詳細が変わりますが、ピークシーズンの場合には、ご旅行開始日から起算して2ヶ月以上前からキャンセルポリシーが適用されることもございます。お申込み時にご確認ください。航空券は航空券の種類、航空会社により、またケニア国外のご旅行手配の場合には予約条件が異なる場合があります。なお、払い戻しの際にはお客様の日本の銀行口座へのお振込みとなります。その際の手数料はお客様のご負担とさせていただいております。ご予約時には20％のデポジットが発生し、こちらは払い戻し致しかねますのでご了承ください。</p>
</div>

        <p>&nbsp;</p>
    </section>


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
<?php include 'head/footer.php'?>