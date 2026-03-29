<link rel="stylesheet" href="{{asset('css/errorStyle.css')}}">
<link rel="stylesheet" href="{{asset('css/registerStyle.css')}}">

<div class="form-container">
    <h2>Register</h2>

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('post.edit.store',$user->id) }}" method="POST"  enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
            @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
            @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

          <div>
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone', $user->phone) }}">
            @error('phone')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

             <!-- Image Upload -->
        <div>
            <label for="image">Profile Image</label>
            <input type="file" name="image" id="image" accept="image/*" value="{{old('image', $user->image)}}">
            @error('image')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="{{ $user->password}}">
            @error('password')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password">
            @error('confirm_password')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <!-- ✅ Role Selection -->
      <div>
    <label for="role">Select Role</label>
    <select name="role_id" id="role">
        <option value="">-- Select Role --</option>

        @foreach($roles as $role)
            <option value="{{ $role['id'] }}" 
                {{ old('role_id') == $role['id'] ? 'selected' : '' }}>
                {{ $role['name'] }}
            </option>
        @endforeach
    </select>

    @error('role_id')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>

        <button type="submit">Register</button>
    </form>
</div>