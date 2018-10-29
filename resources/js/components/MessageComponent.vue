<template>
<div class="card card-default chat-box">
    <div class="card-header">
        <strong :class="{'text-danger':session_block}">
            {{friend.name}}
            <span v-if="session_block">(Blocked)</span>
            </strong>
        <a href="" @click.prevent="close"><i class="fa fa-window-close float-right"></i></a>

        
        <div class="dropdown float-right mr-4">
        <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v"></i>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#" @click.prevent="unblock" v-if="session_block">Un Block</a>
            <a class="dropdown-item" href="#" @click.prevent="block" v-else>Block</a>
            <a class="dropdown-item" href="#" @click.prevent="clear">Clear Chat</a>
        </div>
        </div>
    </div>
    <div class="card-body" v-chat-scroll>
        <p class="card-text" v-for="chat in chats" :key="chat.message">
            {{chat.message}}
        </p>
    </div>
    <form class="card-footer" @submit.prevent="send">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Write Your Message Here"
            :disabled="session_block">
        </div>
    </form>
</div>
</template>

<script>
export default {
    props: ['friend'],
    data(){
        return{
            chats: [],
            session_block: false
        }
    },
    methods:{
        send(){
            console.log('Yeaaahhh');
        },
        close(){
            this.$emit('close');
        },
        clear(){
            this.chats = []
        },
        block(){
            this.session_block = true
        },
        unblock(){
            this.session_block = false
        }
    },
    created(){
        this.chats.push(
            {message: 'Hey'},
            {message: 'How are you'}
            )
    }
}
</script>

<style>
.chat-box{
    height: 400px;
}
.card-body{
    overflow-y: scroll;
}
</style>
