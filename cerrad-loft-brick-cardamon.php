<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MagicStone</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/swiper-bundle/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product-card.css">
    <link rel="stylesheet" href="css/swiper-slider.css">
</head>
<body>
</html>
    <?php
        include($_SERVER['DOCUMENT_ROOT'] . '/blocks/header.php');
    ?>
    <main class="main">
        <?php
            $breadcrumbs = '
                <li class="breadcrumbs-list-item">
                    <a href="/" class="breadcrumbs-list-item-link">Каталог</a>
                </li>
                <li class="breadcrumbs-list-item">
                    <a href="/" class="breadcrumbs-list-item-link">Фасадная плитка</a>
                </li>
                <li class="breadcrumbs-list-item">
                    <a href="cerrad-loft-brick-cardamon.php" class="breadcrumbs-list-item-link">Cerrad Loft brick, Cardamon</a>
                </li>
            ';
            include($_SERVER['DOCUMENT_ROOT'] . '/blocks/breadcrumbs.php');
        ?>
        <section class="productPage">
            <div class="container">
                <div class="productCard-BiG">
                    <div class="productCard-slider">
                        <div class="slider__flex">
                            <div class="slider__col">
                                <div class="slider__prev">Prev</div> <!-- Кнопка для переключения на предыдущий слайд -->
                                <div class="slider__thumbs">
                                    <div class="swiper-container"> <!-- Слайдер с превью -->
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="slider__image">
                                                    <img src="img/cerrad-loft-brick-cardamon-img-1.png" alt=""/>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slider__image">
                                                    <img src="img/cerrad-loft-brick-cardamon-img-1.png" alt=""/>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slider__image">
                                                    <img src="img/cerrad-loft-brick-cardamon-img-1.png" alt=""/>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slider__image">
                                                    <img src="img/cerrad-loft-brick-cardamon-img-1.png" alt=""/>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slider__image">
                                                    <img src="img/cerrad-loft-brick-cardamon-img-1.png" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider__next">Next</div> <!-- Кнопка для переключения на следующий слайд -->

                            </div>

                            <div class="slider__images">
                                <div class="swiper-container"> <!-- Слайдер с изображениями -->
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="slider__image">
                                                <img src="img/cerrad-loft-brick-cardamon-img-1.png" alt=""/>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slider__image">
                                                <img src="img/cerrad-loft-brick-cardamon-img-1.png" alt=""/>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slider__image">
                                                <img src="img/cerrad-loft-brick-cardamon-img-1.png" alt=""/>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slider__image">
                                                <img src="img/cerrad-loft-brick-cardamon-img-1.png" alt=""/>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slider__image">
                                                <img src="img/cerrad-loft-brick-cardamon-img-1.png" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="productCard-info">
                        <div class="productCard-info__header">
                            <h2 class="productCard-title">Cerrad Loft brick, Cardamon</h2>
                            <p class="productCard-subtitle">Клинкерная плитка</p>
                            <div class="productCard-price">1 714,00 руб./м²</div>
                        </div>
                        <div class="productCard-info__actions">
                            <div class="productCard__add-basket">
                                <div class="productCard__product-count">
                                    <input id="product-count" type="number" class="productCard__input-count" value="16">
                                </div>
                                <button type="button" class="productCard__btn-basket">Добавить в корзину</button>
                            </div>
                            <button type="button" class="productCard__btn-favorites">
                                <svg class="icon">
                                    <use xlink:href="img/icons/sprite.svg#favorites-small"></use>
                                </svg>
                                В избранное
                            </button>
                        </div>
                        <div class="productCard-info__spec">
                            <div class="productCard-info__spec-el">
                                <p class="spec-el-text"><span class="spec-el-text__name">Производитель:</span><span class="spec-el-text__value">Cerrad</span></p>
                                <p class="spec-el-text"><span class="spec-el-text__name">Цвет:</span><span class="spec-el-text__value">Cardamon</span></p>
                                <p class="spec-el-text"><span class="spec-el-text__name">Страна-производитель:</span><span class="spec-el-text__value">Польша</span></p>
                                <p class="spec-el-text"><span class="spec-el-text__name">Серия:</span><span class="spec-el-text__value">Loft brick</span></p>
                                <p class="spec-el-text"><span class="spec-el-text__name">Размер:</span><span class="spec-el-text__value">245x65</span></p>
                                <p class="spec-el-text"><span class="spec-el-text__name">Толщина:</span><span class="spec-el-text__value">8</span></p>
                            </div>
                            <div class="productCard-info__spec-el">
                                <p class="spec-el-text"><span class="spec-el-text__name">Штук в упаковке:</span><span class="spec-el-text__value">38</span></p>
                                <p class="spec-el-text"><span class="spec-el-text__name">Вес упаковки:</span><span class="spec-el-text__value">10.4</span></p>
                                <p class="spec-el-text"><span class="spec-el-text__name">Кв.м. в упаковке:</span><span class="spec-el-text__value">0.6</span></p>
                                <p class="spec-el-text"><span class="spec-el-text__name">Вес кг/кв.м:</span><span class="spec-el-text__value">17.333</span></p>
                                <p class="spec-el-text"><span class="spec-el-text__name">Кол-во шт. в м2:</span><span class="spec-el-text__value">63.33</span></p>
                                <p class="spec-el-text"><span class="spec-el-text__name">Состав:</span><span class="spec-el-text__value">Тугоплавкая глина</span></p></p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-similar">
                    <h2 class="productPage-title">Похожие товары</h2>
                    <div class="productPage-subSectionContainer">
                        <a href="" class="productCard-link-product">
                            <div class="productCard-Small">
                                <img src="img/king-klinker-frozen-island.png" alt="King Klinker - Frozen Island" class="productCard-Small__img">
                                <div class="productCard-Small__info">
                                    <h3 class="productCard-Small__info-name">King Klinker - Frozen Island</h3>
                                    <div class="productCard-Small__info-price">2870,00 руб./м²</div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="productCard-link-product">
                            <div class="productCard-Small">
                                <img src="img/king-klinker-african-soul.png" alt="King Klinker - African Soul" class="productCard-Small__img">
                                <div class="productCard-Small__info">
                                    <h3 class="productCard-Small__info-name">King Klinker - African Soul</h3>
                                    <div class="productCard-Small__info-price">2870,00 руб./м²</div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="productCard-link-product">
                            <div class="productCard-Small">
                                <img src="img/king-klinker-brazilian-coffe.png" alt="King Klinker - Brazilian Coffe" class="productCard-Small__img">
                                <div class="productCard-Small__info">
                                    <h3 class="productCard-Small__info-name">King Klinker - Brazilian Coffe</h3>
                                    <div class="productCard-Small__info-price">2870,00 руб./м²</div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="productCard-link-product">
                            <div class="productCard-Small">
                                <img src="img/cerrad-loft-brick-curry.png" alt="Cerrad Loft brick, Curry" class="productCard-Small__img">
                                <div class="productCard-Small__info">
                                    <h3 class="productCard-Small__info-name">Cerrad Loft brick, Curry</h3>
                                    <div class="productCard-Small__info-price">1 714,00 руб./м²</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="product-reviewed">
                    <h2 class="productPage-title">Ранее просмотренные товары</h2>
                    <div class="productPage-subSectionContainer">
                        <a href="" class="productCard-link-product">
                            <div class="productCard-Small">
                                <img src="img/king-klinker-frozen-island.png" alt="King Klinker - Frozen Island" class="productCard-Small__img">
                                <div class="productCard-Small__info">
                                    <h3 class="productCard-Small__info-name">King Klinker - Frozen Island</h3>
                                    <div class="productCard-Small__info-price">2870,00 руб./м²</div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="productCard-link-product">
                            <div class="productCard-Small">
                                <img src="img/king-klinker-african-soul.png" alt="King Klinker - African Soul" class="productCard-Small__img">
                                <div class="productCard-Small__info">
                                    <h3 class="productCard-Small__info-name">King Klinker - African Soul</h3>
                                    <div class="productCard-Small__info-price">2870,00 руб./м²</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
        include($_SERVER['DOCUMENT_ROOT'] . '/blocks/footer.php');
    ?>
    <script src="libs/swiper-bundle/swiper-bundle.min.js"></script>
    <script src="js/productCard-slider.js"></script>
</body>
</html>