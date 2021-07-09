@extends('style.master')
  
  @section('content')
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        
                        
                        <div class="card-body">
                            <div class="col-md-12">
                                @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>     
                                @endif
                            </div>
                            <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">      
                                @csrf         
                                <div class="form-group">
                                    <label for="title">Service Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Service title"value="{{ old('title') }}"/>

                                </div>
                            <br>
                                <div class="form-group">
                                    <label for="description">Service Image</label>
                                    <div class="input-group">
                                        <input class="form-control" type="file" name="photo" multiple />
                                    </div>
                                    <img id="holder" style="margin-top:15px;max-height:100px;">
                                </div>
                                <div class="form-group">
                                    <label for="price">Service Price</label>
                                    <input name="price" placeholder="Write the price here..." class="form-control" id="" cols="2" rows="1"></input>
                                </div>
                            <br>
                                <div class="form-group">
                                    <label for="status">Service Status</label>
                                    <select name="status" class="form-control show-trick ">
                                        <option value="">--Service status list--</option>
                                        <option value="active" {{ old('status')=='active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ old('status')=='inactive' ? 'selected' : '' }}>InActive</option>
                                    </select>
                                </div>
                            <br>
                                <button type="submit" class="btn btn-success">Add Service</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



   @endsection