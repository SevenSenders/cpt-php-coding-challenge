<?php

namespace App\Controller;

use App\Service\ShipmentService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ShipmentController extends AbstractController
{
    private ShipmentService $shipmentService;

    public function __construct(ShipmentService $shipmentService) {
        $this->shipmentService = $shipmentService;
    }

    #[Route('/shipments', name: 'shipments')]
    public function index(): JsonResponse
    {
        $shipments = [];

        foreach($this->shipmentService->getShipments() as $item) {
            $shipments[] = [
                "id"                => $item->getId(),
                "order"             => $item->getOrder()->getId(),
                "tracking_code"     => $item->getTrackingCode(),
            ];
        };

        $response = new JsonResponse($shipments);
        $response->setEncodingOptions( $response->getEncodingOptions() | JSON_PRETTY_PRINT );
        return $response;
    }
}