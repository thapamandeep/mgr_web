
<link rel="stylesheet" href="{{asset('css/loginStyle.css')}}">
<link rel="stylesheet" href="{{asset('css/errorStyle.css')}}">

<div class="form-container">
    <h2>Login</h2>

    @if (Session::has('success'))
        <div class="alert alert-success">
            <h4>Success!</h4>
            <p>{{ Session::get('success') }}</p>
            <button type="button" class="close" onclick="this.parentElement.style.display='none';">
                &times;
            </button>
        </div>
    @endif

    @if (Session::has('error_message'))
        <div class="alert alert-danger">
            <h4>Error!</h4>
            <p>{{ Session::get('error_message') }}</p>
            <button type="button" class="close" onclick="this.parentElement.style.display='none';">
                &times;
            </button>
        </div>
    @endif

 

    <form action="{{ route('login.post') }}" method="POST">
        @csrf

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Enter your email">

                      @error('email')
  <span class="invalid-feedback">{{ $message }}</span>
@enderror


        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">

                      @error('password')
  <span class="invalid-feedback ">{{ $message }}</span>
@enderror


        </div>

        <button type="submit">Login</button>
    </form>

    <p style="text-align:center; margin-top:15px;">
        Don't have an account? Register here
    </p>
</div>

