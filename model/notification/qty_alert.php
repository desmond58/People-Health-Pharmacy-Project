<?php
session_start();
if(!isset($_SESSION['loggedIn'])){
  header('Location: login.php');
  exit();
}
?>
<head>
</head>
<body>
<div class="stock">
    <font size="5">Medicine Out of Stock</font><hr>
    <div style="overflow-x:auto; overflow-y: auto; height: 150px;">
        <table class="table table-bordered" id="table2"> 	  	
            <tr>
                <th>Product</th>
                <th>Quantity Left</th>
                <th>Cost</th>
            </tr>
            <?php
                include("../../dbcon.php");
                $quantity = "10";
                $select_sql= "SELECT * FROM item where stock <= '$quantity'";
                $result = mysqli_query($con,$select_sql);
                while ($row = mysqli_fetch_array($result)) :     
            ?>
            <tr>
                <td><?php echo $row['itemName']?></td>
                <td><font color="red"><?php echo $row['stock']?></font></td>
                <td><?php echo $row['unitPrice']?></td> 
            </tr>
            <?php endwhile;?>
        </table>
    </div>    	
</div><br>
</body>
</html>
