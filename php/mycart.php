<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
</head>
<style>
    *
    {
        margin: 0;
        padding: 0;
    }
    body
    {
        width: 100%;
        background-color: #d1ccc0;
        color: #7c2e1c;
    }
    .container
    {
        margin: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .table-content
    {
        text-align: center;
    }
    .heading
    {
        margin-top: 50px ;
        font-size: 40px;
        padding: 20px 500px;
        border: 2px solid black;
    }
    .tab
    {
        margin-top:30px ;
    }
    .table-content thead th
    {
        font-weight: 200;
        font-size: 30px;
        padding:10px 20px;
    }
    .table-content tbody
    {
        font-size: 25px;
        padding:10px 20px ;
    }
    .table-content tbody tr
    {
        margin:8px 0 ;
    }
    .text-center
    {
        text-align: center;
    }
    .btn
    {
        padding: 2px 5px;
    }
    .flex{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .total
    {
        margin: auto;
        width: 300px;
        padding: 10px;
        border: 1px solid black;
        font-size:30px ;
        margin-top:50px ;
    }
    .tab table
    {
        border: 1;
        border-collapse: collapse;
    }
    .btn-btn
    {
        color: white;
        background-color: purple;
        padding: 8px 10px;
        font-size: 15px;
        border-radius: 10px;
        border: 2px solid;
        cursor: pointer;
        
    }
</style>
<body>
    <div class="hero">
        <div class="container">
            <div class="heading">
                <h2>My Cart</h2>
            </div>
            <div class="tab">
                <table class="table-content">
                <thead class="text-center">
                    <tr>
                        <th>S.No</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                        <!-- <th>Quantity</th> -->
                        <!-- <th>Total</th> -->
                        <th></th>
                    </tr>
                    
                </thead>
                <tbody class="text-center">
                    <?php
                        $total=0;
                        if(isset($_SESSION['cart']))
                        {   
                            foreach($_SESSION['cart'] as $key=>$values)
                            {
                                $sno=$key+1;
                                $total=$total+$values['price'];
                                echo "
                                <tr>
                                    <td>$sno</td>
                                    <td>$values[item_name]</td>
                                    <td>$values[price]<input type='hidden' class='iprice' value='$values[price]'></td>
                                    <td>
                                    <form action='manager_cart.php' method='post'>
                                        <button type='submit' name='remove' class='btn'>REMOVE</button>
                                        <input type='hidden' name='item_name' value='$values[item_name]'>
                                        </form> 
                                    </td>
                                </tr>
                                ";
                            }
                        } 
                    ?>
                </tbody>
                
            </table>
                       
            </div>
        
        </div>
        
            <div class="total text-center flex">
                <h4>Total : &nbsp;</h4>
                <?php 
                    echo "₹ "."$total";
                ?> 
            </div>
        
        
        
    </div>
    <br><br>
    <center>
            <form action="../html/thanku.html" method="post"> <button name="placeorder" class="btn-btn">Place Order</button></form></center>

</body>
</html>
