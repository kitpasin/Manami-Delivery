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
        <section id="washing">
            <div id="loader" class="loader"></div>
            <div class="washing">
                <div class="washing-item">
                    <div class="washing-item-header">
                        <figure class="washing-item-header-icon">
                            <img src="/img/washing/headericon.png" alt="washingIcon" />
                        </figure>
                        <div class="washing-item-header-title">
                            <p>Washing</p>
                            <figure>
                                <img src="/img/washing/headerusericon.png" alt="userIcon" />
                            </figure>
                        </div>
                    </div>
                    <div class="washing-item-type">
                        <div class="washing-item-type-capacity">
                            <div class="washing-item-type-capacity-title">
                                <p>Capacity (kg)</p>
                            </div>
                            <div class="washing-item-type-capacity-description">
                                <p>The choice will affect the price of using the service.</p>
                            </div>
                            <div class="washing-item-type-capacity-content">
                                <div class="washing-item-type-capacity-content-group">
                                    <figure class="washing-item-type-capacity-content-group-pick">
                                        <img src="/img/washing/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="washing-item-type-capacity-content-group-icon">
                                        <img src="/img/washing/capacityicon.png" alt="capacityIcon">
                                    </figure>
                                    <p>10 KG</p>
                                </div>
                                <div class="washing-item-type-capacity-content-group">
                                    <figure class="washing-item-type-capacity-content-group-pick">
                                        <img src="/img/washing/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="washing-item-type-capacity-content-group-icon">
                                        <img src="/img/washing/capacityicon.png" alt="capacityIcon">
                                    </figure>
                                    <p>14 KG</p>
                                </div>
                                <div class="washing-item-type-capacity-content-group">
                                    <figure class="washing-item-type-capacity-content-group-pick">
                                        <img src="/img/washing/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="washing-item-type-capacity-content-group-icon">
                                        <img src="/img/washing/capacityicon.png" alt="capacityIcon">
                                    </figure>
                                    <p>18 KG</p>
                                </div>
                                <div class="washing-item-type-capacity-content-group">
                                    <figure class="washing-item-type-capacity-content-group-pick">
                                        <img src="/img/washing/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="washing-item-type-capacity-content-group-icon">
                                        <img src="/img/washing/capacityicon.png" alt="capacityIcon">
                                    </figure>
                                    <p>25 KG</p>
                                </div>
                            </div>
                        </div>
                        <div class="washing-item-type-watertemp">
                            <div class="washing-item-type-watertemp-title">
                                <p>Water Temperature</p>
                            </div>
                            <div class="washing-item-type-watertemp-description">
                                <p>The choice will affect the price of using the service.</p>
                            </div>
                            <div class="washing-item-type-watertemp-content">
                                <div class="washing-item-type-watertemp-content-group">
                                    <figure class="washing-item-type-watertemp-content-group-pick">
                                        <img src="/img/washing/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="washing-item-type-watertemp-content-group-icon">
                                        <img src="/img/washing/temp2.png" alt="tempIcon">
                                    </figure>
                                    <p>Cold</p>
                                </div>
                                <div class="washing-item-type-watertemp-content-group">
                                    <figure class="washing-item-type-watertemp-content-group-pick">
                                        <img src="/img/washing/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="washing-item-type-watertemp-content-group-icon">
                                        <img src="/img/washing/temp2.png" alt="tempIcon">
                                    </figure>
                                    <p>Warm</p>
                                </div>
                                <div class="washing-item-type-watertemp-content-group">
                                    <figure class="washing-item-type-watertemp-content-group-pick">
                                        <img src="/img/washing/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="washing-item-type-watertemp-content-group-icon">
                                        <img src="/img/washing/temp3.png" alt="tempIcon">
                                    </figure>
                                    <p>Hot</p>
                                </div>
                            </div>
                        </div>
                        <div class="washing-item-type-button">
                            <button onclick="dryPage()">
                                <figure>
                                    <img src="/img/washing/plus.png" alt="plusIcon">
                                </figure>
                                Add Dry
                            </button>
                        </div>
                    </div>
                    <div class="washing-item-button">
                        <button onclick="wadlistPage()">
                            <figure>
                                <img src="/img/washing/btn1icon.png" alt="washingIcon">
                                23
                            </figure>
                            <p>|</p>
                            <p>802 BTH</p>
                        </button>
                        <button onclick="addWashing()">
                            <figure>
                                <img src="/img/washing/btn2icon.png" alt="dryingIcon">
                                Add
                            </figure>
                            <p>60 BTH</p>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/washing.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
