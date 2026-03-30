@extends('admin.layout.admin-tamplate')

@section('content')

<div class="admin-dashboard">

    {{-- Banner --}}
    <div class="dashboard-banner">
        <h1>Hero Section List</h1>
        <p>Manage your hero content easily</p>
    </div>

    {{-- Table --}}
    <div class="dashboard-item">

        <h2>All Hero Data</h2>

        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($heroes as $hero)
                <tr>
                    <td>{{ $hero->id }}</td>

                    <td>
                        <img src="{{ asset('storage/album/'.$hero->image) }}" width="80">
                    </td>

                    <td>{{ $hero->title }}</td>
                    <td>{{ $hero->subtitle }}</td>

                    <td>
                        <div class="btn-group">
                            <a href="{{ route('get.edit.hero',$hero->id) }}">Edit</a>
                            <a href="{{ route('get.delete.hero',$hero->id) }}">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</div>

@endsection