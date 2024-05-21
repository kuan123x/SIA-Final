@extends('layout')

@section('content')
    <div class="container mt-4">
        <h1>Heroes Database</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Hero Name</th>
                    <th>Type</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $hero)
                <tr>
                    <td>{{ $hero->id }}</td>
                    <td>{{ $hero->hero_name }}</td>
                    <td>{{ $hero->type }}</td>
                    <td>{{ $hero->role }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
