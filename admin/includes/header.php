
<div class="header-main">
	<div class="logo-w3-agile">
		<?php
			if($_SESSION['role']==1){
				echo '<h1><a href="dashboard.php">Quản lý nhân sự </a></h1>';
			} elseif($_SESSION['role']==2){
				echo '<h1><a href="dashboard.php">Quản lý tour</a></h1>';
			}else {
				echo '<h1><a href="dashboard.php">Check working</a></h1>';
			}
		?>
	</div>

		
	<div class="profile_details w3l">		
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<div class="profile_img">	
							<span class="prfil-img"><img src="images/User-icon.png" alt=""> </span> 
							<div class="user-name">
								<p>Welcome</p>
								<span>Administrator</span>
							</div>
							<i class="fa fa-angle-down"></i>
							<i class="fa fa-angle-up"></i>
							<div class="clearfix"></div>	
						</div>	
					</a>
					<ul class="dropdown-menu drp-mnu">
						<li> <a href="change-password.php"><i class="fa fa-user"></i> Thông tin admin</a> </li> 
						<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Đăng xuất</a> </li>
					</ul>
				</li>
			</ul>
		</div>
		
	<div class="clearfix"> </div>	
</div>