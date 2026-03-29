

<style>
    .reset-section {
        min-height: 90vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #0f172a, #1e293b);
        padding: 20px;
    }

    .reset-card {
        width: 100%;
        max-width: 450px;
        background: #ffffff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
    }

    .reset-card h2 {
        text-align: center;
        margin-bottom: 25px;
        font-weight: 600;
        color: #0f172a;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        margin-bottom: 15px;
        border-radius: 8px;
        border: 1px solid #cbd5e1;
        font-size: 14px;
    }

    .form-control:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 2px rgba(59,130,246,0.2);
    }

    .btn-reset {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 8px;
        background: #3b82f6;
        color: #fff;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .btn-reset:hover {
        background: #2563eb;
    }

    .error-text {
        color: red;
        font-size: 13px;
        margin-top: -10px;
        margin-bottom: 10px;
    }

</style>

<div class="reset-section">
    <div class="reset-card">
        <h2>Reset Password</h2>

        @if(session('success'))
            <div style="color:green; margin-bottom:10px;">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div style="color:red; margin-bottom:10px;">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{route('post.update.password')}}" method="POST">
            @csrf

            <input type="email" name="email" class="form-control" placeholder="Enter your Email" >
            @error('email')
                <div class="error-text">{{ $message }}</div>
            @enderror

            <input type="text" name="otp" class="form-control" placeholder="Enter OTP" >
            @error('otp')
                <div class="error-text">{{ $message }}</div>
            @enderror

            <input type="password" name="new_password" class="form-control" placeholder="New Password" >
            @error('new_password')
                <div class="error-text">{{ $message }}</div>
            @enderror

            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" >

            <button type="submit" class="btn-reset">Reset Password</button>
        </form>
    </div>
</div>

