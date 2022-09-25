<script setup>
    
import BaseHeader from './components/BaseHeader.vue'
import BaseHero from './components/BaseHero.vue'
import BaseFooter from './views/BaseFooter.vue'

const servers = [
    {
        id: 1,
        location: 'USA',
        hosting: 'Google LLC',
        ip_address: '127.0.0.1',
        created_at: 'Sunday, Sep 11, 2022',
        status: 'active',
    },
    {
        id: 2,
        location: 'Canada',
        hosting: 'Google LLC',
        ip_address: '127.0.0.1:8000',
        created_at: 'Sunday, Sep 11, 2022',
        status: 'down',
    },
]
</script>

<template>
    <base-header />
    <base-hero />
    
    <!--  server key list -->
    <main class="mx-4 mt-8 overflow-x-auto md:mx-auto md:mt-12 md:max-w-4xl">
        <h2 class="mb-8 text-xl font-bold text-gray-800/90">Access Keys</h2>

        <div class="relative hidden overflow-x-auto shadow-md sm:block sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Location</th>
                        <th scope="col" class="px-6 py-3">Hosting</th>
                        <th scope="col" class="px-6 py-3">IP Address</th>
                        <th scope="col" class="px-6 py-3">Created At</th>
                        <th scope="col" colspan="2" class="px-6 py-3">Status</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr class="bg-white border-b" v-for="server in servers" :key="server.id">
                        <th scope="row" class="px-6 py-4 font-semibold text-indigo-500 capitalize">
                            {{ server.location }}
                        </th>
                        
                        <td class="px-6 py-4">
                            {{ server.hosting }}
                        </td>
                        
                        <td class="px-6 py-4">
                            {{ server.ip_address }}
                        </td>
                        
                        <td class="px-6 py-4">
                            {{ server.created_at }}
                        </td>
                        
                        <td class="px-6 py-4">
                            <span class="font-semibold capitalize" :class="server.status === 'active' ? 'text-indigo-500' : 'text-red-600'">
                                {{ server.status }}
                            </span>
                        </td>
                        
                        <td class="px-6 py-4">
                            <a class="px-5 py-3 font-bold text-white transition-colors ease-out rounded-lg" :class="server.status === 'active' ? 'bg-indigo-500 hover:bg-indigo-600' : 'bg-red-500 hover:bg-red-600'" href="#">Get Key</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- show only on mobile -->
        <div class="relative overflow-x-auto shadow-md sm:hidden sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Location</th>
                        <th scope="col" class="px-6 py-3 pl-3 text-center">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr class="bg-white border-b" v-for="server in servers" :key="server.id">
                        <th scope="row" class="inline-flex flex-col gap-y-0.5 py-4 px-6 font-semibold capitalize text-indigo-500">
                            <span>{{ server.location }}</span>
                            
                            <span class="font-semibold capitalize" :class="server.status === 'active' ? 'text-indigo-500' : 'text-red-600'">
                                {{ server.status }}
                            </span>
                        </th>
                        
                        <td class="px-6 py-4 text-center">
                            <a class="rounded-lg px-3 py-2.5 font-bold text-white transition-colors ease-out" :class="server.status === 'active' ? 'bg-indigo-500 hover:bg-indigo-600' : 'bg-red-500 hover:bg-red-600'" href="#">Get Key</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <base-footer />
</template>
