@extends('layouts.app')

@section('title')
    Home
@endsection

@section('main')
    <div class="container py-5">
        <div class="row g-3">
            <div class="col-4">
                {{-- card prodotto --}}
                <div class="card-img position-relative">
                    <img class="w-100" src="{{ Vite::asset('resources/img/1.webp') }}" alt="Testo">
                    <span class="ms_like">&hearts;</span>
                    <div class="ms_labels">
                        <span class="ms_discount">-50%</span>
                        <span class="ms_category">Sostenibilità</span>
                    </div>
                </div>
                <div class="card-text d-flex flex-column">
                    <span>Levi's</span>
                    <span>Relaxed Fit</span>
                    <p><span>14,99 €</span>29,99 €</p>
                </div>
            </div>
            {{-- /card prodotto --}}

        </div>
    </div>
@endsection