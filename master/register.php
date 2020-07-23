<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examination System in PHP</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</head>
<body>
    <div class="jumbotron text-center" style="margin-bottom:0; padding: 1rem 1rem;">
    <img src="Net.jpg" alt="Site Name" class="img-fluid" width="300">
    </div>

    <div class="container">
    <div class="row">
    <div class="col-md-3">
    
    </div>
    <div class="col-md-6" style="margin-top:20px;">
    <span id="message"></span>
    <div class="card">
    <div class="card-header">Admin Registration</div>
    </div>
    <div class="card-body">
        <form action="" id="admin_register_form" method="post">
            <div class="form_group">
            <label for="">Enter Email Address</label>
            <input type="text" name="admin_email_address" id="admin_email_address" class="form-control">
            </div>
            <div class="form_group">
            <label for="">Enter Password</label>
            <input type="password" name="admin_password" id="admin_password" class="form-control">
            </div>
            <div class="form_group">
            <label for="">Enter Confirm Password</label>
            <input type="password" name="confirm_admin_password" id="confirm_admin_password" class="form-control">
            </div>

            <div class="form_group">
             <input type="hidden" name="page" value="register">
             <input type="hidden" name="action" value="register">
             <input type="submit" name="admin_register" id="admin_register" class="btn btn-info" value="Register">


            </div>
        </form>


    <div align="center">
    
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-3">
    </div>
    </div>







</body>
</html>