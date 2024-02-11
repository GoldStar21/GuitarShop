@extends('guitars_table.layout')
@section('content')

<div class="row col-12">
    <div class="mt-1">


    <!-- ERROR -->

        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Input is not complete!</strong> Every input field is required, except image!
        </div>
        @endif


        <!-- Form -->

        <form class="row g-3 mt-2" action="{{ route('guitars_table.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf

                <div class="form-group col-md-6 mb-3">
                    <label for="brand">BRAND*</label>
                    <input type="text" class="form-control" name="brand" id="brand" placeholder="Yamaha">
                </div>
      
                <div class="form-group col-md-6 mb-3">
                    <label for="model">MODEL*</label>
                    <input type="text" class="form-control" name="model" id="model" placeholder="Pacifica">
                </div>
      
                <div class="form-group col-md-6 mb-3">
                    <label for="type">TYPE*</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="Electric">
                </div>
      
                <div class="form-group col-md-6 mb-3">
                    <label for="color">COLOR*</label>
                    <input type="text" class="form-control" name="color" id="color" placeholder="Black & White">
                </div>
      
                <div class="form-group col-md-4 mb-3">
                    <label for="price">PRICE*</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="500 $">
                </div>
      
                <div class="form-group col-md-4 mb-3">
                    <label for="stock">STOCK*</label>
                    <input type="number" class="form-control" name="stock" id="stock" placeholder="5">
                </div>
      
                <div class="form-group col-md-4 mb-3">
                    <label for="image_path">PRODUCT IMAGE*</label>
                    <input type="file" class="form-control" name="image_path" id="image_path" accept="image/*" multiple >
                </div>

                <div class="form-group col-md-12 mb-3">
                    <label for="description">DESCRIPTION*</label>
                    <textarea id="description" name="description" rows="10" cols="50" class="form-control" placeholder="Short description of product"></textarea>
                </div>
      
                <div class="text-center">
                    <button type="submit" class="btn btn-success float-start">CREATE PRODUCT</button>
                    <a class="btn btn-info float-end" href="{{ route('guitars_table.index') }}"> VIEW DATABASE</a>
                </div>
                
            </div>
        </form>

    </div>
</div>

@endsection























