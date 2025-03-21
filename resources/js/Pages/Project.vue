<script setup>
import { computed } from "vue";
import { Head, Link } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Perspective, Pagination, Fade } from "@egjs/flicking-plugins";
import Flicking from "@egjs/vue3-flicking";

defineProps({
    projects: {
        type: Array,
        required: true,
    },
});

const plugins = [
    new Perspective({ rotate: 0.2, scale: 4 }),
    new Pagination({ type: "bullet" }),
    new Fade(),
];
const options = { autoResize: true };
</script>

<template>
    <AppLayout title="Projects">
        <!-- <div class="max-w-xl mx-auto m-2">
            <div class="text-center">
                <h1
                    class="text-4xl font-bold text-stone-800 sm:text-4xl dark:text-white"
                >
                    Projects
                </h1>
            </div>
        </div> -->
        <Flicking :options="options" :plugins="plugins">
            <div v-for="project in projects" :key="project.id">
                <div
                    class="flex flex-col justify-center align-center gap-4 w-[80vw] h-[80vh] text-center"
                >
                    <Link :href="`${project.url ? project.url : '#'}`">
                        <span
                            class="font-bold text-5xl hover:text-blue-500 transition-colors duration-200 leading-tight dark:text-slate-200"
                        >
                            {{ project.title }}
                        </span>
                        <p
                            class="text-slate-500 leading-relaxed mt-2 dark:text-slate-200"
                            v-html="project.description"
                        ></p>
                    </Link>
                    <ul class="flex flex-row gap-6 justify-center m-4">
                        <li v-for="skill in project.skills">
                            <img
                                class="w-25 h-12"
                                :src="`storage/${skill.image}`"
                                :alt="skill.name"
                            />
                        </li>
                    </ul>
                </div>
            </div>
            <template #viewport>
                <div
                    class="flicking-pagination flicking-pagination-bullets"
                ></div>
            </template>
        </Flicking>
    </AppLayout>
</template>

<style>

.flicking-pagination-bullets {
    margin-top: 1rem;
}
.flicking-pagination .flicking-pagination-bullet {
    width: 10px !important;
    height: 10px !important;
}
.flicking-pagination-bullet-active {
    background-color: #1e4079 !important;
}
</style>
