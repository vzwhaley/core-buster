@extends('layouts.app')

@section('content')

    <div id="rentals">

        <div class="grid-container" style="margin-bottom: 1rem;">
            <div class="grid-x grid-margin-x">
                <div class="cell small-12">
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer-js')

@endsection
