<!-- <script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script> -->


<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
// import { Head } from '@inertiajs/inertia-vue3'

defineProps({
    messages: Object,
});


// export default {
//     components: {
//         Head,
//         AppLayout,
//     },
//     props: {
//         messages: Object,
//     },
// }
</script>

<style lang="scss">

.messages-list {
    max-width: 720px;
    // max-width: 1080px; 
	margin: 0 auto !important; 
	float: none !important; 
    padding-bottom: 100px;
}

.message {
    border: 1px solid rgb(28, 177, 177);
    border-radius: 4px;
    background-color: white;
    white-space: pre-line;
    display: block;
    unicode-bidi: embed;
    overflow-wrap: normal;

}
</style>

<template>
    <AppLayout title="Messages">
        <div class="messages-list">
            <div class="message m-4 p-3" v-for="message in messages.data" :key="message.id">
                <div>{{ message.id }}</div>
                <div>{{ message.stripped_text }}</div>
            </div>
        </div>

        <!-- <pagination class="mt-6" :links="messages" /> -->



    </AppLayout>
</template>
