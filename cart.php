<?session_start();
include('menu.php')?>
<div class="row">
<form name="bucket" method="post" action="payout.php">
	<div class="col-md-2 column">
	<?php if(isset($_POST['jack']))
	{ 
	$_SESSION['items']=$_POST['jack'];
	echo strtoupper($_POST['jack']);
	}
	?>
	</div>
<div class="col-md-2 column">
	<?if(isset($_POST['watch']))
	{
		$_SESSION['items']=$_POST['watch'];
		echo strtoupper($_POST['watch']);
	}?>
</div>
<div class="col-md-2 column"><?if(isset($_POST['cool'])){
$_SESSION['items']=$_POST['cool'];
echo strtoupper($_POST['cool']).'<br>';

}?></div>
</div>
<br>
<br>
<div class="form-controls">
<input type="submit" value="Pay Out" action="payout.php">
</div>
