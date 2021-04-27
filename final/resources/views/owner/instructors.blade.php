@extends('layouts.ownerapp')

@section('content')
    <div class="container">
       <!-- start first row  -->
        <div class="row">
            <div class="col"><h3 class="text-left">Instructors</h3></div>
                <div class="text-right ">
                    <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-user-plus"></i> Add Instructor</button>
                    <button type="button" class="btn btn-sm btn-success toggle-search"><i class="fas fa-filter"></i> Filter</button>
                </div>
            </div>
            <!-- end of the first row  --> 
            <!-- start hidden filter  -->
            <div class="form search-filter mt-2" style="display: none;">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter the name..">
                </div>
            </div>
            <script>
                // toogle search
                $(".toggle-search").click(function(){
                    $(".search-filter").slideToggle();
                });
            </script>
            <!-- end of the hidden filter  -->
            
            <!-- start the card of the instructors  -->
            <div class="row mt-5">
                @foreach($instructors as $instructor)
                    <div class="col-sm-3 mb-2">
                        <div class="card text-center">
                            <img src="https://i1.wp.com/researchictafrica.net/wp/wp-content/uploads/2016/10/default-profile-pic.jpg?ssl=1" style="max-width: 100px; height: auto;" class="card-img-top mx-auto rounded-circle mt-3" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Name : {{ $instructor->username }}</h5>
                            <h5 class="card-title">ID : {{ $instructor->id }}</h5>
                            <h5 class="card-title">Email : {{ $instructor->email }}</h5>
                            <h5 class="card-title">Contact : </h5>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Remove</a>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">since 2018</small>
                          </div>
                        </div>
                      </div>
                @endforeach
            </div>
    </div>   
@endsection