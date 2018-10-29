<template lang="html">
    <div class="chat-log">

    <chat-message v-for="message in messages" :message="message"></chat-message>
    

    </div>
</template>

<script>

export default {

    
        props: ['messages']

  

}
</script>

<style lang="css">
.chat-log div {
    padding: 0px 5px 0px 5px;
}

.chat-log div:nth-child(even) {

    background-color: #467daf;
    color: #ffffff;
    
    text-align: right;

}

.title {
    text-align: center;
    padding: 20px 0px 20px 0px;
   
}



</style>