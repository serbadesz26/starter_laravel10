@extends('layouts.auth.app')

@section('title', 'Password Confirm')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8 col-lg-6 col-xl-5">
    <div class="card mt-4">

      <div class="card-body p-4">
        <div class="text-center mt-2">
          <h5 class="text-primary">Create new password</h5>
          <p class="text-muted">Your new password must be different from previous used password.</p>
        </div>

        <div class="p-2">
          <form action="{{ route('password.confirm') }}" method="POST">
            @csrf

            <div class="mb-3">
              <label class="form-label" for="password">Password</label>
              <div class="position-relative auth-pass-inputgroup">
                <input type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password" name="password" required autocomplete="new-password" placeholder="Password">
                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                <x-form.validation.error name="password" />
              </div>
            </div>

            <div class="mt-4">
              <button class="btn btn-success w-100" type="submit">Reset Password</button>
            </div>

          </form>
        </div>
      </div>
      <!-- end card body -->
    </div>
    <!-- end card -->

    <div class="mt-4 text-center">
      <p class="mb-0">Wait, I remember my password... <a href="auth-signin-basic.html" class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
    </div>

  </div>
</div>
@endsection