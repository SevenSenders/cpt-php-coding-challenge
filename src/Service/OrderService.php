<?php

namespace App\Service;

use App\Repository\OrderRepository;

class OrderService
{
    private OrderRepository $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getOrders(): array
    {
        return $this->orderRepository->findAll();
    }
}