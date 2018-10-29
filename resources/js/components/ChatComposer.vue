<template lang="html">
    <div class="chat-composer">

    <input type="text" class="form-control" placeholder="Start typing your message..." v-model="messageText" @keyup.enter="sendMessage">
    <button type="button" class="btn btn-link" @click="sendMessage">Send</button>

    </div>
</template>

<script>

export default {

  data() {
      return {
          messageText: ''
      }
  },
  methods: {
      sendMessage() {
          this.$emit('messagesent', {

              message: this.messageText,
              user: "John Doe"
          });

          this.messageText = '';
      }
  }

}
</script>

<style lang="css">

.chat-composer {

display: flex;

}

.chat-composer input {

flex: 1 auto;
background:none;
border:none;
border-bottom: 1px solid;
border-radius: 2%;

}


.chat-composer button {

background:none;
border:none;
border-radius: 2%;
color: #ffffff;
margin: 2px 3px 3px 3px;
text-decoration: none;

}

.chat-composer button:hover {

background:none;
border:none;
border-radius: 2%;
color: #3a389b;
margin: 2px 3px 3px 3px;
text-decoration: none;

}
</style>