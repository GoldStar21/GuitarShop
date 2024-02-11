@extends('guitars_table.layout')

@section('content')

<div class="container">
     <!-- Heading bolje da u navbaru stoje dugmad za navigaviju tipa database i tako. Joj Filipe jesi jak lik sta je ovo.-->
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="p-3">STORAGE OVERVIEW</h3>
            <a class="btn btn-info float-end" href="{{ route('guitars_table.index') }}"> DATABASE</a>
            
        </div>
    </div>

     <!-- Left side info -->
    <div class="row">
        <div class="col-md-6">

            <div class="col-md-6 mb-5">
                <div class="form-group">
                     <strong>BRAND:</strong>
                    {{ $guitar->brand }}
                 </div>
             </div>
    
             <div class="col-md-6 mb-5">
                <div class="form-group">
                    <strong>MODEL:</strong>
                      {{ $guitar->model }}
                </div>
              </div>
              
              <div class="col-md-6 mb-5">
                <div class="form-group">
                     <strong>TYPE:</strong>
                    {{ $guitar->type }}
                 </div>
             </div>
    
             <div class="col-md-6 mb-5">
                <div class="form-group">
                     <strong>COLOR:</strong>
                    {{ $guitar->color }}
                 </div>
             </div>
    
             <div class="col-md-6 mb-5">
                <div class="form-group">
                     <strong>PRICE:</strong>
                    {{ $guitar->price }}
                 </div>
             </div>
    
             <div class="col-md-6 mb-5">
                <div class="form-group">
                     <strong>STOCK:</strong>
                    {{ $guitar->stock }}
                 </div>
             </div>

        </div>

        <!-- Right side info -->
    
        <div class="col-md-6">

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset($guitar->image_path) }}" width="300" height="400" class="img img-responsive" />
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

        </div>
    </div>

    <!-- Description side info -->

    <div class="row">
        <div class="col-12">

            <div class="mb-5">
                <div class="form-group">
                     <strong>DESCRIPTION:</strong>
                    {{ $guitar->description }}
                 </div>
             </div>
            
        </div>
    </div>

   <!-- Css za description kolonu da bi bio slajder da ne razvlaci stranicu, vise slika kontejner i tako to. -->
   <!-- Poraditi na mogućnosti za više slika. Slajder jedan za sliku ne bi bio losa stvar, bilo bi top. Mozda neki div i tjt -->
    





</div>



@endsection