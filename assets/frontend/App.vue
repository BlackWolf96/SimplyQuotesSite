<template>
  <div>
    <div class="wrapper">
      <nav class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav>
    </div>
    <div class="container">
      {{ msg }}
    </div>
  </div>
</template>

<script>
export default {
  name: 'App',
  data() {
    return {
      msg: 'This is my weird msg in container box',
    }
  }
}
</script>

<style lang="scss">
$primary-color: black;
$secondary-color: blue;

body{
  margin:0;
  padding:0;
  font-family: '';
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

}
</style>