<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style.css" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Manami</title>
</head>

<body>
    <section id="dish">
        <div id="loader" class="loader"></div>
        <div class="dish">
            <div class="dish-item">
                <div class="dish-item-image">
                    <figure>
                        <img src="/img/snack/snackimg.png" alt="snackImage" />
                        <img src="/img/dish/shadow.png" alt="shadowImage" />
                    </figure>
                </div>
                <div class="dish-item-content">
                    <div class="dish-item-content-title">
                        <p>Grilled Chicken</p>
                    </div>
                    <div class="dish-item-content-address">
                        <div class="dish-item-content-address-title">
                            <figure>
                                <img src="/img/dish/addresspin.png" alt="pinIcon" />
                            </figure>
                            <p>About Products</p>
                        </div>
                        <div class="dish-item-content-address-description">
                            <p>
                                Lorem ipsum dolor sit amet consectetur. Nislei nibhiaculis aliquam cursus mus nisi
                                faucine...
                            </p>
                        </div>
                        <div class="dish-item-content-address-price">
                            <p>60 BTH</p>
                        </div>
                    </div>
                </div>
                <div class="dish-item-quantity">
                    <div class="dish-item-quantity-box">
                        <button onclick="minusTime()" class="dish-item-quantity-box-left">
                            <figure>
                                <img src="/img/dish/minus.png" alt="minusIcon" />
                            </figure>
                        </button>
                        <div class="dish-item-quantity-box-mid">
                            <p>Quantity</p>
                            <div class="dish-item-quantity-box-mid-number">
                                <p id="quantity">0</p>
                            </div>
                        </div>
                        <button onclick="plusTime()" class="dish-item-quantity-box-right">
                            <figure>
                                <img src="/img/dish/plus.png" alt="plusIcon" />
                            </figure>
                        </button>
                    </div>
                </div>
                <div class="dish-item-button">
                    <button onclick="foodNdrinkPage()" class="dish-item-button-content">
                        <div class="dish-item-button-content-left">
                            <figure>
                                <img src="/img/dish/carticon.png" alt="cartIcon" />
                            </figure>
                            <p>Add to cart</p>
                        </div>
                        <div class="dish-item-button-content-right">
                            <p>Price</p>
                            <b>120 BTH</b>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/pages/food.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
