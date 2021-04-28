@extends('layouts.ownerapp')

@section('content')
    <div class="container">
        <!-- start first row  -->
        <div class="row">
            <div class="col"><h3 class="text-left">Students</h3></div>
                <div class="text-right ">
                    <a href="{{ route('addstudent') }}" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addstudentmodal"><i class="fas fa-user-plus"></i> Add Student</a>
                    <button type="button" class="btn btn-sm btn-success toggle-search">Filter</button>
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
              
                @foreach($students as $student)

            <!-- <div class="row mt-5"> -->
                    <div class="col-sm-3 mb-2">
                        <div class="card text-center">
                            <div class="gradient">
                                <img src="https://i1.wp.com/researchictafrica.net/wp/wp-content/uploads/2016/10/default-profile-pic.jpg?ssl=1" style="max-width: 100px; height: auto;" class="card-img-top mx-auto rounded-circle mt-3" alt="" id="image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Name: {{ $student->username }}</h5>
                                <h5 class="card-title">Email: {{ $student->email }}</h5>
                                <h5 class="card-title">Contact:</h5>
                                <p class="card-text">ID: {{ $student->id }}</p>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Remove</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">since {{ $student->updated_at }}</small>
                            </div>
                        </div>
                    </div>    
                @endforeach
                
                
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
                </button> -->

                <!-- Modal -->
                <div class="modal fade" id="addstudentmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    
                        <div class="modal-content">
                        
                            <div class="modal-header">
                                <h5 class="modal-title" id="modelTitle">Add New Student</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                    
                            <div class="modal-body">
                                <form>
                                    
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="emal" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="contact">Contact Number</label>
                                        <input type="text" pattern=".{10}" class="form-control" id="contact" placeholder="Mobile number">
                                    </div>
                                    
                                    <!-- <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div> -->
                                    
                                    <div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </form>
                            </div>
                    
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div> -->
                        
                        </div>
                    </div>
                </div>
@endsection