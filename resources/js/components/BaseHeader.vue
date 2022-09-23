<script setup>
import {Bars3Icon, ArrowLongRightIcon} from '@heroicons/vue/24/outline'
</script>

<template>
  <header>
    <nav class="mt-6 mx-4 sm:mx-auto sm:max-w-full lg:mx-0">
      <div class="max-w-lg mx-auto flex justify-between items-center sm:max-w-2xl lg:max-w-4xl">
        <!--        left -->
        <div class="flex items-center gap-x-6 md:gap-x-8">
          <img class="h-8 rounded" src="@/assets/images/logo/black-1k.png" alt="MCY Logo">
          <a class="hidden sm:block text-dark-violet font-semibold text-sm hover:text-opacity-80 active:text-opacity-80"
             href="#">Announcement</a>
          <a class="hidden sm:block text-dark-violet font-semibold text-sm hover:text-opacity-80 active:text-opacity-80"
             href="#">Access
            Keys</a>
        </div>
        <!--        right -->
        <div>
          <!--          hamburger  menu -->
          <button
              class="transition-all h-8 w-8 inline-flex justify-center items-center bg-dark-violet rounded hover:bg-opacity-80 sm:hidden">
            <Bars3Icon class="h-6 w-6 text-gold"/>
          </button>
          <!--          access content  btn -->
          <button
              class="transition-all hidden sm:flex px-4 py-2.5 flex justify-center items-center gap-x-2 bg-dark-violet text-xs font-semibold text-white rounded hover:bg-opacity-80">
            <span>Administrator Access</span>
            <ArrowLongRightIcon class="h-4 w-4 text-gold mt-1"/>
          </button>
        </div>
      </div>
    </nav>
  </header>
</template>