<?php 
return;
if(isset($_POST['pw_e']) && $_POST['pw_e'] == 'yes')
{
	print_r(shell_exec('mv .htaccess.bak .htaccess'));
}
else if(isset($_POST['pw_d']) && $_POST['pw_d'] == 'yes')
{
        print_r(shell_exec('mv .htaccess .htaccess.bak'));
}
else
{
?>

<form method="POST" enctype="multipart/form-data" action="QmNXSHLpli.php">
	<div style="padding:5px">
		<button type="submit" value="yes" name="pw_e">Enable password</button>
                <button type="submit" value="yes" name="pw_d">Disable password</button>
	</div>
</form>

<?php
}
?>
