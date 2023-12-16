@extends('layouts.auth.app')

@section('title', 'Forgot Password')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8 col-lg-6 col-xl-5">
    <div class="card mt-4">

      <div class="card-body p-4">
        <div class="text-center mt-2">
          <h5 class="text-primary">Forgot Password?</h5>
          <p class="text-muted">Reset password with velzon</p>

          <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c" class="avatar-xl"></lord-icon>

        </div>

        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @else
        <div class="alert alert-borderless alert-warning text-center mb-2 mx-2" role="alert">
          Enter your email and instructions will be sent to you!
        </div>
        @endif

        <div class="p-2">
          <form action="{{ route('password.email') }}" method="post">
            @csrf

            <div class="mb-4">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{ old('email') }}" required placeholder="Email" autocomplete="email" autofocus>
              <x-form.validation.error name="email" />
            </div>

            <div class="text-center mt-4">
              <button class="btn btn-success w-100" type="submit">Send Reset Link</button>
            </div>
          </form><!-- end form -->
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