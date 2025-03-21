<script setup>
import { Github, Linkedin } from "lucide-vue-next";
</script>

<template>
    <ul class="flex gap-6">
        <li>
            <a href="https://github.com/dev1191/" target="_blank">
                <Github
                    class="hover:text-blue-500 dark:text-stone-200 transition-colors duration-200"
                    :size="30"
                />
            </a>
        </li>
        <li>
            <a href="https://www.linkedin.com/in/dev-raj-thapa-571645b5" target="_blank">
                <Linkedin
                    class="hover:text-blue-500 dark:text-stone-200 transition-colors duration-200"
                    :size="30"
                />
            </a>
        </li>
    </ul>
</template>

<style lang="scss" scoped></style>
