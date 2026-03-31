@extends('admin.layout.admin-tamplate')

@section('content')

<div class="admin-dashboard">

    <h2 style="margin-bottom:20px;">Add About Us</h2>

    <form action="{{ route('post.about.us') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Title -->
        <div style="margin-bottom:15px;">
            <label>Title</label>
            <input type="text" name="title" placeholder="Enter title"
                   style="width:100%; padding:10px;"
                   value="{{ old('title') }}">
        </div>

        <!-- Description -->
        <div style="margin-bottom:15px;">
            <label>Description</label>
            <textarea name="description" rows="5"
                      placeholder="Enter description"
                      style="width:100%; padding:10px;">{{ old('description') }}</textarea>
        </div>

        <!-- Image -->
        <div style="margin-bottom:15px;">
            <label>Upload Image</label>
            <input type="file" name="image" style="width:100%;">
        </div>

        <!-- Button -->
        <div>
            <button type="submit" style="
                background:#4CAF50;
                color:#fff;
                padding:10px 20px;
                border:none;
                border-radius:5px;
                cursor:pointer;">
                Save About Us
            </button>
        </div>

    </form>

</div>

@endsection