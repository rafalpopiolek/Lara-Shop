<?php

namespace App\Http\Controllers;

use App\Dtos\Cart\CartDto;
use App\Dtos\Cart\CartItemDto;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class CartController extends Controller
{
    public function index(): View
    {
        dd(Session::get('cart', new CartDto()));
        return view('home');
    }

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function store(Product $product): JsonResponse
    {
        $cart = Session::get('cart', new CartDto());
        $items = $cart->getItems();

        if (Arr::exists($items, $product->id)) {
            $items[$product->id]->incrementQuantity();
        } else {
            $cartItemDto = $this->getCartItemDto($product);

            $items[$product->id] = $cartItemDto;
        }

        $cart->setItems($items);
        $cart->incrementTotalQuantity();
        $cart->incrementTotalSum($product->price);

        Session::put('cart', $cart);
        return response()->json([
            'status' => 'success'
        ]);
    }

    private function getCartItemDto(Product $product): CartItemDto
    {
        $cartItemDto = new CartItemDto();
        $cartItemDto->setProductId($product->id);
        $cartItemDto->setName($product->name);
        $cartItemDto->setPrice($product->price);
        $cartItemDto->setImagePath($product->image_path);
        $cartItemDto->setQuantity(1);

        return $cartItemDto;
    }
}
