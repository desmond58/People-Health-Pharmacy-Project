<?php
    include_once 'includes/db_connection.php';
?>

<html>
<head>
    <title></title>
</head>
<body>
<?php 
    $sql_query = "SELECT * FROM products;";
    $result = mysqli_query($conn, $sql_query);
    $resultCheck = mysqli_num_rows($result);

    //validate number of row return from database

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['product_name']." have quantity of ".$row['product_quantity']."<br>";
        }
    }
?>
</body>
</html>