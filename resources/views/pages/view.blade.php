@extends('layout.app')

@section('content')

<style>
    .show-container {
        max-width: 700px;
        margin: 40px auto;
        background: #ffffff;
        padding: 25px 30px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        font-family: Arial, sans-serif;
    }

    .show-header {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #f0f0f0;
        color: #333;
    }

    .show-row {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .show-label {
        width: 150px;
        font-weight: 600;
        color: #555;
    }

    .show-value {
        flex: 1;
        color: #333;
    }

    /* ✅ Image Styling */
    .profile-img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #f0f0f0;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .profile-img:hover {
        transform: scale(1.05);
    }

    .show-footer {
        margin-top: 25px;
        text-align: right;
    }

    .btn {
        padding: 8px 14px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        margin-left: 8px;
        display: inline-block;
    }

    .btn-back {
        background-color: #6c757d;
        color: #fff;
    }

    .btn-edit {
        background-color: #ffc107;
        color: #000;
    }

    .btn:hover {
        opacity: 0.9;
    }
</style>

<div class="show-container">
    <div class="show-header">
        User Details
    </div>

    
    <div class="show-row">
        <div class="show-label">Image:</div>
        <div class="show-value">
           <img src="{{ asset('storage/profile/'.$user->image) }}" alt="profile"  class="profile-img">
        </div>
    </div>

    <div class="show-row">
        <div class="show-label">Name:</div>
        <div class="show-value">{{ $user->name }}</div>
    </div>

    <div class="show-row">
        <div class="show-label">Email:</div>
        <div class="show-value">{{ $user->email }}</div>
    </div>

    <div class="show-row">
        <div class="show-label">Phone:</div>
        <div class="show-value">{{ $user->phone ?? 'N/A' }}</div>
    </div>

    <div class="show-row">
        <div class="show-label">Created At:</div>
        <div class="show-value">{{ $user->created_at->format('d M Y') }}</div>
    </div>

    <div class="show-footer">
        <a href="#" class="btn btn-back">Back</a>
        <a href="#" class="btn btn-edit">Edit</a>
    </div>
</div>

@endsection