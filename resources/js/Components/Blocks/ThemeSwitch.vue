<script setup></script>

<template>
    <button
        type="button"
        class="hs-dark-mode hs-dark-mode-active:hidden inline-flex items-center gap-x-2 py-2 px-3 bg-black/10 rounded-full text-sm text-black hover:bg-black/20 focus:outline-none focus:bg-black/20"
        data-hs-theme-click-value="dark"
    >
        Dark
    </button>
    <button
        type="button"
        class="hs-dark-mode hs-dark-mode-active:inline-flex hidden items-center gap-x-2 py-2 px-3 bg-white/10 rounded-full text-sm text-white hover:bg-white/20 focus:outline-none focus:bg-white/20"
        data-hs-theme-click-value="light"
    >
        Light
    </button>
</template>
<style lang="scss" scoped></style>
