<?php
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(isset($_POST['submit2'])){
		$pid=intval($_GET['pkgid']);
		$useremail=$_SESSION['login'];
		$fromdate=$_POST['fromdate'];
		$todate=$_POST['todate'];
		$adults = $_POST['adults'];
		$childs = $_POST['childs'];

		$f= strtotime($fromdate);
		$t= strtotime($todate);
		$n= time()+24*5*60*60;
		
		if ($f<$n){
			$error="Ngày book tour phải trước 6 ngày. Hãy chọn ngày khác.";
		}else if ($f>$t){
			$error ="Ngày về phải lớn hơn ngày đi. Hãy chọn ngày khác";
		}else if ($adults<0){
			$error="Số người phải lớn hơn 0";
		}else if ($childs<0){
			$error="Số người phải lớn hơn 0";
		}else{
			$comment=$_POST['comment'];
			$status=0;
			$checkjob = 0;

			$sql = "SELECT * from tbltourpackages where PackageId=:pid";
			$query = $dbh->prepare($sql);
			$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
			$query->execute();
			$results=$query->fetchAll(PDO::FETCH_OBJ);
			if($query->rowCount() > 0){
				foreach($results as $result){	
					$price = $result->PackagePrice;
					$total = $price*$adults*(($t-$f)/24/60/60+1);
					
					$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,Adults, Childs, Comment,status, checkjob, Price) VALUES(:pid,:useremail,:fromdate,:todate,:adults,:childs, :comment,:status, :checkjob, :price)";
					$query = $dbh->prepare($sql);
					$query->bindParam(':pid',$pid,PDO::PARAM_STR);
					$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
					$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
					$query->bindParam(':todate',$todate,PDO::PARAM_STR);
					$query->bindParam(':adults',$adults,PDO::PARAM_STR);
					$query->bindParam(':childs',$childs,PDO::PARAM_STR);
					$query->bindParam(':comment',$comment,PDO::PARAM_STR);
					$query->bindParam(':status',$status,PDO::PARAM_STR);
					$query->bindParam(':checkjob',$checkjob,PDO::PARAM_STR);
					$query->bindParam(':price',$total,PDO::PARAM_STR);
					$query->execute();
					$lastInsertId = $dbh->lastInsertId();
					if($lastInsertId){
						$msg="Book tour thành công";
					}else {
						$error="Book tour không thành công. Xin thử lại.";
					}
				}
			}

		}

	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Chi tiết tour</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href="css/font-awesome.css" rel="stylesheet">
		<!-- Custom Theme files -->
		<script src="js/jquery-1.12.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!--animate-->
		<script src="js/jquery-ui.js"></script>
		<script>
			$(function() {
			$( "#datepicker,#datepicker1" ).datepicker();
			});
		</script>
		<style>
			.errorWrap {
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #dd3d36;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			}
			.succWrap{
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #5cb85c;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
				box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			}
		</style>				
	</head>
	<body>
	<!-- top-header -->
		<?php include('includes/header.php');?>
		<div class="banner-3">
			<div class="container">
				<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Quản lý tour du lịch trong nước</h1>
			</div>
		</div>
		<div class="selectroom">
			<div class="container">	
				<?php if($error){?><div class="errorWrap"><strong>Book tour thất bại</strong>:<?php echo htmlentities($error); ?> </div><?php } 
						else if($msg){?><div class="succWrap"><strong>Book tour thành công</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
				<?php 
				$pid=intval($_GET['pkgid']);
				$sql = "SELECT * from tbltourpackages where PackageId=:pid";
				$query = $dbh->prepare($sql);
				$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
				$query->execute();
				$results=$query->fetchAll(PDO::FETCH_OBJ);
				$cnt=1;
				if($query->rowCount() > 0){
					foreach($results as $result){	?>

					<form name="book" method="post">
						<div class="selectroom_top">
							<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
								<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
							</div>
							<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
								<h2><?php echo htmlentities($result->PackageName);?></h2>
								<p class="dow">#PKG-<?php echo htmlentities($result->PackageId);?></p>
								<p><b>Loại tour :</b> <?php echo htmlentities($result->PackageType);?></p>
								<p><b>Địa điểm :</b> <?php echo htmlentities($result->PackageLocation);?></p>
								<p><b>Đặc điểm</b> <?php echo htmlentities($result->PackageFetures);?></p>
								<div class="ban-bottom">
									<div class="bnr-right">
										<label class="inputLabel">Ngày đi</label>
										<input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy"  name="fromdate" required="">
									</div>
									<div class="bnr-right">
										<label class="inputLabel">Ngày về</label>
										<input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy" name="todate" required="">
									</div>
								</div>
								<div class="ban-bottom">
									<div class="bnr-right"  style="margin-top: 30px;">
										<label class="inputLabel">Số người lớn</label>
										<input id="adults" type="number" name="adults" required="" style="border:none; border-bottom:1px solid rgba(0,0,0,.12);">
									</div>
									<div class="bnr-right"  style="margin-top: 30px;">
										<label class="inputLabel">Số trẻ em</label>
										<input id="childs" type="number" name="childs" required="" style="border:none; border-bottom:1px solid rgba(0,0,0,.12);">
									</div>
								</div>
							<div class="clearfix"></div>
							<div class="grand">
								<h3><?php echo htmlentities($result->PackagePrice);?> VND/Người/Ngày </h3>
							</div>
						</div>
				<h3>Chi tiết tour</h3>
				<p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails);?> </p>	
				<div class="clearfix"></div>
			</div>
			<div class="selectroom_top">
				<h2>Travels</h2>
				<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
					<ul>
						<li class="spe">
							<label class="inputLabel">Comment</label>
							<input class="special" type="text" name="comment" required="">
						</li>
						<?php if($_SESSION['login'])
						{?>
							<li class="spe" align="center">
						<button type="submit" name="submit2" class="btn-primary btn">Đặt tour</button>
							</li>
							<?php } else {?>
								<li class="sigi" align="center" style="margin-top: 1%">
								<a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" > Đặt tour</a></li>
								<?php } ?>
						<div class="clearfix"></div>
					</ul>
				</div>
				
			</div>
					</form>
				<?php }} ?>
			</div>
		</div>
		<?php include('includes/footer.php');?>
		
		<?php include('includes/signup.php');?>			
		
		<?php include('includes/signin.php');?>			
	
	
	</body>
</html>