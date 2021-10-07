<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <style>
      img{
          background-color: gray;
          height: 250px;
          width: 100%;
          border: 1px solid gray;
          margin-top: 20px;
          box-shadow:  0 8px 6px -6px black;
      }
  </style>
</head>
<body>
  <div class="container">
      <div class="row">
          @for($i =1 ; $i < 16; $i++)
          <div class="col-md-6">
              <img src="https://www.jesusamieiro.com/wp-content/uploads/2019/10/Laravel.png" alt="" srcset="">
            </div>
          @endfor
      </div>
  </div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazyload/2.0.3/lazyload-min.js" integrity="sha512-AsI20ZcrzATYNk6jHw9XywNXt2fqEX03x4hArLWhRuHTYdXFpPUhEuRgt32Akfbj5O4FR5xUxoH9gFWujpzo0w==" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('img').lazyload();
    });
</script>
</html>