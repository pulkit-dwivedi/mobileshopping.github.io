<?php
session_start();
// session_unset();
if (isset($_POST['addcart'])) {
    if (isset($_SESSION['user']) || isset($_SESSION['signuser'])) {
        if (isset($_SESSION['cart'])) {
            $myitems = array_column($_SESSION['cart'], 'itemName');
            if (in_array($_POST['item_name'], $myitems)) {
                echo '<script>
            alert("item already added");
            window.location.href = "index.php";
            </script>';
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('itemName' => $_POST['item_name'], 'itemPrice' => $_POST['item_price'], 'quantity' => 1);
                echo '<script>
            alert("item added");
            window.location.href = "index.php";
            </script>';
            }
        } else {
            $_SESSION['cart'][0] = array('itemName' => $_POST['item_name'], 'itemPrice' => $_POST['item_price'], 'quantity' => 1);
            echo '<script>
        alert("item added");
        window.location.href = "index.php";
        </script>';
        }
    } else {
        echo '<script>
    alert("Login to add element in cart");
    window.location.href = "login.php";
    </script>';
    }
}
//for removing item from the cart
if (isset($_POST['remove_item'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['itemName'] == $_POST['item']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            echo "
                <script>
                    alert('Item Removed Successfully');
                    window.location.href='mycart.php';
                </script>
            ";
        }
    }
}
