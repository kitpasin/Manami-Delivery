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
        <section id="login">
            <div id="loader" class="loader"></div>
            <div class="login">
                <div class="login-item">
                    <div class="login-item-header">
                        <div class="login-item-header-title">
                            <p>Login</p>
                        </div>
                    </div>
                    <div class="login-item-form">
                        <div class="login-item-form-input">
                            <div class="login-item-form-input-name">
                                <label for="name">Name</label>
                                <input id="name" type="text" placeholder="Enter your name" />
                            </div>
                            <div class="login-item-form-input-password">
                                <label for="password">
                                    Password
                                    <img onclick="showPassword()" src="/img/login/showpassword.png"
                                        alt="showPasswordIcon" />
                                </label>
                                <input id="password" type="password" placeholder="***************" />
                            </div>
                        </div>
                        <div class="login-item-form-action">
                            <button onclick="login()">LOGIN</button>
                            <a href="./forgot">Forgot password?</a>
                        </div>
                        <div class="login-item-form-line"></div>
                        <div class="login-item-form-register">
                            <p>Not a member yet?</p>
                            <button onclick="registerPage()">SIGN UP HERE</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/login.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
