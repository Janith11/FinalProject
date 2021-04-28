@extends('layouts.ownerapp')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-sm 12">
                <div style="text-align: center;">
                    <h4 style="color: black;">Add Student</h4>
                </div>
            </div>
        </div>

        <div class="row" style="padding-top: 10px;">
            <div class="col-sm 12">
                <div class="d-flex justify-content-center">
                <div class="card" style="width: 80%;">
                    <form method="POST" action="" style="padding: 20px 20px 20px 20px ;">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter User Name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" id="submit_btn">Submit</button>
                        </div>

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection