
@extends('layouts.app2')
<link rel="stylesheet" href="{{asset('css/add_account.css')}}">
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Edit Account</h1>
                        </div>
                    </div>
                </div>
            </div>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

            
       <div class="container pt-5 bg-dark">
        <form method="post" action="">
            @method('PUT')
            @csrf
        <div class="mb-3">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Account') }}
            </h2>
      <label for="exampleFormControlInput1" class= " text-white form-label">Name :</label>
      <input type="text" class="form-control" name="name" value="{{$account->name}}">
    </div>
    
    <input type="submit" name="submit" value="Submit" class="btn btn-primary" >
    <br>
    <br>
    
    </form>
    </div > 
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

      
          
           
            
    </section>
@endsection



 
{{--  
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
     

     
 

         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('Edit Account') }}
         </h2>

    <div class="container pt-5 bg-dark">
     <form method="post">
         @method('PUT')
         @csrf
     <div class="mb-3">
   <label for="exampleFormControlInput1" class= " text-white form-label">Post Title</label>
   <input type="text" class="form-control" name="title" value="{{$account->name}}">
 </div>
 
 <input type="submit" name="submit" value="Submit" class="btn btn-primary" >
 </form>
 </div > 

 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
 </body>
 </html> --}}