<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<title>NOVA - PORTFOLIO</title>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		<meta http-equiv="content-type" content="text/html;charset=gb2312" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="robots" content="all" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="7 days" />
		<meta name="version" content="1.0" />
		<meta name="copyright" content="" />
		<link rel="shortcut icon" href="favicon.ico" />

		<!-- CSS-->
		<link href="css/reset.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<!-- //CSS -->

		<!-- Javascript-->
		<script type='text/javascript' src='javascript/jquery-1.2.3.min.js'></script>
		<script type='text/javascript' src='javascript/kriesi.js'></script>
		<script type="text/javascript">
			$(document).ready(function(){  
			$("ul.display").addClass("thumb_view");
    $("a.switch_thumb").toggle(
	function () {
        $(this).addClass("swap");
        $("ul.display").fadeOut("fast", function() {
            $(this).fadeIn("fast").removeClass("thumb_view");
        });
    },
	function(){
        $(this).removeClass("swap");
        $("ul.display").fadeOut("fast", function() {
            $(this).fadeIn("fast").addClass("thumb_view");
        });
    }); 						    
			                 
				//Caption Sliding (Partially Hidden to Visible)
				$('.portfolio_item').hover(function(){
					$(".boxcaption", this).stop().animate({top:'80px'},{queue:false,duration:160});
				}, function() {
					$(".boxcaption", this).stop().animate({top:'100px'},{queue:false,duration:160});
				});
			});

		</script>
		<!-- Javascript-->

		</head>
		<!-- // head -->

		<!-- Body -->
		<body>

<!-- Header -->
<?php
$pID=1;
include( "header.php");
?>
<!-- // Header --> 

<!-- Top text -->
<div id="text_wrap">
    <div id="top_text_sub">
        <div class="title">
            <h1>全部产品</h1>
        </div>
        <div class="description">
            <p>和您一起创造价值</p>
        </div>
        <a href="#" class="switch_thumb">Switch Display</a>
    </div>
</div>
<!-- // Top text --> 

<!-- Portfolio content -->
<div id="portfolio_content_wrap">
          <div id="portfolio_content">
    <ul  class="display">
              <li>
        <div class="content_block">
                  <div class="portfolio_item">
            <div class="product_img"> 
                <a href="images/big_portfolio_1.gif" rel="lightbox"><img alt="big_img_1" src="images/products/box.jpg"/></a>
                <div class="boxcaption">&nbsp;SP1100 </div>
            </div>
            <img src="images/portfolio_shadow.jpg"/> </div>
                  <h3>SP1100</h3>
                  <p>产品描述</p>
        </div>
      </li>
              <li>
        <div class="content_block">
                  <div class="portfolio_item">
            <div class="product_img"> <a href="images/big_portfolio_1.gif" rel="lightbox"><img alt="big_img_1" src="images/products/box.jpg"/></a>
                      <div class="boxcaption"> SP1100 </div>
                    </div>
            <img src="images/portfolio_shadow.jpg"/> </div>
                  <h3>SP1100</h3>
                  <p>产品描述</p>
                </div>
      </li>
              <li>
        <div class="content_block">
                  <div class="portfolio_item">
            <div class="product_img"> <a href="images/big_portfolio_1.gif" rel="lightbox"><img alt="big_img_1" src="images/products/box.jpg"/></a>
                      <div class="boxcaption"> SP1100 </div>
                    </div>
            <img src="images/portfolio_shadow.jpg"/> </div>
                  <h3>SP1100</h3>
                  <p>产品描述</p>
                </div>
      </li>
              <li>
        <div class="content_block">
                  <div class="portfolio_item">
            <div class="product_img"> <a href="images/big_portfolio_1.gif" rel="lightbox"><img alt="big_img_1" src="images/products/box.jpg"/></a>
                      <div class="boxcaption"> SP1100 </div>
                    </div>
            <img src="images/portfolio_shadow.jpg"/> </div>
                  <h3>SP1100</h3>
                  <p>产品描述</p>
                </div>
      </li>
            </ul>
  </div>
        </div>
<!-- //Portfolio content -->

<?php
readfile("footer.php");
?>
</body>
		<!-- // Body -->

</html>
