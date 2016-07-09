<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8" /> 
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="Content-Language" content="ja" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home | DodoWorld</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76402951-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
var rpp = <?php echo $rpp;?>;
var last = <?php echo $last;?>;
    function request_page(pn){
        var results_box= document.getElementById("results_box");
        var pagination_controls = document.getElementById("pagination_controls");

        results_box.innerHTML  = "Loading Results...";//u==you can add gif animation
        var hr = new XMLHttpRequest();
        hr.open("POST","pagination.php",true);
        hr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        hr.onreadystatechange = function(){
            if (hr.readyState == 4 && hr.status == 200) {
                var dataArray = hr.responseText.split("||");
                var html_output = "";
                for (var i = 0; i = dataArray.length - 1;i++) {
                    var itemArray = dataArray[i].split("|"); // ID/Title/date/data
                    html_output += "ID : " +itemArray[0]+" - Articles From <b>"+itemArray[1]+"<br><hr>";
                }
                results_box.innerHTML = html_output;
            }
        }
        hr.send("rpp="+rpp+"&last="+last+"&pn="+pn);

        //change the pagination controls
        var paginationCtrls = "";
        if (last != 1) {
            //only if there is more than one page
            if (pn > 1) {
                paginationCtrls += '<button onclick="request_page('+(pn-1)+')">&alt;</button>';
            }
            paginationCtrls += '&nbsp; &nbsp; <b>Page '+pn+' of '+last+' </b> &nbsp; &nbsp;';
            if (pn != last) {
                paginationCtrls += '<button onclick="request_page('+(pn+1)+')">&gt;</button>';
            }

        }
        pagination_controls.innerHTML = paginationCtrls;
    }
</script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<style type="text/css">
    #logo{
        width: 30%;
    }
    i .icon-medium{
        background-color: blue;
    }
    #menu img{
        height: 65px;
        width: 85px;
    }
    .title{
        margin-top: 5%;
        margin-bottom: 5%;
    }
     .no-margin{
        margin-top: 5%;
        margin-bottom: 5%;
    }
    #content
{
    width: 900px;
    margin: 0 auto;
    font-family:Arial, Helvetica, sans-serif;
}
p{
    margin-top: 1px;
}
.page
{
float: right;
margin: 0;
padding: 0;
}
.page li
{
    list-style: none;
    display:inline-block;
}
.page li a, .current
{
display: block;
padding: 5px;
text-decoration: none;
color: #8A8A8A;
}
.current
{
    font-weight:bold;
    color: #000;
}
.button
{
padding: 5px 15px;
text-decoration: none;
background: #333;
color: #F3F3F3;
font-size: 13PX;
border-radius: 2PX;
margin: 0 4PX;
display: block;
float: left;
}
</style>
<body>
