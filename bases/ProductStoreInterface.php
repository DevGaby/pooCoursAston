<?php

interface ProductStoreInterface
{
    public function add(Product $product): ProductStoreInterface;
    public function update(Product $product): ProductStoreInterface;
    public function save(Product $product): ProductStoreInterface;
    public function remove(Product $product): ProductStoreInterface;
    public function find(int $id): ?Product;
    public function all(Product $product):array;
}
