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
        <h1>
          @{{ reversedMessage() }}
        </h1>
        <ol>
          <li v-for="task in tasks" v-if="task.completed" v-text="task.description"></li>
        </ol>

        <h1>Incompleted Tasks</h1>
        <ol>
          <li v-for="task in incompleteTasks" v-text="task.description"></li>
        </ol>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
    <script>
      var app = new Vue({
        el: '#root',
        data: {
          message: 'Hello World',
          tasks: [
            { description: 'Go to the store', completed: false},
            { description: 'Finish Screencast', completed: true},
            { description: 'Make Donation', completed: false},
            { description: 'Clear Inbox', completed: false},
            { description: 'Make dinner', completed: false},
            { description: 'Clean room', completed: true},
            { description: 'Clear Roomie', completed: false},
            { description: 'Owner List display', completed: false},
          ]
        },

        methods: {
          reversedMessage() {
            return "Completed Tasks";
          },
        },
        computed: {
          incompleteTasks() {
            return this.tasks.filter(task => !task.completed);
          }
        },
      });
    </script>
  </body>
</html>
