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
    <section id="drying">
        <div id="loader" class="loader"></div>
        <div class="drying">
            <div class="drying-item">
                <div class="drying-item-header">
                    <figure class="drying-item-header-icon">
                        <img src="/img/drying/headericon.png" alt="dryingIcon" />
                    </figure>
                    <div class="drying-item-header-title">
                        <p>Drying</p>
                        <figure>
                            <img src="/img/drying/headerusericon.png" alt="userIcon" />
                        </figure>
                    </div>
                </div>
                <div class="drying-item-capacity">
                    <div class="drying-item-capacity-title">
                        <p>Capacity (kg)</p>
                    </div>
                    <div class="drying-item-capacity-description">
                        <p>The choice will affect the price of using the service.</p>
                    </div>
                    <div class="drying-item-capacity-content">
                        <div class="drying-item-capacity-content-group">
                            <figure class="drying-item-capacity-content-group-pick">
                                <img src="/img/drying/pick.png" alt="pickIcon" />
                            </figure>
                            <figure class="drying-item-capacity-content-group-icon">
                                <img src="/img/drying/capacityicon.png" alt="capacityIcon" />
                            </figure>
                            <p>14 KG</p>
                        </div>
                        <div class="drying-item-capacity-content-group">
                            <figure class="drying-item-capacity-content-group-pick">
                                <img src="/img/drying/pick.png" alt="pickIcon" />
                            </figure>
                            <figure class="drying-item-capacity-content-group-icon">
                                <img src="/img/drying/capacityicon.png" alt="capacityIcon" />
                            </figure>
                            <p>20 KG</p>
                        </div>
                        <div class="drying-item-capacity-content-group">
                            <figure class="drying-item-capacity-content-group-pick">
                                <img src="/img/drying/pick.png" alt="pickIcon" />
                            </figure>
                            <figure class="drying-item-capacity-content-group-icon">
                                <img src="/img/drying/capacityicon.png" alt="capacityIcon" />
                            </figure>
                            <p>25 KG</p>
                        </div>
                    </div>
                </div>
                <div class="drying-item-time">
                    <div class="drying-item-time-bg">
                        <div class="drying-item-time-bg-header">
                            <div class="drying-item-time-bg-header-title">
                                <p>Drying time</p>
                            </div>
                            <div class="drying-item-time-bg-header-description">
                                <p>The choice will affect the price of using the service.</p>
                            </div>
                        </div>
                        <div class="drying-item-time-bg-content">
                            <div class="drying-item-time-bg-content-group">
                                <div class="drying-item-time-bg-content-group-title">
                                    <p>Drying time</p>
                                </div>
                                <div class="drying-item-time-bg-content-group-box">
                                    <div class="drying-item-time-bg-content-group-box-1">
                                        <figure class="drying-item-time-bg-content-group-box-1-pick">
                                            <img src="/img/drying/pick.png" alt="pickIcon" />
                                        </figure>
                                        <figure class="drying-item-time-bg-content-group-box-1-time">
                                            <img src="/img/drying/time.png" alt="timeIcon" />
                                        </figure>
                                        <div class="drying-item-time-bg-content-group-box-1-title">
                                            <p>25 Minutes</p>
                                        </div>
                                        <div class="drying-item-time-bg-content-group-box-1-description">
                                            <p>60 BTH</p>
                                        </div>
                                    </div>
                                    <div class="drying-item-time-bg-content-group-box-2">
                                        <figure class="drying-item-time-bg-content-group-box-2-pick">
                                            <img src="/img/drying/pick.png" alt="pickIcon" />
                                        </figure>
                                        <figure class="drying-item-time-bg-content-group-box-2-time">
                                            <img src="/img/drying/time.png" alt="timeIcon" />
                                        </figure>
                                        <div class="drying-item-time-bg-content-group-box-2-title">
                                            <p>25 Minutes</p>
                                        </div>
                                        <div class="drying-item-time-bg-content-group-box-2-description">
                                            <p>70 BTH</p>
                                        </div>
                                    </div>
                                    <div class="drying-item-time-bg-content-group-box-3">
                                        <figure class="drying-item-time-bg-content-group-box-3-pick">
                                            <img src="/img/drying/pick.png" alt="pickIcon" />
                                        </figure>
                                        <figure class="drying-item-time-bg-content-group-box-3-time">
                                            <img src="/img/drying/time.png" alt="timeIcon" />
                                        </figure>
                                        <div class="drying-item-time-bg-content-group-box-3-title">
                                            <p>30 Minutes</p>
                                        </div>
                                        <div class="drying-item-time-bg-content-group-box-3-description">
                                            <p>100 BTH</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="drying-item-time-bg-content-specialgroup">
                                <div class="drying-item-time-bg-content-specialgroup-title">
                                    <p>Add Drying time</p>
                                </div>
                                <div class="drying-item-time-bg-content-specialgroup-box">
                                    <div class="drying-item-time-bg-content-specialgroup-box-left">
                                        <button onclick="minusTime()" type="button">
                                            <figure>
                                                <img src="/img/drying/minus.png" alt="minusIcon" />
                                            </figure>
                                        </button>
                                        <div class="drying-item-time-bg-content-specialgroup-box-left-minute">
                                            <div class="drying-item-time-bg-content-specialgroup-box-left-minute-title">
                                                <p>Minute</p>
                                            </div>
                                            <div
                                                class="drying-item-time-bg-content-specialgroup-box-left-minute-number">
                                                <p id="minute">0</p>
                                            </div>
                                        </div>
                                        <button onclick="plusTime()" type="button">
                                            <figure>
                                                <img src="/img/drying/plus.png" alt="plusIcon" />
                                            </figure>
                                        </button>
                                    </div>
                                    <div class="drying-item-time-bg-content-specialgroup-box-right">
                                        <div class="drying-item-time-bg-content-specialgroup-box-right-price">
                                            <p>Price</p>
                                            <b id="price">0</b>
                                            <p>BTH</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="drying-item-time-bg-action">
                            <p onclick="resetTime()">Cancel add time</p>
                            <button type="button">Confirm add time</button>
                        </div>
                    </div>
                </div>
                <div class="drying-item-button">
                    <div class="drying-item-button-receipt">
                        <div class="drying-item-button-receipt-title">
                            <div class="drying-item-button-receipt-title-left">
                                <figure>
                                    <img src="/img/drying/bottonicon.png" alt="buttonIcon" />
                                </figure>
                                <p>Washing</p>
                            </div>
                            <div class="drying-item-button-receipt-title-right">
                                <p>60 BTH</p>
                            </div>
                        </div>
                        <div class="drying-item-button-receipt-description">
                            <p>Previously selected item</p>
                        </div>
                    </div>
                    <div class="drying-item-button-action">
                        <button type="button" onclick="wadlistPage()">
                            <figure>
                                <img src="/img/drying/btnicon1.png" alt="buttonIcon1" />
                                23
                            </figure>
                            <p>|</p>
                            <p>802 BTH</p>
                        </button>
                        <button onclick="addDry()" type="button">
                            <figure>
                                <img src="/img/drying/btnicon2.png" alt="buttonIcon2" />
                                Add
                            </figure>
                            <p>60 BTH</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/pages/drying.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
