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
        <section id="orderSummary">
            <div id="loader" class="loader"></div>
            <div class="ordersum">
                <div class="ordersum-item">
                    <div class="ordersum-item-header">
                        <figure class="ordersum-item-header-icon">
                            <img src="/img/order summary/headericon.png" alt="headerIcon" />
                        </figure>
                        <div class="ordersum-item-header-title">
                            <p>Order Summary</p>
                            <figure>
                                <img src="/img/order summary/usericon.png" alt="userIcon" />
                            </figure>
                        </div>
                    </div>
                    <div class="ordersum-item-ordernum">
                        <p>Order Number</p>
                        <b>000123456789</b>
                    </div>
                    <div class="ordersum-item-line"></div>
                    <div class="ordersum-item-address">
                        <div class="ordersum-item-address-title">
                            <p>Delivery Address</p>
                        </div>
                        <div class="ordersum-item-address-distance">
                            <div class="ordersum-item-address-distance-group">
                                <div class="ordersum-item-address-distance-group-title">
                                    <p>Address</p>
                                </div>
                                <div class="ordersum-item-address-distance-group-description">
                                    <p>120/34-35 Moo 24 Sila Khonkean Kho...</p>
                                    <figure>
                                        <a href="/map"><img src="/img/order summary/pin.png"
                                                alt="pinIcon" /></a>
                                    </figure>
                                </div>
                                <div class="ordersum-item-address-distance-group-detail">
                                    <input type="text"
                                        placeholder="More Detail : Lorem ipsum dolor sit amet consectetur. Cond..." />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ordersum-item-line"></div>
                    <div class="ordersum-item-phone">
                        <div class="ordersum-item-phone-title">
                            <p>Your Phone Number</p>
                        </div>
                        <div class="ordersum-item-phone-number">
                            <input type="text" placeholder="Please enter your phone number : 089-123-4567" />
                        </div>
                    </div>
                    <div class="ordersum-item-line"></div>
                    <div class="ordersum-item-branch">
                        <div class="ordersum-item-branch-title">
                            <p>Choose a Branch</p>
                        </div>
                        <div class="ordersum-item-branch-content">
                            <div class="ordersum-item-branch-content-title">
                                <p>a branch</p>
                            </div>
                            <div class="ordersum-item-branch-content-description">
                                <p>Manami super center</p>
                            </div>
                        </div>
                    </div>
                    <div class="ordersum-item-line"></div>
                    <!-- <div class="ordersum-item-pickuptime">
            <div class="ordersum-item-pickuptime-title">
              <p>Pick-up Time</p>
            </div>
            <div class="ordersum-item-pickuptime-description">
              <p>Date and Time Pick-up</p>
            </div>
            <div class="ordersum-item-pickuptime-content">
              <div class="ordersum-item-pickuptime-content-group">
                <div class="ordersum-item-pickuptime-content-group-title">
                  <p>Pick up</p>
                </div>
                <div class="ordersum-item-pickuptime-content-group-description">
                  <p>Wednesday,November 6,2022 Time: AM 06:26</p>
                </div>
              </div>
              <div class="ordersum-item-pickuptime-content-group">
                <div class="ordersum-item-pickuptime-content-group-title">
                  <p>Drop off</p>
                </div>
                <div class="ordersum-item-pickuptime-content-group-description">
                  <p>Wednesday,November 6,2022 Time: AM 10:26</p>
                </div>
              </div>
            </div>
          </div> -->
                    <div class="ordersum-item-shippingtime">
                        <div class="ordersum-item-shippingtime-title">
                            <p>Shipping Time</p>
                        </div>
                        <div class="ordersum-item-shippingtime-description">
                            <p>Shipping Time</p>
                        </div>
                        <div class="ordersum-item-shippingtime-content">
                            <div class="ordersum-item-shippingtime-content-title">
                                <p>Time</p>
                            </div>
                            <div class="ordersum-item-shippingtime-content-description">
                                <p>Time: AM 06:26</p>
                            </div>
                        </div>
                    </div>
                    <div class="ordersum-item-line"></div>
                    <div class="ordersum-item-list">
                        <div class="ordersum-item-list-header">
                            <div class="ordersum-item-list-header-title">
                                <p>List</p>
                            </div>
                            <div class="ordersum-item-list-header-description">
                                <p>Wash and Dry list</p>
                            </div>
                        </div>
                        <div class="ordersum-item-list-content">
                            <div class="ordersum-item-list-content-group">
                                <div class="ordersum-item-list-content-group-maingroup">
                                    <figure class="ordersum-item-list-content-group-maingroup-left">
                                        <img src="/img/dish/dishimage.png" alt="dishImage1" />
                                    </figure>
                                    <div class="ordersum-item-list-content-group-maingroup-right">
                                        <div class="ordersum-item-list-content-group-maingroup-right-title">
                                            <p>Washing</p>
                                        </div>
                                        <div class="ordersum-item-list-content-group-maingroup-right-description">
                                            <p>Washing 10kg water clod</p>
                                            <b>60 BTH</b>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="ordersum-item-list-content-group-subgroup">
                                    <figure class="ordersum-item-list-content-group-subgroup-arrow">
                                        <img src="/img/order summary/vector.png" alt="arrowIcon" />
                                    </figure>
                                    <figure class="ordersum-item-list-content-group-subgroup-left">
                                        <img src="/img/order summary/drying.png" alt="dryingIcon" />
                                    </figure>
                                    <div class="ordersum-item-list-content-group-subgroup-right">
                                        <div class="ordersum-item-list-content-group-subgroup-right-title">
                                            <p>Drying</p>
                                        </div>
                                        <div class="ordersum-item-list-content-group-subgroup-right-description">
                                            <p>Drying 14kg 37Minutes</p>
                                            <b>140 BTH</b>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="ordersum-item-list-content-group-line"></div>
                                <div class="ordersum-item-list-content-group-maingroup">
                                    <figure class="ordersum-item-list-content-group-maingroup-left">
                                        <img src="/img/bottle/bottleimg.png" alt="bottleImage1" />
                                    </figure>
                                    <div class="ordersum-item-list-content-group-maingroup-right">
                                        <div class="ordersum-item-list-content-group-maingroup-right-title">
                                            <p>Washing</p>
                                        </div>
                                        <div class="ordersum-item-list-content-group-maingroup-right-description">
                                            <p>Washing 10kg water clod</p>
                                            <b>60 BTH</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="ordersum-item-list-content-group-line"></div>
                            </div>
                            <div class="ordersum-item-list-content-sum">
                                <div class="ordersum-item-list-content-sum-title">
                                    <p>SubTotal</p>
                                    <p>Shipped</p>
                                    <b>Total</b>
                                </div>
                                <div class="ordersum-item-list-content-sum-description">
                                    <p>450 BTH</p>
                                    <p>100 BTH</p>
                                    <b>550 BTH</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ordersum-item-line"></div>
                    <div class="ordersum-item-payment">
                        <div class="ordersum-item-payment-header">
                            <div class="ordersum-item-payment-header-title">
                                <p>Payment</p>
                            </div>
                            <div class="ordersum-item-payment-header-description">
                                <p>Specify payment method</p>
                            </div>
                        </div>
                        <div class="ordersum-item-payment-type">
                            <div class="ordersum-item-payment-type-group">
                                <figure>
                                    <img src="/img/order summary/pick.png" alt="pickIcon" />
                                </figure>
                                <p>Transfer money</p>
                            </div>
                            <div class="ordersum-item-payment-type-group">
                                <figure>
                                    <img src="/img/order summary/pick.png" alt="pickIcon" />
                                </figure>
                                <p>Cash on delivery</p>
                            </div>
                        </div>
                        <div class="ordersum-item-payment-bank">
                            <div class="ordersum-item-payment-bank-group">
                                <figure>
                                    <img src="/img/order summary/bankicon1.png" alt="bankIcon1" />
                                </figure>
                                <div class="ordersum-item-payment-bank-group-content">
                                    <div class="ordersum-item-payment-bank-group-content-title">
                                        <p>Siam Commercial Bank Public Company Limited</p>
                                    </div>
                                    <div class="ordersum-item-payment-bank-group-content-description">
                                        <p>123-456-7890 Mr.Manami vendingcafe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ordersum-item-payment-bank-line"></div>
                            <div class="ordersum-item-payment-bank-group">
                                <figure>
                                    <img src="/img/order summary/bankicon2.png" alt="bankIcon2" />
                                </figure>
                                <div class="ordersum-item-payment-bank-group-content">
                                    <div class="ordersum-item-payment-bank-group-content-title">
                                        <p>BANGKOK BANK PUBLIC COMPANY LIMITED</p>
                                    </div>
                                    <div class="ordersum-item-payment-bank-group-content-description">
                                        <p>123-456-7890 Mr.Manami vendingcafe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ordersum-item-payment-bank-line"></div>
                            <div class="ordersum-item-payment-bank-group">
                                <figure>
                                    <img src="/img/order summary/bankicon3.png" alt="bankIcon3" />
                                </figure>
                                <div class="ordersum-item-payment-bank-group-content">
                                    <div class="ordersum-item-payment-bank-group-content-title">
                                        <p>Bank of Ayudhya Public Company Limited</p>
                                    </div>
                                    <div class="ordersum-item-payment-bank-group-content-description">
                                        <p>123-456-7890 Mr.Manami vendingcafe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ordersum-item-payment-bank-line"></div>
                        </div>
                        <div class="ordersum-item-payment-slip">
                            <div class="ordersum-item-payment-slip-header">
                                <div class="ordersum-item-payment-slip-header-title">
                                    <p>Upload slip</p>
                                </div>
                                <div class="ordersum-item-payment-slip-header-description">
                                    <p>Please upload slip to verify your payment.</p>
                                </div>
                            </div>
                            <div class="ordersum-item-payment-slip-content">
                                <div class="ordersum-item-payment-slip-content-left">
                                    <figure class="ordersum-item-payment-slip-content-left-upload">
                                        <img src="/img/order summary/upload.png" alt="uploadIcon" />
                                    </figure>
                                </div>
                                <div class="ordersum-item-payment-slip-content-right">
                                    <p>File Supported JPG,PNG maximum size 2MB</p>
                                    <button onclick="uploadFile()" type="button">Browse file</button>
                                    <p>or</p>
                                    <button type="button">Take a photo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ordersum-item-button">
                        <div class="ordersum-item-button-title">
                            <p>Total</p>
                            <b>550 BTH</b>
                        </div>
                        <div class="ordersum-item-button-description">
                            <p>The price includes all expenses.</p>
                        </div>
                        <button type="button">Confirm</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/vending&cafepayment.js"></script>
</body>

</html>
