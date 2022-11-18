<?php
declare(strict_types=1);

class Trasactions
{
    private ?Customer $customer = null;
    private float $cantidad;
    private string $descripcion;

    public function __construct(private float $cantidad, private string $descripcion)
    {

    }
    public function getCustomer(): ?Customer
    {
        return $this->customer;

    }
}