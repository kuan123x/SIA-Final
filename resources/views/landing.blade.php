@extends('layout')

@section('content')

<div class="container mt-4" style="margin-top: 60px;">
    <div class="button-and-cards">

        <div class="row mb-3">
            <div class="col-md-12 text-right">
                <a href="{{ route('scanner') }}" class="btn btn-outline-secondary btn-sm  align-items-center gap-2 mr-5">
                    <svg id="Layer_1" data-name="Layer 1" class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.61 122.88" style="width: 20px; height: 20px;">
                        <title>scan</title>
                        <path d="M23.38,0h13V11.15h-13a12.22,12.22,0,0,0-8.64,3.57l0,0a12.22,12.22,0,0,0-3.57,8.64V39.32H0V23.38A23.32,23.32,0,0,1,6.86,6.89l0,0A23.31,23.31,0,0,1,23.38,0ZM3.25,54.91H119.36a3.29,3.29,0,0,1,3.25,3.27V64.7A3.29,3.29,0,0,1,119.36,68H3.25A3.28,3.28,0,0,1,0,64.7V58.18a3.27,3.27,0,0,1,3.25-3.27ZM90.57,0h8.66a23.28,23.28,0,0,1,16.49,6.86v0a23.32,23.32,0,0,1,6.87,16.52V39.32H111.46V23.38a12.2,12.2,0,0,0-3.6-8.63v0a12.21,12.21,0,0,0-8.64-3.58H90.57V0Zm32,81.85V99.5a23.46,23.46,0,0,1-23.38,23.38H90.57V111.73h8.66A12.29,12.29,0,0,0,111.46,99.5V81.85Zm-86.23,41h-13A23.32,23.32,0,0,1,6.86,116l-.32-.35A23.28,23.28,0,0,1,0,99.5V81.85H11.15V99.5a12.25,12.25,0,0,0,3.35,8.41l.25.22a12.2,12.2,0,0,0,8.63,3.6h13v11.15Z"/>
                    </svg>
                </a>
            <a href="/heroes/pdf" class="button-30 export-button pdf " role="button">PDF</a>
            <a href="/heroes/csv-all" class="button-30 export-button mr-5 csv" role="button">CSV</a>
                <form action="{{ route('heroes.import.csv') }}" method="POST" enctype="multipart/form-data" style="display: inline-block;">
                    @csrf
                    <input type="file" name="csv_file" style="margin-right: 10px;">
                    <button type="submit" class="button-30 btn btn-primary mb-2 import-csv-btn">Import CSV</button>

                </form>
                <form id="importForm" action="{{ route('heroes.import.sql') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="sql_file">
                    <button type="submit" class="button-30 btn btn-primary">Import SQL</button>
                </form>

                <script>
                document.getElementById('importForm').addEventListener('submit', function(event) {
                    event.preventDefault();
                    var formData = new FormData(this);

                    fetch(this.action, {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => {
                        if (response.ok) {

                            window.location.href = "{{ route('heroes.show.database') }}";
                        } else {
                            console.error('Failed to import SQL');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                });
                </script>

            </div>

        </div>


        <div class="row">
            @foreach($heroes as $hero)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col-12">
                                    {!! QrCode::size(100)->generate(Request::url() . '/heroes/' . $hero->hero_name) !!}
                                </div>
                            </div>
                            <div class="row mt-2 ml-4">
                                <div class="col-12">
                                    <h3 class="card-title text-left">Name: {{ $hero->hero_name }}</h3>
                                </div>
                            </div>
                            <div class="row ml-4">
                                <div class="col-12">
                                    <h5 class="card-text text-left">Type: {{ $hero->type }}</h5>
                                </div>
                            </div>
                            <div class="row ml-4">
                                <div class="col-12">
                                    <h5 class="card-text text-left">Role: {{ $hero->role }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .button-30 {
        align-items: center;
        appearance: none;
        border-radius: 4px;
        border-width: 0;
        box-sizing: border-box;
        color: #36395A;
        cursor: pointer;
        display: inline-flex;
        font-family: "JetBrains Mono", monospace;
        height: 48px;
        justify-content: center;
        line-height: 1;
        list-style: none;
        overflow: hidden;
        padding-left: 16px;
        padding-right: 16px;
        position: relative;
        text-align: left;
        text-decoration: none;
        transition: box-shadow .15s, transform .15s;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
        will-change: box-shadow, transform;
        font-size: 18px;
    }

    .button-30:focus {
        box-shadow: #D6D6E7 0 0 0 1.5px inset;
    }

    .button-30:hover {
        transform: translateY(-2px);
    }

    .button-30:active {
        transform: translateY(2px);
    }


    .pdf {
        background-color: #b9230f;
        box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #791205 0 -3px 0 inset;
    }

    .pdf:hover {
        box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
    }

    .pdf:active {
        box-shadow: #D6D6E7 0 3px 7px inset;
    }

    .csv {
        background-color: #3CB371;
        box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #1f7546 0 -3px 0 inset;
    }

    .csv:hover {
        box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
    }

    .csv:active {
        box-shadow: #D6D6E7 0 3px 7px inset;
    }

    .export-button {
        padding: 15px 40px;
        border: none;
        outline: none;
        color: #FFF;
        cursor: pointer;
        position: relative;
        z-index: 0;
        border-radius: 12px;
        text-decoration: none;
    }

    .export-button.pdf,
    .export-button.csv {
        text-decoration: none !important;
    }

    .button-and-cards {
        display: flex;
        flex-direction: column;
    }

    .mb-3 {
        margin-left: auto;
    }

    .import-csv-btn {
        position: relative;
        z-index: 1;
    }

    .import-csv-btn::before {
        display: none;
    }
</style>

@endsection
