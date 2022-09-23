<script setup>
import BaseHeader from "./components/BaseHeader.vue";
import BaseHero from "./components/BaseHero.vue";
import BaseFooter from "./views/BaseFooter.vue";

const servers = [
  {
    id: 1,
    location: 'USA',
    hosting: 'Google LLC',
    ip_address: '127.0.0.1',
    created_at: 'Sunday, Sep 11, 2022',
    status: 'active'
  },
  {
    id: 2,
    location: 'Canada',
    hosting: 'Google LLC',
    ip_address: '127.0.0.1:8000',
    created_at: 'Sunday, Sep 11, 2022',
    status: 'down'
  },
]
</script>
<template>
  <base-header/>
  <base-hero/>
  <!--  server key list -->
  <main class="overflow-x-auto mt-8 mx-4 md:max-w-4xl md:mx-auto md:mt-12">
    <h2 class="mb-8 text-xl font-bold text-gray-800/90">Access Keys</h2>

    <div class="hidden overflow-x-auto relative shadow-md sm:block sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
          <th scope="col" class="py-3 px-6">Location</th>
          <th scope="col" class="py-3 px-6">Hosting</th>
          <th scope="col" class="py-3 px-6">IP Address</th>
          <th scope="col" class="py-3 px-6">Created At</th>
          <th scope="col" colspan="2" class="py-3 px-6">Status</th>
        </tr>
        </thead>
        <tbody>
        <tr
            class="bg-white border-b"
            v-for="server in servers"
            :key="server.id"
        >
          <th scope="row" class="py-4 px-6 text-indigo-500 font-semibold capitalize">
            {{ server.location }}
          </th>
          <td class="py-4 px-6">
            {{ server.hosting }}
          </td>
          <td class="py-4 px-6">
            {{ server.ip_address }}
          </td>
          <td class="py-4 px-6">
            {{ server.created_at }}
          </td>
          <td class="py-4 px-6">
            <span
                class="font-semibold capitalize"
                :class="server.status === 'active' ? 'text-indigo-500' : 'text-red-600'"

            >
              {{ server.status }}
            </span>
          </td>
          <td class="py-4 px-6">
            <a
                class="transition-colors ease-out px-5 py-3  text-white font-bold rounded-lg "
                :class="server.status === 'active' ? 'bg-indigo-500 hover:bg-indigo-600' : 'bg-red-500 hover:bg-red-600'"
                href="#"
            >Get Key</a>

          </td>
        </tr>
        </tbody>
      </table>
    </div>

    <!--     show only on mobile -->
    <div class="overflow-x-auto relative shadow-md sm:hidden  sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
          <th scope="col" class="py-3 px-6">Location</th>
          <th scope="col" class="py-3 px-6 text-center pl-3">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr
            class="bg-white border-b"
            v-for="server in servers"
            :key="server.id"
        >
          <th scope="row" class="py-4 px-6 inline-flex flex-col gap-y-0.5 text-indigo-500 font-semibold capitalize">
            <span>{{ server.location }}</span>
            <span
                class="font-semibold capitalize"
                :class="server.status === 'active' ? 'text-indigo-500' : 'text-red-600'"

            >
              {{ server.status }}
            </span>

          </th>
          <td class="py-4 px-6 text-center">
            <a
                class="transition-colors ease-out px-3 py-2.5  text-white font-bold rounded-lg "
                :class="server.status === 'active' ? 'bg-indigo-500 hover:bg-indigo-600' : 'bg-red-500 hover:bg-red-600'"
                href="#"
            >Get Key</a>

          </td>
        </tr>
        </tbody>
      </table>
    </div>


  </main>

  <base-footer/>
</template>