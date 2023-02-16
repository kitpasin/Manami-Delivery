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
        <section id="map">
            <div id="loader" class="loader"></div>
            <div class="map">
                <div class="map-item">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4420.146286386848!2d102.8347694678497!3d16.485745351498668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228ae99b598b43%3A0x56b4538d2ace7037!2sWYNNSOFT%20SOLUTION%20CO%2CLTD.!5e0!3m2!1sth!2sth!4v1675828634281!5m2!1sth!2sth"
                        style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="map-item-button">
                        <figure>
                            <img src="/img/map/searchicon.png" alt="searchIcon">
                        </figure>
                        <input type="text" placeholder="Search">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/map.js"></script>
</body>

</html>
