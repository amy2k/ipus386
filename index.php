<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <title>��ӭ����������Ʒ - ���±�/������Ʒ - �Ϻ�/����/���� - iPus365</title>

    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <meta http-equiv="content-type" content="text/html;charset=gb2312" />
    <meta http-equiv="Content-Style-Type" content="text/css" />

    <meta name="description" content="�����Ʒ,������Ʒ" />
    <meta name="keywords" content="�����ǹ���һ��רҵ�Ĺ����Ʒ��������Ʒ��Ӧ�̡����������ڸ��ּ��±���������Ʒ����˾��Ʒ��������Ʒ�����������ۣ����ǵĹ����Ʒ������ʹ�õĹ�ҵ��ƣ���������칤�պͼ����߾������ļ۸�Ӯ���˹��ͻ����Ͽɡ����Ϻ����ں��ݾ��������ۻ�������ӭȫ���ͻ����١�" />

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
                <a class="blog" href="#">2010����ļ������Ѿ�����</a>
                <p><span class="date">2010.07.08</span>
                ������Ҫ�Ŀͻ��������Ϻ��ֹ�˾����</p>                
            </div>
            <div class="lastpost">
                <a class="blog" href="#">��վ��ͨ</a>
                <p><span class="date">2010.02.09</span>
                ������վȫ�¸İ棬��ӭ������������</p>
                <a class="blogbtn" href="#">�Ķ�����</a>
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
										<div class="slide"><a href="#"> <img src="images/prod1.jpg" alt=""> <span><h3>������װ��</h3> �����ıʺУ����г��ʵĸ߹�</span> </a> </div>
										<div class="slide"> <img src="images/prod2.jpg" alt=""> <span><h3>ӫ���</h3> ������ɫ�Ĵ��䣬��������ʹ��</span> </div>
										<div class="slide"> <img src="images/prod3.jpg" alt=""> <span><h3>���±�</h3> �����ʸеĲ��ʣ�ÿһ������������</span> </div>
										<div class="slide"> <img src="images/prod4.jpg" alt=""> <span><h3>�����</h3> �߿Ƽ��봫ͳ���յ��������</span> </div>
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
                <h3>��Ʒ����</h3>
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
