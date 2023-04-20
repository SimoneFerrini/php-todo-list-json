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
        }
    },

    mounted(){
        this.getItemsList();
    },



}).mount('#app');