const {createApp} = Vue;

createApp({
    data(){
        return {
            todos: [],
            addingTodo: "",
        }
    },

    methods: {
        getItemsList(){
            axios.get('./server.php').then(res =>{
                this.todos = res.data;
            })
        },

        addToDo(){
            let newTodo = {
                name: this.addingTodo,
                done: false,
            };
            this.todos.push(newTodo);
            this.addingTodo = "";

            //inizio milestone 3:
            axios.post("./server.php", newTodo, {headers:{'Content-Type' : 'multipart/form-data'}}).then(res =>{
                console.log(res);
            })
            this.getItemsList();
        }
    },

    mounted(){
        this.getItemsList();
    },



}).mount('#app');