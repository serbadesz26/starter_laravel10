@extends('layouts.auth.app')

@section('title', 'Sign Up')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8 col-lg-6 col-xl-5">
    <div class="card mt-4">

      <div class="card-body p-4">
        <div class="text-center mt-2">
          <h5 class="text-primary">Create New Account</h5>
          <p class="text-muted">Get your free velzon account now</p>
        </div>
        <div class="p-2 mt-4">
          <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              <x-form.validation.error name="name" />
            </div>

            <div class="mb-3">
              <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="useremail" placeholder="Enter email address" name="email" value="{{ old('email') }}" required autocomplete="email">
              <x-form.validation.error name="email" />
            </div>

            <div class="mb-3">
              <label class="form-label" for="password">Password</label>
              <div class="position-relative auth-pass-inputgroup">
                <input type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password" name="password" required autocomplete="new-password" placeholder="Password">
                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                <x-form.validation.error name="password" />
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label" for="password_confirmation">Password Confirmation</label>
              <div class="position-relative auth-pass-inputgroup">
                <input type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password confirmation" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
              </div>
            </div>

            <div class="mb-4">
              <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Velzon <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
            </div>

            <div class="mt-4">
              <button class="btn btn-success w-100" type="submit">Sign Up</button>
            </div>

            <div class="mt-4 text-center">
              <div class="signin-other-title">
                <h5 class="fs-13 mb-4 title text-muted">Create account with</h5>
              </div>

              <div>
                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
              </div>
            </div>
          </form>

        </div>
      </div>
      <!-- end card body -->
    </div>
    <!-- end card -->

    <div class="mt-4 text-center">
      <p class="mb-0">Already have an account ? <a href="{{ route('login') }}" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
    </div>

  </div>
</div>
@endsection