Vue.component('task-list', {
  template: `<div>
              <task v-for="task in tasks">{{ task.task}}</task>
            </div>`,
  data() {
    tasks: [{
      task: 'Go to the store',
      complete: true
    }, {
      task: 'Go to the mall',
      complete: true
    }, {
      task: 'Go to the Bank',
      complete: true
    }]
  }
});

Vue.component('task', {
  template: '<li><slot></slot></li>'
});

Vue.component('lara-message', {
  props: ['title', 'body'],
  template: `
        <div class = "row">
          <div class = "col-lg-12 col-sm-12 col-md-12">
          <div class = "panel panel-danger">
          <div class = "panel-heading">
            <h1 class = "panel-title"> {{ title }} </h1> 
          </div> <div class = "panel-body">
          {{ body}}
          </div> </div> </div> </div>
  `
});

new Vue({
  el: '#root'
});