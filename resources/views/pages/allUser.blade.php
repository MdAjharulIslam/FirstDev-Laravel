<h1>All users</h1>

@foreach ($users as $user )
<p>
  <a href="{{route('user', $user['id'])}}"> {{$user['name']}}  </a>
</p>
@endforeach

