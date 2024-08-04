<script setup>
import { ref } from "vue";
import { v4 as uuid } from "uuid";

const textarea = ref();
const props = defineProps({
    id: {
        type: String,
        default() {
            return `textarea-${uuid()}`;
        },
    },
    error: String,
    label: String,
    placeholder: String,
    modelValue: String,
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
            class="block mb-2 text-sm text-stone-700 font-medium dark:text-white"
            >{{ label }}</label
        >
        <textarea
            :id="id"
            ref="textarea"
            :name="`${label.toLowerCase()}_${id}`"
            rows="6"
            :placeholder="placeholder"
            :value="modelValue"
            @input="updateValue"
            :class="
                    error
                        ? 'border-red-500 focus:border-red-500 focus:ring-red-500'
                        : ''
                "
            class="py-3 px-4 block w-full border-stone-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-stone-800 dark:border-stone-700  dark:text-stone-400 dark:placeholder-stone-600 dark:focus:ring-stone-600"
        ></textarea>
        <p v-if="error" class="text-sm text-red-600 mt-2" :id="`${id}-error`">
            {{ error }}
        </p>
    </div>
</template>

<style lang="scss" scoped></style>
