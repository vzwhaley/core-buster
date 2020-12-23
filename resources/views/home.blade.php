@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>Rental Record for <em>{{\Auth::user()->name}}</em></h1></div>

                        <div class="card-body">

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <ul>
                                <li>Back to the Future - 3</li>
                                <li>Office Space - 3.5</li>
                                <li>The Big Lebowski - 15</li>
                            </ul>
                            <p>Amount owed is <em>21.5</em></p>
                            <p>You earned <em>4</em> frequent renter points</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
