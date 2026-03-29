@extends('layout.admin-tamplate')

@section('content')

<div class="admin-dashboard">

    

    <!-- Management Panels -->
    <div class="dashboard-grid">

        <div class="dashboard-item">
            <h2>👥 Members</h2>
            <p>Manage all members of Magar Samaj.</p>
            <div class="btn-group">
                <a href="#">Add Member</a>
                <a href="{{route('get.index')}}">Members List</a>
            </div>
        </div>

        <div class="dashboard-item">
            <h2>📑 Records</h2>
            <p>Manage register and members records.</p>
            <div class="btn-group">
                <a href="#">Register Records</a>
                <a href="#">Members Records</a>
            </div>
        </div>

        <div class="dashboard-item">
            <h2>🌐 Website</h2>
            <p>Control website categories and products.</p>
            <div class="btn-group">
                <a href="#">Add Category</a>
                <a href="#">Add Product</a>
            </div>
        </div>

        <div class="dashboard-item">
            <h2>⚙ Settings</h2>
            <p>Manage website settings and admin profile.</p>
            <div class="btn-group">
                <a href="#">Profile</a>
                <a href="#">Change Password</a>
            </div>
        </div>

    </div>

</div>

@endsection