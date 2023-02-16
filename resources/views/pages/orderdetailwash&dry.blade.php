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
        <section id="orderDetail">
            <div id="loader" class="loader"></div>
            <div class="orderdetail">
                <div class="orderdetail-item">
                    <div class="orderdetail-item-header">
                        <figure class="orderdetail-item-header-icon">
                            <img src="/img/orderdetail/headericon.png" alt="orderDetailIcon" />
                        </figure>
                        <div class="orderdetail-item-header-title">
                            <p>Order Detail</p>
                        </div>
                    </div>
                    <div class="orderdetail-item-list">
                        <div class="orderdetail-item-list-header">
                            <div class="orderdetail-item-list-header-title">
                                <p>Order Number</p>
                            </div>
                            <div class="orderdetail-item-list-header-description">
                                <p>000123456789</p>
                            </div>
                        </div>
                        <div class="orderdetail-item-list-group">
                            <figure class="orderdetail-item-list-group-icon">
                                <img src="/img/orderdetail/status.png" alt="statusIcon" />
                            </figure>
                            <div class="orderdetail-item-list-group-content">
                                <div class="orderdetail-item-list-group-content-title">
                                    <p>Status</p>
                                </div>
                                <div class="orderdetail-item-list-group-content-description">
                                    <p>Being transported</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderdetail-item-list-line"></div>
                        <div class="orderdetail-item-list-group">
                            <figure class="orderdetail-item-list-group-icon">
                                <img src="/img/orderdetail/date.png" alt="dateIcon" />
                            </figure>
                            <div class="orderdetail-item-list-group-content">
                                <div class="orderdetail-item-list-group-content-title">
                                    <p>Transaction Date</p>
                                </div>
                                <div class="orderdetail-item-list-group-content-description">
                                    <p>Tu 25-10-2023</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderdetail-item-list-line"></div>
                        <div class="orderdetail-item-list-group">
                            <figure class="orderdetail-item-list-group-icon">
                                <img src="/img/orderdetail/shippingtime.png" alt="shippingTimeIcon" />
                            </figure>
                            <div class="orderdetail-item-list-group-content">
                                <div class="orderdetail-item-list-group-content-title">
                                    <p>Shipping Time</p>
                                </div>
                                <div class="orderdetail-item-list-group-content-description">
                                    <p>Time: AM 06:26</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderdetail-item-list-line"></div>
                        <div class="orderdetail-item-list-group">
                            <figure class="orderdetail-item-list-group-icon">
                                <img src="/img/orderdetail/typelist.png" alt="typeListIcon" />
                            </figure>
                            <div class="orderdetail-item-list-group-content">
                                <div class="orderdetail-item-list-group-content-title">
                                    <p>Type List</p>
                                </div>
                                <div class="orderdetail-item-list-group-content-description">
                                    <p>Wash and Dry</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderdetail-item-list-line"></div>
                        <!-- Address -->
                        <div class="orderdetail-item-list-specialgroup">
                            <figure class="orderdetail-item-list-specialgroup-icon">
                                <img id="addressIcon" src="/img/orderdetail/address.png" alt="addressIcon" />
                            </figure>
                            <div class="orderdetail-item-list-specialgroup-address">
                                <div class="orderdetail-item-list-specialgroup-address-title">
                                    <p>Delivery Address</p>
                                </div>
                                <div class="orderdetail-item-list-specialgroup-address-content">
                                    <div class="orderdetail-item-list-specialgroup-address-content-title">
                                        <p>Pick up</p>
                                    </div>
                                    <div class="orderdetail-item-list-specialgroup-address-content-description">
                                        <p>120/34-35 Moo 24 Mueang Khon Kaen District, Khon Kaen 40000</p>
                                    </div>
                                    <div class="orderdetail-item-list-specialgroup-address-content-detail">
                                        <p>More Detail : Lorem ipsum dolor sit amet consectetu...</p>
                                    </div>
                                </div>
                                <div class="orderdetail-item-list-specialgroup-address-line"></div>
                                <div class="orderdetail-item-list-specialgroup-address-content">
                                    <div class="orderdetail-item-list-specialgroup-address-content-title">
                                        <p>Drop off</p>
                                    </div>
                                    <div class="orderdetail-item-list-specialgroup-address-content-description">
                                        <p>120/34-35 Moo 24 Mueang Khon Kaen District, Khon Kaen 40000</p>
                                    </div>
                                    <div class="orderdetail-item-list-specialgroup-address-content-detail">
                                        <p>More Detail : Lorem ipsum dolor sit amet consectetu...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="orderdetail-item-list-line"></div>
                        <div class="orderdetail-item-list-specialgroup">
                            <figure class="orderdetail-item-list-specialgroup-icon">
                                <img src="/img/orderdetail/pickup.png" alt="pickupIcon" />
                            </figure>
                            <div class="orderdetail-item-list-specialgroup-address">
                                <div class="orderdetail-item-list-specialgroup-address-title">
                                    <p>Date and Time Pick-up</p>
                                </div>
                                <div class="orderdetail-item-list-specialgroup-address-content">
                                    <div class="orderdetail-item-list-specialgroup-address-content-title">
                                        <p>Pick up</p>
                                    </div>
                                    <div class="orderdetail-item-list-specialgroup-address-content-description">
                                        <p>Wednesday,November 6,2022 Time: AM 06:26</p>
                                    </div>
                                </div>
                                <div class="orderdetail-item-list-specialgroup-address-line"></div>
                                <div class="orderdetail-item-list-specialgroup-address-content">
                                    <div class="orderdetail-item-list-specialgroup-address-content-title">
                                        <p>Drop off</p>
                                    </div>
                                    <div class="orderdetail-item-list-specialgroup-address-content-description">
                                        <p>Wednesday,November 6,2022 Time: AM 10:26</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="orderdetail-item-list-line"></div>
                        <div class="orderdetail-item-list-group">
                            <figure class="orderdetail-item-list-group-icon">
                                <img src="/img/orderdetail/phone.png" alt="phoneIcon" />
                            </figure>
                            <div class="orderdetail-item-list-group-content">
                                <div class="orderdetail-item-list-group-content-title">
                                    <p>Phone Number</p>
                                </div>
                                <div class="orderdetail-item-list-group-content-description">
                                    <p>012-345-6789</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderdetail-item-list-line"></div>
                        <div class="orderdetail-item-list-group">
                            <figure class="orderdetail-item-list-group-icon">
                                <img src="/img/orderdetail/branch.png" alt="branchIcon" />
                            </figure>
                            <div class="orderdetail-item-list-group-content">
                                <div class="orderdetail-item-list-group-content-title">
                                    <p>a branch</p>
                                </div>
                                <div class="orderdetail-item-list-group-content-description">
                                    <p>Manami super center</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderdetail-item-list-line"></div>
                        <div class="orderdetail-item-list-group">
                            <figure class="orderdetail-item-list-group-icon">
                                <img src="/img/orderdetail/payment.png" alt="paymentIcon" />
                            </figure>
                            <div class="orderdetail-item-list-group-content">
                                <div class="orderdetail-item-list-group-content-title">
                                    <p>Payment</p>
                                </div>
                                <div class="orderdetail-item-list-group-content-description">
                                    <p>Transfer money</p>
                                    <figure>
                                        <a href="/profile/orderhistory/orderdetailwash&dry/receipt"><img src="/img/orderdetail/receipt.png"
                                                alt="receiptIcon"></a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="orderdetail-item-list-line"></div>
                        <div class="orderdetail-item-list-group">
                            <figure class="orderdetail-item-list-group-icon">
                                <img src="/img/orderdetail/camera.png" alt="camera" />
                            </figure>
                            <div class="orderdetail-item-list-group-content">
                                <div class="orderdetail-item-list-group-content-title">
                                    <p>Photo</p>
                                </div>
                                <div class="orderdetail-item-list-group-content-description">
                                    <p>Photo evidence</p>
                                    <figure>
                                        <a href="/profile/orderhistory/orderdetailwash&dry/evidence"><img src="/img/orderdetail/img.png"
                                                alt="imgIcon"></a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="orderdetail-item-list-line"></div>
                    </div>
                    <div class="orderdetail-item-receipt">
                        <div class="orderdetail-item-receipt-header">
                            <div class="orderdetail-item-receipt-header-title">
                                <p>List</p>
                            </div>
                            <div class="orderdetail-item-receipt-header-description">
                                <p>Wash and Dry list</p>
                            </div>
                        </div>
                        <div class="orderdetail-item-receipt-group">
                            <figure class="orderdetail-item-receipt-group-icon">
                                <img src="/img/orderdetail/washing.png" alt="washIcon">
                            </figure>
                            <div class="orderdetail-item-receipt-group-content">
                                <div class="orderdetail-item-receipt-group-content-title">
                                    <p>Washing</p>
                                </div>
                                <div class="orderdetail-item-receipt-group-content-description">
                                    <p>Washing 10kg water clod</p>
                                </div>
                                <div class="orderdetail-item-receipt-group-content-price">
                                    <p>60 BTH</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderdetail-item-receipt-line"></div>
                        <div class="orderdetail-item-receipt-subgroup">
                            <figure class="orderdetail-item-receipt-subgroup-icon">
                                <img src="/img/orderdetail/washing.png" alt="washIcon">
                            </figure>
                            <div class="orderdetail-item-receipt-subgroup-content">
                                <div class="orderdetail-item-receipt-subgroup-content-title">
                                    <p>Drying</p>
                                </div>
                                <div class="orderdetail-item-receipt-subgroup-content-description">
                                    <p>Drying 14kg  37Minutes</p>
                                </div>
                                <div class="orderdetail-item-receipt-subgroup-content-price">
                                    <p>140 BTH</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderdetail-item-receipt-line"></div>
                        <div class="orderdetail-item-receipt-group">
                            <figure class="orderdetail-item-receipt-group-icon">
                                <img src="/img/orderdetail/washing.png" alt="washIcon">
                            </figure>
                            <div class="orderdetail-item-receipt-group-content">
                                <div class="orderdetail-item-receipt-group-content-title">
                                    <p>Washing</p>
                                </div>
                                <div class="orderdetail-item-receipt-group-content-description">
                                    <p>Washing 10kg water clod</p>
                                </div>
                                <div class="orderdetail-item-receipt-group-content-price">
                                    <p>60 BTH</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderdetail-item-receipt-line"></div>
                        <div class="orderdetail-item-receipt-group">
                            <figure class="orderdetail-item-receipt-group-icon">
                                <img src="/img/orderdetail/dry.png" alt="dryIcon">
                            </figure>
                            <div class="orderdetail-item-receipt-group-content">
                                <div class="orderdetail-item-receipt-group-content-title">
                                    <p>Drying</p>
                                </div>
                                <div class="orderdetail-item-receipt-group-content-description">
                                    <p>Drying 25kg 30Minutes</p>
                                </div>
                                <div class="orderdetail-item-receipt-group-content-price">
                                    <p>100 BTH</p>
                                </div>
                            </div>
                        </div>
                        <div class="orderdetail-item-receipt-line"></div>
                        <div class="orderdetail-item-receipt-sum">
                            <div class="orderdetail-item-receipt-sum-group">
                                <div class="orderdetail-item-receipt-sum-group-title">
                                    <p>SubTotal</p>
                                </div>
                                <div class="orderdetail-item-receipt-sum-group-description">
                                    <p>450 BTH</p>
                                </div>
                            </div>
                            <div class="orderdetail-item-receipt-sum-group">
                                <div class="orderdetail-item-receipt-sum-group-title">
                                    <p>Shipped</p>
                                </div>
                                <div class="orderdetail-item-receipt-sum-group-description">
                                    <p>100 BTH</p>
                                </div>
                            </div>
                            <div class="orderdetail-item-receipt-sum-specialgroup">
                                <div class="orderdetail-item-receipt-sum-specialgroup-title">
                                    <p>Total</p>
                                </div>
                                <div class="orderdetail-item-receipt-sum-specialgroup-description">
                                    <p>550 BTH</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/orderdetailwash&dry.js"></script>
</body>

</html>
