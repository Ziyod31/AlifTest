@extends('layouts.welcome')

@section('content')

<form method="post"
@isset($phone)
action="{{ route('phones.update', $phone) }}"
@else
action="{{ route('phones.store') }}"
@endisset
>
@isset($phone)
@method('PUT')
@endisset
@csrf
<div class="mb-3">
  <label class="form-label">Phone</label>
  <input type="number" class="form-control" name="value" value="{{ old('value', isset($phone) ? $phone->value : null) }}">
</div>

<div class="mb-3">
  <label for="contact_id">Contact</label>
  <select class="form-control" id="contact_id" name="contact_id">
    @foreach($contacts as $contact)
    <option value="{{ $contact->id }}"
      @isset($phone)
      @if($phone->contact_id == $contact->id)
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