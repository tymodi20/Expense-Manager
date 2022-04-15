@extends('layouts.app2')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>

        {{-- Add Account --}}
        <div class="row">
            <div class="col-md-2">
                <a href="{{route('add')}}" style="margin-left:1100px;">
                    <button type="button" style="font-size:35px" class="btn btn-sm btn-primary mb-3">Add Account</button>
                </a>
            </div>
        </div>
        @if(session()->has('name_success'))
        <div class="alert alert-danger">  {{session('name_success')}}</div>
  
          @endif
          <div class="container">
            <table class="table" border="3" style="font-size:25px">
                <thead class="thead-dark">
            <tr>
                <th scope="col" >No</th>
                <th scope="col" >Account Type</th>
                <th scope="col" >Name</th>
                <th scope="col" >Amount</th>
                <th scope="col"style="text-align:center" >Action</th>
                <th scope="col" >Transaction</th>
            </tr>            
            @foreach ($account as $acc )
            <tr>
            <td>{{$acc->id}}</td> 
           
             @if ($acc->is_default == 1)
            <td><span class="badge bg-primary">Default </span> </td>
            @else
            <td><span class="badge bg-danger">Primary</span></td>
            @endif 
           
            <td>{{$acc->name}}</td>
            <td>{{$acc->amount}}</td>
            <td style="text-align:center">
               
            <a href="{{ route('edit.account', $acc->id)}}" style="margin-right:50px">
            <li class="list-inline-item">
            <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
            </li>
            </a>
            
            <a href="{{url('delete-account')}}">
            <li class="list-inline-item">
            <a class="btn btn-danger btn-sm" onclick="return myFunction();" href=""><i class="fa fa-trash"></i></a>
            </li>
            </a>
            </td>

            <td>
            <button class="btn btn-success btn-sm rounded-0" type="button" >hfhwhughu  </button>
            </td>

            </tr>         
            @endforeach

            <script>
              function myFunction() {
                  if(!confirm("Are You Sure to delete this"))
                  event.preventDefault();
              }
             </script>
        </table>
    </div>
           
            <div class="row">
                <section class="col-lg-7 connectedSortable">
            </div>
    </section>
@endsection
