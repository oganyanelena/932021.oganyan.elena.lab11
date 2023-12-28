<?php

declare(strict_types=1);

namespace App\Calc;

enum CalcEnum: string
{
    case model = 'PassUsingModel';
    case viewData = 'PassUsingViewData';
    case viewBag = 'PassUsingViewBag';
    case service = 'AccessServiceDirectly';
}
