<template lang="html">
    <div>
        
        <div class="cont">
        
        <strong>{{message.user}}</strong>
        <p>{{message.message}}</p>
        
        </div>
        
    

    </div>
</template>

<script>

export default {

    props: ['message']

}

</script>

<style lang="css">

.chat-message {
    padding: 1rem;
}

.chat-message  p {
    margin-bottom: 1rem;
}

</style>