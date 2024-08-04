<script setup>
import { ref } from "vue";
import { v4 as uuid } from "uuid";

const input = ref();
const props = defineProps({
    id: {
        type: String,
        default() {
            return `text-input-${uuid()}`;
        },
    },
    error: String,
    label: String,
    placeholder: String,
    modelValue: String,
    type: {
        type: String,
        default: "text",
    },
});
const emit = defineEmits(["update:modelValue"]);

const updateValue = (event) => {
    emit("update:modelValue", event.target.value);
};
</script>

<template>
    <div>
        <label
            :for="id"
            class="block text-md font-medium mb-2 dark:text-white"
            >{{ label }}</label
        >
        <div class="relative">
            <input
                ref="input"
                :type="type"
                :placeholder="placeholder"
                :id="id"
                :name="`${label.toLowerCase()}_${id}`"
                :class="
                    error
                        ? 'border-red-500 focus:border-red-500 focus:ring-red-500'
                        : ''
                "
                class="py-3 px-4 block w-full rounded-lg text-md dark:bg-stone-800 dark:border-stone-700 dark:text-stone-400"
                :value="modelValue"
                @input="updateValue"
                :aria-describedby="error ? `${id}-error` : null"
            />
            <div
                v-if="error"
                class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3"
            >
                <svg
                    class="shrink-0 size-4 text-red-500"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" x2="12" y1="8" y2="12"></line>
                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                </svg>
            </div>
        </div>
        <p v-if="error" class="text-sm text-red-600 mt-2" :id="`${id}-error`">
            {{ error }}
        </p>
    </div>
</template>

<style lang="scss" scoped></style>
