
<h1>hello laravel home</h1>
<a href="{{route('about')}}">go to about</a>

{{5+4}}

@php
    $users = ["ajharul", "kamrul","ajharul", "kamrul","ajharul", "kamrul","ajharul", "kamrul","ajharul", "kamrul"]

@endphp

@includeWhen(isset($users),'pages.header', ['name'=>'ajharul'])
<ul>

    @foreach ($users as $user )

    @if($loop->even)
    <li style="color: red">{{$user}} </li>
    @else
     <li style="color: green" >{{$user}} </li>
    @endif
    @endforeach

</ul>

@include('pages.footer')