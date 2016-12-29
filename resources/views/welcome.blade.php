<!DOCTYPE html>
<html lang="en">
<head>
  <link href='{{ elixir('css/app.css') }}'>
</head>
<body>
  <div v-cloak class='container' id="app" >
    <p v-cloak>Hallo @{{ name}} !</p>
    <input type='text' v-model='name'>
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
