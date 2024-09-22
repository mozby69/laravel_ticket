<style>
.nav-item .nav-link{
    color:white;
    margin-right:1rem;
}
.navbar-brand{
    color:white;
    font-weight: bold;
    margin-left:2rem;
  
}

</style>


<div class="mainnavbar" >

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #5EA061 !important;">
    <div class="container-fluid"> 
      <a class="navbar-brand" href="{{route('index')}}">JGC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('import')}}">IMPORT CSV</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" ari-current="page" href="{{route('import_dbf_page')}}">IMPORT DBF</a>
          </li>

          <button type="button" class="btn btn-md px-2" data-bs-toggle="modal" data-bs-target="#logout" style="color:white;">
            <span class="material-symbols-outlined" style="font-size:1.2rem;font-weight:bold;padding-top:.2rem;">
              power_settings_new
              </span>
           </button>
       
        </ul>
     
      </div>

    

    </div>
  </nav>


</div>



<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="logout" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Logout</h1>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  
        <h5>Are you sure you want to logout?</h5>
        <div class="container" style="display: flex; flex-direction: column; align-items: center;">

        
       </div>
      

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        @auth  <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-danger btn-outline-white">Logout</button>
        </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary">Login</a>
        @endauth

     
      </div>

    </div>
  </div>
</div>
