@extends('guitars_table.layout')

@section('content')

<div class="row">
    <div class="col mt-3">

        <div class="col-lg 12">

            <table class="table table-responsive table-bordered mx-auto table-hover caption-top">
              <caption>List of guitars available on storage.</caption>
                  <tr class="table-light table-active text-uppercase text-white text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Type</th>
                    <th scope="col">Color</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Image path</th>
                    <th scope="col">Description</th>
                    <th scope="col" width="180px">Action</th>
                  </tr>

                  @foreach ($webshop as $guitar)

                  <tr>
                    <td>{{ $guitar->id }}</td>
                    <td>{{ $guitar->brand }}</td>
                    <td>{{ $guitar->model }}</td>
                    <td>{{ $guitar->type }}</td>
                    <td>{{ $guitar->color }}</td>
                    <td>{{ $guitar->price }}</td>
                    <td>{{ $guitar->stock}}</td>
                    <td>{{ $guitar->image_path}}</td>
                    <td>{{ $guitar->description }}</td>
                    <td>
                      <form action="{{ route('guitars_table.destroy',$guitar->id) }}" method="POST">
                          <a class="btn btn-info btn-sm" href="{{ route('guitars_table.show',$guitar->id) }}">Show</a>
                          <a class="btn btn-primary btn-sm" href="{{ route('guitars_table.edit',$guitar->id) }}">Edit</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                  </td>
                  </tr>
                   
                  @endforeach
                
            </table>
            <div>
              <a class="btn btn-success" href="{{ route('guitars_table.create') }}">BACK TO CREATE</a>
            </div>




        </div>
        


    </div>
</div>

@endsection