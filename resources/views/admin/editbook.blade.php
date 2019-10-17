@extends('layouts.admin')
@section('adminMain')
<div >
        @if ($errors->any())
        <div class="alert alert-danger">
                <ul>
                        @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                        @endforeach
                </ul>
        </div><br />
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
</div> 
<div class="row">

        <!-- Donut Chart -->
        <div class="col-xl-4 col-lg-5">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Book</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <form class="user" action="{{route('publish.update',[$book->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="Name" aria-describedby="name"
                value="{{$book->title}}"name="title">
                </div>
                <div class="form-group">
                  <textarea class="form-control form-control-user" aria-describedby="name" cols="7"row="7"
                name="description">{{$book->description}}</textarea>
                </div>
                <div class="form-group">
                  <input type="date" class="form-control form-control-user" id="Name" aria-describedby="name"
                    placeholder="Enter Date of Publication " name="year_pub" required>
                </div>
                <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="Name" aria-describedby="name"
                value="{{$book->price}}" name="price">
                      </div>
                <div class="form-group">
                        <select class="form-control " id="Name" 
                           name="available" required>
                           <option  >-Select Availablity-</option>
                           <option value="softcopy" >softcopy</option>
                           <option value="hardcopy" >Hard copy</option>
                           <option value="both" >Both</option>
                      </select>   
                </div>
                <div class="form-group">
                    <select class="form-control " id="Name" 
                        name="category_id" required>
                        <option  >-Select Category-</option>
                        @foreach ($cat as $item)
                        <option value="{{$item->id}}" >{{$item->name}}</option>
                        
                        @endforeach
                        
                    </select>   
                </div>
                <div class="form-group">
                    <select class="form-control " id="Name" 
                        name="author_id" required>
                        <option  >-Select Author-</option>
                        @foreach ($author as $item)
                        <option value="{{$item->id}}" >{{$item->name}}</option>
                        
                        @endforeach
                        
                    </select>   
                </div>
                <div class="form-group">
                  <input type="file" class="form-control form-control-user" id="Name" aria-describedby="name"
                name="cover_page" value="{{$item->cover_page}}">
                    <small>Upload Cover page</small>
                </div>
                <div class="form-group">
                  <input type="file" class="form-control form-control-user" id="Name" aria-describedby="name"
                name="content" value="{{$item->content}}">
                    <small>Upload Book PDF</small>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Update Book
                </button>
                <hr>
              </form>
            </div>
          </div>
        </div>
@endsection