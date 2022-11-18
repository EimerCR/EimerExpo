<?php

declare(strict_types=1)

class Trasaction
{
 public float $cantidad;
 public string $descripcion;

 public function __construct(float $cantidad, string $descripcion)
 {
     $this->cantidad= $cantidad;
     $this->descripcion=$descripcion;
 }
 public function addTax(float $rate): Trasaction
 {
         $this->cantidad += $this->cantidad * $rate / 100;

         return $this;
 }
 public function applyDiscount(float $rate): Trasaction
 {
     $this->cantidad -= $this->cantidad * $rate / 100;

     return $this;
 }
 public function getAmount():float
 {
   return $this->cantidad;
 }
 public function __destruct()
 {
     echo 'Destruct' . $this->descripcion . '<br/>';
 }
}