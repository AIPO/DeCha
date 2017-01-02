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
</div>

<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script>
    var TodoItems = Vue.extend({
        template: '<span> This is todo list.</span>'
    })
    Vue.component('todo-item', TodoItems);

    new Vue({
        el: "#app",
    })
</script>
</body>
</html>
