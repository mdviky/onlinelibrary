<?php
session_start();
if($_POST['uname'] == 'vignesh@readabit.in' && $_POST['pwd'] == 'newnew') {
	$_SESSION['uid'] = 'vignesh@readabit.in';
	
}
else die('invalid login! Check your email OR password');
?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).mousemove(function(e){
    //$("#image").css({left:e.pageX, top:e.pageY});
	$("#image").stop().animate({left:e.pageX, top:e.pageY});
});
</script>
<style type="text/css">
#image{
position:absolute;
}
</style>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5a65dd8f9e4d9e001224c1a8&product=sticky-share-buttons"></script>
</head>
<body>
</body>
</html>


