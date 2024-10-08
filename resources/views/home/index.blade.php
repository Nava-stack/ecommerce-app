<!DOCTYPE html>
<html>

<head>
    @include('home.partials.css')
</head>

<body>
    {{-- Hero Area --}}
 @include('home.partials.hero')
  <!-- end hero area -->

  <!-- shop section -->
  @include('home.partials.shop')
  <!-- end shop section -->

  <!-- contact section -->
  @include('home.partials.contact')
  <!-- end contact section -->

  <!-- info section -->
  @include('home.partials.info')
  <!-- end info section -->


@include('home.partials.js')

</body>

</html>
