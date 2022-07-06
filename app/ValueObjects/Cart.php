<?php

namespace App\ValueObjects;

use App\Models\Product;
use Closure;
use Illuminate\Support\Collection;

class Cart
{
    private Collection $items;

    /**
     * @param Collection|null $items
     */
    public function __construct(Collection $items = null)
    {
        $this->items = $items ?? Collection::empty();
    }

    /**
     * @return Collection
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(Product $product): Cart {
        $items = $this->items;
        $item = $items->first($this->IsProductIdSameAsCartItemProduct($product));

        if (!is_null($item)) {
            $items = $items->reject($this->IsProductIdSameAsCartItemProduct($product));

            $newItem = $item->addQuantity($product);
        } else {
            $newItem = new CartItem($product);
        }
        $items->add($newItem);

        return new Cart($items);
    }

    /**
     * @param Product $product
     * @return Closure
     */
    public function IsProductIdSameAsCartItemProduct(Product $product): Closure
    {
        return function ($item) use ($product) {
            return $product->id == $item->getProductId();
        };
    }
}
