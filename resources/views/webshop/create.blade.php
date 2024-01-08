@extends('webshop.layout');

@section('content')

<div class="container-fluid">


    <div class="row">
        <div class="col-lg-6 margin-tb">

            <!-- First colon -->

            <form action="{{ route('webshop.store') }}" method="POST" enctype="multipart/form-data" class="mt-5">
                @csrf

            <div class="form-group col-md-7 mb-3">
                <label for="brand">BRAND</label>
                <input type="text" class="form-control" name="brand" id="brand" placeholder="Yamaha">
            </div>

            <div class="form-group col-md-7 mb-3">
                <label for="model">MODEL</label>
                <input type="text" class="form-control" name="model" id="model" placeholder="Pacifica">
            </div>

            <div class="form-group col-md-7 mb-3">
                <label for="type">TYPE</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Electric">
            </div>

            <div class="form-group col-md-7 mb-3">
                <label for="color">COLOR</label>
                <input type="text" class="form-control" name="color" id="color" placeholder="Black & White">
            </div>

            <div class="form-group col-md-7 mb-3">
                <label for="description">DESCRIPTION</label>
                <textarea id="description" name="description" rows="5" cols="50" class="form-control" placeholder="Short description of product"></textarea>
            </div>

            <div class="form-group col-md-7 mb-3">
                <label for="price">PRICE</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="500 $">
            </div>

            <div class="form-group col-md-7 mb-3">
                <label for="image_path">PRODUCT IMAGE</label>
                <input class="form-control" name="image_path[]" type="file" multiple>
            </div>

            <div class="mx-auto text-center">
                <button type="button" class="btn btn-success">INSERT</button>
            </div>
            </form>

        </div>



        <!-- Second colon -->




        <div class="col-lg 6 margin-tb mt-5">

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Type</th>
                    <th scope="col">Color</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image path</th>
                  </tr>

                  @foreach ($webshop as $guitar)

                  <tr>
                    <td>{{ $guitar->id }}</td>
                    <td>{{ $guitar->brand }}</td>
                    <td>{{ $guitar->model }}</td>
                    <td>{{ $guitar->type }}</td>
                    <td>{{ $guitar->color }}</td>
                    <td>{{ $guitar->description }}</td>
                    <td>{{ $guitar->price }}</td>
                    <td>{{ $guitar->image_path }}</td>
                  </tr>


                    
                  @endforeach
                </thead>
             
              </table>

              {{ $webshop->links() }}
        
        </div>


    </div>
</div>















@endsection







