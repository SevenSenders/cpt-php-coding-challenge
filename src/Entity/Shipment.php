<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShipmentRepository")
 * @ORM\Table(name="shipments")
 */
class Shipment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @var Order
     * @ORM\ManyToOne(targetEntity="App\Entity\Order")
     * @ORM\JoinColumn(nullable=false)
     */
    private Order $order;

    /**
     * @ORM\Column(name="tracking_code", type="string")
     */
    private string $trackingCode;

    /**
     * @ORM\Column(name="warehouse_address", nullable=true, type="string")
     */
    private string $warehouseAddress;

    /**
     * @ORM\Column(name="shipment_status", type="string")
     */
    private string $shipmentStatus;

    /**
     * @ORM\Column(name="weight", type="float", nullable=true)
     */
    private float $weight;

    /**
     * @var DateTime|null
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private ?DateTime $createdAt;

    /**
     * @var DateTime|null
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private ?DateTime $updatedAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder(Order $order): void
    {
        $this->order = $order;
    }

    /**
     * @return string
     */
    public function getTrackingCode(): string
    {
        return $this->trackingCode;
    }

    /**
     * @param string $trackingCode
     */
    public function setTrackingCode(string $trackingCode): void
    {
        $this->trackingCode = $trackingCode;
    }

    /**
     * @return string
     */
    public function getWarehouseAddress(): string
    {
        return $this->warehouseAddress;
    }

    /**
     * @param string $warehouseAddress
     */
    public function setWarehouseAddress(string $warehouseAddress): void
    {
        $this->warehouseAddress = $warehouseAddress;
    }

    /**
     * @return string
     */
    public function getShipmentStatus(): string
    {
        return $this->shipmentStatus;
    }

    /**
     * @param string $shipmentStatus
     */
    public function setShipmentStatus(string $shipmentStatus): void
    {
        $this->shipmentStatus = $shipmentStatus;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return DateTime|null
     */
    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime|null $createdAt
     */
    public function setCreatedAt(?DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return DateTime|null
     */
    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime|null $updatedAt
     */
    public function setUpdatedAt(?DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

}