<?php
include("db.php");
$ok=0;
$hashok=0;

if(isset($_GET["error"])){
	$error=$_GET["error"];
}else{
	$error=0;
}

if(!empty($_POST["mail"])){
	$mail=$_POST["mail"];
}

if(!empty($_POST["noteller_id"])){
	$noteller_id=$_POST["noteller_id"];
}

if(!empty($_POST["username"])){
	$username=$_POST["username"];
}

if(!empty($_POST["tenpo_name"])){
	$tenpo_name=$_POST["tenpo_name"];
}

$link = mysql_connect($databasedomain,$databaseid,$databasepass);
if (!$link) {die('接続失敗です。'.mysql_error());}
$db_selected = mysql_select_db($databasename, $link);
if (!$db_selected){die('データベース選択失敗です。'.mysql_error());}
//文字コード設定
mysql_set_charset('utf8');


$result = mysql_query('SELECT * from noteller_kari');
while ($row = mysql_fetch_assoc($result)) {
	if($row['mailhash'] == $_GET["mailid"]){
		$hashok=1;
		$mail=$row["mail"];
	}
}

mysql_close($link);

if($hashok){

}else{

	header("Location: register.php");
}
?><!doctype html>
<php>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="team,StaffNote, スタッフノート, 情報共有, 店舗, 無料, シフト管理">
    <meta name="description" content="カンタンに使える店舗向け無料情報共有ツール。StaffNote（スタッフノート）は店舗内の情報共有を効率化し、アルバイターの仕事スキルを最大化させます。">
    <meta property="og:url" content="http://StaffNote.com/">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="StaffNote[スタッフノート]" />
    <meta property="og:description" content="カンタンに使える店舗向け無料情報共有ツール。StaffNote（スタッフノート）は店舗内の情報共有を効率化し、アルバイターの仕事スキルを最大化させます。" />
    <meta property="og:site_name" content="StaffNote" />
    <meta property="og:locale" content="ja_JP" />
    <meta name="twitter:site" content="@StaffNote_com">
    <meta name="twitter:url" content="http://twitter.com/StaffNote_com">
    <meta name="twitter:title" content="StaffNote[スタッフノート]">
    <meta name="twitter:description" content="カンタンに使える店舗向け無料情報共有ツール。StaffNote（スタッフノート）は店舗内の情報共有を効率化し、アルバイターの仕事スキルを最大化させます。">
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" id="ppstyle" type="text/css" href="style.css">
    <link rel='stylesheet' href='./css/animate.css' /><link rel='stylesheet' href='./css/font-awesome.min.css'/><link rel='stylesheet' href='./css/ionicons.min.css'/>
    <script src="./js/jquery-2.1.0.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/blocs.js"></script>
    <script src='./js/jqBootstrapValidation.js'></script>
    <title>本登録フォーム - 店舗に特化した無料情報共有ツール</title>
</head>
<body>
<!-- Main container -->
<div class="page-container">
    
<?php
include("header.php");
?>

<!-- bloc-14 -->
<div class="bloc l-bloc bgc-white" id="bloc-14">
	<div class="container bloc-md">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="mg-md text-center">
					本登録フォーム
				</h1>
				<form action="verification.php?mailid=<?php echo $_GET["mailid"];?>" method="post">
				<h3 class="mg-md">
					<span class="fa fa-envelope"></span> メールアドレス
				</h3>
				<h4 class="mg-md ">
					<?php echo $mail;?>
					<input type="hidden" name="mail" value="<?php echo $mail;?>">
				</h4>
				<h3 class="mg-md">
					<span class="fa fa-jsfiddle"></span> Noteller ID
				</h3>
					<div class="form-group">
						<input class="form-control" name="noteller_id" value="<?php echo $noteller_id;?>" placeholder="noteller_com" />
					</div>

				<h3 class="mg-md">
					<span class="fa fa-key"></span> パスワード
				</h3>

					<div class="form-group">
						<input class="form-control" maxlength="100" name="pass1" type="password" required />
					</div>

				<h3 class="mg-md">
					<span class="fa fa-key"></span> 確認用パスワード
				</h3>

					<div class="form-group">
						<input class="form-control" maxlength="100" name="pass2" type="password" required/>
					</div>

				<h3 class="mg-md">
					<span class="fa fa-user"></span> 氏名（あなたのお名前）
				</h3>

					<div class="form-group">
						<input class="form-control" name="username" value="<?php echo $username;?>" placeholder="伊勢 隼人" required />
					</div>

				<h3 class="mg-md">
					<span class="fa fa-line-chart"></span> 店舗名
				</h3>

					<div class="form-group">
						<input class="form-control" name="tenpo_name" value="<?php echo $tenpo_name;?>" placeholder="Noteller Coffee 新宿西口店" required/>
					</div>
					<input type="submit" value="登録内容を確認する" class="btn   btn-lg btn-mantis btn-block">
				</form>
			</div>
		</div>
	</div>
</div>
<!-- bloc-14 END -->

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
