<script setup>
import { Link } from "@inertiajs/vue3";
import ThemeSwitch from "@/Components/Blocks/ThemeSwitch.vue";
import LogoDark from "/public/images/logo-dark.svg";
//import LogoWhite from "/public/images/logo-white.png";
//import { useStorage } from '@vueuse/core'
</script>

<template>
    <!-- ========== HEADER ========== -->
    <header
        class="flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full py-7"
    >
        <nav
            class="relative max-w-7xl w-full flex flex-wrap md:grid md:grid-cols-12 basis-full items-center px-4 md:px-6 md:px-8 mx-auto"
        >
            <div class="md:col-span-3">
                <!-- Logo -->
                <a
                    class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                    href="/"
                    aria-label="Preline"
                >
                   
                <div class="flex justify-between">
                    <img class="rounded-full mr-2 w-12 h-12" src="/storage/avatars/01JPVPBFHFSCP6F7ZZXZRRFD4D.png"/>
                    <span
                        class="text-black dark:text-slate-200 font-medium size-4 mt-2"
                        >  thapa.dev</span
                    >
                </div>

                   
                </a>
                <!-- End Logo -->
            </div>

            <!-- Button Group -->
            <div
                class="flex items-center gap-x-1 md:gap-x-2 ms-auto py-1 md:ps-6 md:order-3 md:col-span-3"
            >
                <ThemeSwitch />

                <div class="md:hidden">
                    <button
                        type="button"
                        class="hs-collapse-toggle size-[38px] flex justify-center items-center text-sm font-semibold rounded-xl border border-stone-200 text-black hover:bg-stone-100 focus:outline-none focus:bg-stone-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-stone-700 dark:hover:bg-stone-700 dark:focus:bg-stone-700"
                        id="hs-navbar-hcail-collapse"
                        aria-expanded="false"
                        aria-controls="hs-navbar-hcail"
                        aria-label="Toggle navigation"
                        data-hs-collapse="#hs-navbar-hcail"
                    >
                        <svg
                            class="hs-collapse-open:hidden shrink-0 size-4"
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
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg
                            class="hs-collapse-open:block hidden shrink-0 size-4"
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
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- End Button Group -->

            <!-- Collapse -->
            <div
                id="hs-navbar-hcail"
                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block md:w-auto md:basis-auto md:order-2 md:col-span-6"
                aria-labelledby="hs-navbar-hcail-collapse"
            >
                <div
                    class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:justify-center md:items-center md:gap-y-0 md:gap-x-7 md:mt-0"
                >
                    <div>
                        <Link
                            class="relative inline-block text-black hover:text-stone-600 focus:outline-none focus:text-stone-600 dark:text-white dark:hover:text-stone-300 dark:focus:text-stone-300"
                            :href="route('home')"
                            >About</Link
                        >
                    </div>
                    <div>
                        <Link
                            :href="route('projects')"
                            :class="
                                route().current('projects')
                                    ? 'focus:outline-none before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-sky-400'
                                    : ''
                            "
                            class="relative inline-block text-black hover:text-stone-600 focus:outline-none focus:text-stone-600 dark:text-white dark:hover:text-stone-300 dark:focus:text-stone-300"
                        >
                            Projects
                        </Link>
                    </div>
                    <div>
                        <Link
                            :href="route('contact')"
                            :class="
                                route().current('contact')
                                    ? 'focus:outline-none before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-sky-400'
                                    : ''
                            "
                            class="relative inline-block text-black hover:text-stone-600 focus:outline-none focus:text-stone-600 dark:text-white dark:hover:text-stone-300 dark:focus:text-stone-300"
                        >
                            Contact
                        </Link>
                    </div>
                </div>
            </div>
            <!-- End Collapse -->
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->
</template>

<style lang="scss" scoped></style>
