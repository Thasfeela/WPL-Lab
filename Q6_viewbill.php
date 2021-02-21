<html>
<head></head>
<body>
<table>
    <tr>
        <th>Product</th>
        <th>rate</th>
    </tr>
    <?php
        include("connection.php");
        $query="select * from itembill";
        $res=mysqli_query($con,$query);
        while($f=mysqli_fetch_array($res))
        {
    ?>
        <tr>
            <td><?php echo $f["item"]?></td>
            <td><?php echo $f["rate"]?></td>
        </tr>
    <?php
        }
    ?>

    <tr>
         <th>Total</th>
    <?php
        include("connection.php");
        $query="select sum(rate) as total from itembill";
        $res=mysqli_query($con,$query);
        $f=mysqli_fetch_array($res);
    ?>
         <td><?php echo $f["total"]?></td>
    </tr>
</table>
</body>
</html>