@extends('layouts.app')

@section('content')
    <div class="container">

        @include('helpers.flash-messages')

        <div class="row">
            <div class="col-6">
                <h1 class="float-start">
                    <i class="fa-solid fa-list"></i>
                    Zamówienia
                </h1>
            </div>
        </div>

        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ilosć</th>
                    <th scope="col">Cena [PLN]</th>
                    <th scope="col">Status zamówienia</th>
                    <th scope="col">Produkty</th>
                </tr>
                </thead>

                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->payment->status }}</td>
                        <td>
                            <ul>
                                @foreach($order->products as $product)
                                    <li>{{ $product->name }} - {{ $product->description }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $orders->links() }}
        </div>
    </div>
@endsection

@section('javascript')
    const deleteUrl = "{{ url('products') }}/";
@endsection

@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection
