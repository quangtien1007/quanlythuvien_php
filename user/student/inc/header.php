<?php
include 'inc/connection.php';
$not = "";
$res = mysqli_query($link, "select * from message where rusername='$_SESSION[student]' && read1='n'");
$not = mysqli_num_rows($res);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Thư viện sách</title>
	<link rel="stylesheet" href="inc/css/bootstrap.min.css">
	<link rel="stylesheet" href="inc/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="inc/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="inc/css/datatables.min.css">
	<link rel="stylesheet" href="inc/css/pro1.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">

</head>

<body>
	<div class="main-content">
		<div class="wrapper">
			<div class="left-sidebar">
				<div class="p-title">
					<h3><a href=""><i class="fas fa-book"></i><span>lms</span></a></h3>
				</div>
				<div class="gap-40"></div>
				<div class="profile">
					<div class="profile-pic">
						<?php
						$res = mysqli_query($link, "select * from std_registration where username='" . $_SESSION['student'] . "'");
						while ($row = mysqli_fetch_array($res)) {
						?><img src="<?php echo $row["photo"]; ?> " height="" width="" alt="something wrong" class="rounded-circle"></a> <?php
																																	}
																																		?>
					</div>
					<div class="profile-info text-center">
						<span>Welcome!</span>
						<h2><?php echo $_SESSION["student"]; ?></h2>
					</div>
				</div>
				<div class="gap-30"></div>
				<div class="sidebar-menu">
					<h3>Tổng quan</h3>
					<div class="border"></div>
					<ul>
						<li class="menu <?php if ($page == 'home') {
											echo 'active';
										} ?>">
							<a href="dashboard.php"><i class="fas fa-home"></i>Bảng điều khiển</a>
						</li>
						<li class="menu menu-toggle1">
							<a href="#"><i class="fas fa-id-card"></i>thông tin cá nhân <span class="fa fa-chevron-down"></span></a>
							<ul class="menus1">
								<li><a href="changepass.php">đổi mật khẩu</a></li>
								<li><a href="profile.php">thông tin</a></li>
								<!--                                <li><a href="notifications.php">Messages</a></li>-->
							</ul>
						</li>
						<li class="menu <?php if ($page == 'ibook') {
											echo 'active';
										} ?>">
							<a href="my-issued-books.php"><i class="fas fa-book"></i>sách đã thuê</a>
						</li>
						<li class="menu <?php if ($page == 'books') {
											echo 'active';
										} ?>">
							<a href="books.php"><i class="fas fa-book"></i>sách</a>
						</li>
						<li class="menu <?php if ($page == 'rbook') {
											echo 'active';
										} ?>">
							<a href="request-book.php"><i class="fas fa-book"></i>yêu cầu thuê sách</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="content">
				<div class="inner">
					<div class="heading text-center">
						<h3>Thư viện sách online</h3>
					</div>
					<div class="header-profile text-right">
						<ul>
							<li class="icon">
								<a href="notifications.php"><i class="fas fa-bell"></i></a>
								<span class="count" onclick="window.location='notifications.php'"><b><?php echo $not; ?></b></span>

							</li>
							<li class="dropdown">
								<?php
								$res = mysqli_query($link, "select * from std_registration where username='" . $_SESSION['student'] . "'");
								while ($row = mysqli_fetch_array($res)) {
								?><a href="" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $row["photo"]; ?>" alt=""><span><?php echo $_SESSION["student"]; ?></span></a> <?php
																																															}
																																																?>
								<ul class="dropdown-menu">
									<li class="user-header text-center">
										<?php
										$res = mysqli_query($link, "select * from std_registration where username='" . $_SESSION['student'] . "'");
										while ($row = mysqli_fetch_array($res)) {
										?><img src="<?php echo $row["photo"]; ?>" alt=""> <?php
																						}
																							?>
										<p><?php echo $_SESSION["student"]; ?> - Student</p>
									</li>
									<li class="user-footer">
										<ul>
											<li>
												<a href="profile.php">profile</a>
											</li>
											<li>
												<a href="logout.php">logout</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>