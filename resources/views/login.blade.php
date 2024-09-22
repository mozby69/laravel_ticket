<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>


@if (session('error'))
    <div class="card-body">
        <div>{{ session('error') }}</div>
    </div>
@endif

<section class="vh-100">

    <div class="container-fluid h-custom" style="position:relative;top:8rem;">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            
          <form method="POST" action="{{ route('login.post')}}" class="card-body">
           @csrf
  
           
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="name">Email address</label>
              <input type="text" id="name" class="form-control form-control-lg" placeholder="Enter a valid username address" name="name" required>
             
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
              <label class="form-label" for="password">Password</label>
              <input type="password" id="password" class="form-control form-control-lg" placeholder="Enter password" name="password" required>             
            </div>

            <button type="submit" class="btn btn-primary px-5 mt-3">Login</button>
          </form>

        </div>
      </div>
    </div>
{{-- 

    <div
      class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
      <!-- Copyright -->
      <div class="text-white mb-3 mb-md-0">
        Copyright © 2024. All rights reserved.
      </div>
      <!-- Copyright -->
  
     
    </div> --}}



  </section>








   <script src="{{ asset('js/bootstrap.min.js')}}"></script>
</body>
</html>