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
        {{-- <lara-message title="Message" body="A card is a flexible and extensible content container.It includes options
        for headers and footers, a wide variety of content, contextual background colors, and powerful display options.If you’ re familiar with Bootstrap 3, cards replace our old panels, wells, and thumbnails.Similar functionality to those components is available as modifier classes
        for cards"></lara-message>
        <lara-message title="Hello Universe" body="Instead something more natural."></lara-message> --}}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" @click="showModal=true">
          Launch demo modal
        </button>
        <alert-modal v-if="showModal"></alert-modal>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
      <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
