<script setup>
   import { ref, reactive } from 'vue'
    import { router, usePage } from '@inertiajs/vue3';

    import Close from 'vue-material-design-icons/Close.vue';
    import ArrowLeft from 'vue-material-design-icons/ArrowLeft.vue';
    import MapMarkerOutline from 'vue-material-design-icons/MapMarkerOutline.vue';
    import ChevronDown from 'vue-material-design-icons/ChevronDown.vue';

    //const user = usePage().props.auth.user

    const emit = defineEmits(['close'])

    const form = reactive({
        text: null,
        file: null,
    })
</script>

<template>
 
</template>
