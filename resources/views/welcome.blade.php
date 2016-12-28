<!DOCTYPE html>
<html lang="en">
    <head>
      <link href='{{ elixir('css/app.css') }}'>
    </head>
    <body>
        <div class='container' id="app">
  <p>Hallo @{{ name}} !</p>
</div>
        <script src="https://unpkg.com/vue/dist/vue.js"></script>
        <script>
        var app = new Vue({
  el: '#app',
  data: {
    name: 'Povilas'
  }
})
        </script>
    </body>
</html>
