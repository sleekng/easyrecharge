<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-8 py-4  bg-primarycolor text-textcolor border border-transparent rounded-md font-semibold text-sm uppercase tracking-widest hover:font-bold  focus:outline-none focus:ring-0 focus:ring-offset-2 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
