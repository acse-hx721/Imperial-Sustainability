<!-- Name: Hongcheng Xie 	GitHub username: acse-hx721-->
<?php
// only allow for csv file
$allowedExts = array("csv");
$temp = explode(".", $_FILES["file"]["name"]);
echo $_FILES["file"]["size"];
$extension = end($temp);     // Get the suffix
if ($_FILES["file"]["error"] > 0)
{
	echo "Error：" . $_FILES["file"]["error"] . "<br>";
}
else
{
	// Print the details of the uploaded files
	echo "File Name: " . $_FILES["file"]["name"] . "<br>";
	echo "File Type: " . $_FILES["file"]["type"] . "<br>";
	echo "File Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
	echo "Temporary Storage Location: " . $_FILES["file"]["tmp_name"] . "<br>";
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