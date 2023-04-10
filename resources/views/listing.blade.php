@extends('layout')

@section('content')
  @unless ($listing->count() == 0)
      <h2>{{ $listing->title }}</h2>
      <p>{{ $listing->description }}</p>
  @else
    <p>No Listing Found.</p>
  @endunless

@endsection
  



