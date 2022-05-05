<?php

namespace App\Service;

use App\Repository\ShipmentRepository;

class ShipmentService
{
    private ShipmentRepository $shipmentRepository;

    public function __construct(ShipmentRepository $shipmentRepository)
    {
        $this->shipmentRepository = $shipmentRepository;
    }

    public function getShipments(): array
    {
        return $this->shipmentRepository->findAll();
    }
}