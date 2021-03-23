<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Customer Dashbord</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <!-- <div class="wrapper"> -->
        <!-- Sidebar  -->
        <nav id="sidebar">

            <!-- <div class="sidebar-header">
                <h3>Bootstrap Sidebar</h3>
            </div> -->

            <div class="text-center">
                <div class="image">
                    <img src="person.jpg" class="img-thumbnail" style="border-radius: 30px"><!-- here image is customer profile image -->
                    <h4 class="customer_name">Customer name<!--<?php $username ?>--></h4>
                </div>
            </div>

            <ul class="list-unstyled components">
                <!-- <p>Dummy Heading</p> -->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li><!-- class="active" -->
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Shedules</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">View All </a>
                        </li>
                        <li>
                            <a href="shedule.php">Shedule Requst</a>
                        </li>
                        <li>
                            <a href="#">Complete Shedules</a>
                        </li>
                        <li>
                            <a href="#">Canceled Shedules</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Attendance</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Exam Details</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Exam Dates</a>
                        </li>
                        <li>
                            <a href="#">Results</a>
                        </li>
                        <!-- <li>
                            <a href="#">Page 3</a>
                        </li> -->
                    </ul>
                </li>
                <li>
                    <a href="#">Lessons</a>
                </li>
                <li>
                    <a href="#ExamSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Contact</a>
                    <ul class="collapse list-unstyled" id="ExamSubmenu">
                        <li>
                            <a href="#">Instructors</a>
                        </li>
                        <li>
                            <a href="#">Owner</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul> -->
        </nav>

    <!-- </div> -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>