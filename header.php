		<!-- Header -->
		<div id="header">

			<!-- Header content -->
			<div id="header_content">
				
				<!-- Logo -->
				<div id="logo"><img src="images/logo1s.png" width="100" height="22" alt="logo" /></div>
				<!-- // Logo -->

				<!-- Navigation -->
				<ul id="nav">
					<li><a <?php if ($pID == 0) echo 'class="on"'; ?> href="index.php">��ҳ</a></li>
					<li><a <?php if ($pID == 1) echo 'class="on"'; ?> href="portfolio.php">��Ʒ&amp;����</a>
								<ul>
								<li><a href="product.php">���±�</a></li>
								<li><a href="product.php">������Ʒ</a></li>
								<li><a href="product.php">������Ʒ</a>
									<ul>
									<li><a href="#">��������Ʒ</a></li>
									<li><a href="#">�ܽ�����Ʒ</a></li>
									<li><a href="#">��������Ʒ</a></li>
									</ul>
								</li>
					  </ul>
					<li><a <?php if ($pID == 3) echo 'class="on"'; ?> href="blog.php">��������</a>
								<ul>
								<li><a href="#">��˾��Ϣ</a></li>
								<li><a href="#">��˾����</a></li>
								<li><a href="#">��ϵ����</a></li>
								</ul>
	        </li>
					<li class="last"><a <?php if ($pID == 4) echo 'class="on"'; ?> href="contact.php">����</a></li>
				</ul>
				<!-- // Navigation -->
			
			</div>
			<!-- // Header content -->
		
		</div>
		<!-- // Header -->