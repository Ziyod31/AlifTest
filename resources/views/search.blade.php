@extends('layouts.welcome')
@section('content')
@if($contacts->isNotEmpty())
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>

    @foreach($contacts as $contact)
    <tr>
      <td>{{ $contact->id }}</td>
      <td>{{ $contact->name }}</td>
      <td>{{ $contact->surname}}</td>
      <td>
        @if(count($contact->phones))
        @foreach($contact->phones as $phone)
        (+998) {{ $phone->value }}<br>
        @endforeach
        @endif
      </td>
      <td>
        @if(count($contact->emails))
        @foreach($contact->emails as $email)
        {{ $email->value }}<br>
        @endforeach
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
<div>
  <h3>No Contacts Found</h3>
</div>
@endif
@endsection