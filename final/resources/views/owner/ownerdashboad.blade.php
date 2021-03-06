@extends('layouts.ownerapp')

@section('content')
<div class="container-fluid">
            <div class="row mb-2">
                <h3>Dashboard</h3>
            </div>
            <div class="row justify-content-md-center">
                <div class="card mr-4" id="statics_cards">
                    <div class="card-body text-center">
                        <p class="text-center btn btn-warning btn-sm">
                          <a href="{{ route('students') }}">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="red" class="bi bi-people-fill" viewBox="0 0 16 16" id="dash_icon">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                          </svg>
                          </a>
                        </p>
                        <h1>{{ $count }}</h1>
                        <h5 class="card-title" id="dash_text">Total Students</h5>
                        <h6 class="text-success"><i class="fas fa-caret-up mt-3"></i>  123%</h6>
                    </div>
                </div>

                <div class="card mr-4"  id="statics_cards">
                    <div class="card-body text-center">
                        <p class="text-center btn btn-warning btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet-fill" viewBox="0 0 16 16" id="">
                        <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2h-13z"/>
                        <path d="M16 6.5h-5.551a2.678 2.678 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6z"/>
                      </svg>
                        </p>
                        <h1>125,900</h1>
                        <h5 class="card-title" id="dash_text">Income</h5>
                        <h6 class="text-warning"><i class="fas fa-caret-up mt-3"></i>  74%</h6>
                    </div>
                </div>

                <div class="card mr-4"  id="statics_cards">
                    <div class="card-body text-center">
                        <p class="text-center btn btn-warning btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16" id="dash_icon">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z"/>
                      </svg>
                        </p>
                        <h1>225,900</h1>
                        <h5 class="card-title" id="dash_text">Unpaid Invoices</h5>
                        <h6 class="text-danger"><i class="fas fa-caret-down mt-3"></i>  23%</h6>
                    </div>
                </div>

                <div class="card mr-4"  id="statics_cards">
                    <div class="card-body text-center">
                        <p class="text-center btn btn-warning btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16" id="dash_icon">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                      </svg>
                        </p>
                        <h1>9+</h1>
                        <h5 class="card-title" id="dash_text">Requests</h5>
                        <h6 class="text-success"><i class="fas fa-caret-up mt-3"></i>  47%</h6>
                    </div>
                </div>

            </div>
            <!-- stat 2 start  -->
            <div class="row">
                <h5 class="mt-5">Student growth</h5>
            </div>
            <div class="row mt-2">
                <div class="col-sm-6">
                  <div class="card" style="height: 100%;">
                    <div class="card-body">
                        <h1 class="card-title">10</h1>
                        <h4>New Students(Last 30 days)</h4>
                        <h6><i class="fas fa-caret-up mt-3 text-success"></i>  Your student in this month incresed by <span class="text-success">25%</span></h6>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card" style="height: 100%;">
                    <div class="card-body">
                        <p class="text-center">New students(Last 7 days)</p>
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                        
                        <script>
                        var xValues = ["SUN","MON","TUE","WED","THU","FRI","SAT"];
                        
                        new Chart("myChart", {
                          type: "line",
                          data: {
                            labels: xValues,
                            datasets: [{ 
                                //DATA SHOULD BE ADDED TO BELOW ONE.
                              data: [5,0,1,3,2,2,9],
                              borderColor: "blue",
                              fill: false
                            }]
                          },
                          options: {
                            legend: {display: false}
                          }
                        });
                        </script>
                    </div>
                  </div>
                </div>
              </div>
            <!-- stat 2 end  -->
        
        <!-- start the paid and invoices  -->
            <div class="row mt-4">
                <div class="card text-center w-100">
                    <div class="card-header">
                      Invoice 
                    </div>
                    <div class="card-body">
                      <h6 class="card-title"><span class="text-success"><i class="fas fa-circle"></i></span> Paid<span class="text-warning">&nbsp;&nbsp;<i class="fas fa-circle"></i></span>Unpaid</h6>
                      <canvas id="myChart2" style="width:100%;max-width:1000px; height: 300px;"></canvas>
                        
                      <script>
                      var xValues = ["JAN","FEB","MAR","APRIL","MAY","JUNE","JULY","AUG","SEP","OCT","NOV","DEC"];
                      
                      new Chart("myChart2", {
                        type: "line",
                        data: {
                          labels: xValues,
                          datasets: [{ 
                              //DATA SHOULD BE ADDED TO BELOW ONE.
                            data: [30000,45000,29000,13000,12500,26560,40000,46000,48000,32000,33000,34000],
                            borderColor: "green",
                            fill: false
                          }, { 
                            data: [50000,-26000,-33000,-11000,3300,4500,22000,29000,3300,30000,45000,29000],
                            borderColor: "yellow",
                            fill: false
                            }]
                        },
                        options: {
                          legend: {display: false}
                        }
                      });
                      </script>
                    </div>
                    <div class="card-footer text-muted">
                     last year
                    </div>
                  </div>
            </div>
        <!-- end of the paid and unpaid invoices  -->
           
        </div>
        <!-- container dash board end  -->
    </div>
    <!-- end of main content  -->
   </div>
@endsection
