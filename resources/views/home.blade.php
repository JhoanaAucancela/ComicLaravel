@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Bienvenido a web comics</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                         
                </div>
            </div class="container">
            <div class="row align-items-start">
                <div class="col-md-2"> 
                  <p style="color: #758dff;font-size: 150px" > <i class="fab fa-searchengin"></i></p>
                </div>
                <div class="col-md-10">
                  <h2 style="padding-top: 75px; font-weight: bold;color: black"> Explora entre diferentes comics de DC y Marvel, entre otros autores de este mundo de comics.</h2>
                </div>
            </div>
            <div class="row align-items-start">
              <div class="col-md-10"> 
                <h2 style="padding-top: 75px;font-weight: bold;color: black">Descubre grandes historias fuera de las peliculas de superheroes.</h2>
              </div>
              <div class="col-md-2">
                <p style="color: #ff625a;font-size: 150px" > <i class="far fa-gem"></i></p>
    
              </div>
          </div>
          <div class="row align-items-start">
            <div class="col-md-2"> 
              <p style="font-size: 150px; color: #8aff5a" > <i class="fas fa-gift"></i></p>
            </div>
            <div class="col-md-10">
              <h2 style="padding-top: 75px;font-weight: bold;color: black"> Disfruta el nuevo mundo que te repara los nuevos comics.</h2>
            </div>
        </div>
        </div>
            </div>
        </div>
    </div>
</div>


@endsection
