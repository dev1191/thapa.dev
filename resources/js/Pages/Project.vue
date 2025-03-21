<script setup>
import { computed, ref } from "vue";
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

// Modal state
const showModal = ref(false);
const selectedProject = ref(null);

const openModal = (project) => {
    selectedProject.value = project;
    showModal.value = true;
};

const closeModal = () => {
    showModal.value = false;
    selectedProject.value = null;
};

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
                    <Link v-if="project.url" :href="`${project.url}`">
                        <span
                            class="font-bold text-5xl hover:text-blue-500 transition-colors duration-200 leading-tight dark:text-zinc-200"
                        >
                            {{ project.title }}
                        </span>
                        <p
                            class="text-zinc-500 leading-relaxed mt-2 dark:text-zinc-200"
                            v-html="project.description"
                        ></p>
                    </Link>
                    <div v-else>
                        <span
                            @click="openModal(project)"
                            class="cursor-pointer text-5xl font-bold text-blue-500 hover:underline"
                        >
                            {{ project.title }}
                        </span>
                        <p
                            class="text-zinc-500 leading-relaxed mt-2 dark:text-zinc-200"
                            v-html="project.description"
                        ></p>
                    </div>

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

        <!-- Modal -->
        <div
            v-if="showModal"
            class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-10"
        >
            <div
                class="relative bg-white p-6 rounded-lg w-[500vw] max-w-4xl shadow-lg"
            >
                <!-- Close Button (Top Right) -->
                <button
                    @click="closeModal"
                    class="absolute top-3 right-3 text-gray-600 hover:text-gray-900"
                >
                    ✖
                </button>

                <h2 class="text-2xl font-bold mb-4 text-center">
                    {{ selectedProject.title }}
                </h2>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <img
                        v-for="(image, index) in selectedProject.gallery"
                        :key="index"
                        class="w-full h-40 object-cover rounded-lg"
                        :src="`storage/${image}`"
                        alt="Gallery Image"
                    />
                </div>
            </div>
        </div>
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
