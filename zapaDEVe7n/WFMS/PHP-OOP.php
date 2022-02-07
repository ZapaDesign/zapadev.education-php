<?php

use zapaDEVe7n\WFMS\ArticleFile\ArticleFile;
use zapaDEVe7n\WFMS\CarClass\CarClass;

use zapaDEVe7n\WFMS\Product\ProductFull;

use zapaDEVe7n\WFMS\Product\BookProduct;
use zapaDEVe7n\WFMS\Product\NotebookProduct;


use zapaDEVe7n\WFMS\ProductAbstract\BookProductAbstract;
use zapaDEVe7n\WFMS\ProductAbstract\NotebookProductAbstract;

require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<h1>WFMS | PHP - OOP</h1>



<!----------------------------------------------------->
<!--  ----------------------->
<!----------------------------------------------------->
<section class="card">
    <div class="card-body">
        <h2 class="alert alert-info">1</h2>

        <div class="card">
            <div class="card-body">
                <?php
                $article = new ArticleFile('test.txt');
                $article->setContent("Some 2 content\n");
                ?>
            </div>
        </div>

    </div>
</section>






<!----------------------------------------------------->
<!-- Константы класса. Статические свойства и методы -->
<!-- класс CarClass ----------------------------------->
<!----------------------------------------------------->
<section class="card">
    <div class="card-body">
        <h2 class="alert alert-info">Константы класса. Статические свойства и методы (класс CarClass)</h2>

        <div class="card">
            <div class="card-body">
                <?php

                echo CarClass::$countCar . '<br>' . '<br>';

                $car = new CarClass('Green', 3, 520, 'Audi');
                echo $car->getCarInfo() . '<br>';
                echo CarClass::$countCar . '<br>' . '<br>';

                $car2 = new CarClass('Red', 2, 120, 'BMW');
                echo $car2->getCarInfo() . '<br>';
                echo CarClass::$countCar . '<br>';

                echo CarClass::getCount() . '<br>';


                echo CarClass::TEST_CAR . '<br>';
                echo CarClass::TEST_CAR_SPEED . '<br>';
                echo $car2->getPrototypeInfo();
                ?>

                <h3>Статический метод "class"</h3>
                <div>
                    <code>
                        echo CarClass::class;
                    </code>
                </div>
                <?php echo CarClass::class; ?>

            </div>
        </div>
    </div>
</section>






<!----------------------------------------------------->
<!-- Наследование ------------------------------------->
<!-- класс Product ------------------------------------>
<!----------------------------------------------------->
<section class="card">
    <div class="card-body">
        <h2 class="alert alert-info">Наследование (класс Product)</h2>
        <div class="card">
            <h3 class="alert alert-warning">Без наследования</h3>
            <div class="card-body">

                <?php
                    $bookFull = new ProductFull('Book Title', 20, null, 1000);
                    $notebookFull = new ProductFull('Dell', 500, 'Intel');

                    echo $bookFull->getProduct();

                    echo $notebookFull->getProduct('notebook');
                ?>

            </div>
        </div>
        <div class="card">
            <h3 class="alert alert-warning">С наследованием</h3>
            <div class="card-body">

                <?php
                $book = new BookProduct('Book Title', 20, 1500);
                $notebook = new NotebookProduct('Dell', 500, 'Intel');

                echo $book->getProduct();

                echo $notebook->getProduct();

                ?>

            </div>
        </div>
    </div>
</section>







<!----------------------------------------------------->
<!-- Модификаторы доступа ----------------------------->
<!----------------------------------------------------->
    <section class="card">
        <div class="card-body">
            <h2 class="alert alert-info">Модификаторы доступа</h2>
            <div class="card">
                <div class="card-body">

                </div>
            </div>
        </div>
    </section>







<!----------------------------------------------------->
<!-- Абстрактные классы ----------------------->
<!----------------------------------------------------->
<section class="card">
    <div class="card-body">
        <h2 class="alert alert-info">Абстрактные классы</h2>
        <div class="card">
            <div class="card-body">
                <p>=> PHP5</p>

                <?php
                $book = new BookProductAbstract('Book Title', 20, 1500);
                $notebook = new NotebookProductAbstract('Dell', 500, 'Intel');

                echo $book->getProduct();

                echo $notebook->getProduct();

                ?>
            </div>
        </div>
    </div>
</section>






<!----------------------------------------------------->
<!-- Интерфейсы и контроль типа ----------------------->
<!----------------------------------------------------->
<section class="card">
    <div class="card-body">
        <h2 class="alert alert-info">Интерфейсы и контроль типа</h2>
        <div class="card">
            <div class="card-body">
                zapadev.education-php
            </div>
        </div>
    </div>
</section>




<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>