<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="js.js"></script>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
              crossorigin="anonymous">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Coursework | Home</title>
    </head>
    <body>
    <?php
    session_start();
    ?>

        <div class="container-fluid" style="margin-bottom: 60px;">
            <div class="row">
                <div class="container">
                    <div class="header clearfix">
                        <nav>
                            <ul class="nav nav-pills float-right">
                                <li class="nav-item">
                                    <a class="nav-link active" href="Home.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Log Out</a>
                                </li>
                            </ul>
                        </nav>
                        <h1 class="text-muted" style="margin-top:7px;">Coursework</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container card-margin-top" id="span1" data-id="1">
            <div class="card">
                <h5 class="card-header">
                    Coursework 1 - Web Platform Development 2
                    <span class="x float-right">X</span>
                </h5>

                <div class="card-body">
                    <p class="card-text">
                        Task 1: Create slides about Teamwork
                    </p>
                    <p class="card-text">
                        Task 2: Create diagrams for Initial Design
                    </p>
                    <p class="card-text">
                        Task 3: Create a basic web-based application
                    </p>
                </div>
                <div class="card-footer">
                    <b>Deadline: Week 9</b>
                </div>
            </div>
        </div>
        <div class="container card-margin-top" data-id="2">
            <div class="card">
                <h5 class="card-header">
                    Coursework 2 - Web Platform Development 2
                    <span class="float-right">X</span>
                </h5>
                <div class="card-body">
                    <p class="card-text">
                        Task 1: Implement the end-product Design
                    </p>
                    <p class="card-text">
                        Task 2: Implement the end-product Functionality
                    </p>
                    <p class="card-text">
                        Task 3: Fully Test the application
                    </p>
                </div>
                <div class="card-footer">
                    <b>Deadline: Week 11</b>
                </div>
            </div>
        </div>
        <div class="container card-margin-top" data-id="3">
            <div class="card">
                <h5 class="card-header">
                    Coursework 1 - Research Skills and Professional Issues
                    <span class="float-right">X</span>
                </h5>
                <div class="card-body">
                    <p class="card-text">
                        Task 1: Create the Poster
                    </p>
                    <p class="card-text">
                        Task 2: Create the Presentation
                    </p>
                    <p class="card-text">
                        Task 3: Adjust the presentation to meet the requirements
                    </p>
                </div>
                <div class="card-footer">
                    <b>Deadline: Week 9</b>
                </div>
            </div>
        </div>
        <div class="container card-margin-top" data-id="4">
            <div class="card">
                <h5 class="card-header">
                    Coursework 2 - Research Skills and Professional Issues
                    <span class="float-right">X</span>
                </h5>
                <div class="card-body">
                    <p class="card-text">
                        Task 1: Write a proposal for the project
                    </p>
                    <p class="card-text">
                        Task 2: Style the proposal
                    </p>
                    <p class="card-text">
                        Task 3: Follow the marking rubric
                    </p>
                </div>
                <div class="card-footer">
                    <b>Deadline: Week 12</b>
                </div>
            </div>
        </div>
        <div class="container card-margin-top" data-id="5">
            <div class="card">
                <h5 class="card-header">
                    Coursework 1 - Integrated Project 3
                    <span class="float-right">X</span>
                </h5>
                <div class="card-body">
                    <p class="card-text">
                        Task 1: Create the end-product
                    </p>
                    <p class="card-text">
                        Task 2: Create the full documentation
                    </p>
                    <p class="card-text">
                        Task 3: Make adjustments following the marking scheme
                    </p>
                </div>
                <div class="card-footer">
                    <b>Deadline: Week 12</b>
                </div>
            </div>
        </div>
    </body>
</html>
