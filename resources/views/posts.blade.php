<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="row">
        <div class="col-md-12 ">
        <div class="card">
        <div class="card-header">
            All Posts
        </div>
        <div class="card-body">  
          @if(Session::has('post_delete'))
          <div class="alert alert-success">
              {{ Session::get('post_delete') }}
          </div>
          @endif
        </div> 
   <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Show</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>

      </tr>
    </thead>
    <tbody>
        @foreach($posts as $key => $post)
      <tr>
        <th scope="row">{{ $post->id }}</th>
        <td>{{$post->title  }}</td>
        <td>{{$post->body  }}</td>
        <td><a href="singlepost/{{  $post->id  }}" class="btn btn-success"> View</a></td>
        <td><a href="editepost/{{  $post->id  }}" class="btn btn-info"> Edit</a></td>
        <td><a href="deletepost/{{  $post->id  }}" class="btn btn-danger"> Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>  </div>    
</body>
</html>