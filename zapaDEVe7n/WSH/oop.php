<?php

use zapaDEVe7n\WSH\AbstractClass\AbstractClassChild;
use zapaDEVe7n\WSH\AbstractClass\EnglishHuman;
use zapaDEVe7n\WSH\AbstractClass\RussianHuman;
use zapaDEVe7n\WSH\Figure\Circle;
use zapaDEVe7n\WSH\Figure\InFace\ICalculateSquare;
use zapaDEVe7n\WSH\Figure\Rectangle;
use zapaDEVe7n\WSH\Blog\Article;
use zapaDEVe7n\WSH\Blog\User;
use zapaDEVe7n\WSH\Figure\Square;
use zapaDEVe7n\WSH\Inheritance\File;
use zapaDEVe7n\WSH\Inheritance\ImageFile;
use zapaDEVe7n\WSH\Inheritance\Lesson;
use zapaDEVe7n\WSH\Inheritance\PaidLesson;
use zapaDEVe7n\WSH\LesTrait\Box;
use zapaDEVe7n\WSH\LesTrait\Man;
use zapaDEVe7n\WSH\Post;
use zapaDEVe7n\WSH\Stc\Human;
use zapaDEVe7n\WSH\Stc\UserStatic;

require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>

<h1>WSH | PHP - OOP</h1>

<section class="card">
    <div class="card-body">
        <h2 class="alert alert-info">CLASS Functions</h2>
        <div class="card">
            <div class="card-body">
				<?php
				$a = new File('Test'); ?>
                <h3 class="alert alert-warning">get_class()</h3>

                <p>Возвращает имя класса, к которому принадлежит объект</p>
                <pre>
                <?php
                var_dump(get_class($a)); ?>
            </pre>

                <hr>

                <h3 class="alert alert-warning">get_object_vars()</h3>
                <p>Возвращает свойства указанного объекта</p>
                <pre>
                <?php
                var_dump(get_object_vars($a)); ?>
            </pre>

                <hr>

                <h3 class="alert alert-warning">get_class_methods()</h3>
                <p>Возвращает массив имён методов класса</p>
                <pre>
                <?php
                var_dump(get_class_methods($a)); ?>
            </pre>

                <hr>

                <h3 class="alert alert-warning">get_class_vars()</h3>
                <p>Возвращает объявленные по умолчанию свойства класса</p>
                <pre><?php
					var_dump(get_class_vars('File')); ?></pre>
            </div>
        </div>
        <h3>Practice</h3>
        <div class="card">
            <div class="card-body">
                <pre>echo $a->getTitle()</pre>
                <div>
					<?php
					echo $a->getTitle(); ?>
                </div>
                <hr>

                <pre>echo $a->printTitle()</pre>
                <div>
					<?php
					$a->printTitle(); ?>
                </div>
                <hr>

                <pre>echo $a->getUpperTitle();</pre>
                <div>
					<?php
					echo $a->getUpperTitle(); ?>
                </div>


				<?php
				$a->setTitle('Cat');

				echo '<pre>$a->printTitle()</pre>';
				echo $a->getUpperTitle();
				?>
            </div>
        </div>
    </div>
</section>

<!--------------->
<!--Inheritance-->
<!--------------->
<section class="card">
    <div class="card-body">
        <h2 class="alert alert-info">Inheritance - ChildCLASS</h2>
        <div class="card">
            <div class="card-body">
				<?php
				$image = new ImageFile('Image Title');

				echo '<h3>is_a()</h3>';
				echo 'Проверяет, принадлежит ли объект к данному классу или является ли этот класс одним из его родителей';

				echo '<pre>';
				echo 'var_dump(is_a("ImageFile", "File" ))';
				echo '<br>';
				var_dump(is_a('ImageFile', 'File', true));
				echo '</pre>';

				echo '<pre>';
				echo 'var_dump(is_a($image, "File" ))';
				echo '<br>';
				var_dump(is_a($image, 'File'));
				echo '</pre>';

				echo '<pre>';
				echo 'var_dump(is_a($image, "ImageFile" ))';
				echo '<br>';
				var_dump(is_a($image, 'ImageFile'));
				echo '</pre>';

				echo '<pre>$image->printTitle()</pre>';
				echo $image->getUpperTitle();
				echo '<hr>';
				?>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
				<?php
				$lesson = new Lesson('Lesson Title', 'Some text',
					'Some homework');

				echo '<pre>';
				var_dump($lesson);
				echo '</pre>';

				$paid_lesson = new PaidLesson('Урок о наследовании в PHP',
					'Лол, кек, чебурек', 'Ложитесь спать, утро вечера мудренее',
					99.90);

				echo '<pre>';
				var_dump($paid_lesson);
				echo '</pre>';
				?>
            </div>
        </div>
    </div>
