@extends('layout.app')

@section('main-content')
    <section>
        <div class="container-fluid p-5 d-flex">
            <div class="column">
                <div class="image">
                    <img src="{{ $newBrownie->thumb }}" alt="{{ $newBrownie->type }}">
                </div>
            </div>
            <div class="description mt-5 mb-5 column">
                <div class="title">
                    <h1 class="text-uppercase">{{ $newBrownie->type }}</h1>
                    <h2 class="text-start lie">Brownie</h2>
                </div>

                <div class="text mb-5">
                    <p class="text-white mt-4  fw-semibold">
                        {{ $newBrownie->description }}
                    </p>
                </div>
                <div class="ingredients mb-5">
                    <h2 class="ingredient">Ingredient</h2>
                    <p class="text-white mt-4 fw-semibold">
                        The composition of this brownie includes : {{ $newBrownie->ingredients }}
                    </p>
                </div>

                <div class="spec d-flex justify-content-between align-items-center">
                    <div class="kcal d-flex flex-column justify-content-center">
                        <span class="number">{{ $newBrownie->kcal }}</span>
                        <span class="text-uppercase name">Kcal</span>
                    </div>
                    <div class="fat d-flex flex-column justify-content-center">
                        <span class="number">{{ $newBrownie->fat }}g</span>
                        <span class="text-uppercase name">Fat</span>
                    </div>
                    <div class="carb d-flex flex-column justify-content-center">
                        <span class="number">{{ $newBrownie->carb }}g</span>
                        <span class="text-uppercase name">Carb</span>
                    </div>
                </div>

                <div class="button">
                    <button>Add to bag</button>
                </div>
            </div>
        </div>
    </section>
@endsection
@vite('resources/scss/show.scss')
