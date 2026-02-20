@extends('layout.app')

@section('content')
<section class="table-section">
    <div class="container">
        <h2 class="table-title">Family Records</h2>

        <table class="custom-table">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Profile</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>House Number</th>
                    <th>Family Members</th>
                    <th>Role</th>
                    <th>Created At</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as  $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                   
                    <td>
                        <img src="{{asset('storage/profile/'.$user->image)}}" alt="profile">
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->house_number }}</td>
                    <td>{{ $user->no_of_family_members }}</td>
                    <td>{{ $user->role ? $user->role->name : '-' }}</td>
                    <td>{{ $user->created_at->format('d M, Y') }}</td>
                  <td>
    
                  <button class="action-btn btn-view">View</button>
    
                  <button class="action-btn btn-edit">Edit</button>
    
                  <button class="action-btn btn-delete" onclick="return confirm('Are you sure?')">Delete</button>

                </td>
                </tr>
                @endforeach
              
              
            </tbody>
        </table>
    </div>
</section>


@endsection