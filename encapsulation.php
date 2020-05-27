<?php

class Divider
{
    private $number = 50;

    public function dividerOnNumber()
    {
        echo 100 / $this->number;
    }

    public function setNumber($number)
    {
        if ($number === 0) {
            echo 'На ноль делить нельзя <br />';
        } else {
            $this->number = $number;
        }
    }
}

$divider = new Divider();
// Попробуем теперь присвоить другое значение
$divider->setNumber(10);
$divider->dividerOnNumber();
