
<?php

class Calc
{

    public $operator;
    public $number1;
    public $number2;

    public function __construct(string $one, int $two, int $three)
    {
        $this->operator = $one;
        $this->number1 = $two;
        $this->number2 = $three;
    }


    public function calculate()
    {
        switch ($this->operator) {
            case 'add':
                $result = $this->number1 + $this->number2;
                return $result;
                break;
            case 'sub':
                $result = $this->number1 - $this->number2;
                return $result;
                break;
            case 'div':
                $result = $this->number1 / $this->number2;
                return $result;
                break;
            case 'mul':
                $result = $this->number1 * $this->number2;
                return $result;
                break;

            default:
                echo "You have error! please fix it";
                break;
        }
    }
}














?>


