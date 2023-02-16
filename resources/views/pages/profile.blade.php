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
        <section id="profile">
            <div id="loader" class="loader"></div>
            <div class="profile">
                <div class="profile-item">
                    <div class="profile-item-header">
                        <div class="profile-item-header-box">
                            <figure class="profile-item-header-box-image">
                                <img src="/img/profile/usericon.png" alt="userIcon" />
                            </figure>
                            <div class="profile-item-header-box-top">
                                <p>23/05/2020</p>
                                <p>ID : 123456789</p>
                            </div>
                            <div class="profile-item-header-box-bot">
                                <p>Welcome Back</p>
                                <b>Tsubasa Hanekawa</b>
                            </div>
                        </div>
                    </div>
                    <div class="profile-item-content">
                        <div class="profile-item-content-box">
                            <div class="profile-item-content-box-title">
                                <p>Choose to edit information or review your order.</p>
                            </div>
                            <div class="profile-item-content-box-list">
                                <figure onclick="infoPage()">
                                    <img src="/img/profile/infoicon.png" alt="informationIcon" />
                                    <p>Information</p>
                                </figure>
                                <figure onclick="orderhistoryPage()">
                                    <img src="/img/profile/ordericon.png" alt="orderListIcon" />
                                    <p>Order history</p>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="profile-item-button">
                        <button onclick="signOut()">SIGN OUT</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/profile.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
