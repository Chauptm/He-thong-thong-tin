<div class="sidebar-menu">
	<header class="logo1">
		<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
	</header>
	<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
		<div class="menu">
			<ul id="menu" >
				<li><a href="dashboard.php"><i class="fa fa-tachometer"></i> <span>Tổng quan</span><div class="clearfix"></div></a></li>
				<?php
					if($_SESSION['role']==1){?>
						<li id="menu-academico" ><a href="manage-users.php"><i class="fa fa-users" aria-hidden="true"></i><span>Quản lý người dùng</span><div class="clearfix"></div></a></li>
						<li><a href="manage-pages.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>  <span>Quản lý các trang</span><div class="clearfix"></div></a></li>
					<?php } elseif($_SESSION['role']==2){ ?>
						<li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Quản lý tour</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
							<ul id="menu-academico-sub" >
							<li id="menu-academico-avaliacoes" ><a href="create-package.php">Tạo tour</a></li>
							<li id="menu-academico-avaliacoes" ><a href="manage-packages.php">Chi tiết</a></li>
							</ul>
						</li>
						<li><a href="manage-bookings.php"><i class="fa fa-list" aria-hidden="true"></i>  <span>Quản lý các booking</span><div class="clearfix"></div></a></li>
					<?php }else { ?>
						<li><a href="manage-checkjob.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>  <span>Check công việc</span><div class="clearfix"></div></a></li>
					<?php
					}
				?>
				
				
				
			
			</ul>
		</div>
	</div>