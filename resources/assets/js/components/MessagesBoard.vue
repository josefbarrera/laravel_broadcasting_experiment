<template>
    <div class="card">
        <div class="card-header">Messages</div>

        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item" v-for="message in messages">
                    {{ message.content.trim() }}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['messages'],
    }
</script>
