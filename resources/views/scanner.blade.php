@extends('layout')

@section('content')
    <style>
        #wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #reader {
            width: 300px;
            height: 300px;
            border: 2px solid #333;
            position: relative;
            overflow: hidden;
        }

        #scan-line {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #28a745;
            animation: scan 2s infinite linear;
        }

        @keyframes scan {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(100%);
            }
        }

        h1 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .container {
            text-align: center;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container">
        <div id="wrapper">
            <h1>Scan Hero</h1>
            <div id="reader">
                <div id="scan-line"></div>
            </div>
            {{-- <button class="btn" id="scan-btn">Start Scan</button> --}}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/html5-qrcode@latest/dist/html5-qrcode.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/html5-qrcode.min.js') }}"></script>
    <script>
        const config = {
            fps: 30,
            qrbox: 200
        }

        const scanner = new Html5QrcodeScanner("reader", config)

        const success = (data) => {
            alert(data)
        }

        const error = (err) => {
            alert(err)
        }

        scanner.render(success, error);

        const scanButton = document.getElementById('scan-btn');
        scanButton.addEventListener('click', () => {
            scanner.start();
            scanButton.style.display = 'none';
        });
    </script>
@endsection
