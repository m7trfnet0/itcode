<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.0.0/parsley.min.js"></script>
<style>
    .parsley-errors-list li {
        list-style:  none;
        color: red;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            <div class="card">
            <div class="card-header">
                Register
            </div>
            <div class="card-body">           
                <form action="{{ route('register.new') }}" method="POST" id="register">
                    @csrf                   
                    <div class="form-group">
                      <label for="title">Name</label>
                      <input type="text" class="form-control"  name="name"  id="name" data-parsley-pattern="[a-zA-Z]" required data-parsley-trigger="keyup">               
                    </div>
                    <div class="form-group">
                      <label for="body">Email</label>
                      <input type="email"  name="email" id="email" class="form-control"   data-parsley-type="email" required  data-parsley-trigger="keyup">
                    </div>       
                    <div class="form-group">
                        <label for="body">Password</label>
                        <input type="password"  name="password" id="password" class="form-control" data-parsley-length="[6,12]"  required data-parsley-trigger="keyup" >
                      </div>    
                      <div class="form-group">
                        <label for="body">Confirm Password</label>
                        <input type="password"  name="cpassword" id="cpassword" class="form-control"  data-parsley-equalto="#password"  required data-parsley-trigger="keyup">
                      </div>   
                      <div class="form-group">
                        <label for="body">Phone</label>
                        <input type="text"  name="Phone" id="Phone" class="form-control" data-parsley-pattern="[0-9]+$" data-parsley-length="[10,11]" required  data-parsley-trigger="keyup">
                      </div>               
                    <button type="submit" class="btn btn-success">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</div>
 </div>
 <script>
     $(function(){
         $("#register").parsley();
     })
 </script>
</body>
</html>