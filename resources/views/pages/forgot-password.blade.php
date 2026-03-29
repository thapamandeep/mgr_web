

<style>
    .forgot-section {
        min-height: 85vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #f8fafc;
        padding: 20px;
    }

    .forgot-card {
        width: 100%;
        max-width: 430px;
        background: #ffffff;
        padding: 45px;
        border-radius: 14px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
    }

    .forgot-title {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 8px;
        color: #1e293b;
    }

    .forgot-subtitle {
        font-size: 14px;
        color: #64748b;
        margin-bottom: 30px;
    }

    .form-group {
        margin-bottom: 18px;
    }

    .form-label {
        font-size: 13px;
        font-weight: 500;
        margin-bottom: 6px;
        display: block;
        color: #334155;
    }

    .form-input {
        width: 100%;
        height: 48px;
        border-radius: 8px;
        border: 1px solid #e2e8f0;
        padding: 0 14px;
        font-size: 14px;
        transition: 0.2s ease;
    }

    .form-input:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    .btn-submit {
        width: 100%;
        height: 48px;
        border-radius: 8px;
        border: none;
        background: #3b82f6;
        color: white;
        font-weight: 600;
        font-size: 14px;
        transition: 0.2s ease;
    }

    .btn-submit:hover {
        background: #2563eb;
    }

    .alert {
        padding: 10px;
        border-radius: 6px;
        font-size: 13px;
        margin-bottom: 15px;
    }

    .alert-success {
        background: #dcfce7;
        color: #166534;
    }

    .alert-danger {
        background: #fee2e2;
        color: #991b1b;
    }

    .error-text {
        font-size: 12px;
        color: #dc2626;
        margin-top: 5px;
    }
</style>

<div class="forgot-section">
    <div class="forgot-card">

        <div class="forgot-title">Forgot Password</div>
        <div class="forgot-subtitle">
            Enter your registered email address. We'll send you an OTP.
        </div>

        {{-- Success --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Error --}}
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{route('post.otp')}}" method="post" >@csrf
            

            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email"
                       name="email"
                       class="form-input"
                       placeholder="enter your email"
                       value="{{ old('email') }}"
                      >

                @error('email')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

           <button type="submit" class="btn-submit">
                Submit
            </button>

        </form>

    </div>
</div>

