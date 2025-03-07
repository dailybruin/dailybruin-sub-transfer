<?php 
return;
if(isset($_POST['pullnow']) && $_POST['pullnow'] == 'yes')
{
	print_r(shell_exec('git pull origin master'));
}
else
{
?>

<form method="POST" enctype="multipart/form-data" action="sX3dIAy8Qg.php">
	<div style="padding:5px">
		<button type="submit" value="yes" name="pullnow">Pull from GitHub</button>
	</div>
</form>

<?php
}
?>
