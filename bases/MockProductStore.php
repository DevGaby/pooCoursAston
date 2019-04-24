<?php


class MockProductStore implements ProductStoreInterface
{
    private $products =[];

    public function add(Product $product): ProductStoreInterface
    {
        $this->products[$product->getId()] = $product;
        return $this;
    }

    public function update(Product $product): ProductStoreInterface
    {
        $this->products[$product->getId()] = $product;
        return $this;
    }

    public function save(Product $product): ProductStoreInterface
    {
        return $this;
    }

    public function remove(Product $product): ProductStoreInterface
    {
        unset($this->products[$product->getId()]);
        return $this;
    }

    public function find(int $id): ?Product
    {
        if (isset($this->products[$id]))
        {
            return $this->products[$id];
        }
        return null;
    }

    public function all(Product $product): array
    {
       return $this->products;
    }

}