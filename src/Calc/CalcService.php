<?php

declare(strict_types=1);

namespace App\Calc;

class CalcService
{
    public function getCalcDTO(int $firstValue, int $secondValue): CalcDTO
    {
        $calcData = [
            'firstValue' => $firstValue,
            'secondValue' => $secondValue,
            'add' => $this->add($firstValue, $secondValue),
            'sub' => $this->sub($firstValue, $secondValue),
            'mult' => $this->mult($firstValue, $secondValue),
            'div' => $this->div($firstValue, $secondValue),
        ];

        return new CalcDTO($calcData);
    }

    public function add(int $firstValue, int $secondValue): int
    {
        return $firstValue + $secondValue;
    }

    public function sub(int $firstValue, int $secondValue): int
    {
        return $firstValue - $secondValue;
    }

    public function mult(int $firstValue, int $secondValue): int
    {
        return $firstValue * $secondValue;
    }

    public function div(int $firstValue, int $secondValue): ?int
    {
        try {
            return (int)($firstValue / $secondValue);
        } catch (\DivisionByZeroError $error) {
            return null;
        }
    }
}
