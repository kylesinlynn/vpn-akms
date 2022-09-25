<script setup>
import { Bars3Icon, ArrowLongRightIcon } from '@heroicons/vue/24/outline'
</script>

<template>
    <header>
        <nav class="mx-4 mt-6 sm:mx-auto sm:max-w-full lg:mx-0">
            <div class="flex items-center justify-between max-w-lg mx-auto sm:max-w-2xl lg:max-w-4xl">
                <!-- left -->
                <div class="flex items-center gap-x-6 md:gap-x-8">
                    <img class="h-8 rounded" src="@/assets/images/logo/black-1k.png" alt="MCY Logo" />
                    <a class="hidden text-sm font-semibold text-dark-violet hover:text-opacity-80 active:text-opacity-80 sm:block" href="#">Announcement</a>
                    <a class="hidden text-sm font-semibold text-dark-violet hover:text-opacity-80 active:text-opacity-80 sm:block" href="#">Access Keys</a>
                </div>
                
                <!-- right -->
                <div>
                    <!-- hamburger  menu -->
                    <button class="inline-flex items-center justify-center w-8 h-8 transition-all rounded bg-dark-violet hover:bg-opacity-80 sm:hidden">
                        <Bars3Icon class="w-6 h-6 text-gold" />
                    </button>
                    
                    <!-- access content  btn -->
                    <button class="flex hidden items-center justify-center gap-x-2 rounded bg-dark-violet px-4 py-2.5 text-xs font-semibold text-white transition-all hover:bg-opacity-80 sm:flex">
                        <span>Administrator Access</span>
                        <ArrowLongRightIcon class="w-4 h-4 mt-1 text-gold" />
                    </button>
                </div>
            </div>
        </nav>
    </header>
</template>
