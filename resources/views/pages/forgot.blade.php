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
            <section id="forgotPassword">
                <div id="loader" class="loader"></div>
                <div class="fgpw">
                    <div class="fgpw-item">
                        <div class="fgpw-item-header">
                            <div class="fgpw-item-header-title">
                                <p>Forgot Password?</p>
                            </div>
                        </div>
                        <div class="fgpw-item-form">
                            <div class="fgpw-item-form-notice">
                                <p>
                                    No problem! Just fill in the email below and
                                    we'll send you password reset instructions!
                                </p>
                            </div>
                            <div class="fgpw-item-form-input">
                                <div class="fgpw-item-form-input-name">
                                    <label for="email">E-mail</label>
                                    <input
                                        id="email"
                                        type="email"
                                        placeholder="Enter your email"
                                    />
                                </div>
                            </div>
                            <div class="fgpw-item-form-action">
                                <button onclick="resetPassword()">
                                    RESET PASSWORD
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="/js/pages/forgot.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>
