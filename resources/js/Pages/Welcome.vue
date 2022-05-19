<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
        <div class="min-h-screen ">
        <!-- <nav class="bg-slate-900 text-white border-gray-200 px-2 sm:px-4 py-2.5 ">
            <div class="container flex flex-wrap justify-between items-center mx-auto md:px-24 h-12">
                <a href="#" class="flex items-center mt-2">
                    <span class="self-center text-xl font-semibold whitespace-nowrap d ">Klinik</span>
                </a>
                <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                        <li>
                            <a href="" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent  md:p-0 " aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="Pages/Dokter.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-slate-200 md:p-0 ">Dokter</a>
                        </li>
                        <li>
                            <a href="Pages/Pasien.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-slate-200 md:p-0 ">Pasien</a>
                        </li>
                        <li>
                            <a href="Pages/Petugas.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-slate-200 md:p-0 ">Petugas</a>
                        </li>
                        <li>
                            <a href="Pages/Pembayaran.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-slate-200 md:p-0 ">Pembayaran</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->

        <div class=" h-[550px] bg-white rounded-b-[100px] shadow-md md:px-32">
            <div class="flex justify-between relative">
                <div class=" w-2/5">
                    <p class="mt-24 text-5xl antialiased font-bold ">
                        MY KLINIK
                    </p>
                    <p class="mt-12">
                    MY KLINIK adalah aplikasi Sistem Informasi Manajemen Klinik, Apotek dan Puskesmas yang bertujuan untuk membantu proses
                    administrasi mulai dari registrasi pasien, pendataan Dokter, pendataan Petugas, penyimpanan data rekam medis,
                    dan billing system (kasir).
                    </p>
                </div>
                <div class="mt-14 md:mr-36">
                    <img class=" border-b-8 border-slate-400" src="/img/dokter.png" alt="" width="300px" >
                </div>
            </div>

            <div class="text-center pt-16">
                <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="bg-cyan-600 text-white px-12 py-4 rounded-md
                hover:bg-cyan-800 shadow-xl">Dashboard</Link>
                <Link  v-else :href="route('login')" class="bg-cyan-600 text-white px-12 py-4 rounded-md
                hover:bg-cyan-800 shadow-xl">Login Aplikasi</Link>
            </div>
        </div>

        <div class="md:flex md:justify-center mx-auto md:px-24 space-x-12 mt-12">
            <div class="md:w-1/2 h-36 block p-6 bg-white rounded-xl border border-gray-200 shadow-xl hover:bg-cyan-600 group">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-3xl group-hover:text-white">
                    Biodata Anggota I
                </h5>
                <div class="flex space-x-8">
                    <p class="md:w-1/6 font-normal text-gray-700 group-hover:text-white group-hover:font-semibold">Nama</p>
                    <p class="font-normal text-gray-700 group-hover:text-white group-hover:font-semibold"> : Machsalmina Hizqil</p>
                </div>
                <div class="flex space-x-8">
                    <p class="md:w-1/6 font-normal text-gray-700 group-hover:text-white group-hover:font-semibold">NIM</p>
                    <p class="font-normal text-gray-700 group-hover:text-white group-hover:font-semibold"> : 2008001010051</p>
                </div>
            </div>

            <div class="md:w-1/2 h-36 block p-6 bg-white rounded-xl border border-gray-200 shadow-xl hover:bg-cyan-600 group">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-3xl group-hover:text-white">
                    Biodata Anggota II
                </h5>
                <div class="flex space-x-8">
                    <p class="md:w-1/6 font-normal text-gray-700 group-hover:text-white group-hover:font-semibold">Nama</p>
                    <p class="font-normal text-gray-700 group-hover:text-white group-hover:font-semibold"> : Fachrazi Sauqi</p>
                </div>
                <div class="flex space-x-8">
                    <p class="md:w-1/6 font-normal text-gray-700 group-hover:text-white group-hover:font-semibold">NIM</p>
                    <p class="font-normal text-gray-700 group-hover:text-white group-hover:font-semibold"> : 2008001010003</p>
                </div>
            </div>
        </div>
    </div>


</template>

