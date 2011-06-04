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
        <link rel="shortcut icon" href="favicon.ico" />

        <!-- CSS-->
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.1.css" media="screen" />
        <link href="css/jpaginate.css" rel="stylesheet" type="text/css" />
        <!-- //CSS -->

        <!-- Javascript-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type='text/javascript' src='javascript/kriesi.js'></script>
        <script type="text/javascript" src="javascript/jquery.mousewheel-3.0.2.pack.js"></script>
        <script type="text/javascript" src="javascript/jquery.fancybox-1.3.1.pack.js"></script>
        <script type="text/javascript" src="javascript/paginate.js"></script>
        
        <script type="text/javascript">
        var $overlay_wrapper;
        var $overlay_panel;
        
        function show_overlay() {
            if ( !$overlay_wrapper ) append_overlay();
            $overlay_wrapper.fadeIn(700);
        }
        
        function hide_overlay() {
            $overlay_wrapper.fadeOut(500);
        }
        
        function append_overlay() {
            $overlay_wrapper = $('<div id="overlay"></div>').appendTo( $('#portfolio_content_wrap') );
            $overlay_panel = $('<div id="overlay-panel"></div>').appendTo( $overlay_wrapper );
        
            $overlay_panel.html( "<img src='images/2-0.gif'/>" );
        }
                    
        $(document).ready(function()
        {
            $("ul.display").addClass("thumb_view");
            $("a.switch_thumb").toggle(
                function ()
                {
                    $(this).addClass("swap");
                    $("ul.display").fadeOut("fast", function() {
                        $(this).fadeIn("fast").removeClass("thumb_view");
                    });
                    $('.portfolio_item').unbind('mouseenter mouseleave');
                    $(".boxcaption").css("display", "none");   
                    if ($("div").data("dataready") != "yes")
                    {
                        //$(".prod_info_detail").html("<img src='images/2-0.gif'/>Loading");
                        // we gray out the product panel - portfolio_content_wrap
                        show_overlay();
                        $.get("prod_detail.php", function(data){
                            //global tmp;
                            $("div").data("dataready", "yes");
                            hide_overlay();
							var itemList = data.split("|");
							$(".prod_info_detail").each(function(i){
                                $(this).html("" + itemList[i]+"");
                            });
//                            $("<div class='prod_info_detail'>"+data+"<div>").replaceAll(".prod_info_detail");
                        });
                    }
                },
                function()
                {
                    $(this).removeClass("swap");
                    $("ul.display").fadeOut("fast", function() {
                        $(this).fadeIn("fast").addClass("thumb_view");
                    });
                    $(".boxcaption").css("display", "block"); 
                    $('.portfolio_item').hover(function(){
                        $(this).find(".boxcaption").stop().animate({top:'80px'},{queue:false,duration:160});
                    }, function() {
                        $(this).find(".boxcaption").stop().animate({top:'100px'},{queue:false,duration:160});
                    });                                     
                }
            );

            //Caption Sliding (Partially Hidden to Visible)
            $('.portfolio_item').hover(function(){
                $(this).find(".boxcaption").stop().animate({top:'80px'},{queue:false,duration:160});
            }, function() {
                $(this).find(".boxcaption").stop().animate({top:'100px'},{queue:false,duration:160});
            });

            $("#prod_paginate").paginate({
                count       : 15,
                start       : 1,
                display     : 6,
                border                  : true,
                border_color            : '#333',
                text_color              : '#fff',
                background_color        : '#333',
                border_hover_color      : '#ccc',
                text_hover_color        : '#000',
                background_hover_color  : '#fff',
                images                  : false,
                mouse                   : 'press',
                onChange                : function(page){
                                            window.location.href="#page="+page;
                                          }
            });

            $(".menu_panel").hover(function(){
                $(".menu_panel").stop().animate({left:'0px'},{queue:false,duration:300})
            },
            function(){
                $(".menu_panel").stop().animate({left:'-200px'},{queue:false,duration:160})
            });

            $(".lightbox").fancybox({
                'titlePosition' : 'inside'
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
<div id="text_wrap_prod">
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
                <a href="images/big_portfolio_1.gif" class="lightbox" ><img alt="按ESC退出" src="images/products/box.jpg"/></a>
                <div class="boxcaption">&nbsp;SP1100 </div>
            </div>
            <img src="images/portfolio_shadow.jpg"/>
            </div>
            <div class="prod_info">
                <div class="prod_info_title">
                  <h3>SP1100</h3>
                </div>
                <div class="prod_info_detail">
                  <p>产品描述</p>
             </div>
        </div>
      </li>
              <li>
        <div class="content_block">
                  <div class="portfolio_item">
            <div class="product_img"> <a href="images/big_portfolio_1.gif" class="lightbox"><img alt="big_img_1" src="images/products/box.jpg"/></a>
                      <div class="boxcaption"> SP1100 </div>
                    </div>
            <img src="images/portfolio_shadow.jpg"/> </div>
            <div class="prod_info">
                <div class="prod_info_title">
                  <h3>SP1100</h3>
                </div>
                <div class="prod_info_detail">
                  <p>产品描述</p>
             </div>
                </div>
      </li>
              <li>
        <div class="content_block">
                  <div class="portfolio_item">
            <div class="product_img"> <a href="images/big_portfolio_1.gif" class="lightbox"><img alt="big_img_1" src="images/products/box.jpg"/></a>
                      <div class="boxcaption"> SP1100 </div>
                    </div>
            <img src="images/portfolio_shadow.jpg"/> </div>
            <div class="prod_info">
                <div class="prod_info_title">
                  <h3>SP1100</h3>
                </div>
                <div class="prod_info_detail">
                  <p>产品描述</p>
             </div>
                </div>
      </li>
              <li>
        <div class="content_block">
                  <div class="portfolio_item">
            <div class="product_img"> <a href="images/big_portfolio_1.gif" class="lightbox"><img alt="big_img_1" src="images/products/box.jpg"/></a>
                      <div class="boxcaption"> SP1100 </div>
                    </div>
            <img src="images/portfolio_shadow.jpg"/> </div>
            <div class="prod_info">
                <div class="prod_info_title">
                  <h3>SP1100</h3>
                </div>
                <div class="prod_info_detail">
                  <p>产品描述</p>
             </div>
                </div>
      </li>
            </ul>
  <div class="spacer"></div>
  <div id="prod_paginate" style="width: 960px; clear: both; left: 10px">
  </div>
  <div class="spacer"></div>
  </div>    <!-- //portfolio_content -->
</div>
<!-- //Portfolio content -->
<div class="menu_panel">
    <a class="trigger" href="#"></a>
    <div>
    <p>更多筛选条件</p>
    </div>
</div>


<?php
readfile("footer.php");
?>
</body>
        <!-- // Body -->

</html>
