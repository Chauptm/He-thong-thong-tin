<?php
	session_start();
	error_reporting(0);
	include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>Hệ Thống Thông Tin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="applijewelleryion/x-javascript"> 
		addEventListener("load", function() { 
			setTimeout(hideURLbar, 0); }, false); 
			function hideURLbar(){ window.scrollTo(0,1); 
		} 
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- Custom Theme files -->
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
	<?php include('includes/header.php');?>
	<div class="banner">
		<div class="container">
			<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Quản lý tour du lịch trong nước</h1>
		</div>
	</div>


	<!--- rupes ---->
	<div class="container">
		<div class="rupes">
			<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<div class="rup-left">
					<a href="offers.html"><i class="fa fa-usd"></i></a>
				</div>
				<div class="rup-rgt">
					<h3>Giảm đến 50%</h3>
					<h4><a href="offers.html">Du lịch thông minh</a></h4>
					
				</div>
					<div class="clearfix"></div>
			</div>
			<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<div class="rup-left">
					<a href="offers.html"><i class="fa fa-h-square"></i></a>
				</div>
				<div class="rup-rgt">
					<h3>Tìm kiếm thời gian</h3>
					<h4><a href="offers.html">Chất lượng tốt nhất</a></h4>
					
				</div>
					<div class="clearfix"></div>
			</div>
			<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<div class="rup-left">
					<a href="offers.html"><i class="fa fa-mobile"></i></a>
				</div>
				<div class="rup-rgt">
					<h3>Thanh toán linh hoạt</h3>
					<h4><a href="offers.html">Hỗ trợ tận tình</a></h4>
				
				</div>
					<div class="clearfix"></div>
			</div>
		
		</div>
	</div>
	<!--- /rupes ---->

	<!---holiday---->
	<div class="container">
		<div class="holiday">	
		<h3>Tour du lịch trong nước</h3>
						
	<?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
	$query = $dbh->prepare($sql);
	$query->execute();
	$results=$query->fetchAll(PDO::FETCH_OBJ);
	$cnt=1;
	if($query->rowCount() > 0)
	{
	foreach($results as $result)
	{	?>
				<div class="rom-btm">
					<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
						<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
					</div>
					<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
						<h4>Tour: <?php echo htmlentities($result->PackageName);?></h4>
						<h6>Loại tour: <?php echo htmlentities($result->PackageType);?></h6>
						<p><b>Địa điểm du lịch :</b> <?php echo htmlentities($result->PackageLocation);?></p>
						<p><b>Đặc điểm</b> <?php echo htmlentities($result->PackageFetures);?></p>
					</div>
					<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
						<h5><?php echo htmlentities($result->PackagePrice);?>VND/Người/Ngày</h5>
						<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Xem chi tiết</a>
					</div>
					<div class="clearfix"></div>
				</div>

	<?php }} ?>
				
			
	<div><a href="package-list.php" class="view">Xem thêm tuor</a></div>
	</div>
				<div class="clearfix"></div>
		</div>

	<?php include('includes/footer.php');?>
	<!-- signup -->
	<?php include('includes/signup.php');?>			
	<!-- //signu -->
	<!-- signin -->
	<?php include('includes/signin.php');?>			
	<!-- //signin -->
	</body>
</html>