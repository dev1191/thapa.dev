<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import SocialMediaLinks from "@/Components/Blocks/SocialMediaLinks.vue";
import VueTyping from "@dmncodes/vue-typing";

function onSentenceTyped(sentence) {
  console.log(`Typed sentence: ${sentence}`);
}

</script>

<template>
    <AppLayout title="Home">
        <!-- Hero -->
        <div
            class="flex flex-col justify-center items-center text-center gap-4 p-8 h-[88vh]"
        >
            <h1
                class="font-bold text-6xl wider dark:text-stone-200 leading-tight"
            >
                Hi there! I am
                <VueTyping
                    :sentences="['Dev Raj', 'Backend Developer']"
                    :minTypeSpeed="50"
                    :maxTypeSpeed="150"
                    :eraseSpeed="100"
                    :eraseDelay="1500"
                    :writeDelay="0"
                    caret="|"
                    :loop="true"
                    @sentence:typed="onSentenceTyped"
                />
            </h1>
            <p
                class="text-stone-500 dark:text-stone-300 text-lg w-full lg:w-1/2 xl:w-1/2 2xl:w-1/3"
            >
                A Backend Developer who enjoy the experience working with
                Laravel, NodeJS and Vue. Passionate about building scalable and
                efficient systems, solving complex problems, and continuously learning new technologies. I thrive in collaborative environments and take pride in writing clean, maintainable code that drives seamless user experiences.
           

            </p>
     

            <SocialMediaLinks />
        </div>
        <!-- End Hero -->
    </AppLayout>
</template>

<style lang="scss" scoped></style>
