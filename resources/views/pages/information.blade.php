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
        <section id="information">
            <div id="loader" class="loader"></div>
            <div class="info">
                <div class="info-item">
                    <div class="info-item-profile">
                        <div class="info-item-profile-frame">
                            <figure class="info-item-profile-frame-image">
                                <img src="/img/information/user.png" alt="userIcon" />
                            </figure>
                        </div>
                        <figure class="info-item-profile-icon">
                            <img src="/img/information/camera.png" alt="camera" />
                        </figure>
                        <div class="info-item-profile-top">
                            <div class="info-item-profile-top-date">
                                <p>23/05/2020</p>
                            </div>
                            <div class="info-item-profile-top-id">
                                <p>ID : 123456789</p>
                            </div>
                        </div>
                        <div class="info-item-profile-bottom">
                            <div class="info-item-profile-bottom-notice">
                                <p>Welcome Back</p>
                            </div>
                            <div class="info-item-profile-bottom-name">
                                <p>Tsubasa Hanekawap</p>
                            </div>
                        </div>
                    </div>
                    <div class="info-item-information">
                        <div class="info-item-information-title">
                            <p>Personal Information</p>
                        </div>
                        <div class="info-item-information-group">
                            <div class="info-item-information-group-title">
                                <p>Name</p>
                            </div>
                            <div class="info-item-information-group-content">
                                <p>Tsubasa Hanekawa</p>
                                <figure class="info-item-information-group-content-icon">
                                    <a href="/profile/information/edit"><img src="/img/information/edit.png"
                                            alt="editIcon" /></a>
                                </figure>
                            </div>
                            <div class="info-item-information-group-line"></div>
                        </div>
                        <div class="info-item-information-group">
                            <div class="info-item-information-group-title">
                                <p>Phone Number</p>
                            </div>
                            <div class="info-item-information-group-content">
                                <p>123-456-7890</p>
                                <figure class="info-item-information-group-content-icon">
                                    <a href="/profile/information/edit"><img src="/img/information/edit.png"
                                            alt="editIcon" /></a>
                                </figure>
                            </div>
                            <div class="info-item-information-group-line"></div>
                        </div>
                        <div class="info-item-information-group">
                            <div class="info-item-information-group-title">
                                <p>E-mail</p>
                            </div>
                            <div class="info-item-information-group-content">
                                <p>Hanekawa@email.com</p>
                                <figure class="info-item-information-group-content-icon">
                                    <a href="/profile/information/edit"><img src="/img/information/edit.png"
                                            alt="editIcon" /></a>
                                </figure>
                            </div>
                            <div class="info-item-information-group-line"></div>
                        </div>
                        <div class="info-item-information-group">
                            <div class="info-item-information-group-title">
                                <p>Line IDr</p>
                            </div>
                            <div class="info-item-information-group-content">
                                <p>Hanekawa</p>
                                <figure class="info-item-information-group-content-icon">
                                    <a href="/profile/information/edit"><img src="/img/information/edit.png"
                                            alt="editIcon" /></a>
                                </figure>
                            </div>
                            <div class="info-item-information-group-line"></div>
                        </div>
                        <div class="info-item-information-group">
                            <div class="info-item-information-group-title">
                                <p>Address</p>
                            </div>
                            <div class="info-item-information-group-content">
                                <p>120/34-35 Moo 24 Sila Khonkean Kho...</p>
                                <figure class="info-item-information-group-content-icon">
                                    <a href="/map"><img src="/img/information/address.png" alt="addressIcon" /></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="info-item-btnpassword">
                        <button onclick="showChangePassword()" type="button">
                            Change Password
                        </button>
                    </div>
                    <div class="info-item-password">
                        <div class="info-item-password-title">
                            <p>Change Password</p>
                        </div>
                        <div class="info-item-password-group">
                            <label for="current">Current Password</label>
                            <input id="current" type="password" placeholder="**********" />
                        </div>
                        <div class="info-item-password-group">
                            <label for="newPassword">New Password</label>
                            <input id="newPassword" type="password" placeholder="**********" />
                        </div>
                        <div class="info-item-password-group">
                            <label for="confirmNewPassword">Retype New Password</label>
                            <input id="confirmNewPassword" type="password" placeholder="**********" />
                        </div>
                        <div class="info-item-password-button">
                            <button onclick="discard()" class="info-item-password-button-yeet">
                                DISCARD CHAGES
                            </button>
                            <button onclick="newPassword()" class="info-item-password-button-yoink">
                                SAVE CHAGES
                            </button>
                        </div>
                    </div>
                    <div class="info-item-botton">
                        <button onclick="saveInfo()">Save your changes</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/information.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
