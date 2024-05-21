<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero List</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 2px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .product-qrcode {
            text-align: center;
        }
        .product-title {
            font-size: 18px;
            margin-bottom: 5px;
        }
        .product-price {
            font-size: 16px;
            color: #555;
        }
        .no-heroes {
            text-align: center;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Hero List</h1>
        </div>
        @if(count($heroes) > 0)
        <table>
            <thead>
                <tr>
                    <th>QrCode</th>
                    <th>Hero ID</th>
                    <th>Hero Name</th>
                    <th>Type</th>
                    <th>Role</th>

                </tr>
            </thead>
            <tbody>
                @foreach($heroes as $hero)
                <tr>
                    <td><img src="data:image/png;base64,{{ base64_encode(QrCode::size(80)->generate($hero->id)) }}" alt="QR Code"></td>
                    <td>{{ $hero->id }}</td>
                    <td>{{ $hero->hero_name }}</td>
                    <td>{{ $hero->type}}</td>
                    <td>{{ $hero->role}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="no-heroes">No heroes found.</p>
        @endif
    </div>
</body>
</html>
