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

</head>
<body>
vignesh@readabit.in / newnew
<form action="members.php" method="POST">
<input type="text" name="uname">
<input type="password" name="pwd">
<input type="submit" value="go">
</form>
<!-- <img id="image" src="fishtomovetowardsmouse.jpg"/> -->
</body>
</html>


