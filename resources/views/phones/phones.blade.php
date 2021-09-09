@extends('layouts.welcome')
@section('content')
<br>
<div class="col-md-3">
  <a href="{{ route('phones.create') }}" class="btn btn-success">Add Phone</a>
</div>  
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Number</th>
      <th scope="col">Contact</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($phones as $phone)
    <tr>
      <td>{{ $phone->id }}</td>
      <td>(+998) {{ $phone->value }}</td>
      <td>{{ $phone->contact->name}}</td>
      <td>
        <a href="{{ route('phones.edit', $phone) }}" class="btn btn-warning">Edit</a>
      </td>
      <td>
       <form method="post" action="{{ route('phones.destroy', $phone) }}" onsubmit="return confirm('Are your sure?')" >
        @csrf{{ method_field("DELETE") }}
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
@endsection