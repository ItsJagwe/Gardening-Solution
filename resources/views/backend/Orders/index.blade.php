@extends('style.master')

@section('content')
<section style="padding-top:60px;">
    
    <div class="container">
        
        <div class="col-lg-12">
            
        </div>

       
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <table class="table">
                        <tr>
                            <th> Orders </th>
                            <!--<th><a href="/admin/service/create" class="btn btn-primary">Add new Service</a></th> -->
               
                    <div class="card-body">
                    
                    
                    
                        <table class="table table-hover table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Order Id</th>
                                    <th>Service Id</th>
                                    <th>Service Name</th>
                                    <th>User Id</th>
                                    <th>User Email</th>
                                    <th>Package Type</th>
                                    <th>Order Date</th>
                                    <th>Delete Order</th>
                                </tr>
                            </thead>
            
                            @foreach($orders as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->service_id}}</td>
                                <td>{{$post->service_title}}</td>
                                <td>{{$post->user_id}}</td>
                                <td>{{$post->email}}</td>
                                <td>{{$post->pack_type}}</td>
                                <td>{{$post->date}}</td>
                                <td>
                                    <a href="{{ "orderdelete/".$post['id'] }}" class="btn btn-danger">Delete</a>
                                    
                                </td>
                            </tr>
                            @endforeach
                           
                        </table>        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection