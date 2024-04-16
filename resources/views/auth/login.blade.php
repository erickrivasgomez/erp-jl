<div class="login-form">
    <link rel="stylesheet" href="{{ asset('ui-template/assets/fonts/bootstrap/bootstrap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('ui-template/assets/css/main.min.css') }}" />
    <img src="{{ asset('ui-template/assets/images/logo.svg') }}" class="img-fluid login-logo" alt="Mercury Admin" />
    <a href="{{ route('login') }}" class="mb-4 d-flex">
        <img src="{{ asset('assets/images/logo.svg') }}" class="img-fluid login-logo" alt="Mercury Admin" />
    </a>
    <h5 class="fw-light mb-5">Sign in to access dashboard.</h5>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Your Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required />
        </div>
        <div class="mb-3">
            <label class="form-label">Your Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required />
        </div>
        <div class="d-flex align-items-center justify-content-between">
            <div class="form-check m-0">
                <input class="form-check-input" type="checkbox" name="remember" id="rememberPassword" />
                <label class="form-check-label" for="rememberPassword">Remember</label>
            </div>
            <a href="{{ route('password.request') }}" class="text-blue text-decoration-underline">Lost password?</a>
        </div>
        <div class="d-grid py-3 mt-4">
            <button type="submit" class="btn btn-lg btn-primary">
                Login
            </button>
        </div>
    </form>

    <div class="text-center py-3">or Login with</div>
    <div class="d-flex gap-2 justify-content-center">
        <!-- Add your social login links here -->
        <button type="submit" class="btn btn-outline-danger">
            <i class="bi bi-google me-2"></i>Gmail
        </button>
        <button type="submit" class="btn btn-outline-info">
            <i class="bi bi-facebook me-2"></i>Facebook
        </button>
    </div>
    <div class="text-center pt-4">
        <span>Not registered?</span>
        <a href="{{ route('register') }}" class="text-blue text-decoration-underline">Create an account</a>
    </div>
</div>
