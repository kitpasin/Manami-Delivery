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
        <section id="food">
            <div id="loader" class="loader"></div>
            <div class="food">
                <div class="food-item">
                    <div class="food-item-header">
                        <figure class="food-item-header-icon">
                            <img src="/img/food/headericon.png" alt="wash&DryIcon" />
                        </figure>
                        <div class="food-item-header-title">
                            <p>Food & Drink</p>
                            <figure>
                                <img src="/img/food/usericon.png" alt="userIcon" />
                            </figure>
                        </div>
                    </div>
                    <div class="food-item-category">
                        <div class="food-item-category-title">
                            <p>Product Category</p>
                        </div>
                        <div class="food-item-category-search">
                            <figure>
                                <img src="/img/food/searchicon.png" alt="searchIcon" />
                            </figure>
                            <input id="search" type="text" placeholder="Search" />
                        </div>
                        <div class="food-item-category-list">
                            <div class="food-item-category-list-box">
                                <figure>
                                    <img src="/img/food/snack.png" alt="snackIcon" />
                                </figure>
                                <p>Snack</p>
                            </div>
                            <div class="food-item-category-list-box">
                                <figure>
                                    <img src="/img/food/bread.png" alt="breadIcon" />
                                </figure>
                                <p>Bread</p>
                            </div>
                            <div class="food-item-category-list-box">
                                <figure>
                                    <img src="/img/food/fruit.png" alt="easyFoodIcon" />
                                </figure>
                                <p>Easy Food</p>
                            </div>
                            <div class="food-item-category-list-box">
                                <figure>
                                    <img src="/img/food/fruit.png" alt="fruitIcon" />
                                </figure>
                                <p>Fruit</p>
                            </div>
                            <div class="food-item-category-list-box">
                                <figure>
                                    <img src="/img/food/fruit.png" alt="vegetableIcon" />
                                </figure>
                                <p>Fruit</p>
                            </div>
                            <div class="food-item-category-list-box">
                                <figure>
                                    <img src="/img/food/fruit.png" alt="vegetableIcon" />
                                </figure>
                                <p>Fruit</p>
                            </div>
                            <div class="food-item-category-list-box">
                                <figure>
                                    <img src="/img/food/fruit.png" alt="vegetableIcon" />
                                </figure>
                                <p>Fruit</p>
                            </div>
                        </div>
                        <div class="food-item-category-dish">
                            <div onclick="foodPage()" class="food-item-category-dish-box">
                                <figure>
                                    <img src="/img/food/dish1.png" alt="dishImage1" />
                                </figure>
                                <p>Dish1</p>
                                <b>40 BTH</b>
                            </div>
                            <div onclick="drinkPage()" class="food-item-category-dish-box">
                                <figure>
                                    <img src="/img/bottle/bottleimg.png" alt="bottleImage1" />
                                </figure>
                                <p>Bottle1</p>
                                <b>60 BTH</b>
                            </div>
                            <div onclick="snackPage()" class="food-item-category-dish-box">
                                <figure>
                                    <img src="/img/snack/snackimg.png" alt="snackImage1" />
                                </figure>
                                <p>Dish2</p>
                                <b>40 BTH</b>
                            </div>
                            <div onclick="bottlePage()" class="food-item-category-dish-box">
                                <figure>
                                    <img src="/img/glass/glassimg.png" alt="glassImage1" />
                                </figure>
                                <p>Bottle2</p>
                                <b>55 BTH</b>
                            </div>
                            <div onclick="dishPage()" class="food-item-category-dish-box">
                                <figure>
                                    <img src="/img/food/dish1.png" alt="dishImage1" />
                                </figure>
                                <p>Dish5</p>
                                <b>40 BTH</b>
                            </div>
                            <div onclick="dishPage()" class="food-item-category-dish-box">
                                <figure>
                                    <img src="/img/food/dish2.png" alt="dishImage2" />
                                </figure>
                                <p>Dish6</p>
                                <b>60 BTH</b>
                            </div>
                            <div onclick="dishPage()" class="food-item-category-dish-box">
                                <figure>
                                    <img src="/img/food/dish3.png" alt="dishImage3" />
                                </figure>
                                <p>Dish7</p>
                                <b>40 BTH</b>
                            </div>
                            <div onclick="dishPage()" class="food-item-category-dish-box">
                                <figure>
                                    <img src="/img/food/dish4.png" alt="dishImage4" />
                                </figure>
                                <p>Dish8</p>
                                <b>55 BTH</b>
                            </div>
                        </div>
                    </div>
                    <div class="food-item-button">
                        <button onclick="cartPage()" class="food-item-button-content">
                            <div class="food-item-button-content-left">
                                <figure>
                                    <img src="/img/food/carticon.png" alt="cartIcon" />
                                </figure>
                                <p>23 List</p>
                            </div>
                            <div class="food-item-button-content-right">
                                <p>Price</p>
                                <b>1,802 BTH</b>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/pages/food&drink.js"></script>
</body>

</html>
