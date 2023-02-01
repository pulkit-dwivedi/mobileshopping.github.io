<?php
session_start();
?>

<html>

<head>
    <title>Mycart</title>

    <style>
        .table {
            background-color: antiquewhite;
            width: 100%;
            position: relative;
            left: 0%;
            top: 3%;
            /* padding: 7px; */
            box-sizing: border-box;
            height: 7%;
            background-image: linear-gradient(94.3deg, rgba(26, 33, 64, 1) 10.9%, rgba(81, 84, 115, 1) 87.1%);
            color: white;
            border-radius: 10px;
        }

        .tr {
            height: 40px;
            position: relative;
            width: 70%;

        }

        .shopping_heading {
            width: 100%;
            height: 8%;
        }

        .h1_heading {
            color: aqua;
            display: inline-block;
            text-align: center;
            justify-content: center;
            position: left;
            position: relative;
            width: 22%;
            left: 38%;
            top: 10%;
        }

        .hori_rule {
            background-color: black;
            position: relative;
            top: 10%;
        }

        .td {
            /* background-color: darkolivegreen; */
            padding: 15px;
            text-align: center;
            font-size: 20px;
            font-weight: 900;
        }

        .grandprice {

            background-color: aqua;
            width: 20%;
            height: 40%;
            display: inline-block;
            position: relative;
            left: 4%;
            top: -184%;
            border-radius: 20px;

        }

        .grandprice h1 {

            /* background-color: red; */
            position: relative;
            width: 100%;
            font-size: 15px;
            /* height: 34px; */
            padding: 10px;
            box-sizing: border-box;
            top: 10%;

        }

        .grandprice p {
            /* background-color: green; */
            height: 15%;
            position: relative;
            top: 10%;
            font-size: 25px;
            left: 55%;
            display: inline-block;
        }

        .makepayment {
            background-color: yellow;
            position: absolute;
            top: 85%;
            left: 20%;
            width: 60%;
            height: 15%;
            font-weight: bold;
            border-radius: 15px;
            cursor: pointer;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }

        .fortd {
            /* background-color: #8EC5FC; */
            width: 15%;
            text-align: center;
            justify-content: center;
            font-size: 15px;
            font-weight: bold;
        }

        .search_box {
            width: 27%;
            height: 40%;
            background-color: bisque;
            position: absolute;
            top: 25%;
            display: none;
            left: 25%;
            display: none;
            border-radius: 5px;
        }

        .search_input {
            width: 100%;
            height: 100%;
            outline: none;
            display: none;
            border-radius: 5px;
        }

        .quinput {
            border-radius: 3px;
            /* background-color: #af4261; */
            width: 30%;
            outline: none;
            border: none;
            text-align: center;
            outline: none;
            height: 50%;
        }

        .quinput:active {
            outline: none;
        }

        .myupdate {
            /* background-color: #c471f5; */
            border-radius: 3px;
            font-size: 10px;
            width: 40%;
            cursor: pointer;
            height: 50%;
        }

        .myremove {
            /* background-color: #c471f5; */
            border-radius: 3px;
            font-size: 10px;
            width: 40%;
            cursor: pointer;
            height: 50%;
        }

        .trtd {
            height: 40px;
        }

        .table_div {
            width: 70%;
            height: 200%;
            position: relative;
            display: inline-block;
        }

        .mycart_rupee {
            color: green;
        }
    </style>
    <link rel="stylesheet" href="navbar.css">
</head>

<body>
    <nav>
        <h1 class="head1"><a href="index.php" class="multiple_color">Mobile Shoppe</a></h1>
        <div class="search_box">
            <!-- <form>
                <input class="search_input" placeholder="     Search your favourite phone">
            </form> -->
        </div>
        <!-- <div class="for_login">
             <a href="login.php">LOGIN</a>
        </div> -->
        <div class="items">
            <a href="apple.php">Apple</a>
            <a href="samsung.php">Samsung</a>
            <a href="poco.php">Poco</a>
           
            <a href="redmi.php">Redmi</a>
        </div>
    </nav>
    <div class="shopping_heading">
        <h1 class="h1_heading">SHOPPING CART</h1>
        <hr class="hori_rule">
    </div>
    <div class="table_div">
        <table class="table">
            <thead class="thead">
                <tr class="tr">
                    <td class="td">S.no</td>
                    <td class="td">Name</td>
                    <td class="td">Quantity</td>
                    <td class="td">Price</td>
                    <td class="td">Delete</td>
                </tr>
            </thead>
            <tbody class="tbody">
                <?php

                if (isset($_SESSION['cart'])) {
                    $total = 0;
                    $i = 1;
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $temp=str_replace(',','',$value['itemPrice']);
                        $total = $total+intval($temp);
                        echo "
                            <tr class='trtd'>
                                <td class='fortd'>$i</td>
                                <td class='fortd'>$value[itemName]</td>
                                <td class='fortd'><input class='quinput' type='text' min='1' max='10' value='$value[quantity]' disabled ></td>
                                <td class='fortd'>$value[itemPrice]</td>
                            <form action='managecart.php' method='post'>
                              
                                <td class='fortd'><button class='myremove' name='remove_item'>REMOVE</button></td>
                                <input type='hidden' name='item' value='$value[itemName]'>
                            </form>
                            </tr>
                            
                        ";
                        $i++;
                    }
                    $_SESSION['totalp'] = $total;
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    ?>
        <div class="grandprice">
            <h1>GRAND TOTAL BILL:</h1>
            <p><span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee mycart_rupee" viewBox="0 0 16 16">
                        <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                    </svg></span>
                <?php echo $total; ?></p>
            <a href="../mobileshoppe/PaytmKit/TxnTest.php"><button class="makepayment">MAKE PAYMENT</button></a>
        </div>
    <?php
    }
    ?>
</body>

</html>