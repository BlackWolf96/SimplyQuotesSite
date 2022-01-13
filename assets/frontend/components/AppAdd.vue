<template>
  <div>
      <div class="form-wrapper">
          <form>
              <input type="text" v-model="autor" placeholder="Autor" />
              <input type="text" v-model="tresc" placeholder="Treść" />
              <input type="date" v-model="data" placeholder="Data" />
              <input type="url" v-model="link" placeholder="URL" />
          </form>
          <button @click="myMethod">Dodaj</button>
      </div>
  </div>
</template>

<script>
import axios from 'axios'

export default{
    data() {
        return {
            autor: null,
            tresc: null,
            data: null,
            link: null,
        }
    },
    methods: {
        myMethod: function(){
            console.log('click', this.autor)

            axios.post('http://127.0.0.1:8000/home/add', {
                autor: this.autor,
                tresc: this.tresc,
                date: this.data,
                link: this.link,
            }).then(function(response){
            console.log(response.data);
        }).catch(error =>{
            console.warn(error);
        })
        }
    }
}
</script>
<style scoped lang="scss">
.form-wrapper{
    display:flex;
    align-items: center;
    gap: 10px;
    input{
        height:35px;
        background-color: transparent;
        border:none;
        border-bottom: 1px solid red;
        color:white;
    }
    ::placeholder{
        color:red;
    }
    ::-webkit-calendar-picker-indicator{
        filter: invert(55);
        color:red;
    }
    button{
        height:35px;
        width:75px;
        background-color:red;
        border:1px solid red;
        color:white;
    }
    
}

</style>