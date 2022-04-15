@extends('layouts.app2')
<link rel="stylesheet" href="css/add_account.css">
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Add Account</h1>
                        </div>
                    </div>
                </div>
            </div>
           

    <div class="login-dark">
        <form method="post" action="{{route('add.account')}}">
            @csrf
            @if(session()->has('success'))
      <div class="alert alert-danger">  {{session('success')}}</div>

        @endif
        <h1 style="text-align:center;">Add Account</h1>
            <div class="illustration"><i class="fa fa-user mb-5"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Enter Account Name"></div>
            
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Add</button></div>
            <!-- <div class="form-group"><button class="btn btn-secondary" type="submit">Back</button></div> -->
            <a href="/home" class="btn btn-dark">Back</a>

        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

      
          
           
            
    </section>
@endsection
