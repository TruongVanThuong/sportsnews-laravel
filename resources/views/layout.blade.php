<!DOCTYPE html>
<htm l lang="en">
<head>
<meta charset="UTF-8">
<met a name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

 <meta name="Description" content="Enter your description here"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

 <link rel="stylesheet" href="{{asset('css/style.css')}}">
 <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
 <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.min1.css')}}"> -->
 <title>@yield('TieuDeTrang')</title>
</head>
<body>


  <div class="menuflow">


<!-- HEADER ____________ -->
    <header class="">
      @include('include/header')
    </header>

<!-- MAIN ____________ -->
    <main class=" ">
      <div class="containr">
          @yield('NoiDung')
      </div>
    </main>

<!-- FOOTER ____________ -->
    <footer class="mt-5">
			@include('include/footer')
    </footer>


  </div>


<script src="{{asset('js/jquery.min.js')}}></script>
<script src="{{asset('js/bootstrap.min.js')}}></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>
</html>