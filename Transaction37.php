<?php
declare(strict_types=1);

class Transaction37
{
    private ?Customer $customer = null;
    private float $cantidad;
    private string $descripcion;

    public function __construct(private float $Cantidad, private string $Descripcion)
    {

    }
    public function getCustomer(): ?Customer
    {
        return $this->customer;

    }
}