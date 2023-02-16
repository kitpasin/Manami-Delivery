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
    <main>
        <section id="bottle">
            <div id="loader" class="loader"></div>
            <div class="bottle">
                <div class="bottle-item">
                    <div class="bottle-item-image">
                        <figure>
                            <img src="/img/glass/glassimg.png" alt="glassImage" />
                            <img src="/img/bottle/shadow.png" alt="shadowImage" />
                        </figure>
                    </div>
                    <div class="bottle-item-content">
                        <div class="bottle-item-content-title">
                            <p>Ice Latte</p>
                        </div>
                        <div class="bottle-item-content-address">
                            <div class="bottle-item-content-address-title">
                                <figure>
                                    <img src="/img/bottle/pinicon.png" alt="pinIcon" />
                                </figure>
                                <p>About Products</p>
                            </div>
                            <div class="bottle-item-content-address-description">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur. Nislei nibhiaculis aliquam cursus mus nisi
                                    faucine...
                                </p>
                            </div>
                            <div class="bottle-item-content-address-price">
                                <p>60 BTH</p>
                            </div>
                        </div>
                    </div>
                    <div class="bottle-item-quantity">
                        <div class="bottle-item-quantity-box">
                            <button onclick="minusQuantity()" class="bottle-item-quantity-box-left">
                                <figure>
                                    <img src="/img/bottle/minus.png" alt="minusIcon" />
                                </figure>
                            </button>
                            <div class="bottle-item-quantity-box-mid">
                                <p>Quantity</p>
                                <div class="bottle-item-quantity-box-mid-number">
                                    <p id="quantity">0</p>
                                </div>
                            </div>
                            <button onclick="plusQuantity()" class="bottle-item-quantity-box-right">
                                <figure>
                                    <img src="/img/bottle/plus.png" alt="plusIcon" />
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="bottle-item-button">
                        <button onclick="foodNdrinkPage()" class="bottle-item-button-content">
                            <div class="bottle-item-button-content-left">
                                <figure>
                                    <img src="/img/bottle/carticon.png" alt="cartIcon" />
                                </figure>
                                <p>Add to cart</p>
                            </div>
                            <div class="bottle-item-button-content-right">
                                <p>Price</p>
                                <b>120 BTH</b>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/drink.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
