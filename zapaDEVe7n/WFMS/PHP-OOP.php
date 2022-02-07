<?php

use zapaDEVe7n\WFMS\ArticleFile\ArticleFile;
use zapaDEVe7n\WFMS\CarClass\CarClass;

use zapaDEVe7n\WFMS\Product\ProductFull;

use zapaDEVe7n\WFMS\Product\BookProduct;
use zapaDEVe7n\WFMS\Product\NotebookProduct;

use zapaDEVe7n\WFMS\ProductAbstract\BookProductAbstract;
use zapaDEVe7n\WFMS\ProductAbstract\NotebookProductAbstract;

use zapaDEVe7n\WFMS\ProductInterface\A;
use zapaDEVe7n\WFMS\ProductInterface\B;
use zapaDEVe7n\WFMS\ProductInterface\BookProductInterface;
use zapaDEVe7n\WFMS\ProductInterface\C;
use zapaDEVe7n\WFMS\ProductInterface\Interfaces\IGadget;
use zapaDEVe7n\WFMS\ProductInterface\NotebookProductInterface;
use zapaDEVe7n\WFMS\ProductInterface\ProductInterface;

use zapaDEVe7n\WFMS\ProductTrait\BookProductTrait;
use zapaDEVe7n\WFMS\ProductTrait\NotebookProductTrait;


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
                    $bookFull     = new ProductFull('Book Title', 20, null, 1000);
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
                    $book     = new BookProduct('Book Title', 20, 1500);
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
    <!-- Абстрактные классы ------------------------------->
    <!-- класс ProductAbstract ---------------------------->
    <!----------------------------------------------------->
    <section class="card">
        <div class="card-body">
            <h2 class="alert alert-info">Абстрактные классы</h2>
            <div class="card">
                <div class="card-body">
                    <p>=> PHP5</p>

                    <?php
                    $book2     = new BookProductAbstract('Book Title', 20, 1500);
                    $notebook2 = new NotebookProductAbstract('Dell', 500, 'Intel');

                    echo $book2->getProduct();

                    echo $notebook2->getProduct();

                    ?>
                </div>
            </div>
        </div>
    </section>


    <!----------------------------------------------------->
    <!-- Интерфейсы и контроль типа ----------------------->
    <!-- класс ProductInterface --------------------------->
    <!----------------------------------------------------->
    <section class="card">
        <div class="card-body">
            <h2 class="alert alert-info">Интерфейсы и контроль типа</h2>
            <div class="card">
                <div class="card-body">
                    <?php

                    $book3     = new BookProductInterface('Book Title', 20, 1500);
                    $notebook3 = new NotebookProductInterface('Dell', 500, 'Intel');

                    echo '<pre>';
                    var_dump($book3);
                    echo '</pre>';


                    $a = new A();
                    $b = new B();
                    $c = new C();

                    //                    echo '<pre>';
                    //                    var_dump($a instanceof A);
                    //                    echo '</pre>';

                    echo '<pre>';
                    var_dump($b instanceof B);
                    echo '</pre>';

                    //                    echo '<pre>';
                    //                    var_dump($c instanceof C);
                    //                    echo '</pre>';


                    echo '<pre>';
                    var_dump($b instanceof A);
                    echo '</pre>';


                    function offerCase(IGadget $product)
                    {
                        echo 'Case for ' . $product->getName();
                    }

                    echo offerCase($notebook3) . ' -- only Notebook<br>';

                    //                    echo offerCase($book3) . ' -- only Notebook';

                    echo '$book3 instanceof BookProductInterface, ProductInterface, IGadget';
                    echo '<pre>';
                    var_dump($book3 instanceof BookProductInterface);
                    echo '</pre>';

                    echo '<pre>';
                    var_dump($book3 instanceof ProductInterface);
                    echo '</pre>';

                    echo '<pre>';
                    var_dump($book3 instanceof IGadget);
                    echo '</pre>';


                    echo '$notebook3 instanseof NotebookProductInterface, ProductInterface, IGadget';
                    echo '<pre>';
                    var_dump($notebook3 instanceof NotebookProductInterface);
                    echo '</pre>';

                    echo '<pre>';
                    var_dump($notebook3 instanceof ProductInterface);
                    echo '</pre>';

                    echo '<pre>';
                    var_dump($notebook3 instanceof IGadget);
                    echo '</pre>';


                    ?>

                </div>
            </div>
        </div>
    </section>


    <!----------------------------------------------------->
    <!-- Трейты ------------------------------------------->
    <!-- класс ProductTrait ------------------------------->
    <!----------------------------------------------------->
    <section class="card">
        <div class="card-body">
            <h2 class="alert alert-info">Трейты</h2>
            <div class="card card-body">
                <?php

                $book4     = new BookProductTrait('Book Title', 20, 1500);
                $notebook4 = new NotebookProductTrait('Dell', 500, 'Intel');

                echo '<pre>';
                var_dump($book4);
                echo '</pre>';


                echo '<pre>';
                var_dump($notebook4);
                echo '</pre>';

                ?>
            </div>
        </div>
    </section>


    <!----------------------------------------------------->
    <!-- Позднее статическое связывание ------------------->
    <!-- WFMS/LSB ----------------------------------------->
    <!----------------------------------------------------->
    <section class="card">
        <div class="card-body">
            <h2 class="alert alert-info">Позднее статическое связывание - Late Static Bindings (LSB)</h2>
            <div class="card">
                <div class="card-body">
                    <p>=> PHP 5.3</p>

                    <?php
                    $a = new zapaDEVe7n\WFMS\LSB\A();
                    $b = new zapaDEVe7n\WFMS\LSB\B();

                    $a->getTest();
                    echo '<br>';
                    $b->getTest();
                    echo '<br>';

                    echo '<hr>';

                    $a->getTest2();
                    echo '<br>';
                    $b->getTest2();
                    echo '<br>';

                    ?>

                </div>
            </div>
        </div>
    </section>


    <!----------------------------------------------------->
    <!-- Цепочка методов ---------------------------------->
    <!--  ----------------------------------------->
    <!----------------------------------------------------->
    <section class="card">
        <div class="card-body">
            <h2 class="alert alert-info">Цепочка методов</h2>
            <div class="card">
                <div class="card-body">
<pre>

$a->doAction1()->doAction2()->doAction3();

// Каждый метод должен возвращать оъект

public function doAction1()
{
    ...
    return $this;
}

public function doAction2()
{
    ...
    return $this;
}

public function doAction3()
{
    ...
    return $this;
}
</pre>

                </div>
            </div>
        </div>
    </section>


    <!----------------------------------------------------->
    <!-- Магические методы -------------------------------->
    <!--  ----------------------------------------->
    <!----------------------------------------------------->
    <section class="card">
        <div class="card-body">
            <h2 class="alert alert-info">Магические методы</h2>
            <div class="card">
                <div class="card-body">
                    <h3 class="alert alert-warning">__toString</h3>
                    <h3 class="alert alert-warning">__set</h3>
                    <h3 class="alert alert-warning">__get</h3>
                </div>
            </div>
        </div>
    </section>


    <!----------------------------------------------------->
    <!-- Шаблоны проэктирования --------------------------->
    <!--  ----------------------------------------->
    <!----------------------------------------------------->
    <section class="card">
        <div class="card-body">
            <h2 class="alert alert-info">Шаблоны проэктирования</h2>
            <div class="card">
                <div class="card-body">
                    <a href="https://designpatternsphp.readthedocs.io/ru/latest/README.html">DesignPatternsPHP</a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>