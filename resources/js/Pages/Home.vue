<script setup>
    import {ref, onMounted, toRefs} from 'vue'
    import {Head, Link, router} from '@inertiajs/vue3';
    import MainLayout from '@/Layouts/MainLayout.vue';
    import 'vue3-carousel/dist/carousel.css'
    import { Carousel, Slide, Navigation } from 'vue3-carousel';

    import DotsHorizontal from 'vue-vue-material-design-icons/DotsHorizontal.vue';

    let wWidth = ref(window.innerWidth)
    let currentSlide = ref(0)
    let currentPost = ref(null)
    let openOverlay = ref(false)

    const props = defineProps({ posts: Object, allUsers: Object})
    const {posts, allUsers } = toRefs(props)

    onMounted(() => {
        window.addEventListener('resize', () => {
            wWidth.value = window.innerWidth
        })
    })
</script>

<template>
    <Head title="Instagram" />

    <MainLayout>
        
    </MainLayout>
   
</template>

