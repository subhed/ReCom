
<?php


require("connect.php");



$content = $_POST['content'];
$u_id = $_POST['u_id'];
$location = $_POST['location'];
$category = $_POST['category'];

$sql = "INSERT INTO `posts` (`p_id`, `c_id`, `u_id`, `p_location`, `p_content`) VALUES (NULL, '$u_id', '$category', '$location', '$content')";

$query = mysqli_query($conn, $sql);

header('Location:../home.php')

?>