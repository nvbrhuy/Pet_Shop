<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>ĐĂNG NHẬP ADMIN  </title>

	<link href="{{ asset('backend/css/app.css')}}" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	

		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="mt-3 font-weight-bold text-uppercase text-nowrap">ĐĂNG NHẬP ADMIN <span
                                            class="text-primary"><b>PETSHOP</b></span></h1>
							<p class="lead" style="color: red;">
								Đăng nhập vào tài khoản của bạn để tiếp tục
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">

									<div>
										<?php
										$thongbao = Session::get('thongbao');
										if($thongbao){
											echo '<div class="text-danger text-center"> '.$thongbao.' </div>';
											Session::put('thongbao', null);
										}
										?>
									</div>

									<form action="{{ URL::to('/signinDashboard') }}" method="post">

										{{ csrf_field() }}
									
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="text" name="email" placeholder="Nhập email của bạn" />
										</div>
										<div class="mb-3">
											<label class="form-label">Mật Khẩu</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Nhập mật khẩu của bạn" />
										</div>
										<div>
											<div class="form-check align-items-center">
												<input id="customControlInline" type="checkbox" class="form-check-input" value="remember-me" name="remember-me">
												<label class="form-check-label text-small" for="customControlInline">Lưu đăng nhập</label>
											</div>
										</div>
										<div class="d-grid gap-2 mt-3">
											<input class="btn btn-lg btn-primary" type="submit" value="Đăng nhập">
										</div>
									</form>
								</div>
							</div>
						</div>
				
					</div>
				</div>
			</div>
		</div>
	</main>
</body>

<script src="{{ asset('backend/js/app.js')}}"></script>

</html>