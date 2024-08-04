<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Card from "@/Components/Blocks/Card.vue";
import TextInput from "@/Components/Shared/TextInput.vue";
import TextArea from "@/Components/Shared/TextArea.vue";
import Turnstile from "cfturnstile-vue3";
import { useForm, Link } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    message: "",
});

const sitekey = "0x4AAAAAAAgL257WnkgIzciD";
const submit = () => {
    form.post(route("contact.store"), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
    });
};
</script>

<template>
    <AppLayout title="Contact">
        <div class="max-w-xl mx-auto m-2">
            <div class="text-center">
                <h1
                    class="text-4xl font-bold text-stone-800 sm:text-4xl dark:text-white"
                >
                    Contact us
                </h1>
                <p class="mt-1 text-stone-600 dark:text-stone-400">
                    Get in touch or shoot me an email directly on
                    <a href="mailto:devrajthapa1191@gmail.com"
                        ><b>devrajthapa1191@gmail.com</b></a
                    >
                </p>
            </div>
        </div>

        <Card>
            <form @submit.prevent="submit">
                <div class="grid gap-4 lg:gap-6">
                    <div class="grid grid-cols-1 gap-4 lg:gap-6">
                        <TextInput
                            v-model="form.name"
                            label="Name"
                            placeholder="Enter Your Name"
                            :error="form.errors.name"
                        />

                        <TextInput
                            type="email"
                            v-model="form.email"
                            label="Email"
                            placeholder="Enter Your Email Address"
                            :error="form.errors.email"
                        />

                        <TextArea
                            v-model="form.message"
                            label="Message"
                            placeholder="Enter Your Message"
                            :error="form.errors.message"
                        />
                    </div>
                    <!-- <Turnstile :sitekey="sitekey" @verify="verify" /> -->
                    <div class="mt-6 grid">
                        <button
                            type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-md font-medium rounded-lg border border-transparent bg-sky-600 text-white hover:bg-sky-700 focus:outline-none focus:bg-sky-700 disabled:opacity-50 disabled:pointer-events-none"
                        >
                            <span
                                class="animate-spin inline-block size-4 border-[3px] border-current border-t-transparent text-white rounded-full"
                                role="status"
                                aria-label="loading"
                                v-if="form.processing"
                            ></span>
                            <span v-else>Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </Card>
    </AppLayout>
</template>

<style lang="scss" scoped></style>
