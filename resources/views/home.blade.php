@extends('layouts.app')

@section('title')
    Home
@endsection

@section('main')
    <div class="container py-5">
        <div class="row g-3">
            @foreach ($products as $product)
                <div class="col-4">
                    {{-- card prodotto --}}
                        @include('partials.product-card')
                    {{-- /card prodotto --}}
                </div>
            @endforeach 
        </div>
    </div>
@endsection