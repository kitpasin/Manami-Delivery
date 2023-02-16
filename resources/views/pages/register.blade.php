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
        <section id="register">
            <div id="loader" class="loader"></div>
            <div class="register">
                <div class="register-item">
                    <div class="register-item-header">
                        <div class="register-item-header-title">
                            <p>Sign Up</p>
                        </div>
                    </div>
                    <div class="register-item-form">
                        <div class="register-item-form-input">
                            <div class="register-item-form-input-name">
                                <label for="name">Name</label>
                                <input id="name" type="text" placeholder="Enter your name" />
                            </div>
                            <div class="register-item-form-input-email">
                                <label for="email">E-mail</label>
                                <input id="email" type="email" placeholder="Enter your email" />
                            </div>
                            <div class="register-item-form-input-line">
                                <label for="line">Line ID</label>
                                <input id="line" type="text" placeholder="Enter your line ID" />
                            </div>
                            <div class="register-item-form-input-phone">
                                <label for="line">Phone number</label>
                                <input id="line" type="number" placeholder="Enter your phone number" />
                            </div>
                            <div class="register-item-form-input-password">
                                <label for="password">
                                    Password
                                    <img onclick="showPassword()" src="/img/register/showpassword.png"
                                        alt="showPasswordIcon" />
                                </label>
                                <input id="password" type="password" placeholder="***************" />
                            </div>
                            <div class="register-item-form-input-confirm">
                                <label for="confirm">
                                    Confirm Password
                                    <img onclick="showConfirm()" src="/img/register/showpassword.png"
                                        alt="showPasswordIcon" />
                                </label>
                                <input id="confirm" type="password" placeholder="***************" />
                            </div>
                        </div>
                        <div class="register-item-form-action">
                            <button onclick="signUp()">SIGN UP</button>
                            <div class="register-item-form-action-policy">
                                <input id="policy" type="checkbox" />
                                <label for="policy">
                                    <p>Agree to Terms of Service and Privacy Policy</p>
                                </label>
                            </div>
                        </div>
                        <div class="register-item-form-line"></div>
                        <div class="register-item-form-register">
                            <p>Already have an account?</p>
                            <button onclick="loginPage()">LOGIN</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="../js/pages/register.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
