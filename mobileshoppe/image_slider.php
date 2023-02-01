<?php include 'database_connection.php'; ?>
<html>

<head>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
        * {
            margin: 0;
            padding: 0;
        }

        .main_slide_container {
            width: 100%;
            background-color: aqua;
            position: relative;
            height: 80%;
            top: 0%;
        }

        .main_image_slider {
            background-color: blue;
            display: none;
            width: 100%;
            position: relative;
            left: 0%;
            height: 100%;
            cursor: pointer;
        }

        .img_slider {
            width: 100%;
            background-color: cadetblue;
            margin-left: 0%;
            position: relative;
            height: 100%;
            display: inline-block;
            box-sizing: border-box;
            cursor: pointer;
        }

        .img_slider_arrow {
            cursor: pointer;
            position: absolute;
            top: 27%;
            width: 3%;
            height: 25%;
            font-size: 50px;
            font-weight: bolder;
        }

        .img_slider_next {
            cursor: pointer;
            position: absolute;
            top: 30%;
            right: 0%;
            width: 3%;
            height: 24%;
            font-size: 100px;
            font-size: 100px;
            top: 32%;
        }

        .img_slider_prev {
            left: 0%;
            font-size: 100px;
            top: 30%;
        }

        .slide_image {
            /* background-color: red; */
            width: 50%;
            height: 334%;
            position: relative;
            top: -74px;
        }

        .slide_image1 {
            /* background-color: yellow; */
            width: 100%;
            height: 100%;
        }

        .slide_details {
            /* background-color: green; */
            position: relative;
            top: -569px;
            width: 50%;
            left: 50%;
            height: 334%;
        }

        .slide_showname {
            /* background-color: red; */
            font-family: 'Lobster', cursive;
            position: relative;
            height: 20%;
            font-size: 30px;
            top: 15%;
        }

        .slide_showstorage {
            /* background-color: black; */
            position: relative;
            top: 15%;
            width: 100%;
            height: 12.5%;
            color: black;
            font-weight: bold;
            font-size: 20px;
        }

        .slide_showcamera {
            /* background-color: pink; */
            position: relative;
            top: 15%;
            height: 12.5%;
            color: black;
            font-size: 20px;
            font-weight: bold;
        }

        .slide_cart {
            /* background-color: blue; */
            position: relative;
            top: 30%;
            width: 50%;
            left: 25%;
            height: 10%;
            border-radius: 15px;
            cursor: pointer;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            font-size: 20px;
            font-weight: bold;
        }

        .slide_toshowprice {
            /* background-color: brown; */
            position: relative;
            left: -319px;
            top: 72px;
            font-size: 30px;
        }

        .slide_ultag {
            /* background-color: black; */
            position: relative;
            top: -385%;
        }

        .slide_litag {
            text-decoration: none;
    background-color: #d3dde2;
    display: inline-block;
    width: 10px;
    margin-left: 10px;
    position: relative;
    top: 1px;
    left: 47%;
    height: 10px;
    text-align: center;
    border-radius: 27px;
    box-shadow: rgb(50 50 93 / 25%) 0px 50px 100px -20px, rgb(0 0 0 / 30%) 0px 30px 60px -30px, rgb(10 37 64 / 35%) 0px -2px 6px 0px inset;
        }
        .slider_rupee{
            position: relative;
    width: 25px;
    height: 25px;
    left: 2%;
    top: 0.5%;
        }
        .slide_litag a{
            text-decoration: none;
    position: relative;
    top: -70%;
        }
    </style>
</head>

<body>
    <div class="main_slide_container">
        <!-- trending phone section -->
        <div class="slide-container">
            <?php
            if (!isset($_GET['page'])) {
                $trendingpage = 1;
            } else {
                $trendingpage = $_GET['page'];
            }
            $trendinglimitt = 1;
            //         ini_set('display_errors', 1);
            // ini_set('display_startup_errors', 1);
            // error_reporting(E_ALL);
            // print_r($page);
            $trendingpage--;
            $trendingoffset = ($trendingpage) * $trendinglimitt;
            $trendingsql = "SELECT * FROM `trending`  LIMIT $trendingoffset ,$trendinglimitt";
            $trendingres = mysqli_query($conn, $trendingsql);
            // if (!$res) {
            //     printf("Error: %s\n", mysqli_error($conn));
            //     exit();
            // }
            while ($trendingpd = mysqli_fetch_array($trendingres)) {
            ?>
                <!-- <div class="ele  border-gradient-green "> -->
                <form action="managecart.php?action=add&id=<?php echo $trendingpd['sno']; ?>" method="POST">
                    <div class="slide_image">
                        <img class="slide_image1" src="<?php echo $trendingpd['image']; ?>">
                    </div>
                    <div class="slide_details">
                        <div class="slide_showname"><?php echo $trendingpd['name'] ?></div>
                        <div class="slide_showstorage"><?php echo $trendingpd['camera'] ?></div>
                        <div class="slide_showcamera"><?php echo $trendingpd['storage'] ?></div>
                        <!-- <button type="text" value="VIEW" name="view" class="view">VIEW</button> -->
                        <button type="text" value="ADD" name="addcart" class="slide_cart">ADD CART</button>
                        <input type="hidden" name="item_name" value="<?php echo $trendingpd['name'] ?>">
                        <input type="hidden" name="item_price" value="<?php echo $trendingpd['price'] ?>">
                        <span class="slide_toshowprice">
                        <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee slider_rupee" viewBox="0 0 16 16">
                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                                </svg></span>        
                        <?php echo $trendingpd['price']; ?></span>
                    </div>
                </form>
                <!-- </div> -->

            <?php
            }
            ?>
            <!-- now to fetch the data from the database part ends here -->
            <?php
            $trendingpagi = 'select * from `trending` ';
            $trendingtoexecute = mysqli_query($conn, $trendingpagi);
            if (mysqli_num_rows($trendingtoexecute) > 0) {
                $trendingtopassintotal = mysqli_num_rows($trendingtoexecute);
                $trendinglimitt = 1;
                $trendingtotalpage = ceil($trendingtopassintotal / $trendinglimitt);
                echo '<ul class="slide_ultag">';
                for ($i = 1; $i <= $trendingtotalpage; $i++) {
                    echo '<li class="slide_litag"><a href="index.php?page=' . $i . '">.</a></li>';
                }
                echo '</ul>';
            }

            ?>
        </div>
        <!-- trending phone section end -->

    </div>

</body>

</html>