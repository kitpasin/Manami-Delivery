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
        <section id="wadList">
            <div id="loader" class="loader"></div>
            <div class="wadlist">
                <div class="wadlist-item">
                    <div class="wadlist-item-header">
                        <figure class="wadlist-item-header-icon">
                            <img src="/img/wash&drylist/headericon.png" alt="headerIcon" />
                        </figure>
                        <div class="wadlist-item-header-title">
                            <p>Cart</p>
                            <figure>
                                <img src="/img/wash&drylist/usericon.png" alt="userIcon" />
                            </figure>
                        </div>
                    </div>
                    <div class="wadlist-item-list">
                        <div class="wadlist-item-list-header">
                            <div class="wadlist-item-list-header-title">
                                <p>Order list</p>
                                <b>23 list</b>
                            </div>
                            <div class="wadlist-item-list-header-description">
                                <p>The choice will affect the price of using the service.</p>
                            </div>
                        </div>
                        <div class="wadlist-item-list-content">
                            <div class="wadlist-item-list-content-group">
                                <div class="wadlist-item-list-content-group-maingroup">
                                    <figure class="wadlist-item-list-content-group-maingroup-left">
                                        <img src="/img/wash&drylist/washing.png" alt="washingIcon" />
                                    </figure>
                                    <div class="wadlist-item-list-content-group-maingroup-right">
                                        <div class="wadlist-item-list-content-group-maingroup-right-title">
                                            <p>Washing</p>
                                            <figure onclick="drop()">
                                                <img src="/img/wash&drylist/drop.png" alt="dropIcon" />
                                            </figure>
                                        </div>
                                        <div class="wadlist-item-list-content-group-maingroup-right-description">
                                            <p>Washing 10kg water clod</p>
                                            <b>60 BTH</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="wadlist-item-list-content-group-subgroup">
                                    {{-- <figure class="wadlist-item-list-content-group-subgroup-arrow">
                                        <img src="/img/wash&drylist/vector.png" alt="arrowIcon" />
                                    </figure> --}}
                                    <figure class="wadlist-item-list-content-group-subgroup-left">
                                        <img src="/img/wash&drylist/drying.png" alt="dryingIcon" />
                                    </figure>
                                    <div class="wadlist-item-list-content-group-subgroup-right">
                                        <div class="wadlist-item-list-content-group-subgroup-right-title">
                                            <p>Drying</p>
                                            <figure onclick="drop()">
                                                <img src="/img/wash&drylist/drop.png" alt="dropIcon" />
                                            </figure>
                                        </div>
                                        <div class="wadlist-item-list-content-group-subgroup-right-description">
                                            <p>Drying 14kg 37Minutes</p>
                                            <b>140 BTH</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="wadlist-item-list-content-group-detail">
                                    <p>Detail List : Red laundry basket</p>
                                </div>
                                <div class="wadlist-item-list-content-group-line"></div>
                            </div>
                            <div class="wadlist-item-list-content-group">
                                <div class="wadlist-item-list-content-group-maingroup">
                                    <figure class="wadlist-item-list-content-group-maingroup-left">
                                        <img src="/img/wash&drylist/washing.png" alt="washingIcon" />
                                    </figure>
                                    <div class="wadlist-item-list-content-group-maingroup-right">
                                        <div class="wadlist-item-list-content-group-maingroup-right-title">
                                            <p>Washing</p>
                                            <figure onclick="drop()">
                                                <img src="/img/wash&drylist/drop.png" alt="dropIcon" />
                                            </figure>
                                        </div>
                                        <div class="wadlist-item-list-content-group-maingroup-right-description">
                                            <p>Washing 10kg water clod</p>
                                            <b>60 BTH</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="wadlist-item-list-content-group-subgroup">
                                    {{-- <figure class="wadlist-item-list-content-group-subgroup-arrow">
                                        <img src="/img/wash&drylist/vector.png" alt="arrowIcon" />
                                    </figure> --}}
                                    <figure class="wadlist-item-list-content-group-subgroup-left">
                                        <img src="/img/wash&drylist/drying.png" alt="dryingIcon" />
                                    </figure>
                                    <div class="wadlist-item-list-content-group-subgroup-right">
                                        <div class="wadlist-item-list-content-group-subgroup-right-title">
                                            <p>Drying</p>
                                            <figure onclick="drop()">
                                                <img src="/img/wash&drylist/drop.png" alt="dropIcon" />
                                            </figure>
                                        </div>
                                        <div class="wadlist-item-list-content-group-subgroup-right-description">
                                            <p>Drying 14kg 37Minutes</p>
                                            <b>140 BTH</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="wadlist-item-list-content-group-detail">
                                    <p>Detail List : Red laundry basket</p>
                                </div>
                                <div class="wadlist-item-list-content-group-line"></div>
                            </div>
                        </div>
                        <div class="wadlist-item-button">
                            <div class="wadlist-item-button-receipt">
                                <div class="wadlist-item-button-receipt-title">
                                    <div class="wadlist-item-button-receipt-title-left">
                                        <p>Total</p>
                                    </div>
                                    <div class="wadlist-item-button-receipt-title-right">
                                        <p>450 BTH</p>
                                    </div>
                                </div>
                                <div class="wadlist-item-button-receipt-description">
                                    <p>Discounts and shipping are not included.</p>
                                </div>
                            </div>
                            <div class="wadlist-item-button-action">
                                <button type="button" onclick="wadPage()">
                                    <figure>
                                        <img src="/img/wash&drylist/plus.png" alt="plusIcon" />
                                        <p>Add Order</p>
                                    </figure>
                                </button>
                                <button type="button" onclick="ordersumPage()">
                                    <p>Confirm</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/wash&drycart.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
