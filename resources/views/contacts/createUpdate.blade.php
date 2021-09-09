@extends('layouts.welcome')
@section('content')

<form method="post"
@isset($contact)
action="{{ route('contacts.update', $contact) }}"
@else
action="{{ route('contacts.store') }}"
@endisset
>
@isset($contact)
@method('PUT')
@endisset
@csrf
<div class="mb-3">
  <label class="form-label">Name</label>
  <input type="text" class="form-control" name="name" value="{{ old('name', isset($contact) ? $contact->name : null) }}">
</div>

<div class="mb-3">
  <label class="form-label">Surname</label>
  <input type="text" class="form-control" name="surname" value="{{ old('surname', isset($contact) ? $contact->surname : null) }}">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection