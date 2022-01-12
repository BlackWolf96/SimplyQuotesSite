<template>
    <div>
        <div class="wrapper-bar">
            <div class="bar">
                {{ msg1 }}
            </div>
            <div class="info-bar">
              <div>Autor</div>
              <div>Treść</div>
              <div>Data</div>
              <div>Link</div>
            </div>
            <div class="content-box" v-for="item in items" :key="item.id">
              <div class="item">{{ item.autor }}</div>
              <div class="item">{{ item.tresc }}</div>
              <div class="item">{{ format_date(item.added.date) }}</div>
              <div class="item" >
                <a v-bind:href="item.link">Klik</a>
              </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import moment from 'moment';


export default {
  name: 'AppComponent',
  data() {
    return {
      msg1: 'Lista Cytatów',
      items: null
    }
  },
  mounted(){
    axios
      .get(document.URL+`home/json`)
      .then(response => (this.items = response.data));
  },
  methods: {
    format_date(value){
      if (value) {
       return moment(String(value)).format('DD-MM-YYYY')
      }
    },
    
  },
}
</script>

<style scoped lang="scss">
.wrapper-bar{
  margin:auto;
  margin-top:100px;
  width:70%;
  min-height:600px;
  border: 1px solid;
  
  .bar{  
    height: 70px;
    background-color: black;
    color:white;
    font-weight:bold;
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
      
    }
  }
  .content-box:hover{
    min-height:40px;
    height:auto;
    background-color: grey;
    color:white;
    .item{
      width:25%;
      overflow: visible;
      text-overflow:clip;
      word-wrap: break-word;
    }

  }
}
</style>
