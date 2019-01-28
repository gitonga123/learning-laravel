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
  data() {
    return {
      isVisible: true,
    }
  },
  template: `
    <div class = "row">
      <div class = "col-lg-12 col-sm-12 col-md-12">
        <div class = "panel panel-danger" v-show="isVisible">
          <div class = "panel-heading">
              <h1 class = "panel-title"> {{ title }}  
              <button type = "button"
              @click = "hideModal">X</button></h1>
          </div>
            <div class = "panel-body">
              {{ body}}
            </div>
        </div>
      </div>
    </div>
  `,
  methods: {
    hideModal() {
      this.isVisible = false;
    }
  },
});

Vue.component('alert-modal', {
  template: `
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>You are reading this message via a modal</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
  `
})

new Vue({
  el: '#root',
  data: {
    showModal: false,
  }
});