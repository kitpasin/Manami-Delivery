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
        <section id="receipt">
            <div id="loader" class="loader"></div>
            <div class="slip">
                <div class="slip-item">
                    <div class="slip-item-header">
                        <figure class="slip-item-header-icon">
                            <img src="/img/slip/headericon.png" alt="slipIcon" />
                        </figure>
                        <div class="slip-item-header-title">
                            <p>View Receipt</p>
                        </div>
                    </div>
                    <div class="slip-item-content">
                        <figure class="slip-item-content-image">
                            <img src="/img/slip/slip.png" alt="slipImage">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/receipt.js"></script>
</body>

</html>
