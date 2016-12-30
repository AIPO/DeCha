<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href='{{ elixir('css/app.css') }}'>
</head>
<body>
  <div v-cloak class='container' id="app" >
    <div class="row">
      <div class="col-sm-12">
        <h1>My Todos</h1>
        <ul class="list-group" v-if="todos.length > 0">
          <li class="list-group-item"
          v-bind:class="{completed : todo.completed}"
          v-for="todo in todos">
          @{{ todo.title }}
            <button class="btn btn-danger btn-xs pull-right" v-on:click="deleteTodo(todo)">Delete</button>
          </li>
        </ul>
        <div v-else>
          <p>
            You don't have Todos
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <form v-on:submit.prevent="addNewTodo(newTodo)">
          <div class="form-group">
            <input type="text" v-model="newTodo.title" class="form-control" placeholder="Add new Todo"/>
          </div>
          <div class="form-group">
            <button class="btn btn-success">Add Todo</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://unpkg.com/vue/dist/vue.js"></script>
  <script>
  var app = new Vue({
    el: '#app',
    data: {
      todos: [{id:1, title:'1st task', completed:true}],
      newTodo:{id:null, title:"", completed:false}
    },
    methods:{
      addNewTodo(newTodo){
        this.todos.push(newTodo)
        this.newTodo = {id:null, title:"", completed:false}
      },

    deleteTodo(todo){
  this.todos.splice(todo, 1)
      }
    }
  })
  </script>
</body>
</html>
