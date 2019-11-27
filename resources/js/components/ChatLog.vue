<template>
  <div class="chat-log">
      <chat-message v-for="(message, index) of messages" v-bind:key="index" v-bind:message="message.message" v-bind:user="message.user"></chat-message>
      <div class="empty" v-show="messages.length === 0">
          Nenhuma mensagem!
      </div>
  </div>
</template>

<script>
export default {
    props: ['messages']
}
</script>

<style>
.chat-log .chat-message:nth-child(even){
    background-color: #add8e6;
}

.empty {
    padding: 1rem;
    background-color: #add8e6;
    text-align: center;
}
</style>