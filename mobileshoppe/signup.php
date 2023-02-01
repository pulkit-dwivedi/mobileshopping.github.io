<?php session_start() ?>
<?php include 'database_connection.php' ?>
<html>

<head>
    <style>
        body {
            background-image: url(images/backgroud.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        * {
            margin: 0;
            padding: 0;
        }

        .main {
            background-color: aqua;
            width: 50%;
            height: 50%;
            position: absolute;
            top: 25%;
            left: 25%;

        }

        .for_image {
            width: 50%;
            background-color: beige;
            height: 100%;
            display: inline-block;
            overflow: hidden;
            background-image: radial-gradient(circle 610px at 5.2% 51.6%, rgba(5, 8, 114, 1) 0%, rgba(7, 3, 53, 1) 97.5%);
        }

        .img {
            width: 70%;
            height: 70%;
            animation-name: pulkit;
            animation-duration: 1s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            transition: animation 50s;
            position: relative;
            left: 35px;
        }

        @keyframes pulkit {
            0% {
                transform: translateY(330px);
            }

            26% {
                transform: translateY(263px);
            }

            27% {
                transform: translateY(263px);
            }

            28% {
                transform: translateY(247px);
            }

            25% {
                transform: translateY(218px);
            }
                50% {
                    transform: translateY(28px);
                }

                100% {
                    transform: translateY(-200px);
                }
            }

            .for_signup {
                width: 50%;
                background-color: blue;
                background-image: linear-gradient(99deg, rgba(115, 18, 81, 1) 10.6%, rgba(28, 28, 28, 1) 118%);
                height: 100%;
                display: inline-block;
                left: 50%;
                position: absolute;
                background-image: linear-gradient( 112.1deg,  rgba(32,38,57,1) 11.4%, rgba(63,76,119,1) 70.2% );
            }

            .first {
                /* background-color: black; */
                width: 70%;
                position: relative;
                left: 15%;
                display: inline-block;
                top: 35px;
                height: 13%;
            }

            .first input {
                width: 100%;
                height: 100%;
                outline: none;
                border-radius: 10px;
                border-top-style: hidden;
                border-right-style: hidden;
                border-left-style: hidden;
            }

            .second {
                /* background-color: red; */
                width: 70%;
                position: relative;
                left: 15%;
                top: 90px;
                height: 13%;
            }

            .second input {
                width: 100%;
                height: 100%;
                outline: none;
                border-radius: 10px;
                border-top-style: hidden;
                border-right-style: hidden;
                border-left-style: hidden;
            }

            input:focus {
                outline: none;
            }

            .third {
                /* background-color: blueviolet; */
                width: 60%;
                position: relative;
                left: 20%;
                top: 145px;
                height: 13%;
                display: inline-block;

            }

            .submit {
                width: 100%;
                background-color: cadetblue;
                height: 100%;
                font-size: 20px;
                background-image: radial-gradient(circle farthest-corner at 10.2% 55.8%, rgba(252, 37, 103, 1) 0%, rgba(250, 38, 151, 1) 46.2%, rgba(186, 8, 181, 1) 90.1%);
                border-radius: 35px;
                color: white;
                font-weight: 900;
                cursor: pointer;
                box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            }

            #notification {
                width: 100%;
                height: 5%;
                background-color: darkgray;
                position: relative;
                display: none;
            }

            #delete {
                color: red;
                width: 20px;
                height: 20px;
                position: absolute;
                right: 5px;
                top: 10%;
                cursor: pointer;
            }

            .spann {
                font-size: 10px;
                position: relative;
                top: 50%;
                left: 35%;
                top: 53%;
                color: white;
            }
            .spann a{
            font-weight: bold;
            text-decoration: none;
            font-size: 11px;
            color: white;
        }

            i {
            position: absolute;
            background: linear-gradient(transparent, red);
            height: 60px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            animation: animate 5s infinite;
        }

        @keyframes animate {
            0% {
                transform: translateY(-200px);
            }

            100% {
                transform: translateY(800px);
            }
        }

        i:nth-child(2n+1) {
            background: white
        }

        i:nth-child(2n+2) {
            background:white;
        }

        i:nth-child(2n+4) {
            background: white;
        }

        i:nth-child(2n+6) {
            background: white
        }
    </style>
</head>

<body>
    <div id="notification">
        <h2 style="color:green;background-color:grey;font-weight:bold;display: inline-block;" id="head"></h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16" id="delete">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
        </svg>
    </div>
    <div class="main">
        <div class="for_image">
            <img src="images/rocketupload.png" class="img">
        </div>
        <div class="for_signup">
            <form class="form" method="POST" action="">
                <div class="first">
                    <input type="email" placeholder="  Email" autocomplete="off" name="email" required>
                </div>
                <div class="second">
                    <input type="password" placeholder="  Password" name="password">
                </div>
                <div class="third">
                    <input type="submit" value="SUBMIT" class="submit" name="submit">
                </div>
            </form>
            <span class="spann">Already Member?<a href="login.php"> Sign In</a></span>
        </div>
    </div>
    <script>
        const noti = document.getElementById("notification");
        const dele = document.getElementById("delete");
        const head = document.getElementById("head");

        function fun(temp = "") {
            noti.style.display = "block";
            head.innerHTML = temp;
        }
        dele.onclick = function() {
            noti.style.display = "none";
        }
     
    let amount = 200;
    let body = document.querySelector(".for_image");
    body.style.overflow="hidden";
    console.log(body);
    let i = 0;
    while (i < amount) {
        let itag = document.createElement('i');
        let size = Math.random() * 1;
        let posy = Math.floor(Math.random() *300)
        let pos = Math.floor(Math.random() * 300)
        let delay = Math.random() * (-20)
        let duration = Math.random() * 20;
        itag.style.width = 0.2 + size + "px";
        itag.style.height=3+"px";
        itag.style.left = pos + "px";
        itag.style.top=200+"px";
        itag.style.animationDelay = delay + 's';
        itag.style.animationDuration = duration + 's';
        body.appendChild(itag);
        i++;
    }
    </script>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];
    $check_email = "select * from signup where email='$username'";
    $query = mysqli_query($conn, $check_email);
    $emailcount = mysqli_num_rows($query);
    if ($emailcount > 0) {
        echo "<script>
       alert('Email already exist');
        window.location.href='login.php';
     </script> ";
    } else {
        $insert = "INSERT INTO `signup` ( `email`, `password`) VALUES ('$username', '$password')";
        $query1 = mysqli_query($conn, $insert);
        if ($query) {
            $_SESSION['signuser']=$username;
            echo '<script>
                  fun(temp="Signed Successfully");
                  window.location.href="index.php";
               </script> ';
        } else {
            "not inserted";
        }
    }
}
?>