@extends('layouts.main')

@section('page-title', 'Singolo film')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                {{ $film->title }}
            </h1>
        </div>

        <div class="row">
           
            <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <ul>
                            <li>
                                {{ $film->original_title }}
                            </li>

                            <li>
                                {{ $film->date }}
                            </li>

                            <li>
                                {{ $film->nationality }}
                            </li>

                            <li>
                                {{ $film->vote }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                
        </div>
    </div>
</div>
@endsection
