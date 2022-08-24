<h2 style="color: seagreen; text-align: center;">Приведення типів</h2>
<?php
$variable1 = 10;
echo "$variable1<br>";
echo (int) 0.02, '<br>';
$variable1 = 0.02;
echo "$variable1<br>";
$variable2 = 2 + $variable1;
echo $variable2;
?>

<h2 style="color: seagreen; text-align: center;">Розіменування</h2>
<?php
echo "$variable1<br>";
$inside = 'variable1';
echo $$inside;
?>

<h2 style="color: seagreen; text-align: center;">Конкатенація</h2>
<?php
$variable2 = 'float number: ';
echo $variable2." $variable1<br>";
?>

<h2 style="color: seagreen; text-align: center;">Порівняння</h2>
<?php
if ('2'==2)
    echo 'true';
else
    echo 'false';

if ('2'===2)
    echo '<br>true';
else
    echo '<br>false';
?>

<h2 style="color: seagreen; text-align: center;">Foreach loop</h2>
<?php
$str=['Wolves', 'asleep', 'amidst', 'the', 'trees'];
foreach ($str as $word) {
    if (next($str) == null)
        echo "$word.";
    else
        echo "$word ";
}
?>

<h2 style="color: seagreen; text-align: center;">Hash-масиви</h2>
<?php
$character=['Name'=>'Geralt', 'Kingdom'=>'of Rivia', 'Profession'=>'Witcher', 'Affiliation'=>'Wolf School'];
foreach ($character as $key=>$value) {
    if ($key == 'Profession' || $key == 'Affiliation')
        echo "<br>$key: $value";
    else
        echo "$character[$key] ";
}
?>

<h2 style="color: seagreen; text-align: center;">Explode/implode</h2>
<?php
echo implode(' ', $str), "<br>";
foreach (explode(' ', 'Bats all swaying in the breeze') as $word) {
    echo "$word|";
}
?>

<h2 style="color: seagreen; text-align: center;">OOП</h2>
<?php
class Food {
    private $name, $carbs, $fats, $protein;
    public function __construct(string $name, int $carbs, int $fats, int $protein) {
        $this->name = $name;
        $this->carbs = $carbs;
        $this->fats = $fats;
        $this->protein = $protein;
    }
    public function str() {
        return "$this->name (carbs: $this->carbs, fats: $this->fats, protein: $this->protein)";
    }
}

class Dairy extends Food {
    private $lactose;
    public function __construct(string $name, int $carbs, int $fats, int $protein, bool $lactose) {
        $this->lactose = $lactose;
        parent::__construct($name, $carbs, $fats, $protein);
    }
    public function str() {
        $base = parent::str();
        $result = "$base (lactose: ";
        if ($this->lactose)
            $result = "$result is present)";
        else
            $result = "$result free)";
        return $result;
    }
}

$obj1 = new Dairy("Vegan yogurt 'Nana'",4, 34, 12, false);
echo $obj1->str();
?>

<h2 style="color: seagreen; text-align: center;">Singleton</h2>
<?php
class Singleton {
    private static $instance = null;
    private function __construct() {}
    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new Singleton();
        return self::$instance;
    }
}
?>