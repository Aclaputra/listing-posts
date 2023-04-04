<!DOCTYPE html>
<html>
<head>
  <title>{{ $heading }}</title>
</head>
<body>
  <h1>{{ $heading }}</h1>

<!--
  @if (count($listings) == 0)
    <p>No Listings found.</p>
  @endif
-->
  @unless (count($listings) == 0)
    @foreach ($listings as $listing)
      <h2>
        <a href="/listings/{{$listing['id']}}">
          {{ $listing['title'] }}
        </a>
      </h2>
      <p>{{ $listing['description'] }}</p>
    @endforeach
  @else
    <p>No Listings Found.</p>
  @endunless


</body
  



