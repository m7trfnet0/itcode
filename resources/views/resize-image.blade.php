<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <div class="card">
        <div class="card-header">
            Image
        </div>
        <div class="card-body">
            @if(Session::has('post_created'))
            <div class="alert alert-success">
                {{ Session::get('post_created') }}
            </div>
            @endif
            <form action="{{ route('add.image') }}" method="POST" enctype="multipart/form-data">
                @csrf                   
                <div class="form-group">
                  <label for="title">Import Image</label>
                  <input type="file"  name="file" class="form-control"  name="title" >               
                </div>                             
                <button type="submit" class="btn btn-success">Submit</button>
              </form>
        </div>
    </div>
</div>
</div>
</div>

</body>
</html>