<template>
    <div>
        <div class="wrapper-bar">
            <div class="bar">
                {{ msg1 }}
            </div>
            <div class="info-bar">
              <div>Autor</div>
              <div>Autor</div>
              <div>Autor</div>
              <div>Autor</div>
            </div>
            <div class="content-box" v-for="item in items" :key="item.id">
              <div class="item">{{ item.autor }}</div>
              <div class="item">{{ item.tekst }}</div>
              <div class="item">{{ item.data }}</div>
              <div class="item">{{ item.data }}</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: 'App',
  data() {
    return {
      items: [
        { 
          id: 1,
          autor: 'nie wiem',
          tekst: 'nie wiem',
          data: 'dzis',
        },
        { 
          id: 2,
          autor: 'nie wiem',
          tekst: 'To jest jakiś tekst. Ten tekst jest jakimś tekstem który mówi o jakimś tekście.',
          data: 'dzis',
        },
      ],
      msg1: 'Some Quote',
    }
  }
}
</script>

<style scoped lang="scss">

.wrapper-bar{
  margin:auto;
  margin-top:100px;
  width:70%;
  height:600px;
  border: 1px solid;
  
  .bar{  
    height: 70px;
    background-color: black;
    color:white;
    display:flex;
    align-items:center;
    justify-content: center;
  }
  .info-bar{
      display:flex;
      align-items: center;
      background: rgb(73,73,73);
      background: linear-gradient(0deg, rgba(73,73,73,1) 0%, rgba(0,0,0,1) 100%);
      justify-content: center;
      height:25px;
      border-bottom: 1px solid black;
      padding:10px;
      color:white;
      div{
        width:25%;
        text-align:center;
        font-weight:bold;
        
      }
    }
  .content-box{
    height:40px;
    border-bottom:1px solid black;
    
    padding:10px;
    display:flex;
    align-items: center;
    justify-content: center;

    .item{
      width: 25%;
      text-align:center;
      
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
  }
  .content-box:hover{
    .item{
      width:25%;
      overflow: visible;
      text-overflow:clip;
    }

  }
  
}

</style>
