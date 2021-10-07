<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
</head>
<body>
   @foreach($data as $key => $employee)
       <h1>معلومات الموظف</h1>
<h2>user Name: {{ $employee->name }}</h2>
<p>phone : {{$employee->phone}}</p>
<p>email : {{$employee->email}}</p>
<p>salary : {{$employee->salary}}</p>
<p>department : {{$employee->department}}</p>
@endforeach

</body>
</html>