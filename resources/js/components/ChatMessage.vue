<template>
    <div class="chat-message">
        <p>{{ message }}</p>
        <small>{{ user.name }}</small>
    </div>
</template>

<script>
export default {
    props: ['message', 'user']
}
</script>

<style>
    .chat-message {
        padding: 1rem;
    }

    .chat-message > p {
        margin-bottom: .5rem;
    }
</style>