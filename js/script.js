const {createApp} = Vue;

createApp({
    data(){
        return {
            
        }
    },

    methods: {
        getItemsList(){
            axios.get('./server.php').then(res =>{
                console.log(res.data);
            })
        }
    },

    mounted(){
        this.getItemsList();
    },



}).mount('#app');