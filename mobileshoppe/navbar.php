<?php
session_start();
?>
<html>

<head>
    <link rel="stylesheet" href="navbar.css">
</head>

<body>
    <nav>
        <h1 class="head1"><a href="index.php" class="multiple_color">Mobile Shoppe</a></h1>
        <div class="search_box" >
            <form action="searchitem.php" method="post">
                <input class="search_input space" placeholder=" Search your favourite phone" name="searchinput" required>
                <button class="go_button" name="searchitem">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-heart-fill search_heart" viewBox="0 0 16 16">
                        <path d="M6.5 13a6.474 6.474 0 0 0 3.845-1.258h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.008 1.008 0 0 0-.115-.1A6.471 6.471 0 0 0 13 6.5 6.502 6.502 0 0 0 6.5 0a6.5 6.5 0 1 0 0 13Zm0-8.518c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z" />
                    </svg>
                </button>
            </form>
        </div>
        <div class="for_login" id="for_login">
            <a href="login.php">LOGIN</a>
        </div>
        <div class="items">
            <a href="apple.php" target="_blank" class="toaddline">Apple</a>
            <a href="samsung.php" target="_blank" class="toaddline">Samsung</a>
            <a href="poco.php" target="_blank" class="toaddline">Poco</a>
            <a href="redmi.php" target="_blank" class="toaddline">Redmi</a>
            <a href="mycart.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill addcart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
            </a>
        </div>
        <div class="toshowlogout">
            <?php
                if(isset($_SESSION['user'])){
                    $var=$_SESSION['user'];
                    echo"
                    <script>
                        const for_login=document.getElementById('for_login');
                        console.log(for_login);
                        for_login.remove();
                    </script>
                ";
                }elseif(isset($_SESSION['signuser'])){
                    $var=$_SESSION['signuser'];
                    echo"
                        <script>
                            const for_login=document.getElementById('for_login');
                            console.log(for_login);
                            for_login.remove();
                        </script>
                    ";
                }else{
                    $var='x';
                }
            ?>
                <abbr title="logout" style="text-decoration:none ;"><a href="logout.php" class="logout"><?php echo ucfirst($var[0]) ; ?> </a></abbr>
        </div>
    </nav>
</body>

</html>