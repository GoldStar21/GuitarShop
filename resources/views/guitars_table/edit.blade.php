@extends('guitars_table.layout')
@section('content')

<div class="row col-12">
    <div class="mt-1">


    <!-- Logika za ispisivanje poruke, veoma je jednostavna. Allert prozor da se pojavi, bilo bi bolje mozda. -->

    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Input is not complete!</strong> Every input field is required, except image!
    </div>
    @endif

       

        <!-- Form -->

        <form class="row g-3 mt-2" action="{{ route('guitars_table.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')


                <div class="form-group col-md-6 mb-3">
                    <label for="brand">BRAND*</label>
                    <input type="text" class="form-control" name="brand" value="{{ $guitar->brand }}" id="brand" placeholder="Yamaha">
                </div>
      
                <div class="form-group col-md-6 mb-3">
                    <label for="model">MODEL*</label>
                    <input type="text" class="form-control" name="model" value="{{ $guitar->model }}" id="model" placeholder="Pacifica">
                </div>
      
                <div class="form-group col-md-6 mb-3">
                    <label for="type">TYPE*</label>
                    <input type="text" class="form-control" name="type" value="{{ $guitar->type }}" id="type" placeholder="Electric">
                </div>
      
                <div class="form-group col-md-6 mb-3">
                    <label for="color">COLOR*</label>
                    <input type="text" class="form-control" name="color" value="{{ $guitar->color }}" id="color" placeholder="Black & White">
                </div>
      
                <div class="form-group col-md-4 mb-3">
                    <label for="price">PRICE*</label>
                    <input type="number" class="form-control" name="price" value="{{ $guitar->price }}" id="price" placeholder="500 $">
                </div>
      
                <div class="form-group col-md-4 mb-3">
                    <label for="stock">STOCK*</label>
                    <input type="number" class="form-control" name="stock" value="{{ $guitar->stock }}" id="stock" placeholder="5">
                </div>
      
                <div class="form-group col-md-4 mb-3">
                    <label for="image_path">PRODUCT IMAGE*</label>
                    <input type="file" class="form-control" name="image_path" value="{{ $guitar->image_path}}" id="image_path" accept="image/*" multiple >
                </div>

                <div class="form-group col-md-12 mb-3">
                    <label for="description">DESCRIPTION*</label>
                    <textarea id="description" name="description" rows="10" cols="50" class="form-control" placeholder="Short description of product">{{ old('description', $guitar->description) }}</textarea>
                </div>
      
                <div class="text-center">
                    <button type="submit" class="btn btn-success float-start">UPDATE PRODUCT</button>
                    <a class="btn btn-info float-end" href="{{ route('guitars_table.index') }}"> DATABASE</a>
                </div>
                
            </div>
        </form>

    </div>
</div>

@endsection