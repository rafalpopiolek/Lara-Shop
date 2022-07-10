@extends('layouts.app')

@section('css-files')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('content')
    <div class="container">

        @include('helpers.flash-messages')

        <div class="row">
            <div class="col-6">
                <h1 class="float-start">
                    <i class="fa-solid fa-list"></i>
                    {{ __('shop.product.index_title') }}
                </h1>
            </div>
            <div class="col-6">
                <a class="float-end" href="{{ route('products.create') }}">
                    <button type="button" class="btn btn-primary"><i class="fas fa-plus fa-2x"></i></button>
                </a>
            </div>
        </div>

        <div class="cart_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cart_container">
                            <div class="cart_title">Shopping Cart<small style="color: red;">
                                    ({{ $cart->getItems()->count() }})</small></div>
                            <form action="{{ route('orders.store') }}" method="POST" id="order-form">
                                @csrf
                                <div class="cart_items">
                                    <ul class="cart_list">
                                        @foreach($cart->getItems() as $item)
                                            <li class="cart_item clearfix">
                                                <div class="cart_item_image"><img src="{{ $item->getImage() }}" alt="Zdj">
                                                </div>
                                                <div
                                                    class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                                    <div class="cart_item_name cart_info_col">
                                                        <div class="cart_item_title">Name</div>
                                                        <div class="cart_item_text">{{ $item->getName() }}</div>
                                                    </div>

                                                    <div class="cart_item_quantity cart_info_col">
                                                        <div class="cart_item_title">Quantity</div>
                                                        <div class="cart_item_text">{{ $item->getQuantity() }}</div>
                                                    </div>

                                                    <div class="cart_item_price cart_info_col">
                                                        <div class="cart_item_title">Price</div>
                                                        <div class="cart_item_text">{{ $item->getPrice() }} PLN</div>
                                                    </div>

                                                    <div class="cart_item_total cart_info_col">
                                                        <div class="cart_item_title">Total</div>
                                                        <div class="cart_item_text">{{ $item->getSum() }}</div>
                                                    </div>

                                                    <div class="cart_info_col">
                                                        <button type="button" class="btn btn-danger btn-sm delete" data-id="{{ $item->getProductId() }}">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="order_total">
                                    <div class="order_total_content text-md-right">
                                        <div class="order_total_title">Order Total:</div>
                                        <div class="order_total_amount">{{ $cart->getSum() }} PLN</div>
                                    </div>
                                </div>
                                <div class="cart_buttons">
                                    <a href="/" class="button cart_button_clear">Continue Shopping</a>
                                    <button type="submit" class="button cart_button_checkout" {{ !$cart->hasItems() ? 'disabled' : '' }}>Pay</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    const deleteUrl = "{{ url('cart') }}/";
@endsection

@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection
