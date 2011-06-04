		<!-- Header -->
		<div id="header">

			<!-- Header content -->
			<div id="header_content">
				
				<!-- Logo -->
				<div id="logo"><img src="images/logo1s.png" width="100" height="22" alt="logo" /></div>
				<!-- // Logo -->

				<!-- Navigation -->
				<ul id="nav">
					<li><a <?php if ($pID == 0) echo 'class="on"'; ?> href="index.php">首页</a></li>
					<li><a <?php if ($pID == 1) echo 'class="on"'; ?> href="portfolio.php">产品&amp;服务</a>
								<ul>
								<li><a href="product.php">记事本</a></li>
								<li><a href="product.php">电子礼品</a></li>
								<li><a href="product.php">商务礼品</a>
									<ul>
									<li><a href="#">玻璃工艺品</a></li>
									<li><a href="#">塑胶工艺品</a></li>
									<li><a href="#">金属工艺品</a></li>
									</ul>
								</li>
					  </ul>
					<li><a <?php if ($pID == 3) echo 'class="on"'; ?> href="blog.php">关于我们</a>
								<ul>
								<li><a href="#">公司信息</a></li>
								<li><a href="#">公司新闻</a></li>
								<li><a href="#">联系我们</a></li>
								</ul>
	        </li>
					<li class="last"><a <?php if ($pID == 4) echo 'class="on"'; ?> href="contact.php">留言</a></li>
				</ul>
				<!-- // Navigation -->
			
			</div>
			<!-- // Header content -->
		
		</div>
		<!-- // Header -->