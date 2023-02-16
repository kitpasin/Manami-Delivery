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
        <section id="home">
            <div id="loader" class="loader"></div>
            <div class="home">
                <div class="home-item">
                    <div class="home-item-logo">
                        <figure class="home-item-logo-mainlogo">
                            <img src="/img/home/mainlogogroup.png" alt="MainLogo" />
                        </figure>
                        <figure class="home-item-logo-textlogo">
                            <img src="/img/home/textlogo1.png" alt="TextLogo1" />
                            <img src="/img/home/textlogo2.png" alt="TextLogo2" />
                        </figure>
                    </div>
                    <div class="home-item-button">
                        <button onclick="wadPage()" class="home-item-button-washndry">WASH & DRY</button>
                        <button onclick="vendingPage()" class="home-item-button-vendingncafe">VENDING & CAFE</button>
                    </div>
                    <div class="home-item-user">
                        <figure class="home-item-user-icon">
                            <a href="/profile"><img src="/img/home/user.png" alt="userIcon"></a>
                        </figure>
                        <div class="home-item-user-notice">
                            <p>Welcome Back</p>
                        </div>
                        <div class="home-item-user-name">
                            <p>Tsubasa Hanekawa</p>
                        </div>
                    </div>
                    <div class="home-item-footer">
                        <div class="home-item-footer-link">
                            <a href="/termofservice">Terms of Service</a>
                            <a href="/privacypolicy">Privacy Policy</a>
                        </div>
                        <div class="home-item-footer-copyright">
                            <p>Copyright © 2020-2023 Manami Vending Cafe. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/home.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
