<script setup>
import { Bars3Icon, ArrowLongRightIcon } from '@heroicons/vue/24/outline'
</script>

<template>
    <header>
        <nav class="mx-4 mt-6 sm:mx-auto sm:max-w-full lg:mx-0">
            <div class="mx-auto flex max-w-lg items-center justify-between sm:max-w-2xl lg:max-w-4xl">
                <!-- left -->
                <div class="flex items-center gap-x-6 md:gap-x-8">
                    <img class="h-8 rounded" src="@/assets/images/logo/black-1k.png" alt="MCY Logo" />
                    <a class="hidden text-sm font-semibold text-dark-violet hover:text-opacity-80 active:text-opacity-80 sm:block" href="#">Announcement</a>
                    <a class="hidden text-sm font-semibold text-dark-violet hover:text-opacity-80 active:text-opacity-80 sm:block" href="#">Access Keys</a>
                </div>

                <!-- right -->
                <div>
                    <!-- hamburger  menu -->
                    <button class="inline-flex h-8 w-8 items-center justify-center rounded bg-dark-violet transition-all hover:bg-opacity-80 sm:hidden">
                        <Bars3Icon class="h-6 w-6 text-gold" />
                    </button>

                    <!-- access content  btn -->
                    <button class="flex hidden items-center justify-center gap-x-2 rounded bg-dark-violet px-4 py-2.5 text-xs font-semibold text-white transition-all hover:bg-opacity-80 sm:flex">
                        <span>Administrator Access</span>
                        <ArrowLongRightIcon class="mt-1 h-4 w-4 text-gold" />
                    </button>
                </div>
            </div>
        </nav>
    </header>
</template>
