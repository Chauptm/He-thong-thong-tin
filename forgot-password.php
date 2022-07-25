<?php
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(isset($_POST['submit50'])){
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$newpassword=md5($_POST['newpassword']);
		$sql ="SELECT EmailId FROM tblusers WHERE EmailId=:email and MobileNumber=:mobile";
		$query= $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
		$query-> execute();
		$results = $query -> fetchAll(PDO::FETCH_OBJ);
		if($query -> rowCount() > 0){
			$con="update tblusers set Password=:newpassword where EmailId=:email and MobileNumber=:mobile";
			$chngpwd1 = $dbh->prepare($con);
			$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
			$chngpwd1-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
			$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
			$chngpwd1->execute();
			$msg="Thay đổi mật khẩu thành công";
		}else {
			$error="Email hoặc số điện thoại không đúng";	
		}
	}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Quên mật khẩu</title>
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

		<script type="text/javascript">
			function valid(){
				if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value){
					alert("Mật khẩu mới và xác thực mật khẩu không giống nhau !!");
					document.chngpwd.confirmpassword.focus();
					return false;
				}
				return true;
			}
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
		<div class="top-header">
		<?php include('includes/header.php');?>
		<div class="banner-1 ">
			<div class="container">
				<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Quản lý tour du lịch trong nước</h1>
			</div>
		</div>
		<!--- /banner-1 ---->
		<!--- privacy ---->
		<div class="privacy">
			<div class="container">
				<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Lấy lại mật khẩu</h3>
				<form name="chngpwd" method="post" onSubmit="return valid();">
				<?php if($error){?><div class="errorWrap"><strong>Thất bại</strong>:<?php echo htmlentities($error); ?> </div><?php } 
						else if($msg){?><div class="succWrap"><strong>Thành công</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
			<p style="width: 350px;">
				
					<b>Email</b>  <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="">
			</p> 

			<p style="width: 350px;">
				
					<b>Số điện thoại</b>  <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Số điện thoại" required="">
			</p> 

		<p style="width: 350px;">
		<b>Mật khẩu mới</b>
		<input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="Mật khẩu" required="">
		</p>

		<p style="width: 350px;">
		<b>Xác thực lại mật khẩu</b>
			<input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Xác thực lại mật khẩu" required="">
					</p>

					<p style="width: 350px;">
		<button type="submit" name="submit50" class="btn-primary btn">Thay đổi</button>
					</p>
					</form>

				
			</div>
		</div>

		<?php include('includes/footer.php');?>

		<?php include('includes/signup.php');?>			

		<?php include('includes/signin.php');?>			

	
	</body>
</html>