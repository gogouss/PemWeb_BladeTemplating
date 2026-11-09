<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4.2.1"></script>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />


</head>

<body class="bg-slate-900">

  @include('partials.navbar')
  @include('partials.header')

  <!-- content -->
  <main>
    @yield('content')
  </main>

  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>

</html>