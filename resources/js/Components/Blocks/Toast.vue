<script setup>
import { ref, computed, watch } from "vue";
import { usePage } from "@inertiajs/vue3";

const page = usePage();

const flashSuccess = computed(() => page.props.flash.success);

const isToastVisible = ref(false);

watch(
    () => flashSuccess,
    async () => {
        isToastVisible.value = true;

        setTimeout(() => {
            isToastVisible.value = false;
            // flash.value = _.mapValues(flash.value, () => null);
        }, 3000);
    },
    { deep: true }
);

const closeToast = () => {
    isToastVisible.value = false;
};

const emit = defineEmits(["remove"]);
</script>

<template>
    <!-- Toast -->
    <div
        class="absolute top-20 start-1/2 -translate-x-1/2"
        v-if="isToastVisible"
    >
        <div
            id="dismiss-toast"
            class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 max-w-md bg-teal-100 border border-teal-200 rounded-xl shadow-lg dark:bg-teal-800/10 dark:border-teal-700"
            role="alert"
            tabindex="-1"
            aria-labelledby="hs-toast-dismiss-button-label"
        >
            <div class="flex p-4">
                <p
                    id="hs-toast-dismiss-button-label"
                    class="text-sm text-teal-700 dark:text-teal-400"
                >
                    {{ flashSuccess }}
                </p>

                <div class="ms-auto">
                    <button
                        type="button"
                        @click="closeToast"
                        class="inline-flex shrink-0 justify-center items-center size-5 rounded-lg text-teal-800 opacity-50 hover:opacity-100 focus:outline-none focus:opacity-100 dark:text-teal-100"
                        aria-label="Close"
                        data-hs-remove-element="#dismiss-toast"
                    >
                        <span class="sr-only">Close</span>
                        <svg
                            class="shrink-0 size-4"
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
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Toast -->
</template>

<style lang="scss" scoped></style>
