<script setup>
    import { reactive, toRefs } from 'vue'
    import { Head, Link, router } from '@inertiajs/vue3';
    import MainLayout from '@/Layouts/MainLayout.vue';

    
    import Cog from 'vue-material-design-icons/Cog.vue';
    import Grid from 'vue-material-design-icons/Grid.vue';
    import PlayBoxOutline from 'vue-material-design-icons/PlayBoxOutline.vue';
    import BookmarkOutline from 'vue-material-design-icons/BookmarkOutline.vue';
    import AccountBoxOutline from 'vue-material-design-icons/AccountBoxOutline.vue';    

    let data = reactive({ post: null })
    const form = reactive({ file: null })

    const props = defineProps({ postsByUser: Object, user: Object })
    const { postsByUser, user } = toRefs(props)

</script>

<template>
    <Head title="Instagram" />

    <MainLayout>
 
    </MainLayout>
   
</template>
