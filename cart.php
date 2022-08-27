<?  
    $link = '
        <link rel="stylesheet" href="css/products.css" />
        <link rel="stylesheet" href="css/product-card.css">
    ';
    include($_SERVER['DOCUMENT_ROOT'] . '/blocks/head.php');
?>
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
        <section class="products">
            <div class="container">
                <div class="products-header">
                    <h2 class="section-title">Корзина</h2>
                    <p class="section-subtitle">
                        Оставьте в заказе 1 штуку, если вы не знаете точное количество товара.
                        Вы сможете указать его при оформлении в комментариях в удобной вам форме: метрах, упаковках и т.п.
                        Менеджер уточнит детали заказа и учтёт скидку на объем.
                    </p>
                </div>
                <div class="products-content">
                    <div class="productCard-row">
                        <div class="productCard-row__productCard-left">
                            <a href="" class="productCard-row__product-link">
                                <img src="img/cerrad-loft-brick-medium.png" alt="Cerrad Loft brick, Cardamon" class="productCard-row__productCard-img">
                                <div class="productCard-row__productCard-info">
                                    <h3 class="productCard-row__productCard-title">Cerrad Loft brick, Cardamon</h3>
                                    <p class="productCard-row__productCard-text">Клинкерная плитка для фасада и внутренней отделки</p>
                                    <div class="productCard-row__productCard-price">1 714,00 руб./м²</div>
                                </div>
                            </a>
                        </div>
                        <div class="productCard-row__cost-calculation-wrapper">
                            <div class="productCard-row__cost-calculation">
                                <div class="cost-calculation__countProduct-wrapper">
                                    <div class="productCard__product-count">
                                        <input id="product-count" type="number" class="productCard__input-count" value="16">
                                    </div>
                                </div>
                                <span class="cost-calculation__multiply"></span>
                                <div class="cost-calculation__priceProduct">1 714,00 руб.</div>
                                <span class="cost-calculation__equals"></span>
                                <div class="cost-calculation__priceProduct-final">82 272,00 руб.</div>
                                <div class="cost-calculation__deleteProduct"></div>
                            </div>
                        </div>
                    </div>
                    <div class="productCard-row">
                        <div class="productCard-row__productCard-left">
                            <a href="" class="productCard-row__product-link">
                                <img src="img/cerrad-loft-brick-medium.png" alt="Cerrad Loft brick, Cardamon" class="productCard-row__productCard-img">
                                <div class="productCard-row__productCard-info">
                                    <h3 class="productCard-row__productCard-title">Cerrad Loft brick, Cardamon</h3>
                                    <p class="productCard-row__productCard-text">Клинкерная плитка для фасада и внутренней отделки</p>
                                    <div class="productCard-row__productCard-price">1 714,00 руб./м²</div>
                                </div>
                            </a>
                        </div>
                        <div class="productCard-row__cost-calculation-wrapper">
                            <div class="productCard-row__cost-calculation">
                                <div class="cost-calculation__countProduct-wrapper">
                                    <div class="productCard__product-count">
                                        <input id="product-count" type="number" class="productCard__input-count" value="16">
                                    </div>
                                </div>
                                <span class="cost-calculation__multiply"></span>
                                <div class="cost-calculation__priceProduct">1 714,00 руб.</div>
                                <span class="cost-calculation__equals"></span>
                                <div class="cost-calculation__priceProduct-final">82 272,00 руб.</div>
                                <div class="cost-calculation__deleteProduct"></div>
                            </div>
                        </div>
                    </div>
                    <div class="productCard-row">
                        <div class="productCard-row__productCard-left">
                            <a href="" class="productCard-row__product-link">
                                <img src="img/cerrad-loft-brick-medium.png" alt="Cerrad Loft brick, Cardamon" class="productCard-row__productCard-img">
                                <div class="productCard-row__productCard-info">
                                    <h3 class="productCard-row__productCard-title">Cerrad Loft brick, Cardamon</h3>
                                    <p class="productCard-row__productCard-text">Клинкерная плитка для фасада и внутренней отделки</p>
                                    <div class="productCard-row__productCard-price">1 714,00 руб./м²</div>
                                </div>
                            </a>
                        </div>
                        <div class="productCard-row__cost-calculation-wrapper">
                            <div class="productCard-row__cost-calculation">
                                <div class="cost-calculation__countProduct-wrapper">
                                    <div class="productCard__product-count">
                                        <input id="product-count" type="number" class="productCard__input-count" value="16">
                                    </div>
                                </div>
                                <span class="cost-calculation__multiply"></span>
                                <div class="cost-calculation__priceProduct">1 714,00 руб.</div>
                                <span class="cost-calculation__equals"></span>
                                <div class="cost-calculation__priceProduct-final">82 272,00 руб.</div>
                                <div class="cost-calculation__deleteProduct"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-footer">
                    <div class="products__order-final-price__container">
                        <span class="products-total__text">Всего</span>
                        <div class="products__order-final-price">246 816,00 руб.</div>
                    </div>
                    <div class="products__button-products-action">
                        <button class="productCard-row__productCard-button productCard-button__continue" type="submit">Продолжить покупки</button>
                        <button class="productCard-row__productCard-button productCard-button__order" type="submit">Оформить</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
        include('blocks/footer.php');
    ?>
</body>
</html>