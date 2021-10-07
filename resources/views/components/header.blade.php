<div>
   <h1>THis Is Header Component</h1>
   <h3>Hello {{ $name }}</h3>
   <ul>
       @foreach ($sports as $sport)
           <li>{{$sport}}</li>
       @endforeach
   </ul>
</div>