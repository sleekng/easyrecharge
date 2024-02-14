<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
    
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-8 py-4 hover:font-bold bg-white border border-bordercolor rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm  focus:outline-none  focus:ring-0 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
