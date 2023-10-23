<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Golden Sneaker</title>
    <link rel="stylesheet" type="text/css" href="./app/css/products.css">
  </head>

  <body>
    <?php include 'app/conn/connectData.php'; ?>

    <div class="App_mainContent">

          <div class="App_cart">
            <div class="App_cardTop"><img src="./app/assets/nike.png" class="App_cardTopLogo"></div>

            <div class="App_cardTitle">Our Products</div>
            <div class="App_cardBody">

              <div>
              <?php
                foreach ($shoe_array['shoes'] as $product) {
                  echo '<div class = "App_shopItem">';//div shopitem
                  echo '<div class = "App_shopItemImage" style="background-color: rgb(225, 231, 237);"><img src='. $product['image'].'></div>';
                  echo '<div class = "App_shopItemName">'. $product['name'].'</div>';
                  echo '<div class = "App_shopItemDescription">'. $product['description'].'</div>';
                  echo '<div class = "App_shopItemBottom">';//div shopitem bottom
                  echo '<div class = "App_shopItemPrice"> $'. $product['price'].'</div>';
                  echo '<div class = "App_shopItemButton" data-product-id="'.$product['id'].'" 
                                                          data-product-image="'.$product['image'].'" 
                                                          data-product-name="'.$product['name'].'" 
                                                          data-product-price="'.$product['price'].'" 
                                                          data-product-color="'.$product['color'].'" ><p>ADD TO CART</p></div>';
                  echo '<div class = "App_inactive App_shopItemButton"></div>';
                  echo '</div>';//close div shopitem bottom
                  echo '</div>';//close div shopitem
                }
              ?> 
              </div>
              <script>
                  var yourCart = [];
                  // Lấy danh sách tất cả các phần tử có class "App_shopItemButton"
                  var shopItemButtons = document.querySelectorAll(".App_shopItemButton");

                  // Thêm bộ xử lý sự kiện cho mỗi thẻ "App_shopItemButton"
                  shopItemButtons.forEach(function(shopItemButton) {
                    shopItemButton.addEventListener("click", function() {

                      var product = shopItemButton.getAttribute("data-product");
                      // Thêm sản phẩm vào mảng giỏ hàng
                      yourCart.push(product);

                      // Tìm phần tử "App_inactive" tương ứng trong cùng "App_shopItemBottom" container
                      var shopItem = shopItemButton.closest(".App_shopItemBottom");
                      var checkedDiv = shopItem.querySelector(".App_inactive");

                      // Ẩn thẻ "App_shopItemButton" được bấm
                      shopItemButton.style.display = "none";
                      // Hiển thị thẻ "App_inactive" tương ứng
                      checkedDiv.style.display = "block";
                    });
                  });
                  
              </script>
              
            </div>
            
          </div>

          <div class="App_Cart">
            <div class="App_cardTop"><img src="./app/assets/nike.png" class="App_cardTopLogo"></div>

            <div class="App_cardTitle">Your Cart<span class="App_cardTitleAmount">$0.00</span></div>

            <div class="App_CartBody">
              <div>

                <div class="App_cartItem">
                  <div class="App_cartItemLeft">
                    <div class="App_cartItemImage cartItemImage" style="background-color: rgb(225, 231, 237);">
                      <div class="App_cartItemImageBlock"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1315882/air-zoom-pegasus-36-mens-running-shoe-wide-D24Mcz-removebg-preview.png"></div>
                    </div>
                  </div>
                

                  <div class="App_cartItemRight cartItemRight">
                    <div class="App_cartItemName cartItemName">Nike Air Zoom Pegasus 36</div>
                    <div class="App_cartItemPrice cartItemPrice">$108.97</div>
                    <div class="App_cartItemActions cartItemActions">
                      <div class="App_cartItemCount cartItemCount">
                        <div class="App_cartItemCountButton">-</div>
                        <div class="App_cartItemCountNumber">1</div>
                        <div class="App_cartItemCountButton">+</div>
                      </div>
                      <div class="App_cartItemRemove cartItemRemove"><img src="./app/assets/trash.png"></div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            

          </div>
    </div>
  </body>
</html> 
</html>

