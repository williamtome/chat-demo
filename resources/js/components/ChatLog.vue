<template>
  <div class="chat-log">
      <chat-message v-for="(message, index) of messages" v-bind:key="index" v-bind:message="message.message" v-bind:user="message.user"></chat-message>
  </div>
</template>

<script>
export default {
    data(){
        return {
            messages: [
                {
                    message: 'Oi!',
                    user: 'João'
                },
                {
                    message: 'Olá, João',
                    user: 'Maria'
                }
            ]
        }
    }
}
</script>

<style>
.chat-log .chat-message:nth-child(even){
    background-color: #ccc;
}
</style>