## Константы класса. Статические свойства и методы

```php
namespace zapaDEVe7n\WFMS\CarClass;

class CarClass
{
    public $color;
    public $wheels;
    public $speed;
    public $brand;

    const TEST_CAR = 'Ptototype';
    const TEST_CAR_SPEED = 300;

    public static $countCar = 0;

    public function __construct($color, $wheels = 4, $speed, $brand)
    {
        $this->color  = $color;
        $this->wheels = $wheels;
        $this->speed  = $speed;
        $this->brand  = $brand;

        self::$countCar++;
    }

    public function getCarInfo()
    {
        return "<h3>Car Info:</h3>
            Brend:  {$this->brand}<br>    
            Color:  {$this->color}<br>    
            Wheels: {$this->wheels}<br>
            Speed:  {$this->speed}<br>";
}

    public static function getCount ()
    {
        return self::$countCar;
    }

    public function getPrototypeInfo()
    {
        return '<h3>Prototype Car Info</h3>
            Name: ' .  self::TEST_CAR . '<br>
            Speed: ' . self::TEST_CAR_SPEED . '<br>';
    }
}
```