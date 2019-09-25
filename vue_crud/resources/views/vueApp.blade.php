<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <style>
          .color-red{
            color:red;
          };
          .is-loading {
            color: blue;
          };
          body {
            padding-top: 40px;
          }
        </style>
    </head>
    <body>
      <div class="container" id="root">
        <tabs>
          <tab name="About Us" :selected="true">
            <h1>Here us the content for the about us</h1>
          </tab>
          <tab name="About Our Culture">
            <h1>Here us the content for the about our culture</h1>
          </tab>
          <tab name="About Our Vision">
            <h1>Here us the content for the about our version tab</h1>
          </tab>
        </tabs>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
      <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
