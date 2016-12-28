<!DOCTYPE html>
<html lang="en">
    <head>
      <link href='{{ elixir('css/app.css') }}'>
    </head>
    <body>
        <div class='container' id="app">
  <p>@{{ message }}</p>
</div>
        <script src="https://unpkg.com/vue/dist/vue.js"></script>
        <script type="text/javascript">
        new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue.js!'
  }
})
        </script>
    </body>
</html>
