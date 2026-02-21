<a href="/addStudent">add student</a>
@foreach ($students as $student )

    <h1> {{$student->name}}</h1>
    <h2>{{$student->id}}</h2>
@endforeach