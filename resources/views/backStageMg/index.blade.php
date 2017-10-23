

<h1>Hello world to MeiTaotao<h1>
<!DOCTYPE html><html lang="en">
<head>
	<title>MeitaotaoAdmin</title>
	<!-- CSS And js -->
	<!-- <link style=""> -->
	<link rel='stylesheet' href="/css/app.css">
	<link rel="stylesheet" href="/css/backStageMg.css">
</head>
<body>
 <form action="{{url('from/login_validate')}}" method="POST">
 	<div>
	 	<div class="normal clearfix">
	 		<div>
			 	<label style="width: 240px">纳税识别号：</label>
			 	<input  type="text" name="pTaxs" placeholder="请输入纳税人识别号">
			</div>
		</div>
		 <div class="normal clearfix">
		 	<label style="width: 240px">美淘淘账号：</label>
		 	   <input type="text" name="account" placeholder="请输入你的美淘淘账号">
		 </div>
		 <div class="normal clearfix">
		 	<label style="width: 240px">登录密码    ：</label>
		 	<input type="password" name="password" placeholder="请输入你的密码">
		 </div>
		 <input type="submit" value="登录">
	</div>
    <?php echo csrf_field(); ?>
 </form>
</body></html>
