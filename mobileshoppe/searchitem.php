<?php include 'navbar.php'; ?>
<?php include 'database_connection.php'; ?>
<html>

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .slide-container {
            width: 100%;
            /* background-color: aqua; */
            position: relative;
            height: 30%;
            top: 15%;
            margin-bottom: 55px;
        }

        .slide {
            /* background-color: blue; */
            display: none;
            width: 90%;
            position: relative;
            left: 5%;
        }

        .ele {
            width: 23%;
            /* background-color: cadetblue; */
            margin-left: 16px;
            position: relative;
            height: 100%;
            display: inline-block;
            box-sizing: border-box;
            margin-bottom: -32px;
            border: 4px solid red;
            box-sizing: border-box;
            font-family: 'Roboto Mono', monospace;
            transition: transform 0.5s;
            /* cursor: pointer; */
        }

        .ele:hover {
            transform: scale(1.07);
        }

        .arrow {
            cursor: pointer;
            position: absolute;
            top: 30%;
            width: 3%;
            height: 22%;
            font-size: 50px;
            font-weight: bolder;
        }

        .next {
            cursor: pointer;
            position: absolute;
            top: 30%;
            right: 0%;
            width: 3%;
            height: 20%;
        }

        .prev {
            left: 1%;
        }

        .heading {
            display: inline-block;
            position: absolute;
            top: 104%;
            font-size: 24px;
            font-weight: bolder;
            padding: 5px;
            box-sizing: border-box;
            left: 15px;
        }

        .horizontal_line {
            width: 100%;
            height: 1px;
            background-color: antiquewhite;
            border: 1px solid black;
            position: relative;
            top: 12%;
            box-sizing: border-box;
            left: 0px;
        }

        .image1 {
            width: 100%;
            height: 60%;
            position: relative;
            left: 0%;
            top: 70px;
            transition: transform 0.5s;
        }

        .image1:hover {
            transform: scale(1.04);
        }

        .for_image {
            background-color: #b3b2b2;
            display: inline-block;
            width: 30%;
            position: relative;
            height: 100%;
        }

        .forcompletedetails {
            background-color: #b3b2b2;
            display: inline-block;
            width: 70%;
            left: 30%;
            position: relative;
            height: 100%;
            top: -177.3px;
        }

        .view {
            background-color: aquamarine;
            display: inline-block;
            width: 30%;
            height: 15%;
            position: relative;
            top: 36%;
            left: 10%;
            border: 2px solid gainsboro;
            box-sizing: border-box;
            justify-content: center;
            text-align: center;
            /* font-weight: 900; */
            font-size: 15px;
            border-radius: 10px;
            font-family: 'Anton', sans-serif;
            background-image: linear-gradient(65.9deg, rgba(85, 228, 224, 1) 5.5%, rgba(75, 68, 224, 0.74) 54.2%, rgba(64, 198, 238, 1) 55.2%, rgba(177, 36, 224, 1) 98.4%);
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            cursor: pointer;
        }

        .cart {
            background-color: yellow;
            background-color: aquamarine;
            display: inline-block;
            width: 45%;
            height: 15%;
            position: relative;
            top: 36%;
            left: 15%;
            border: 2px solid gainsboro;
            box-sizing: border-box;
            justify-content: center;
            text-align: center;
            /* font-weight: 900; */
            font-size: 15px;
            background-image: linear-gradient(65.9deg, rgba(85, 228, 224, 1) 5.5%, rgba(75, 68, 224, 0.74) 54.2%, rgba(64, 198, 238, 1) 55.2%, rgba(177, 36, 224, 1) 98.4%);
            border-radius: 10px;
            font-family: 'Anton', sans-serif;
            cursor: pointer;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }

        .showname {
            /* background-color: aqua; */
            width: 100%;
            height: 17%;
            position: relative;
            top: 17%;
            font-size: 15px;
            margin-bottom: 3px;
            text-align: center;
        }

        .showstorage {
            /* background-color: #23abab; */
            width: 85%;
            height: 12%;
            position: relative;
            top: 28%;
            font-size: 20px;
            left: 15%;
            font-size: 10px;
            justify-content: center;
            text-align: left;
            display: inline-block;
            margin-bottom: 3px;
            font-weight: 900;
        }

        .showcamera {
            /* background-color: #23abab; */
            width: 85%;
            height: 12%;
            position: relative;
            top: 28%;
            font-size: 20px;
            left: 15%;
            font-size: 10px;
            justify-content: center;
            text-align: left;
            display: inline-block;
            margin-bottom: 3px;
            font-weight: bold;
        }

        .toshowprice {
            /* background-color: #B2FF59; */
            position: relative;
            left: -30%;
            top: -17%;
            font-size: 18px;
        }

        .border-gradient-purple {
            border-image-source: linear-gradient(to left, #743ad5, #d53a9d);
        }

        .border-gradient-green {
            border-image-source: linear-gradient(to left, #00C853, #B2FF59);
            border-width: 4px;
            border-image-slice: 1;
        }

        .litag {
            background-color: #B2FF59;
            display: inline-block;
            width: 40px;
            margin-left: 10px;
            position: relative;
            top: 1px;
            left: 45%;
            height: 25px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="slide-container">
        <?php
        if (isset($_POST['searchitem'])) {
            $check = $_POST['searchinput'];
            $sql = "SELECT * FROM `samsung` where name like '%$check%' UNION SELECT * FROM `apple` where name like '%$check%' UNION SELECT * FROM `redmi` where name like '%$check%' UNION SELECT * FROM `poco` where name like '%$check%' ";
            $resul = mysqli_query($conn, $sql);
            while ($show = mysqli_fetch_array($resul)) {
        ?>
                <div class="ele  border-gradient-green ">
                    <form action="managecart.php?action=add&id=<?php echo $show['s_no']; ?>" method="POST">
                        <div class="for_image">
                            <img class="image1" src="<?php echo $show['image']; ?>">
                        </div>

                        <div class="forcompletedetails">
                            <div class="showname"><?php echo $show['name'] ?></div>
                            <div class="showstorage"><?php echo $show['camera'] ?></div>
                            <div class="showcamera"><?php echo $show['memory_storage'] ?></div>
                            <!-- <button type="text" value="VIEW" name="view" class="view">VIEW</button> -->
                            <button type="text" value="ADD" name="addcart" class="cart">ADD CART</button>
                            <input type="hidden" name="item_name" value="<?php echo $show['name'] ?>">
                            <input type="hidden" name="item_price" value="<?php echo $show['price'] ?>">
                            <span class="toshowprice"><?php echo $show['price']; ?></span>
                        </div>
                    </form>
                </div>
        <?php
            }
        }
        ?>
    </div>
</body>

</html>