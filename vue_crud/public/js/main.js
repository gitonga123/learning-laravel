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

new Vue({
  el: '#root'
});