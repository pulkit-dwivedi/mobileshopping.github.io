<?php 
include 'navbar.php';
include 'database_connection.php';
include 'footer.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="index.css">
        <style>
            #applepage_heading{
                /* background-color: antiquewhite; */
                top: 18%;
            }
            #containerid{
                top: 222%;
            }
        </style>
        <link rel="stylesheet" href="footer.css">
    </head>
    <body>
         <!-- apple phone section -->
      <div class="heading apple_heading" id="applepage_heading">Apple Phone's</div>
      <hr class="horizontal_line ">
      <div class="slide-container addon">
      <?php
          if (!isset ($_GET['page']) ) {  
              $applepage = 1;  
          } else {  
              $applepage = $_GET['page'];  
          }  
          $applelimitt = 16;
          //         ini_set('display_errors', 1);
          // ini_set('display_startup_errors', 1);
          // error_reporting(E_ALL);
          // print_r($page);
          $applepage--;
          $appleoffset = ($applepage) * $applelimitt;
          $applesql = "SELECT * FROM `apple`  LIMIT $appleoffset ,$applelimitt";
          $appleres = mysqli_query($conn, $applesql);
          // if (!$res) {
          //     printf("Error: %s\n", mysqli_error($conn));
          //     exit();
          // }
          while ($applepd = mysqli_fetch_array($appleres)) {
          ?>
              <div class="ele  border-gradient-green ">
                  <form action="managecart.php?action=add&id=<?php echo $applepd['s_no']; ?>" method="POST">
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
          <!-- now to fetch the data from the database part ends here -->
          <?php
          $applepagi = 'select * from `apple` ';
          $appletoexecute = mysqli_query($conn, $applepagi);
          if (mysqli_num_rows($appletoexecute) > 0) {
              $appletopassintotal = mysqli_num_rows($appletoexecute);
              $applelimitt = 16;
              $appletotalpage = ceil($appletopassintotal / $applelimitt);
              echo '<ul class="ultag">';
              for ($i = 1; $i <= $appletotalpage; $i++) {
                  echo '<li class="litag"><a href="apple.php?page='.$i.'">' . $i . '</a></li>';
              }
              echo '</ul>';
          }
  
          ?>
      </div>
      <!-- apple phone section end -->
      <!-- for footer -->
      <div class="container" id="containerid">
        <div class="about">
            <h6>ABOUT</h6>
            <a href="">Contact us</a>
            <a href="">About us</a>
            <a href="">Stories</a>
        </div>
        <div class="help">
            <h6>HELP</h6>
            <a href="">Payments</a>
            <a href="">Shipping</a>
            <a href="">Cancellation & Returns</a>
        </div>
        <div class="social">
            <h6>SOCIAL</h6>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-meta f-meta" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.217 5.243C9.145 3.988 10.171 3 11.483 3 13.96 3 16 6.153 16.001 9.907c0 2.29-.986 3.725-2.757 3.725-1.543 0-2.395-.866-3.924-3.424l-.667-1.123-.118-.197a54.944 54.944 0 0 0-.53-.877l-1.178 2.08c-1.673 2.925-2.615 3.541-3.923 3.541C1.086 13.632 0 12.217 0 9.973 0 6.388 1.995 3 4.598 3c.319 0 .625.039.924.122.31.086.611.22.913.407.577.359 1.154.915 1.782 1.714Zm1.516 2.224c-.252-.41-.494-.787-.727-1.133L9 6.326c.845-1.305 1.543-1.954 2.372-1.954 1.723 0 3.102 2.537 3.102 5.653 0 1.188-.39 1.877-1.195 1.877-.773 0-1.142-.51-2.61-2.87l-.937-1.565ZM4.846 4.756c.725.1 1.385.634 2.34 2.001A212.13 212.13 0 0 0 5.551 9.3c-1.357 2.126-1.826 2.603-2.581 2.603-.777 0-1.24-.682-1.24-1.9 0-2.602 1.298-5.264 2.846-5.264.091 0 .181.006.27.018Z"/>
                  </svg>
            </a>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram f-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </svg>
            </a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter f-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
              </svg></a>
        </div>
        <div class="policy">
            <h6>POLICY</h6>
            <a href="">Security</a>
            <a href="">Policy</a>
            <a href="">Privacy</a>
        </div>
        <div class="subscribe"></div>
        <hr class="horizontal-line">
        <h2 class="copyright">© 2021-2022 MobileShoppe.com</h2>
    </div>
    </body>
</html>