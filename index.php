<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <title>欢迎来到新恬礼品 - 记事本/电子礼品 - 上海/深圳/杭州 - iPus365</title>

    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <meta http-equiv="content-type" content="text/html;charset=gb2312" />
    <meta http-equiv="Content-Style-Type" content="text/css" />

    <meta name="description" content="广告礼品,商务礼品" />
    <meta name="keywords" content="新恬是国内一家专业的广告礼品、商务礼品供应商。我们致力于各种记事本，电子礼品，公司礼品，促销礼品的生产与销售，我们的广告礼品以其简洁使用的工业设计，优秀的制造工艺和及极具竞争力的价格赢得了广大客户的认可。在上海深圳杭州均设有销售机构，欢迎全国客户光临。" />

    <meta name="robots" content="all" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="7 days" />
    <meta name="version" content="1.0" />
    <meta name="copyright" content="" />

    <link rel="shortcut icon" href="favicon.ico" >
    <link rel="icon" href="favicon.gif" type="image/gif" >

    <!-- CSS-->
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/gallery.css" rel="stylesheet" type="text/css" />
    <!-- //CSS -->

    <!-- Javascript-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type='text/javascript' src='javascript/kriesi.js'></script>
    <script type='text/javascript' src='javascript/jquery.slidertron-0.1.js'></script>
    <script type="text/javascript">
         $(document).ready(function(){

            	//Get our elements for faster access and set overlay width
	var div = $('div.sc_menu'),
		ul = $('ul.sc_menu'),
		ulPadding = 15;

	//Get menu width
	var divWidth = div.width();
	//Remove scrollbars
	div.css({overflow: 'hidden'});
	//Find last image container
	var lastLi = ul.find('li:last-child');

	//When user move mouse over menu
	div.mousemove(function(e){
		//As images are loaded ul width increases,
		//so we recalculate it each time
		var ulWidth = lastLi[0].offsetLeft + lastLi.outerWidth() + ulPadding;
		var left = (e.pageX - div.offset().left) * (ulWidth-divWidth) / divWidth;
		div.scrollLeft(left);
	});

        });
    </script>
    <!-- Javascript-->

</head>
<!-- // head -->

<!-- Body -->
<body>

<?php
$pID=0;
include( "header.php");
?>

        <!-- Top text -->
        <div id="text_wrap">
            <div id="top_text">
            <p></p>
            </div>
        </div>
        <!-- // Top text -->

        <!-- Content wrap -->
        <div id="content_wrap">

        <!-- Top content -->
        <div id="top_content">

        <!-- Sidebar -->
        <div id="sidebar">
            <img class="bubble" src="images/from_the_blog.png" alt="fromtheblog" />
            <div class="post">
                <a class="blog" href="#">2010年度夏季画册已经备好</a>
                <p><span class="date">2010.07.08</span>
                请有需要的客户与我们上海分公司联络</p>                
            </div>
            <div class="lastpost">
                <a class="blog" href="#">网站开通</a>
                <p><span class="date">2010.02.09</span>
                新恬网站全新改版，欢迎您提出宝贵意见</p>
                <a class="blogbtn" href="#">阅读更多</a>
            </div>
        </div>
        <!-- //Sidebar -->
        <!-- Left content -->
        <div id="left_content">
                         <div id="image_frame">
							<div id="foobar">
								<div class="navigation">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="first">[ &lt;&lt; ]</a> &nbsp; <a href="#" class="previous">[ &lt; ]</a> &nbsp; <a href="#" class="next">[ &gt; ]</a> &nbsp; <a href="#" class="last">[ &gt;&gt; ]</a> </div>
								<div class="viewer">
									<div class="reel">
										<div class="slide"><a href="#"> <img src="images/prod1.jpg" alt=""> <span><h3>商务套装笔</h3> 精美的笔盒，承托出笔的高贵</span> </a> </div>
										<div class="slide"> <img src="images/prod2.jpg" alt=""> <span><h3>荧光笔</h3> 五种颜色的搭配，既美观又使用</span> </div>
										<div class="slide"> <img src="images/prod3.jpg" alt=""> <span><h3>记事本</h3> 极富质感的材质，每一本都堪称艺术</span> </div>
										<div class="slide"> <img src="images/prod4.jpg" alt=""> <span><h3>发光笔</h3> 高科技与传统技艺的完美结合</span> </div>
									</div>
								</div>
							</div>
							<div id="shadow"></div>
							<script type="text/javascript">

						$('#foobar').slidertron({
							viewerSelector:			'.viewer',
							reelSelector:			'.viewer .reel',
							slidesSelector:			'.viewer .reel .slide',
							navPreviousSelector:	'.previous',
							navNextSelector:		'.next',
							navFirstSelector:		'.first',
							navLastSelector:		'.last',
							advanceDelay:			3000
						});

					        </script>
				        </div>
        </div>
        <!-- // Left content -->

        </div>
        <!-- // Top content -->

        </div>
        <!-- // Content wrap -->

		<!-- Bottom content -->
		<div id="bottom_content">
			<div class="box_340px_left">
			    <form id="form1" name="form1" method="post" action="">
                <h3>产品搜索</h3>
				   <p>
			      <input name="search_box" type="text" class="search_box" id="search_box" size="40" maxlength="40" />
                  </p>
		      </form>
            </div>
			<div class="box_620px_right">
			    <div class="sc_menu_bar"></div>
                <div class="sc_menu">
                	<ul class="sc_menu">

                	    <li><a href="#"><img src="images/obj1.jpg" /><span>SP1101</span></a></li>
                	    <li><a href="#"><img src="images/obj2.jpg" /><span>SP1101</span></a></li>
                	    <li><a href="#"><img src="images/obj3.jpg" /><span>SP1101</span></a></li>
                	    <li><a href="#"><img src="images/obj4.jpg" /><span>SP1101</span></a></li>
                	    <li><a href="#"><img src="images/obj5.jpg" /><span>SP1101</span></a></li>
                	    <li><a href="#"><img src="images/obj6.jpg" /><span>SP1101</span></a></li>
                	    <li><a href="#"><img src="images/obj7.jpg" /><span>SP1101</span></a></li>
                	    <li><a href="#"><img src="images/obj1.jpg" /><span>SP1101</span></a></li>
                	    <li><a href="#"><img src="images/obj2.jpg" /><span>SP1101</span></a></li>

                	</ul>
                </div>
            </div>
		</div>
		<!-- // Bottom content -->

<?php
readfile("footer.php");
?>

</body>
<!-- // Body -->

</html>
