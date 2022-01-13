<template>
  <div>
    <div class="wrapper">
      <AppAdd />
    </div>
    <div class="container">
      <AppComponent />
    </div>
    <AppFooter />
  </div>
</template>

<script>
import AppAdd from './components/AppAdd.vue'
import AppComponent from './components/AppContent.vue'
import AppFooter from './components/AppFooter.vue'

export default {
  name: 'App',
  components: {
    AppAdd,
    AppComponent,
    AppFooter
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

  display:flex;
  align-items: center;
  justify-content: center;
}
.container{
  width:100%;
}

</style>