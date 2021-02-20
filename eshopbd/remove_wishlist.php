<?php
include("config.php");
$did = $_GET['tid'];
$sub_cat_id = $_GET['sub_cat_id'];
$sql = "DELETE FROM wishlist WHERE wish_id=$did";

$result = mysqli_query($con, $sql);
if ($result) {
    echo "<script>alert('Wishlist Added');
	window.location.href='shop-grid.php?sub-cat-id=$sub_cat_id';
	</script>";
} else {
    echo "<script>alert('Wishlist Not Added');
	window.location.href='shop-grid.php?sub-cat-id=$sub_cat_id';
	</script>";
}

?>
<html>

<head>

</head>

<body>
    <p>Information Deleted Successfully</p>
</body>

</html>