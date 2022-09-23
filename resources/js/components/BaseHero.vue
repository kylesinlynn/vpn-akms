<script setup>
import {ChevronDoubleRightIcon} from '@heroicons/vue/24/outline'
</script>


<template>
  <section class="mx-4 mt-4 sm:mx-8  sm:mt-6  lg:max-w-4xl lg:mx-auto">
    <!--     show only on tablet -->
    <h2 class="mb-3 hidden uppercase text-center font-bold text-lg sm:block md:hidden">
      Announcements
    </h2>
    <div
        class="flex flex-col  sm:mx-auto sm:flex-row-reverse sm:justify-center sm:items-center sm:gap-x-12 lg:mt-10">
      <figure class="sm:w-1/2 rounded-lg overflow-hidden lg:h-[225px]">
        <img class="h-full w-full  object-cover object-center"
             src="@/assets/images/cover/black-1k.png"
             alt="MCY Logo with text">
      </figure>
      <!--      show only on small screen -->
      <h2 class="mt-6 uppercase text-center font-bold text-lg sm:hidden">Announcement</h2>
      <div class="sm:w-1/2 flex flex-col gap-y-2">
        <!--         show only on large screen -->
        <h2 class="hidden uppercase font-bold text-base lg:block">Announcements</h2>
        <p class="mt-3 text-xs font-medium leading-relaxed md:max-w-sm">Lorem ipsum dolor sit amet, consectetur
          adipisicing elit. A
          animi
          aperiam
          architecto
          consequatur
          corporis
          dignissimos dolores esse excepturi fugiat, labore, minima odio perspiciatis, provident qui recusandae repella
          consequatur
          corporis
          dignissimos dolores esse excepturi fugiat, labore, minima odio perspiciatis, provident qui recusandae repellat
        </p>
        <a class="mt-5 uppercase text-xs inline-flex items-center gap-x-1.5 font-semibold text-indigo-600" href="#">
          <span>Download Here</span>
          <ChevronDoubleRightIcon class="h-3"/>
        </a>
      </div>
    </div>
  </section>

</template>

