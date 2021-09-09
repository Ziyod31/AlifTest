@extends('layouts.welcome')

@section('content')

<form method="post"
@isset($email)
action="{{ route('emails.update', $email) }}"
@else
action="{{ route('emails.store') }}"
@endisset
>
@isset($email)
@method('PUT')
@endisset
@csrf
<div class="mb-3">
  <label class="form-label">email</label>
  <input type="email" class="form-control" name="value" value="{{ old('value', isset($email) ? $email->value : null) }}">
</div>

<div class="mb-3">
  <label for="contact_id">Contact</label>
  <select class="form-control" id="contact_id" name="contact_id">
    @foreach($contacts as $contact)
    <option value="{{ $contact->id }}"
      @isset($email)
      @if($email->contact_id == $contact->id)
      selected
      @endif
      @endisset
      >
      {{ $contact->name }}
    </option>
    @endforeach
  </select>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection