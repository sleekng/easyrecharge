<script setup>

import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
    type: {
        type: String,
        default: 'submit',
    },
});


const classes = computed(() => {
    return props.active
        ? 'inline-flex text-center items-center px-8 py-4   text-textcolor border border-transparent rounded-md font-semibold text-sm uppercase tracking-widest hover:font-bold  focus:outline-none focus:ring-0 focus:ring-offset-2 transition ease-in-out duration-150'
        : 'inline-flex text-center items-center px-8 py-4   text-textcolor border border-transparent rounded-md font-semibold text-sm uppercase tracking-widest hover:font-bold  focus:outline-none focus:ring-0 focus:ring-offset-2 transition ease-in-out duration-150';
});
</script>

<template>
    <button :type="type" :class="classes" class="">
        <slot />
    </button>
</template>
