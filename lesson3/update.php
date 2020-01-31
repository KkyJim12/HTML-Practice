<?php
$conn = new mysqli('localhost', 'root', '', 'projectx');

// if ($conn->connect_error) {
//     echo 'fail';
// } else {
//     echo 'success';
// }

$id = $_POST['id'];
$name = $_POST['name'];
$qty = $_POST['qty'];
$detail = $_POST['detail'];
$gender = $_POST['gender'];

$update = "UPDATE `catalogs` SET `title`='sadsadasd222',`qty`=55,`gender`=2,`detail`='666' WHERE 1";
$query = mysqli_query($conn, $update);


if ($query) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    print 'error';
}
