<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: String,
});

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <label class="flex flex-col space-y-2">
            <div>
                <slot name="inputLable"/>
            </div>
            <input
                ref="input"
                class="border-bordercolor border py-3 focus:border-none focus:ring-bordercolor rounded-md shadow-sm"
                :value="modelValue"
                @input="$emit('update:modelValue', $event.target.value)"
            >
             </label>
</template>
