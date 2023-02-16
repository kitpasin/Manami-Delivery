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
        <section id="editInfo">
            <div id="loader" class="loader"></div>
            <div class="editinfo">
                <div class="editinfo-item">
                    <div class="editinfo-item-header">
                        <figure class="editinfo-item-header-icon">
                            <img src="/img/edit information/headericon.png" alt="TermOfServiceIcon" />
                        </figure>
                        <div class="editinfo-item-header-title">
                            <p>Edit Phone Number</p>
                        </div>
                    </div>
                    <div class="editinfo-item-form">
                        <div class="editinfo-item-form-title">
                            <p>Phone Number</p>
                        </div>
                        <div class="editinfo-item-form-input">
                            <input type="text" placeholder="123-456-7890" autofocus>
                        </div>
                        <div class="editinfo-item-form-line"></div>
                    </div>
                    <div class="editinfo-item-button">
                        <button onclick="infoPage()" class="editinfo-item-button-yeet">CANCEL</button>
                        <button onclick="editInfo()" class="editinfo-item-button-yoink">SAVE</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/informationedit.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
