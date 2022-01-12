<template>
  <div>
    <div class="wrapper">
      <nav class="navbar">
        <ul>
          <router-link to="/">Home</router-link>
          <li><a href="/">Home</a></li>

        </ul>
      </nav>
    </div>
    <div class="container">
      <router-view />
    </div>
    
  </div>
</template>

<script>
export default {
  name: 'App',
}
</script>

<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap');

$primary-color: black;
$secondary-color: blue;

body{
  margin:0;
  padding:0;
  font-family: 'Roboto', sans-serif;
}
.wrapper{
  width:100%;
  height:10vh;
  background-color: $primary-color;
  color: white;

  .navbar{
    position: absolute;
    right:0;
    margin-right: 10px;
    height:10vh;
    display:flex;
    align-items: center;
    justify-items: content;

    ul{
      list-style-type:none;
      display:flex;
      gap:25px;
    }
    a{
      text-decoration: none;
      color:white;
    }
  }
  .container{
    width:100%;
  }
}
</style>