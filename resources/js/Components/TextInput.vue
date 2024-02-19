<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: String,
    type: String,
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
                :type="type"
                ref="input"
                class="border-bordercolor border focus:border-bordercolor focus:ring-0 py-3 px-4 pr-10 rounded-md shadow-sm"
                :value="modelValue"
                @input="$emit('update:modelValue', $event.target.value)"
            >
             </label>
</template>
