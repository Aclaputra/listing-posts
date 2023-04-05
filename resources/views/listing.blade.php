<!DOCTYPE html>
<html>
<head>
  <title>{{ $heading }}</title>
</head>
<body>
  <h1>{{ $heading }}</h1>

  @unless ($listing->count() == 0)
      <h2>{{ $listing->title }}</h2>
      <p>{{ $listing->description }}</p>
  @else
    <p>No Listing Found.</p>
  @endunless


</body>
  



