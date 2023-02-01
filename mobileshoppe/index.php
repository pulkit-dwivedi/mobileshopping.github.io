
<?php include 'navbar.php' ?>
<?php include 'footer.php' ?>
<?php include 'image_slider.php' ?>
<?php include 'database_connection.php' ?>

<html>

<head>
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <!-- samsung phone section -->
    <div class="heading">Samsung Phone's</div>
    <div class="view_more"><a href="samsung.php">More</a></div>
    <hr class="horizontal_line">
    <div class="slide-container">
        <?php

        $samsunglimitt = 4;
        //         ini_set('display_errors', 1);
        // ini_set('display_startup_errors', 1);
        // error_reporting(E_ALL);
        // print_r($page);

        $samsungsql = "SELECT * FROM `samsung`  LIMIT $samsunglimitt";
        $samsungres = mysqli_query($conn, $samsungsql);
        // if (!$res) {
        //     printf("Error: %s\n", mysqli_error($conn));
        //     exit();
        // }
        while ($samsungpd = mysqli_fetch_array($samsungres)) {
        ?>
            <div class="ele  border-gradient-green ">
                <form action="managecart.php?action=add&id=<?php echo $samsungpd['s_no']; ?>" method="POST" class="for_form">
                    <div class="for_image">
                        <img class="image1" src="<?php echo $samsungpd['image']; ?>">
                    </div>

                    <div class="forcompletedetails">
                        <div class="showname"><?php echo $samsungpd['name'] ?></div>
                        <div class="showstorage"><?php echo $samsungpd['camera'] ?></div>
                        <div class="showcamera"><?php echo $samsungpd['memory_storage'] ?></div>
                        <!-- <button type="text" value="VIEW" name="view" class="view">VIEW</button> -->
                        <button type="text" value="ADD" name="addcart" class="cart">ADD TO CART</button>
                        <input type="hidden" name="item_name" value="<?php echo $samsungpd['name'] ?>">
                        <input type="hidden" name="item_price" value="<?php echo $samsungpd['price'] ?>">
                        <span class="toshowprice">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee index_rupee" viewBox="0 0 16 16">
                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                                </svg></span>
                            <?php echo $samsungpd['price']; ?></span>
                    </div>
                </form>
            </div>

        <?php
        }
        ?>
        <!-- <span class="arrow prev" onclick="samsung_controller(-1)">&#8249;</span>
        <span class="arrow next" onclick="samsung_controller(1)">&#8250;</span> -->
    </div>
    <!-- samsung phone section end -->



    <!-- apple phone section -->
    <div class="heading apple_heading">Apple Phone's</div>
    <div class="view_more apple_more"><a href="apple.php">More</a></div>
    <hr class="horizontal_line apple_line">
    <div class="slide-container addon">
        <?php

        $applelimitt = 4;
        //         ini_set('display_errors', 1);
        // ini_set('display_startup_errors', 1);
        // error_reporting(E_ALL);
        // print_r($page);
        $applesql = "SELECT * FROM `apple`  LIMIT $applelimitt";
        $appleres = mysqli_query($conn, $applesql);
        // if (!$res) {
        //     printf("Error: %s\n", mysqli_error($conn));
        //     exit();
        // }
        while ($applepd = mysqli_fetch_array($appleres)) {
        ?>
            <div class="ele  border-gradient-green ">
                <form action="managecart.php?action=add&id=<?php echo $applepd['s_no']; ?>" method="POST" class="for_form">
                    <div class="for_image">
                        <img class="image1" src="<?php echo $applepd['image']; ?>">
                    </div>

                    <div class="forcompletedetails">
                        <div class="showname"><?php echo $applepd['name'] ?></div>
                        <div class="showstorage"><?php echo $applepd['camera'] ?></div>
                        <div class="showcamera"><?php echo $applepd['memory_storage'] ?></div>
                        <!-- <button type="text" value="VIEW" name="view" class="view">VIEW</button> -->
                        <button type="text" value="ADD" name="addcart" class="cart">ADD TO CART</button>
                        <input type="hidden" name="item_name" value="<?php echo $applepd['name'] ?>">
                        <input type="hidden" name="item_price" value="<?php echo $applepd['price'] ?>">
                        <span class="toshowprice">
                        <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee index_rupee" viewBox="0 0 16 16">
                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                                </svg></span>    
                        <?php echo $applepd['price']; ?></span>
                    </div>
                </form>
            </div>

        <?php
        }
        ?>

    </div>
    <!-- apple phone section end -->



    <!-- redmi phone section -->
    <div class="heading redmi_heading">Redmi Phone's</div>
    <div class="view_more redmi_more"><a href="redmi.php">More</a></div>
    <hr class="horizontal_line redmi_line">
    <div class="slide-container addon_redmi">
        <?php

        //         ini_set('display_errors', 1);
        // ini_set('display_startup_errors', 1);
        // error_reporting(E_ALL);
        // print_r($page);
        $limit = 4;
        $redmisql = "SELECT * FROM `redmi` LIMIT $limit";
        $redmires = mysqli_query($conn, $redmisql);
        // if (!$res) {
        //     printf("Error: %s\n", mysqli_error($conn));
        //     exit();
        // }
        while ($redmipd = mysqli_fetch_array($redmires)) {
        ?>
            <div class="ele  border-gradient-green ">
                <form action="managecart.php?action=add&id=<?php echo $redmipd['s_no']; ?>" method="POST" class="for_form">
                    <div class="for_image">
                        <img class="image1" src="<?php echo $redmipd['image']; ?>">
                    </div>

                    <div class="forcompletedetails">
                        <div class="showname"><?php echo $redmipd['name'] ?></div>
                        <div class="showstorage"><?php echo $redmipd['camera'] ?></div>
                        <div class="showcamera"><?php echo $redmipd['memory_storage'] ?></div>
                        <!-- <button type="text" value="VIEW" name="view" class="view">VIEW</button> -->
                        <button type="text" value="ADD" name="addcart" class="cart">ADD TO CART</button>
                        <input type="hidden" name="item_name" value="<?php echo $redmipd['name'] ?>">
                        <input type="hidden" name="item_price" value="<?php echo $redmipd['price'] ?>">
                        <span class="toshowprice">
                        <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee index_rupee" viewBox="0 0 16 16">
                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                                </svg></span>    
                        <?php echo $redmipd['price']; ?></span>
                    </div>
                </form>
            </div>

        <?php
        }
        ?>
    </div>
    <!-- redmi phone section end -->


    <!-- poco phone section -->
    <div class="heading poco_heading">Poco Phone's</div>
    <div class="view_more poco_more"><a href="poco.php">More</a></div>
    <hr class="horizontal_line poco_line">
    <div class="slide-container addon_poco">
        <?php

        //         ini_set('display_errors', 1);
        // ini_set('display_startup_errors', 1);
        // error_reporting(E_ALL);
        // print_r($page);
        $limit = 4;
        $pocosql = "SELECT * FROM `poco` LIMIT $limit";
        $pocores = mysqli_query($conn, $pocosql);
        // if (!$res) {
        //     printf("Error: %s\n", mysqli_error($conn));
        //     exit();
        // }
        while ($pocopd = mysqli_fetch_array($pocores)) {
        ?>
            <div class="ele  border-gradient-green ">
                <form action="managecart.php?action=add&id=<?php echo $pocopd['s_no']; ?>" method="POST" class="for_form">
                    <div class="for_image">
                        <img class="image1" src="<?php echo $pocopd['image']; ?>">
                    </div>

                    <div class="forcompletedetails">
                        <div class="showname"><?php echo $pocopd['name'] ?></div>
                        <div class="showstorage"><?php echo $pocopd['camera'] ?></div>
                        <div class="showcamera"><?php echo $pocopd['memory_storage'] ?></div>
                        <!-- <button type="text" value="VIEW" name="view" class="view">VIEW</button> -->
                        <button type="text" value="ADD" name="addcart" class="cart">ADD TO CART</button>
                        <input type="hidden" name="item_name" value="<?php echo $pocopd['name'] ?>">
                        <input type="hidden" name="item_price" value="<?php echo $pocopd['price'] ?>">
                        <span class="toshowprice">
                        <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee index_rupee" viewBox="0 0 16 16">
                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                                </svg></span>    
                        <?php echo $pocopd['price']; ?></span>
                    </div>
                </form>
            </div>

        <?php
        }
        ?>
    </div>
    <!-- poco phone section end -->

    <script src="apple_phone.js"></script>
    <script src="samsung_phone.js"></script>
</body>

</html>