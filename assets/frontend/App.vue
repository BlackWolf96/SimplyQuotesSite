<template>
  <div>
    <div class="wrapper">
      <nav class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/Add">Create</a></li>

        </ul>
      </nav>
    </div>
    <div class="container">
      <AppContent />
    </div>
    <Footer />
  </div>
</template>

<script>
import AppContent from './components/AppContent.vue';
import Footer from './components/footer.vue';

export default {
  name: 'App',
  components: {
    AppContent,
    Footer
  },
  data() {
    return {
      msg: 'This is my weird msg in container box',
    }
  }
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