</section>

<!-------------------->
<!--Интерфейсы в PHP-->
<!-------------------->
<section class="card">
    <div class="card-body">
        <h2 class="alert alert-info">Интерфейсы в PHP</h2>
        <div class="card">
            <div class="card-body">
				<?php

				$objects = [
					new Rectangle(10, 15),
					new Square(20),
					new Circle(10),
				];

				foreach ($objects as $object) {
					if ($object instanceof ICalculateSquare) {
						echo 'Это объект класса - ' . get_class($object);
						echo '<br>';
						echo 'Объект реализует интерфейс CalculateSquare. Площадь: '
						     . $object->calculateSquare();
						echo '<br>';
						echo '<br>';
					} else {
						echo 'Это объект класса - ' . get_class($object);
						echo '<br>';
						echo 'Объект не реализует интерфейс CalculateSquare.';
						echo '<br>';
						echo '<br>';
					}
				}

				?>
            </div>
        </div>
    </div>
</section>


<!---------------->
<!--Трейты в PHP-->
<!---------------->
<section class="card">
    <div class="card-body">
        <h2 class="alert alert-info">Трейты в PHP</h2>
        <div class="card">
            <div class="card-body">
				<?php

				//class Man {
				//	public function sayYourClass() : string {
				//		return 'My class is ' . self::class;
				//	}
				//}
				//
				//class Box {
				//	public function sayYourClass() : string {
				//		return 'My class is ' . self::class;
				//	}
				//}

				$man = new Man();
				$box = new Box();

				echo $man->sayYourClass();
				echo '<br>';
				echo $box->sayYourClass();

				?>
            </div>
        </div>
    </div>
</section>

<!---------------------------->
<!--Абстрактные классы в PHP-->
<!---------------------------->
<section class="card">
    <div class="card-body">
        <h2 class="alert alert-info">Абстрактные классы в PHP</h2>
        <div class="card">
            <div class="card-body">
				<?php
				$objectA = new AbstractClassChild('TEST');
				$objectA->printValue();
				echo '<br>';
				$objectA->sayGoogle();
				?>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
				<?php
				$russianHuman = new RussianHuman('Иван');
				$englishHuman = new EnglishHuman('Bob');

				echo $russianHuman->introduceYourself();
				echo '<br>';
				echo $englishHuman->introduceYourself();
				?>
            </div>
        </div>
    </div>
</section>

<!--------------------------------------->
<!--Статические методы и свойства в PHP-->
<!--------------------------------------->
<section class="card">
    <div class="card-body">
        <h2 class="alert alert-info">Статические методы и свойства в PHP</h2>
        <div class="card">
            <div class="card-body">
                <h3 class="alert alert-warning">Статические методы</h3>
				<?php
				$admin = UserStatic::createAdmin('Bob');

				echo '<pre>';
				var_dump($admin);
				echo '</pre>';
				?>
                <h3 class="alert alert-warning">Статические свойства</h3>
				<?php
				$human1 = new Human();
				$human2 = new Human();
				$human3 = new Human();
				echo 'Людей уже ' . Human::getCount();
				?>
            </div>
        </div>
    </div>
</section>

<!----------------------------------------->
<!--Объектно-ориентированный подход в PHP-->
<!----------------------------------------->
<section class="card">
    <div class="card-body">
        <h2 class="alert alert-info">Объектно-ориентированный подход в PHP</h2>
        <div class="card">
            <div class="card-body">
				<?php
				$author  = new User('ZAPA');
				$article = new Article('Post Title', 'Some paragraf text',
					$author);

				echo '<pre>';
				var_dump($article);
				echo '</pre>';

				echo 'Author: ' . $article->getAuthor()->getName();
				?>
            </div>
        </div>
    </div>
</section>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>
