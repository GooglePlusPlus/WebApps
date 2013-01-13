<?php
require('init.php');
$smarty=new Smarty();
if($_GET['load']=='reg'){
	$smarty->display('./templates/reg.tpl');
	exit;
}
if($_SESSION['loggedin']){
	header('HTTP/1.1 302 Found');
	header('Location:/main');
}
$smarty->assign("debug",true);
$smarty->assign('page','login');
$smarty->assign('error','用户名或密码错误。');
$smarty->display('./templates/global_header.tpl');
$smarty->display('./templates/login.tpl');
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="/res/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript"  src="/res/js/login.js"></script>
<script type="text/javascript" src="/res/js/defaultPasswordStrengthDefinitions.js"></script>
<script type="text/javascript" src="/res/js/PasswordStrength.js"></script>
<script type="text/javascript" src="/res/js/jquery.chroma-hash.js"></script>
</body>
</html>