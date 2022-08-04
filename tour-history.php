<?php
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(strlen($_SESSION['login'])==0){	
		header('location:index.php');
	}else{
	if(isset($_REQUEST['bkid'])){
		$bid=intval($_GET['bkid']);
		$email=$_SESSION['login'];
		$sql ="SELECT FromDate FROM tblbooking WHERE UserEmail=:email and BookingId=:bid";
		$query= $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query-> bindParam(':bid', $bid, PDO::PARAM_STR);
		$query-> execute();
		$results = $query -> fetchAll(PDO::FETCH_OBJ);
		if($query->rowCount() > 0){
			foreach($results as $result){
				$fromdate= $result->FromDate;
				$fromdate= strtotime($fromdate);
				$n = time()+ 90*60*60;
				if($n<$fromdate){
					$status=2;
					$cancelby='u';
					$sql = "UPDATE tblbooking SET status=:status,CancelledBy=:cancelby WHERE UserEmail=:email and BookingId=:bid";
					$query = $dbh->prepare($sql);
					$query -> bindParam(':status',$status, PDO::PARAM_STR);
					$query -> bindParam(':cancelby',$cancelby , PDO::PARAM_STR);
					$query-> bindParam(':email',$email, PDO::PARAM_STR);
					$query-> bindParam(':bid',$bid, PDO::PARAM_STR);
					$query -> execute();

					$msg="Hủy tour thành công";
				}else{
					$error="Hủy tour phải thực hiện trước 4 ngày tính từ ngày xuất phát";
				}
			}
		}
	}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Lịch sử book tour</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Tourism Management System In PHP" />
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
		<div class="top-header">
			<?php include('includes/header.php');?>
			<div class="banner-1 ">
				<div class="container">
					<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Quản lý tour du lịch</h1>
				</div>
			</div>

			<div class="privacy">
				<div class="container">
					<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Các tour đã book</h3>
					<form name="chngpwd" method="post" onSubmit="return valid();">
					<?php if($error){?><div class="errorWrap"><strong>Thất bại</strong>:<?php echo htmlentities($error); ?> </div><?php } 
							else if($msg){?><div class="succWrap"><strong>Thành công</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
				<p>
				<table border="1" width="100%">
					<tr align="center">
						<th>#</th>
						<th>Booking Id</th>
						<th>Tour du lịch</th>	
						<th>Tổng tiền</th>
						<th>Comment</th>
						<th>Trạng thái</th>
						<th>Ngày book</th>
						<th>Hủy chuyến</th>
					</tr>
				<?php 

					$uemail=$_SESSION['login'];;
					$sql = "SELECT tblbooking.BookingId as bookid,tblbooking.PackageId as pkgid,tbltourpackages.PackageName as packagename,tblbooking.FromDate as fromdate,tblbooking.ToDate as todate,tblbooking.Adults as adults, tblbooking.Childs as childs,tblbooking.Comment as comment,tblbooking.status as status,tblbooking.RegDate as regdate,tblbooking.CancelledBy as cancelby,tblbooking.UpdationDate as upddate, tblbooking.Price as price from tblbooking join tbltourpackages on tbltourpackages.PackageId=tblbooking.PackageId where UserEmail=:uemail";
					$query = $dbh->prepare($sql);
					$query -> bindParam(':uemail', $uemail, PDO::PARAM_STR);
					$query->execute();
					$results=$query->fetchAll(PDO::FETCH_OBJ);
					$cnt=1;
					if($query->rowCount() > 0){
					foreach($results as $result){	?>
					<tr align="center">
						<td><?php echo htmlentities($cnt);?></td>
						<td>#BK<?php echo htmlentities($result->bookid);?></td>
						<td><a href="comment.php?pkgid=<?php echo htmlentities($result->pkgid);?>&bkid=<?php echo htmlentities($result->bookid);?>"><?php echo htmlentities($result->packagename);?></a></td>
						<td><?php echo htmlentities($result->price);?></td>
						<td><?php echo htmlentities($result->comment);?></td>
						<td><?php if($result->status==0){
							echo "Đang chờ duyệt";
							}if($result->status==1){
								echo "Đã duyệt";
							}if($result->status==2 and  $result->cancelby=='u'){
								echo "Đã hủy bởi bạn lúc " .$result->upddate;
							}if($result->status==2 and $result->cancelby=='a'){
								echo "Đã hủy bởi admin lúc " .$result->upddate;
							}?>
						</td>
						<td><?php echo htmlentities($result->regdate);?></td>
						<?php if($result->status==2){
							?><td>Đã hủy</td>
						<?php } elseif ($result->status==1) {?>
							<td>Đặt thành công</td>
						<?php } else {?>
						<td><a href="tour-history.php?bkid=<?php echo htmlentities($result->bookid);?>" onclick="return confirm('Bạn chắc chắn muốn hủy tour không?')" >Hủy</a></td>
						<?php }?>
						</tr>
						<?php $cnt=$cnt+1; }} ?>
						</table>
					</p>
				</form>							
		</div>
	</div>
	<?php include('includes/footer.php');?>

	<?php include('includes/signup.php');?>			
	
	<?php include('includes/signin.php');?>			
	
	</body>
</html>
<?php } ?>