<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href='{{ elixir('css/app.css') }}'>
</head>
<body>
<div v-cloak class='container' id="app">
    <div class="row">
        <div class="col-sm-12">
            <todo-item></todo-item>
        </div>
    </div>
<template id="todo-items-template">
    <ul class="list-group" v-if="todos.length > 0">
        <li class="list-group-item"
            v-bind:class="{completed : todo.completed}"
            v-for="todo in todos">
            @{{ todo.title }}
            <button class="btn btn-danger btn-xs pull-right" v-on:click="deleteTodo(todo)">Delete</button>
            <button class="btn btn-success btn-xs pull-right" v-on:click="todoCompleted(todo)">Completed</button>
        </li>
    </ul>
    <div v-else>
        <p>
            You don't have Todos
        </p>
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
</template>
</div>

<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script>
    var TodoItems = Vue.extend({
        template: '#todo-items-template',
        data() {
            return {
                todos: [{id:1, title:'1st task', completed:true}]
            }
        }

    });
    Vue.component('todo-item', TodoItems);

    new Vue({
        el: "#app",
    })
</script>
</body>
</html>
