<!-- Name: Hongcheng Xie 	GitHub username: acse-hx721-->
<?php
// 允许上传的文件后缀
$allowedExts = array("csv");
$temp = explode(".", $_FILES["file"]["name"]);
echo $_FILES["file"]["size"];
$extension = end($temp);     // 获取文件后缀名
// if (($_FILES["file"]["size"] < 20480000)   // 小于 20000 kb
// && in_array($extension, $allowedExts))
// {
if ($_FILES["file"]["error"] > 0)
{
	echo "Error：" . $_FILES["file"]["error"] . "<br>";
}
else
{
	echo "File Name: " . $_FILES["file"]["name"] . "<br>";
	echo "File Type: " . $_FILES["file"]["type"] . "<br>";
	echo "File Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
	echo "Temporary Storage Location: " . $_FILES["file"]["tmp_name"] . "<br>";
	
	// 判断当期目录下的 upload 目录是否存在该文件
	// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
	// if (file_exists("data/" . $_FILES["file"]["name"]))
	// {
	// 	echo $_FILES["file"]["name"] . " 文件已经存在。 ";
	// }
	// else
	// {
	// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
	move_uploaded_file($_FILES["file"]["tmp_name"], "data/" . $_FILES["file"]["name"]);
	echo "Files are stored in: " . "data/" . $_FILES["file"]["name"];
	// }
}
// }
// else
// {
// 	echo "Illegal file format.";
// }
?>

<script type="text/javascript">

document.location="index.php";

</script>