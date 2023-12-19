<script setup>
    import { ref, onMounted, toRefs } from 'vue'
    import { Head, Link, router } from '@inertiajs/vue3';
    import MainLayout from '@/Layouts/MainLayout.vue';

    import 'vue3-carousel/dist/carousel.css'
    import { Carousel, Slide, Navigation } from 'vue3-carousel'


    import DotsHorizontal from 'vue-material-design-icons/DotsHorizontal.vue';

    let wWidth = ref(window.innerWidth)
    let currentSlide = ref(0)
    let currentPost = ref(null)
    let openOverlay = ref(false)

    const props = defineProps({ posts: Object, allUsers: Object })
    const { posts, allUsers } = toRefs(props)

    onMounted(() => {
    window.addEventListener('resize', () => {
        wWidth.value = window.innerWidth
    })
})
</script>

<template>
    <Head title="Instagram" />

    <MainLayout>
        <div class="mx-auto lg:pl-0 md:pl-[80px] pl-0">
            <Carousel
                v-model="currentSlide"
                class="max-w-[700px] mx-auto"
                :items-to-show="wWidth >= 768 ? 8 : 6"
                :items-to-scroll="4"
                :wrap-around="true"
                :transition="500"
                snapAlign="start"
            >
                <Slide v-for="slide in 10" :key="slide" class="h-60">
                    <Link href="/" class="relative mx-auto text-center mt-4 px-2 cursor-pointer">
                        <div class="absolute z-[-1] -top-[5px] left-[4px] rounded-full rotate-45 w-[64px] h-[64px] contrast-[1.3]  bg-gradient-to-t from-yellow-300 to-purple-500 via-red-500">

                        </div>
                    </Link>
                </Slide>
            </Carousel>
        </div>
    </MainLayout>
   
</template>

