<?php

namespace App\Controller;

use App\Service\OrderService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    private OrderService $orderService;

    public function __construct(OrderService $orderService) {
        $this->orderService = $orderService;
    }

    #[Route('/orders', name: 'orders')]
    public function index(): JsonResponse
    {
        $orders = [];

        foreach($this->orderService->getOrders() as $item) {
            $orders[] = [
                "id"            => $item->getId()
            ];
        };

        $response = new JsonResponse($orders);
        $response->setEncodingOptions( $response->getEncodingOptions() | JSON_PRETTY_PRINT );
        return $response;
    }
}