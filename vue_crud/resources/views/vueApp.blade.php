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
        <ul>
          <li v-for="name in names" v-text="name">
            @{{ name }}
          </li>
          <input type="text" name="" id="names_id" v-model="newName">
          <button @click='addName'>Add New Name</button>
        </ul>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
    <script>
      var app = new Vue({
        el: "#root",
        data: {
          newName: '',
          names: ['joe', 'mary', 'jack', 'steve']
        },

        methods: {
          addName() {
            this.names.push(this.newName);

            this.newName = '';
          }
        },
        mounted() {
        }
      });

    </script>
  </body>
</html>
