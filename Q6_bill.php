<html>
<head></head>
<body>
<form method=POST action=#>
   <label>Prouct</label><input type="text" name="item"><br>
   <label>Price</label><input type="text" name="rate"><br>
   <input class="btn roberto-btn mt-15" type="submit" name="submit">
</form>
</body>
</html>

<?php
    if(isset($_POST["submit"]))
    {
        include("connection.php");
        $item=$_POST["item"];
        $rate=$_POST["rate"];
        $query="insert into itembill(item,rate)values('$item','$rate')";
        mysqli_query($con,$query);
        echo "<script>alert('Successfully inserted');</script>";
    }
?>
