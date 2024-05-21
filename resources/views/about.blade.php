@extends('layout')

@section('content')

<style>

    .card-title {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)); Black gradient
        -webkit-background-clip: text;
        -webkit-text-fill-color: white;
        position: absolute;
        bottom: -12px;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        text-align: center;
        padding: 10px 0;
        font-size: 14px;
    }
</style>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/1.jpg') }}" class="card-img-top" alt="Image 1">
                <div class="card-img-overlay">
                    <h5 class="card-title">Prologue: Songs of the Wind</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/2.jpg') }}" class="card-img-top" alt="Image 2">
                <div class="card-img-overlay">
                    <h5 class="card-title">Chapter 1: Bad Wine</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/3.jpg') }}" class="card-img-top" alt="Image 2">
                <div class="card-img-overlay">
                    <h5 class="card-title">Chapter 2: Flame Born</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/4.jpg') }}" class="card-img-top" alt="Image 2">
                <div class="card-img-overlay">
                    <h5 class="card-title">Chapter 3: The Beginning</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/5.jpg') }}" class="card-img-top" alt="Image 2">
                <div class="card-img-overlay">
                    <h5 class="card-title">Chapter 4: Dangerous Grounds</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/6.jpg') }}" class="card-img-top" alt="Image 2">
                <div class="card-img-overlay">
                    <h5 class="card-title">Chapter 5: Surprise Finding</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/7.jpg') }}" class="card-img-top" alt="Image 2">
                <div class="card-img-overlay">
                    <h5 class="card-title">Chapter 6: Wind and Fyre</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/8.jpg') }}" class="card-img-top" alt="Image 2">
                <div class="card-img-overlay">
                    <h5 class="card-title">Chapter 7: Fools Trick</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/9.jpg') }}" class="card-img-top" alt="Image 2">
                <div class="card-img-overlay">
                    <h5 class="card-title">Epilogue: Final Clue</h5>
                </div>
            </div>
        </div>


    </div>
</div>


@endsection
