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
        <section id="index">
            <div id="loader" class="loader"></div>
            <div class="index">
                <div class="index-item">
                    <div class="index-item-logo">
                        <figure class="index-item-logo-mainlogo">
                            <img src="/img/home/mainlogogroup.png" alt="MainLogo" />
                        </figure>
                        <figure class="index-item-logo-textlogo">
                            <img src="/img/home/textlogo1.png" alt="TextLogo1" />
                            <img src="/img/home/textlogo2.png" alt="TextLogo2" />
                        </figure>
                    </div>
                    <div class="index-item-button">
                        <button onclick="wadPage()" class="index-item-button-washndry">WASH & DRY</button>
                        <button onclick="vendingPage()" class="index-item-button-vendingncafe">VENDING & CAFE</button>
                        <div class="index-item-button-line"></div>
                        <button onclick="loginPage()" class="index-item-button-login">LOGIN</button>
                    </div>
                    <div class="index-item-footer">
                        <div class="index-item-footer-link">
                            <a href="/termofservice">Terms of Service</a>
                            <a href="/privacypolicy">Privacy Policy</a>
                        </div>
                        <div class="index-item-footer-copyright">
                            <p>Copyright © 2020-2023 Manami Vending Cafe. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/index.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
