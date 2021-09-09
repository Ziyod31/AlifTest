@extends('layouts.welcome')
@section('content')
<br>
<div class="col-md-3">
  <a href="{{ route('emails.create') }}" class="btn btn-success">Add Email</a>
</div>  
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($emails as $email)
    <tr>
      <td>{{ $email->id }}</td>
      <td>{{ $email->value }}</td>
      <td>{{ $email->contact->name}}</td>
      <td>
        <a href="{{ route('emails.edit', $email) }}" class="btn btn-warning">Edit</a>
      </td>
      <td>
       <form method="post" action="{{ route('emails.destroy', $email) }}" onsubmit="return confirm('Are your sure?')" >
        @csrf{{ method_field("DELETE") }}
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
@endsection