@extends('layouts.welcome')
@section('content')
<br>
<div class="col-md-3">
  <a href="{{ route('contacts.create') }}" class="btn btn-success">Add Contact</a>
</div>  
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
    <tr>
      <td>{{ $contact->id }}</td>
      <td>{{ $contact->name }}</td>
      <td>{{ $contact->surname}}</td>
      <td>
        <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-warning">Edit</a>
      </td>
      <td>
       <form method="post" action="{{ route('contacts.destroy', $contact) }}" onsubmit="return confirm('Are your sure?')" >
        @csrf{{ method_field("DELETE") }}
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>

@endsection