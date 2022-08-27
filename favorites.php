<?  
    $link = '
        <link rel="stylesheet" href="css/products.css" />
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
                    <h2 class="section-title">Избранное</h2>
                    <p class="section-subtitle">Добавляйте в избранное товар, чтобы позже к нему вернуться</p>
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
                        <button class="productCard-row__productCard-button" type="submit">Добавить в корзину</button>
                    </div>
                    <div class="productCard-row">
                        <div class="productCard-row__productCard-left">
                            <a href="#" class="productCard-row__product-link">
                                <img src="img/cerrad-loft-brick-medium.png" alt="Cerrad Loft brick, Cardamon" class="productCard-row__productCard-img">
                                <div class="productCard-row__productCard-info">
                                    <h3 class="productCard-row__productCard-title">Cerrad Loft brick, Cardamon</h3>
                                    <p class="productCard-row__productCard-text">Клинкерная плитка для фасада и внутренней отделки</p>
                                    <div class="productCard-row__productCard-price">1 714,00 руб./м²</div>
                                </div>
                            </a>
                        </div>
                        <button class="productCard-row__productCard-button" type="submit">Добавить в корзину</button>
                    </div>
                    <div class="productCard-row">
                        <div class="productCard-row__productCard-left">
                            <a href="#" class="productCard-row__product-link">
                                <img src="img/cerrad-loft-brick-medium.png" alt="Cerrad Loft brick, Cardamon" class="productCard-row__productCard-img">
                                <div class="productCard-row__productCard-info">
                                    <h3 class="productCard-row__productCard-title">Cerrad Loft brick, Cardamon</h3>
                                    <p class="productCard-row__productCard-text">Клинкерная плитка для фасада и внутренней отделки</p>
                                    <div class="productCard-row__productCard-price">1 714,00 руб./м²</div>
                                </div>
                            </a>
                        </div>
                        <button class="productCard-row__productCard-button" type="submit">Добавить в корзину</button>
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