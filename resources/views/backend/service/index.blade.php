@extends('backend.service.master')

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
                            <th> Services </th>
                            <th><a href="/admin/service/create" class="btn btn-primary">Add new Service</a></th>
                        
                        <!-- search  -->
                            <form action="#" method="get">
                                <th><input type="text" class="form-control" name="query" placeholder="search here"></th>
                                <th><button type="submit" class="btn btn-primary">Search</button></th>
                            </form>
                        </tr>
                        </table>
                    </div>
                    
                    <div class="card-body">
                    
                    
                    
                        <table class="table table-hover table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Service title</th>
                                    <th>Service photo</th>
                                    <th>Service price</th>
                                    <th>Service status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
            
                            @foreach($services as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td><img src="{{ $post->photo }}" alt="service img" style="max-height: 90px; max-width:120px;"></td>
                                <td>{{$post->price}}</td>
                                <td>
                                    {{ $post->status }}
                                </td>
                                <td>
                                    <a href="{{ route("service.edit",$post->id) }}" class="float-left btn btn-success">Edit</a>
                                    
                                    <a href="{{ "servicedelete/".$post['id'] }}" class="btn btn-danger">Delete</a>
                                    
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