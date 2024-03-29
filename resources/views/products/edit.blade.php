@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('shop.product.edit_title', ['name' => $product->name]) }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('products.update', $product->id) }}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-end">{{ __('shop.product.fields.name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" maxlength="500" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ $product->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description"
                                       class="col-md-4 col-form-label text-md-end">{{ __('shop.product.fields.description') }}</label>

                                <div class="col-md-6">
                                    <textarea maxlength="1500"
                                              class="form-control @error('description') is-invalid @enderror"
                                              name="description" id="description"
                                              required autofocus>{{ $product->description }}</textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="amount"
                                       class="col-md-4 col-form-label text-md-end">{{ __('shop.product.fields.amount') }}</label>

                                <div class="col-md-6">
                                    <input id="amount" min="0" type="number"
                                           class="form-control @error('amount') is-invalid @enderror" name="amount"
                                           value="{{ $product->amount }}" required autocomplete="name" autofocus>

                                    @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="price"
                                       class="col-md-4 col-form-label text-md-end">{{ __('shop.product.fields.price') }}</label>

                                <div class="col-md-6">
                                    <input step="0.01" min="0" id="price" type="number"
                                           class="form-control @error('price') is-invalid @enderror" name="price"
                                           value="{{ $product->price }}" required autocomplete="price">

                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="category"
                                       class="col-md-4 col-form-label text-md-end">{{ __('shop.product.fields.category') }}</label>

                                <div class="col-md-6">
                                    <select id="category_id"
                                            class="form-control @error('category_id') is-invalid @enderror"
                                            name="category_id">
                                        <option value="">Brak</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}"
                                                    @if($product->isSelectedCategory($category->id)) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="image"
                                       class="col-md-4 col-form-label text-md-end">{{ __('shop.product.fields.image') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file"
                                           class="form-control @error('image') is-invalid @enderror" name="image">

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <div class="offset-md-2 col-md-6">
                                    @if(!is_null($product->image_path))
                                        <a href="{{ route('products.downloadImage', $product->id) }}">
                                            <img src="{{ asset('storage/' . $product->image_path) }}"
                                                 alt="Zdjęcie produktu"
                                                 width="200" height="200">
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row float-sm-end mr-5">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('shop.button.save') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
