<script setup>
import { Head , Link} from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="min-h-screen  sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="mx-auto px-32 pt-24 pb-8 text-center text-4xl font-bold">
            <p>Dashboard</p>
        </div>

        <div class="flex flex-wrap mx-auto px-2 md:px-32 gap-7 justify-evenly">
            <Link :href="route('pasien')" class="relative bg-slate-700 hover:bg-slate-800 w-full sm:max-w-sm h-52 group rounded-lg">
                <p class=" pt-7 px-8 pb-4 text-2xl font-mono  text-slate-50
                group-hover:text-slate-50 font-bold tracking-tight group-hover:tracking-wide">Pasien</p>
                <div class="absolute right-4 group-hover:right-6 text-9xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="88" fill="currentColor"
                    class="bi bi-people-fill bi bi-credit-card-2-front text-2xl text-slate-50 group-hover:text-slate-100" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                    </svg>
                </div>
            </Link>
            <Link :href="route('dokter')" class="relative bg-slate-700 hover:bg-slate-800 w-full sm:max-w-sm h-52 group rounded-lg">
                <p class=" pt-7 px-8 pb-4 text-2xl font-mono  text-slate-50
                group-hover:text-slate-50 font-bold tracking-tight group-hover:tracking-wide">Dokter</p>
                <div class="absolute right-4 group-hover:right-6 text-9xl">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        width="120" height="88" fill="currentColor"
                        class="bi bi-credit-card-2-front text-2xl text-slate-50 group-hover:text-slate-100" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>

                    </svg>
                </div>
            </Link>
            <Link :href="route('petugas')" class="relative bg-slate-700 hover:bg-slate-800 w-full sm:max-w-sm h-52 group rounded-lg">
                <p class=" pt-7 px-8 pb-4 text-2xl font-mono  text-slate-50
                group-hover:text-slate-50 font-bold tracking-tight group-hover:tracking-wide">Petugas</p>
                <div class="absolute right-4 group-hover:right-6 text-9xl">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        width="120" height="88" fill="currentColor"
                        class="bi bi-credit-card-2-front text-2xl text-slate-50 group-hover:text-slate-100" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                    </svg>
                </div>
            </Link>

            <Link :href="route('pembayaran')" class="relative bg-slate-700 hover:bg-slate-800 w-full sm:max-w-sm h-52 group rounded-lg">
                <p class=" pt-7 px-8 pb-4 text-2xl font-mono  text-slate-50
                group-hover:text-slate-50 font-bold tracking-tight group-hover:tracking-wide">Pembayaran</p>
                <div class="absolute right-4 group-hover:right-6 text-9xl">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        width="120" height="72" fill="currentColor"
                        class="bi bi-credit-card-2-front text-2xl text-slate-50 group-hover:text-slate-100" viewBox="0 0 16 16">
                        <path d="M12.5 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5zm0 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5zm.5 3.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z"/>
                        <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2zM4 1v14H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h2zm1 0h9a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5V1z"/>
                    </svg>
                </div>
            </Link>

            <Link :href="route('logout')" method="post" class="relative bg-slate-700 hover:bg-slate-800 w-full sm:max-w-sm h-52 group rounded-lg">
                <p class=" pt-7 px-8 pb-4 text-2xl font-mono  text-slate-50
                group-hover:text-slate-50 font-bold tracking-tight group-hover:tracking-wide">Log out</p>
                <div class="absolute right-4 group-hover:right-6 text-9xl">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        width="120" height="72" fill="currentColor"
                        class="bi bi-credit-card-2-front text-2xl text-slate-50 group-hover:text-slate-100" viewBox="0 0 16 16">
                        <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                        <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
                    </svg>
                </div>
            </Link>

        </div>
    </div>
</template>
