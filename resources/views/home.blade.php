@extends('layouts.main')

@section('page-title', 'Homepage')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Film
            </h1>
        </div>

        <div class="row">
            @foreach ($films as $film)

            <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <h2>
                            {{ $film->title }}
                        </h2>

                        <a href="{{ route('films.show' , ['id' => $film->id]) }}" class="btn btn-primary">
                            Check Film
                        </a>
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
</div>
@endsection
