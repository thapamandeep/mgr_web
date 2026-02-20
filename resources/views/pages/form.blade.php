@extends('layout.app') 

@section('content')
<style>
    .error-message {
    display: block;
    margin-top: 5px;
    color: #ff4d4f; /* red */
    font-size: 12px;
}
.success-message {
    display: block;
    padding: 12px 15px;
    margin-bottom: 20px;
    border: 1px solid #4CAF50;
    background-color: #d4edda;
    color: #155724;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 500;
    text-align: center;
}
</style>
<section class="form-section">
    <div class="container">
        <h2 class="form-title">Family Information Form</h2>
      
        @if (session('success'))
    <div class="success-message">
        {{ session('success') }}
    </div>
@endif
        <form action="{{route('post.form')}}" method="POST" class="custom-form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your full name" >

                     @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror

            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" >

                     @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror

            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" >

                     @error('phone')
                    <span class="error-message">{{ $message }}</span>
                @enderror

            </div>
            
            <div class="form-group">
                <label for="house_no">House Number</label>
                <input type="text" name="house_no" id="house_no" placeholder="Enter your house number" >

                     @error('house_no')
                    <span class="error-message">{{ $message }}</span>
                @enderror

            </div>
            
            <div class="form-group">
                <label for="family_members">Number of Family Members</label>
                <input type="number" name="family_members" id="family_members" placeholder="Enter number of family members" min="1" >

                     @error('family_members')
                    <span class="error-message">{{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
    <label for="role_id">Select Role</label>
    <select name="role_id" id="role_id">
        <option value="">-- Select Role --</option>

        @foreach($roles as $role)
            <option value="{{ $role->id }}" 
                {{ old('role_id') == $role->id ? 'selected' : '' }}>
                {{ $role->name }}
            </option>
        @endforeach
    </select>

    @error('role_id')
        <span class="error-message">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="profile_image">Upload Image</label>
    <input type="file" name="image" id="image" accept="image/*">

    @error('image')
        <span class="error-message">{{ $message }}</span>
    @enderror
</div>
            
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</section>
@endsection