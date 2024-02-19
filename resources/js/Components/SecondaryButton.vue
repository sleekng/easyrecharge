<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
    
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-8 py-4 hover:font-bold  rounded-md font-semibold text-xs  uppercase tracking-widest shadow-sm  focus:outline-none  focus:ring-0  focus:ring-offset-0 disabled:opacity-25 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
