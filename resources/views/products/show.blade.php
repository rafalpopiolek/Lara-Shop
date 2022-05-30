@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Szczegóły produktu</div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nazwa</label>

                            <div class="col-md-6">
                                <input id="name" maxlength="500" type="text"
                                       class="form-control" name="name"
                                       value="{{ $product->name }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Opis</label>

                            <div class="col-md-6">
                                <textarea maxlength="1500" class="form-control" name="description" id="description"
                                          disabled>
                                    {{ $product->description }}
                                </textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="amount" class="col-md-4 col-form-label text-md-end">Ilość</label>

                            <div class="col-md-6">
                                <input id="amount" min="0" type="number"
                                       class="form-control" name="amount"
                                       value="{{ $product->amount }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">Cena</label>

                            <div class="col-md-6">
                                <input step="0.01" min="0" id="price" type="number"
                                       class="form-control" name="price"
                                       value="{{ $product->price }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('shop.product.fields.category') }}</label>

                            <div class="col-md-6">
                                <select disabled id="category_id" class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                    @if($product->hasCategory())
                                        <option>{{ $product->category->name }}</option>
                                    @else
                                        <option>Brak</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
