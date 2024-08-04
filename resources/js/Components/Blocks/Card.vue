<script setup></script>

<template>
    <div
        class="flex flex-col border rounded-xl p-4 m-2 sm:p-6 lg:p-8 dark:border-stone-700"
    >
        <h2
            class="mb-5 text-2xl font-semibold text-gray-800 dark:text-stone-200"
        >
            <slot name="cardTitle"> </slot>
        </h2>

        <slot />
    </div>
</template>

<style lang="scss" scoped></style>
