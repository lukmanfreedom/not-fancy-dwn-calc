<!doctype html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Drinking Calculation</title>
    </head>

    <body>
        <div>
            <div class="jumbotron">
                <h1 class="lead">Not Fancy</h1>
                <h1 class="display-3">Drinking Calc</h1>
            </div>

            <div class="row">
                <div class="col-sm-8 col-xs-6 offset-sm-2 offset-xs-3">
                    <div class="card text-center">
                        <form method="POST" action="{{ url('/calc') }}">
                            <div class="card-header">
                                Please fill this form
                            </div>

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="age" class="col-2 col-form-label">Age</label>
                                    <div class="col-10">
                                        <input class="form-control" type="number" name="age" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="height" class="col-2 col-form-label">Height</label>
                                    <div class="col-10">
                                        <input class="form-control" type="number" name="height" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="weight" class="col-2 col-form-label">Weight</label>
                                    <div class="col-10">
                                        <input class="form-control" type="number" name="weight" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="gender" class="col-2 col-form-label">Gender</label>
                                    <div class="col-10 text-left">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="male">
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="female">
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="activity" class="col-2 col-form-label">Activity</label>
                                    <div class="col-10 text-left">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="activity" value="heavy">
                                            <label class="form-check-label" for="heavy">Heavy</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="activity" value="medium">
                                            <label class="form-check-label" for="medium">Medium</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="activity" value="light">
                                            <label class="form-check-label" for="light">Light</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-muted">
                                <button type="submit" class="btn btn-primary">
                                    Calculate
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </div>
    </body>
</html>
