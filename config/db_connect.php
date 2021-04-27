
<?php
//database
$conn = mysqli_connect('localhost', 'teddy', 'teddytierig2016', 'teddys_pizza');

//connection
if (!$conn) {
    echo 'Connection error:' . mysqli_connect_error();
}

?>