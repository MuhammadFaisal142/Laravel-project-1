
{!!"<h1>calculating the sum of two numbers : </h1>"!!}
<h1>{{"56"}}<h1>{{"+"}}</h1><h1>{{"4"}}</h1><h1>{{"="}}</h1><h1>{{56+4}}</h1>


{!!"<style>
    h1{
        display: contents;
    }
</style>" !!}
<br>

{{-- {!!"<script>alert('Faisal sum is calculating')</script>"!!} --}}
@php
    $users="Faisal saith";
@endphp

{{$users}}
@{{$users}}

<br>
<h1>Array for printing name of the students</h1>

@php
$users = ["Faisal","Qaiser","Subhan"];
@endphp
<ul>
@foreach ($users as $user)
    <li>{{$loop->iteration}} - {{$user}}</li>
@endforeach
</ul>