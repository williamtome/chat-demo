<template>
  <div class="chat-composer">
      <input type="text" placeholder="Digite aqui sua mensagem." v-model="messageText" @keyup.enter="sendMessage">
      <button class="btn btn-primary" @click="sendMessage">Enviar</button>
  </div>
</template>

<script>
export default {
    data(){
        return {
            messageText: '',
            username: $('#navbarDropdown').text()
        }
    },
    methods: {
        sendMessage(){
            this.$emit('messagesent', {
                message: this.messageText,
                user: {
                    name: this.username
                }
            });
            this.messageText = '';
        }
    }
}
</script>

<style>
.chat-composer{
    display: flex;
}

.chat-composer input{
    flex: 1 auto;
}

.chat-composer button{
    border-radius: 0;
}
</style>