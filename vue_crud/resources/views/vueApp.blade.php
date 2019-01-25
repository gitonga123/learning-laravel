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
    </head>
    <body>
      <div id="root">
        <ol>
        <li v-for="name in names" v-text="name"></li>
        </ol>

        <input type="text" id="input"><button id="button">Add New Name</button>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
    <script>
      var app = new Vue({
        el: '#root',
        data: {
          names: ['James', 'Nickson', 'Jackson']
        },
        mounted() {
          document.querySelector('#button').addEventListener('click', () => {
            let name = document.querySelector("#input");
            app.names.push(name.value);
            name.value="";
          });
        },
      });

      
    </script>
  </body>
</html>
