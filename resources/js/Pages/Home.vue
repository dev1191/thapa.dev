<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import SocialMediaLinks  from "@/Components/Blocks/SocialMediaLinks.vue";
</script>

<template>
    <AppLayout title="Home">
        <!-- Hero -->
        <div
            class="flex flex-col justify-center items-center text-center gap-4 p-8 h-[88vh]"
        >
            <h1 class="font-bold text-6xl wider dark:text-stone-200 leading-tight">
                Hi there! I am Dev Raj 
            </h1>
            <p
                class="text-stone-500  dark:text-stone-300 text-lg w-full lg:w-1/2 xl:w-1/2 2xl:w-1/3"
            >
                A Backend Developer who enjoy the experience working with
                Laravel, NodeJS and Vue
            </p>

            <SocialMediaLinks/>
        </div>
        <!-- End Hero -->
    </AppLayout>
</template>

<style lang="scss" scoped></style>
