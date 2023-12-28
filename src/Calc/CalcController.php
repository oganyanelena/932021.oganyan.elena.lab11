<?php

declare(strict_types=1);

namespace App\Calc;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CalcController extends AbstractController
{
    #[Route(path: '/calc/{mode}', name: 'show_calc')]
    public function index(CalcEnum $mode, CalcService $calcService): Response
    {
        $firstValue = random_int(0, 10);
        $secondValue = random_int(0, 10);

        $calcDTO = $calcService->getCalcDTO($firstValue, $secondValue);

        return $this->render('@src_dir/Calc/output.twig', [
            'calcDTO' => $calcDTO,
            'mode' => $mode->value
        ]);
    }
}
