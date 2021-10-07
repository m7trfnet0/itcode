@include('header')
    @php
        $name='Ahmed';
        $number=array('1','2','3','4');
        $age=16;
    @endphp
    <h1>Test view</h1>
    <h1>name: {{ $name }}</h1>
    @foreach($number as $key => $numbe)
        
    <ul>
        <li>{{$numbe}}</li>
    </ul>
    @endforeach
<br>
    @for ($i = 1; $i <= 10; $i++)
        {{ $i }}
    @endfor
    <br>
    @if(count($number)==1)
        Singel Number
        @elseif(count($number)>1)
        More Than One Number
        @else
        No Number
    @endif
    <br>
    {{ $age>=18 ? 'You are Adult' : 'You are Not' }}
</body>
</html>