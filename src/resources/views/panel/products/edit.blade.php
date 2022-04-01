@extends('panel.layouts.master')
@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="card mb-3 mb-md-4">
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>    
            @endforeach
            </ul>
        </div>
        @endif 
        
        <div class="card-body">
            <!-- Breadcrumb -->
            <nav class="d-none d-md-block" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Products</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Create New Product</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->

            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Create New Product</div>
            </div>

            <!-- Form -->
            <div>
                <form method="POST" action="{{ route('products.update', $product->slug) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $product->name }}" id="name" name="name" placeholder="Product Name">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="brand">Brand</label>
                            <input type="text" class="form-control @error('brand') is-invalid @enderror" value="{{ $product->brand }}" id="brand" name="brand" >
                            @error('brand')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="price">Price</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{ $product->price }}" id="price" name="price" placeholder="Product price">
                            @error('price')
                             <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="color">Color</label>
                            <input type="text" class="form-control @error('color') is-invalid @enderror" value="{{ $product->color }}" id="color" name="color" >
                            @error('color')
                            <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                    </div>

                    <div class="form-row">  
                        <div class="form-group col-12 col-md-4">
                            <label for="size">Size</label>
                            <input type="text" class="form-control @error('size') is-invalid @enderror" value="{{ $product->size }}" id="size" name="size" placeholder="Product size">
                            @error('size')
                             <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-12 col-md-4">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control @error('quantity') is-invalid @enderror" value="{{ $product->quantity }}" id="quantity" name="quantity" >
                            @error('quantity')
                             <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-12 col-md-4">
                            <label for="rating">Rating</label>
                            <input type="text" class="form-control @error('rating') is-invalid @enderror" value="{{ $product->rating }}" id="rating" name="rating" >
                            @error('rating')
                             <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12 col-md-12">
                            <label for="size">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" value="" id="image" name="image" >
                            @error('image')
                             <small class="text-danger">{{ $message }}</small>
                            @enderror

                            <img src="{{ \Storage::url($product->image) }}" alt="" width="64" height="64">

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12 col-md-12">
                            <label for="size">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">{{ $product->description }}</textarea>
                            @error('description')
                             <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12 col-md-12">
                            <label for="size">Specification</label>
                            <textarea class="form-control @error('specification') is-invalid @enderror" name="specification" id="specification" cols="30" rows="10">{{ $product->specification }}</textarea>
                            @error('specification')
                             <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary float-right">Create</button>
                </form>
            </div>
            <!-- End Form -->
        </div>
    </div>
</div>
@endsection