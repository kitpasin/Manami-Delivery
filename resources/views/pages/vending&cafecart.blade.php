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
        <section id="cart">
            <div id="loader" class="loader"></div>
            <div class="cart">
                <div class="cart-item">
                    <div class="cart-item-header">
                        <figure class="cart-item-header-icon">
                            <img src="/img/cart/headericon.png" alt="headerIcon" />
                        </figure>
                        <div class="cart-item-header-title">
                            <p>Cart</p>
                            <figure>
                                <img src="/img/cart/usericon.png" alt="userIcon" />
                            </figure>
                        </div>
                    </div>
                    <div class="cart-item-list">
                        <div class="cart-item-list-header">
                            <div class="cart-item-list-header-title">
                                <p>Order list</p>
                                <b>23 list</b>
                            </div>
                            <div class="cart-item-list-header-description">
                                <p>The choice will affect the price of using the service.</p>
                            </div>
                        </div>
                        <div class="cart-item-list-content">
                            <div class="cart-item-list-content-group">
                                <div class="cart-item-list-content-group-left">
                                    <figure>
                                        <img src="/img/cart/order1.png" alt="orderImage1" />
                                    </figure>
                                </div>
                                <div class="cart-item-list-content-group-right">
                                    <div class="cart-item-list-content-group-right-top">
                                        <p>Food/Easy food</p>
                                        <div class="cart-item-list-content-group-right-top-right">
                                            <p>Mi: Wram Food</p>
                                            <figure onclick="drop()">
                                                <img src="/img/cart/dropicon.png" alt="dropIcon" />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="cart-item-list-content-group-right-mid">
                                        <p>Grilled Chicken</p>
                                    </div>
                                    <div class="cart-item-list-content-group-right-bot">
                                        <div class="cart-item-list-content-group-right-bot-left">
                                            <p>60 BTH</p>
                                        </div>
                                        <div class="cart-item-list-content-group-right-bot-right">
                                            <figure onclick="minusQuantity()">
                                                <img src="/img/cart/minus.png" alt="minusIcon" />
                                            </figure>
                                            <p class="quantity">0</p>
                                            <figure onclick="plusQuantity()">
                                                <img src="/img/cart/plus.png" alt="plusIcon" />
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item-list-content-line"></div>
                            <div class="cart-item-list-content-group">
                                <div class="cart-item-list-content-group-left">
                                    <figure>
                                        <img src="/img/cart/order2.png" alt="orderImage2" />
                                    </figure>
                                </div>
                                <div class="cart-item-list-content-group-right">
                                    <div class="cart-item-list-content-group-right-top">
                                        <p>Food/Easy food</p>
                                        <div class="cart-item-list-content-group-right-top-right">
                                            <p>Mi: Wram Food</p>
                                            <figure onclick="drop()">
                                                <img src="/img/cart/dropicon.png" alt="dropIcon" />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="cart-item-list-content-group-right-mid">
                                        <p>Grilled Chicken</p>
                                    </div>
                                    <div class="cart-item-list-content-group-right-bot">
                                        <div class="cart-item-list-content-group-right-bot-left">
                                            <p>60 BTH</p>
                                        </div>
                                        <div class="cart-item-list-content-group-right-bot-right">
                                            <figure onclick="minusQuantity()">
                                                <img src="/img/cart/minus.png" alt="minusIcon" />
                                            </figure>
                                            <p class="quantity">0</p>
                                            <figure onclick="plusQuantity()">
                                                <img src="/img/cart/plus.png" alt="plusIcon" />
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item-list-content-line"></div>
                        </div>
                    </div>
                    <div class="cart-item-button">
                        <div class="cart-item-button-receipt">
                            <div class="cart-item-button-receipt-title">
                                <div class="cart-item-button-receipt-title-left">
                                    <p>Total</p>
                                </div>
                                <div class="cart-item-button-receipt-title-right">
                                    <p>450 BTH</p>
                                </div>
                            </div>
                            <div class="cart-item-button-receipt-description">
                                <p>Discounts and shipping are not included.</p>
                            </div>
                        </div>
                        <div class="cart-item-button-action">
                            <button onclick="foodNdrinkPage()">
                                <figure>
                                    <img src="/img/cart/btnplus.png" alt="plusIcon" />
                                    <p>Add Order</p>
                                </figure>
                            </button>
                            <button onclick="vendingNcafepaymentPage()">
                                <p>Confirm</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/vending&cafecart.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
