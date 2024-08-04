<script setup>
import Navbar from "@/Components/Partials/Navbar.vue";
import Footer from "@/Components/Partials/Footer.vue";
import { Head } from "@inertiajs/vue3";
import Toast from "../Components/Blocks/Toast.vue";

defineProps({
    title: {
        type: String,
        default: "Home",
    },
});
</script>

<template>
    <div>
        <Head :title="title" />
        <div class="flex flex-col min-h-screen px-4 md:px-8">
            <Navbar />
            <!-- Page Content -->
            <main class="grow w-full max-w-4xl mx-auto">
                <Toast />
                <slot />
            </main>

            <Footer />
        </div>
    </div>
</template>

<style lang="scss" scoped></style>
