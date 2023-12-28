<?php

declare(strict_types=1);

namespace App\Calc;

class CalcDTO
{
    public int $firstValue;
    public int $secondValue;
    public int $addResult;
    public int $subResult;
    public int $multResult;
    public ?int $divResult;

    public function __construct(array $calcData)
    {
        [
            'firstValue' => $this->firstValue,
            'secondValue' => $this->secondValue,
            'add' => $this->addResult,
            'sub' => $this->subResult,
            'mult' => $this->multResult,
            'div' => $this->divResult,
        ] = $calcData;
    }
}
