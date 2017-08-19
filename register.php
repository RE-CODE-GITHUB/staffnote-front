<?php

if(!isset($_GET["e0"])){
	$e0=0;
}else{
	$e0=$_GET["e0"];
}

if(!isset($_GET["e1"])){
	$e1=0;
}else{
	$e1=$_GET["e1"];
}

if(!isset($_GET["e2"])){
	$e2=0;
}else{
	$e2=$_GET["e2"];
}

if(!isset($_GET["e3"])){
	$e3=0;
}else{
	$e3=$_GET["e3"];
}

if(!isset($_GET["e4"])){
	$e4=0;
}else{
	$e4=$_GET["e4"];
}

if(!isset($_GET["e5"])){
	$e5=0;
}else{
	$e5=$_GET["e5"];
}

if(!isset($_GET["e6"])){
	$e6=0;
}else{
	$e6=$_GET["e6"];
}

?><!doctype html>
<php>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="noteller, ノテラー, 情報共有, 店舗, 無料">
    <meta name="description" content="カンタンに使える店舗向け無料情報共有ツール。Noteller（ノテラー）は店舗内の情報共有を効率化し、アルバイターの仕事スキルを最大化させます。">
    <meta property="og:url" content="http://noteller.com/">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Noteller[ノテラー]" />
    <meta property="og:description" content="カンタンに使える店舗向け無料情報共有ツール。Noteller（ノテラー）は店舗内の情報共有を効率化し、アルバイターの仕事スキルを最大化させます。" />
    <meta property="og:site_name" content="Noteller" />
    <meta property="og:locale" content="ja_JP" />
    <meta name="twitter:site" content="@noteller_com">
    <meta name="twitter:url" content="http://twitter.com/noteller_com">
    <meta name="twitter:title" content="Noteller[ノテラー]">
    <meta name="twitter:description" content="カンタンに使える店舗向け無料情報共有ツール。Noteller（ノテラー）は店舗内の情報共有を効率化し、アルバイターの仕事スキルを最大化させます。">
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" id="ppstyle" type="text/css" href="style.css">
    <link rel='stylesheet' href='./css/animate.css' /><link rel='stylesheet' href='./css/font-awesome.min.css'/><link rel='stylesheet' href='./css/ionicons.min.css'/>
    <script src="./js/jquery-2.1.0.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/blocs.js"></script>
    <script src='./js/jqBootstrapValidation.js'></script>
    <title>仮登録フォーム - 店舗に特化した無料情報共有ツール</title>
</head>
<body>
<!-- Main container -->
<div class="page-container">
    
<?php
include("header.php");
?>

<!-- bloc-13 -->
<div class="bloc l-bloc bgc-white" id="bloc-13">
	<div class="container bloc-md">
		<div class="row">
			<div class="col-sm-12">
				<form id="form-749" action="cgi/kariregi.php" method="post">
					<h1 class="mg-md text-center animated fadeIn">
						仮登録フォーム
					</h1>
					<div class="form-group">

						<label class="animated fadeIn">
							メールアドレス
						</label>
						<input class="form-control"  type="email" name="mail" placeholder="info@noteller.com" required/>
					</div>
					<input type="submit" value="仮登録する" class="btn btn-lg btn-mantis btn-block animated fadeIn">
				</form>
				
				<?php
			if($e0){
				echo "<span style='color:red;font-size:12px;'>メールが入力されていません</span><br>";
			}
			
			if($e1){
				echo "<span style='color:red;font-size:12px;'>ノテラーIDが入力されていません</span><br>";
			}
			
			if($e2){
				echo "<span style='color:red;font-size:12px;'>ノテラーIDは半角英数と( _ )のみで入力してください。</span><br>";
			}
			
			if($e3){
				echo "<span style='color:red;font-size:12px;'>すでにノテラーIDが登録されています。</span><br>";
			}
			
			if($e4){
				echo "<span style='color:red;font-size:12px;'>ノテラーIDが登録できません。</span><br>";
			}
			if($e5){
				echo "<span style='color:red;font-size:12px;'>ノテラーIDは20文字以内で入力してください。</span><br>";
			}
			if($e6){
				echo "<span style='color:red;font-size:12px;'>ノテラーIDの１文字目は半角英数で入力してください。</span><br>";
			}
			?>
			
			</div>
		</div>
	</div>
</div>
<!-- bloc-13 END -->

<!-- Footer - bloc-20 -->
<div class="bloc bgc-olive-drab-7" id="bloc-20">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-3">
				<h3 class="mg-md tc-white text-center">
					Noteller
				</h3>
				<div class="text-center">
					<a href="register.php" class="a-btn ltc-white">店舗登録（無料）</a>
				</div>
				<h5 class="mg-md text-center tc-white">
					<a class="ltc-white" href="team.php">開発者</a>
				</h5>
				<h5 class="mg-md tc-white">
					<div class="text-center">
						<a class="ltc-white" href="http://www.noteller.com/policy.php">利用規約</a>
					</div>
				</h5>
				<h4 class="mg-md">
				</h4>
			</div>
			<div class="col-sm-3">
				<h3 class="mg-md tc-white text-center">
					サービス内容
				</h3>
				<div class="text-center">
					<a href="service.php" class="a-btn ltc-white">業務連絡ツール</a>
				</div>
				<div class="text-center">
					<a href="service.php" class="a-btn ltc-white">マニュアル共有（開発中）</a>
				</div>
				<h5 class="mg-md tc-white">
					<div class="text-center">
						<a class="ltc-white" href="service.php">他店舗提携システム（開発中）</a>
					</div>
				</h5>
			</div>
			<div class="col-sm-3">
				<h3 class="mg-md tc-white text-center">
					SNS
				</h3>
				<div class="text-center">
					<a href="https://twitter.com/noteller_com" class="a-btn ltc-white" target="_blank">Twitter</a>
				</div>
				<div class="text-center">
					<a href="https://www.facebook.com/notellerr" class="a-btn ltc-white" target="_blank">Facebook</a>
				</div>
				<h5 class="mg-md tc-white">
					<div class="text-center">
						<a class="ltc-white" href="http://google.com/+Noteller_com" target="_blank">Google+</a>
					</div>
				</h5>
			</div>
			<div class="col-sm-3">
				<h3 class="mg-md tc-white text-center">
					その他
				</h3>
				<div class="text-center">
					<a href="recruit.php" class="a-btn ltc-white">メンバー募集</a>
				</div>
				<h5 class="mg-md tc-white">
					<div class="text-center">
						<a class="ltc-white" href="faq.php">よくある質問</a>
					</div>
				</h5>
				<h5 class="mg-md tc-white">
					<div class="text-center">
						<a class="ltc-white" href="info.php" target="_blank">お問い合わせ</a>
					</div>
				</h5>
			</div>
		</div>
	</div>
</div>
<!-- Footer - bloc-20 END -->

<!-- Footer - bloc-21 -->
<div class="bloc bgc-olive-drab-7 d-bloc" id="bloc-21">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="mg-md text-center ">
					© 2015 Noteller, All Right Reserved.
				</h3>
			</div>
		</div>
	</div>
</div>
<!-- Footer - bloc-21 END -->
</div>
<!-- Main container END -->

</body>
    
<!-- Google Analytics -->
<script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-61689407-1', 'auto');  ga('send', 'pageview');</script>
<!-- Google Analytics END -->

</php>
