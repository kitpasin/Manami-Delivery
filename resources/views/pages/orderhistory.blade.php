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
        <section id="orderList">
            <div id="loader" class="loader"></div>
            <div class="orderlist">
                <div class="orderlist-item">
                    <div class="orderlist-item-profile">
                        <div class="orderlist-item-profile-frame">
                            <figure class="orderlist-item-profile-frame-image">
                                <img src="/img/orderlist/user.png" alt="userIcon" />
                            </figure>
                        </div>
                        <div class="orderlist-item-profile-top">
                            <div class="orderlist-item-profile-top-date">
                                <p>23/05/2020</p>
                            </div>
                            <div class="orderlist-item-profile-top-id">
                                <p>ID : 123456789</p>
                            </div>
                        </div>
                        <div class="orderlist-item-profile-bottom">
                            <div class="orderlist-item-profile-bottom-notice">
                                <p>Welcome Back</p>
                            </div>
                            <div class="orderlist-item-profile-bottom-name">
                                <p>Tsubasa Hanekawap</p>
                            </div>
                        </div>
                    </div>
                    <div class="orderlist-item-list">
                        <div class="orderlist-item-list-header">
                            <div class="orderlist-item-list-header-title">
                                <p>Transaction Date</p>
                            </div>
                            <div class="orderlist-item-list-header-description">
                                <p>Tu 25-10-2023</p>
                            </div>
                        </div>
                        <div class="orderlist-item-list-group">
                            <figure class="orderlist-item-list-group-icon">
                                <img src="/img/orderlist/status.png" alt="orderStatusIcon" />
                            </figure>
                            <div class="orderlist-item-list-group-content">
                                <div class="orderlist-item-list-group-content-title">
                                    <p>Status</p>
                                </div>
                                <div class="orderlist-item-list-group-content-description">
                                    <p>Being transported</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderlist-item-list-line"></div>
                        <div class="orderlist-item-list-group">
                            <figure class="orderlist-item-list-group-icon">
                                <img src="/img/orderlist/ordernumber.png" alt="orderNumberIcon" />
                            </figure>
                            <div class="orderlist-item-list-group-content">
                                <div class="orderlist-item-list-group-content-title">
                                    <p>Order Number</p>
                                </div>
                                <div class="orderlist-item-list-group-content-description">
                                    <p>000123456789</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderlist-item-list-line"></div>
                        <div class="orderlist-item-list-group">
                            <figure class="orderlist-item-list-group-icon">
                                <img src="/img/orderlist/shippingtime.png" alt="shippingTimeIcon" />
                            </figure>
                            <div class="orderlist-item-list-group-content">
                                <div class="orderlist-item-list-group-content-title">
                                    <p>Shipping Time</p>
                                </div>
                                <div class="orderlist-item-list-group-content-description">
                                    <p>Time: AM 06:26</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderlist-item-list-line"></div>
                        <div class="orderlist-item-list-group">
                            <figure class="orderlist-item-list-group-icon">
                                <img src="/img/orderlist/typelist.png" alt="typeListIcon" />
                            </figure>
                            <div class="orderlist-item-list-group-content">
                                <div class="orderlist-item-list-group-content-title">
                                    <p>Type List</p>
                                </div>
                                <div class="orderlist-item-list-group-content-description">
                                    <p>Wash and Dry</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderlist-item-list-line"></div>
                        <div class="orderlist-item-list-group">
                            <figure class="orderlist-item-list-group-icon">
                                <img src="/img/orderlist/address.png" alt="addressIcon" />
                            </figure>
                            <div class="orderlist-item-list-group-content">
                                <div class="orderlist-item-list-group-content-title">
                                    <p>Delivery Address</p>
                                </div>
                                <div class="orderlist-item-list-group-content-description">
                                    <p>120/34-35 Moo 24 Sila Khonke...</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderlist-item-list-line"></div>
                        <div class="orderlist-item-list-group">
                            <figure class="orderlist-item-list-group-icon">
                                <img src="/img/orderlist/sum.png" alt="sumIcon" />
                            </figure>
                            <div class="orderlist-item-list-group-content">
                                <div class="orderlist-item-list-group-content-title">
                                    <p>sum buy</p>
                                </div>
                                <div class="orderlist-item-list-group-content-description">
                                    <p>550 bth</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderlist-item-list-line"></div>
                        <div class="orderlist-item-list-button">
                            <button onclick="orderDetailWashNdryPage()">
                                <figure>
                                    <img src="/img/orderlist/btnicon.png" alt="orderDetailIcon">
                                </figure>
                                ORDER DETAIL
                            </button>
                        </div>
                    </div>
                    <div class="orderlist-item-list">
                        <div class="orderlist-item-list-header">
                            <div class="orderlist-item-list-header-title">
                                <p>Transaction Date</p>
                            </div>
                            <div class="orderlist-item-list-header-description">
                                <p>Tu 25-10-2023</p>
                            </div>
                        </div>
                        <div class="orderlist-item-list-group">
                            <figure class="orderlist-item-list-group-icon">
                                <img src="/img/orderlist/status2.png" alt="orderStatusIcon2" />
                            </figure>
                            <div class="orderlist-item-list-group-content">
                                <div class="orderlist-item-list-group-content-title">
                                    <p>Status</p>
                                </div>
                                <div class="orderlist-item-list-group-content-description text-green-500">
                                    <p>Successfully Delivered</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderlist-item-list-line"></div>
                        <div class="orderlist-item-list-group">
                            <figure class="orderlist-item-list-group-icon">
                                <img src="/img/orderlist/ordernumber.png" alt="orderNumberIcon" />
                            </figure>
                            <div class="orderlist-item-list-group-content">
                                <div class="orderlist-item-list-group-content-title">
                                    <p>Order Number</p>
                                </div>
                                <div class="orderlist-item-list-group-content-description">
                                    <p>000123456789</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderlist-item-list-line"></div>
                        <div class="orderlist-item-list-group">
                            <figure class="orderlist-item-list-group-icon">
                                <img src="/img/orderlist/shippingtime.png" alt="shippingTimeIcon" />
                            </figure>
                            <div class="orderlist-item-list-group-content">
                                <div class="orderlist-item-list-group-content-title">
                                    <p>Shipping Time</p>
                                </div>
                                <div class="orderlist-item-list-group-content-description">
                                    <p>Time: AM 06:26</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderlist-item-list-line"></div>
                        <div class="orderlist-item-list-group">
                            <figure class="orderlist-item-list-group-icon">
                                <img src="/img/orderlist/typelist2.png" alt="typeListIcon2" />
                            </figure>
                            <div class="orderlist-item-list-group-content">
                                <div class="orderlist-item-list-group-content-title">
                                    <p>Type List</p>
                                </div>
                                <div class="orderlist-item-list-group-content-description">
                                    <p>Vending & cafe</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderlist-item-list-line"></div>
                        <div class="orderlist-item-list-group">
                            <figure class="orderlist-item-list-group-icon">
                                <img src="/img/orderlist/address.png" alt="addressIcon" />
                            </figure>
                            <div class="orderlist-item-list-group-content">
                                <div class="orderlist-item-list-group-content-title">
                                    <p>Delivery Address</p>
                                </div>
                                <div class="orderlist-item-list-group-content-description">
                                    <p>120/34-35 Moo 24 Sila Khonke...</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderlist-item-list-line"></div>
                        <div class="orderlist-item-list-group">
                            <figure class="orderlist-item-list-group-icon">
                                <img src="/img/orderlist/sum.png" alt="sumIcon" />
                            </figure>
                            <div class="orderlist-item-list-group-content">
                                <div class="orderlist-item-list-group-content-title">
                                    <p>sum buy</p>
                                </div>
                                <div class="orderlist-item-list-group-content-description">
                                    <p>550 bth</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderlist-item-list-line"></div>
                        <div class="orderlist-item-list-button">
                            <button onclick="orderDetailVendingNcafePage()">
                                <figure>
                                    <img src="/img/orderlist/btnicon.png" alt="orderDetailIcon">
                                </figure>
                                ORDER DETAIL
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/orderhistory.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
