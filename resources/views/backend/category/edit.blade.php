@extends('backend.category.master')
  
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
                            <form action="{{ route('category.update',$categories->id) }}" method="post">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label for="title">Category Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Category title" value="{{ $categories->title }}"/>

                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="price">Category Price</label>
                                    <input name="price" placeholder="Write the price here..." class="form-control"  id="" cols="2" rows="1">{{ $categories->price }}</input>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="description">Category Image</label>
                                    <div class="input-group">
                                        <input class="form-control" type="file" name="photo" value="{{ $categories->photo }}" multiple />
                                    </div>
                                    <img id="holder" style="margin-top:15px;max-height:100px;">
                                </div>

                                <br>

                                <div class="form-group">
                                    <label for="status">Category Status</label>
                                    <select name="status" class="form-control show-trick ">
                                        <option value="active" {{ $categories->status=='active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $categories->status=='inactive' ? 'selected' : '' }}>InActive</option>
                                    </select>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success">Update Category</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection