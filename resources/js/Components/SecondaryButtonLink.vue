<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'inline-flex items-center px-8 py-4 hover:font-bold  rounded-md font-semibold text-xs  uppercase tracking-widest shadow-sm  focus:outline-none  focus:ring-0 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150'
        : 'inline-flex items-center px-8 py-4 hover:font-bold  rounded-md font-semibold text-xs  uppercase tracking-widest shadow-sm  focus:outline-none  focus:ring-0 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150';
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
