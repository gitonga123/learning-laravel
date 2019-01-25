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
          }
        </style>
    </head>
    <body>
      <div id="root">
      <button v-bind:title="title">Add New Name</button>
      <h1 :class="className">Hello World</h1>
      <button :class="{'is-loading': isLoading}" v-on:click="toggleClass">Click Me</button>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
    <script>
      var app = new Vue({
        el: '#root',
        data: {
          title: 'Now the title is being set through JavaScript',
          className: 'color-red',
          isLoading: false

        },

        methods: {
          toggleClass() {
            this.isLoading = true;
          }
        },
      });

      
    </script>
  </body>
</html>
