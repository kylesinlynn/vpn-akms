<div class="bg-gray-100">
    <nav x-data="{ open: false }" class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="block h-8 w-auto lg:hidden" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow" />
                        <img class="hidden h-8 w-auto lg:block" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow" />
                    </div>

                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <a href="/" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Home</a>

                            <a href="https://www.facebook.com/106535241160332/posts/215515070262348/" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">အသုံးပြုနည်း</a>

                            <a href="https://www.facebook.com/MCY197" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">MCY Facebook Page</a>

                            <a href="https://www.facebook.com/aungmyatmoe834" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">https://www.facebook.com/aungmyatmoe834</a>

                            <a href="https://github.com/mmcyberyouth/mcy_vpn" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Porject Repo Link</a>

                            @guest
                                <a href="{{ route('login.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
                            @endguest

                            @auth
                                <a href="{{ route('page.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Dashboard</a>
                            @endauth
                        </div>
                    </div>
                </div>

                <div class="hidden sm:ml-6 sm:block"></div>

                <div class="-mr-2 flex sm:hidden">
                    <button @click="open = !open" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" x-bind:aria-expanded="open" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>

                        <svg x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'hidden': open, 'block': !open }" class="block h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>

                        <svg x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'hidden': !open, 'block': open }" class="hidden h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div x-description="Mobile menu, toggle classes based on menu state." x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Home</a>

                <a href="https://www.facebook.com/106535241160332/posts/215515070262348/" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">အသုံးပြုနည်း</a>

                <a href="https://www.facebook.com/MCY197" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">MCY Facebook Page</a>

                <a href="https://www.facebook.com/aungmyatmoe834" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact To Developer</a>

                <a href="https://github.com/mmcyberyouth/mcy_vpn" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Porject Repo Link</a>

                @guest
                    <a href="{{ route('login.index') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
                @endguest

                @auth
                    <a href="{{ route('page.index') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Admin Dashboard</a>
                @endauth
            </div>
        </div>
    </nav>
</div>
