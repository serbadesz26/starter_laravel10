@extends('layouts.auth.app')

@section('title', 'Email Verify')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8 col-lg-6 col-xl-5">
    <div class="card mt-4">
      <div class="card-body p-4 text-center">
        <div class="avatar-lg mx-auto mt-2">
          <div class="avatar-title bg-light text-success display-3 rounded-circle">
            <i class="ri-checkbox-circle-fill"></i>
          </div>
        </div>
        <div class="mt-4 pt-2">
          <h4>Well done !</h4>
          @if (session('status') == 'verification-link-sent')
          <div class="alert alert-success">
            A new email verification link has been emailed to you!
          </div>
          @endif
          <p class="text-muted mx-4">Aww yeah, you successfully read this important message. <a href="#" onclick="event.preventDefault(); document.getElementById('form-resend-verification').submit()">resend email</a></p>
          <form action="{{ route('verification.send') }}" method="post" id="form-resend-verification">
            @csrf
          </form>
          <div class="mt-4">
            <a href="{{ route('dashboard.index') }}" class="btn btn-success w-100">Back to Dashboard</a>
          </div>
        </div>
      </div>
      <!-- end card body -->
    </div>
    <!-- end card -->

  </div>
</div>
@endsection