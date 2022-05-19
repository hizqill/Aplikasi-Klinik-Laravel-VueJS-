<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="min-h-screen bg-slate-100 pt-8">
        <div class="md:mx-24 mt-8 bg-white  rounded-lg shadow-xl">
            <div class="px-8 py-4 flex gap-2">
                <Link :href="route('dashboard')" class="text-slate-800 text-xl">
                    Dashboard
                </Link>
                <p class="text-slate-800 text-xl">
                    /
                </p>
                <p class="text-slate-800 text-xl">
                    Pembayaran
                </p>
                <p class="text-slate-800 text-xl">
                    /
                </p>
                <p v-if="data_pasien" class="text-slate-800 text-xl">
                    Data Pembayaran
                </p>
                <p v-if="tambah_pasien" class="text-slate-800 text-xl">
                    Tambah Pembayaran
                </p>
                <p v-if="edit_pasien" class="text-slate-800 text-xl">
                    Edit Pembayaran
                </p>
            </div>


            <hr>

            <div v-if="data_pasien" class="mt-6 mx-8 flex gap-2">
                <div  @click="HandleDataPasien" class="px-4 py-2 w-48 text-center  bg-slate-700 hover:bg-slate-500 rounded-lg text-white cursor-pointer">
                    Data Pembayaran
                </div>
                <div  @click="HandleTambahPasien" class="px-4 py-2 w-48 text-center border  border-slate-500 text-slate-600 hover:bg-slate-600 rounded-lg hover:text-white cursor-pointer">
                    Tambah Pembayaran
                </div>
            </div>
            <div v-if="tambah_pasien" class="mt-6 mx-8 flex gap-2">
                <div @click="HandleDataPasien" class="px-4 py-2 w-48 text-center border  border-slate-500 text-slate-600 hover:bg-slate-600 rounded-lg hover:text-white cursor-pointer">
                    Data Pembayaran
                </div>
                <div  @click="HandleTambahPasien" class="px-4 py-2 w-48 text-center bg-slate-700 hover:bg-slate-500 rounded-lg text-white cursor-pointer">
                    Tambah Pembayaran
                </div>
            </div>
            <div v-if="edit_pasien" class="mt-6 mx-8 flex gap-2">
                <div @click="HandleDataPasien" class="px-4 py-2 w-48 text-center border  border-slate-500 text-slate-600 hover:bg-slate-600 rounded-lg hover:text-white cursor-pointer">
                    Data Pembayaran
                </div>
                <div  @click="HandleTambahPasien" class="px-4 py-2 w-48 text-center border  border-slate-500 text-slate-600 hover:bg-slate-600 rounded-lg hover:text-white cursor-pointer">
                    Tambah Pembayaran
                </div>
            </div>

            <div v-if="data_pasien" class="flex flex-col px-8 py-6">
                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed ">
                                <thead class="bg-gray-100 ">
                                    <tr>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                            Id Pembayaran
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                            Nama Pasien
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                            Harga
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                            Nama Petugas
                                        </th>
                                        <th scope="col" class="p-4">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 ">


                                    <tr class="hover:bg-gray-100 " v-for="pas in pembayaran" :key="pas.id">
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">{{ pas.id }}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">{{ pas.nama_pasien }}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">{{ pas.harga }}</td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">{{ pas.nama_petugas }}</td>
                                        <td class="py-4 px-6 text-sm font-medium whitespace-nowrap border flex justify-center space-x-2">
                                            <button @click="HandleEditProduk(pas.id, pas.id_pasien, pas.Harga)" type="button" class="bg-amber-400 hover:bg-amber-600  p-1.5 rounded-sm text-black   hover:text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                            </button>
                                            <button @click="HandleButtonHapusPasien(pas.id)" type="button" class="bg-red-500 hover:bg-red-700 p-1.5 rounded-sm text-white hover:underline">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                </svg>
                                            </button>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div v-if="tambah_pasien || edit_pasien">
                <div class="px-8 py-6 ">
                    <div >
                        <div class="relative z-0 mb-6 w-full group">
                            <label  class="block mb-2 text-sm font-medium text-gray-900 ">Pilih Dokter yang akan menangani</label>
                            <select v-model="form.id_pasien"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="">-- Pilih Pasien --</option>
                                <option v-for="item in pasien" :key="item.id" :value="item.id" >{{ item.nama }}</option>
                            </select>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" v-model="form.harga" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6
                            scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500
                            peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75
                            peer-focus:-translate-y-6">Harga</label>
                        </div>

                        <button v-if="tambah_pasien" @click="HandleButtonSubmitTambahPasien" type="button" name="Submit" class="text-white bg-cyan-600 hover:bg-cyan-800 focus:ring-4 focus:ring-blue-300
                        font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2 text-center ">Submit</button>
                        <button v-if="edit_pasien" @click="HandleButtonSubmitEditPasien" type="button" name="Submit" class="text-white bg-cyan-600 hover:bg-cyan-800 focus:ring-4 focus:ring-blue-300
                        font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2 text-center ">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



</template>


<script>
import Swal from 'sweetalert2'

export default {
    props:{
       auth_id : Number
    },
    data() {
        return {
           loading: false,
           proses: false,

           data_pasien: true,
           tambah_pasien: false,
           Edit_pasien: false,

           form: {
               id: "",
               id_pasien: "",
               id_petugas: "",
               harga: "",
           },
           pasien:[],
           pembayaran:[],
        }
    },
    methods: {
        Reset_form(){
            this.form.id = ""
            this.form.id_pasien = ""
            this.form.id_petugas = ""
            this.form.harga = ""
        },
        HandleDataPasien(){
            this.data_pasien = true
            this.tambah_pasien = false
            this.edit_pasien = false
            this.Get_Pembayaran()
            this.Reset_form()

        },
        HandleTambahPasien(){
            this.data_pasien = false
            this.tambah_pasien = true
            this.edit_pasien = false
            this.Get_Pasien()
            this.Reset_form()
        },

        Get_Pembayaran(){
            this.dokter = []
            axios.get('/api/pembayaran-get')
            .then(res => {
                this.pembayaran = res.data.Pembayaran
            })
            .catch(err => {
                console.error(err);
            })
        },

        Get_Dokter(){
            this.dokter = []
            axios.get('/api/dokter-get')
            .then(res => {
                this.dokter = res.data.Dokter
            })
            .catch(err => {
                console.error(err);
            })
        },

        Get_Pasien(){
            this.Pasien = []
            axios.get('/api/pasien-get')
            .then(res => {
                this.pasien = res.data.Pasien
            })
            .catch(err => {
                console.error(err);
            })
        },

        HandleButtonSubmitTambahPasien(){

            let formData = {
                petugas_id: this.auth_id,
                pasien_id: this.form.id_pasien,
                harga: this.form.harga,
            };
            axios({
                    method: "post",
                    url: "/api/pembayaran-create",
                    data: formData,
                })
                .then((response) => {
                    console.log(response);
                    this.Get_Pembayaran()
                    Swal.fire({
                        icon: 'success',
                        title: response.data.Response_message,
                        showConfirmButton: true,
                        timer: 2000
                    })

                    this.Reset_form()
                    this.HandleDataPasien()
                })
                .catch((error) => {
                    console.log(error.response);
                });
        },

        HandleButtonSubmitEditPasien(){

            let formData = {
                petugas_id: this.auth_id,
                pasien_id: this.form.id_pasien,
                harga: this.form.harga,
            };
            axios({
                    method: "post",
                    url: "/api/pembayaran-edit/" + this.form.id,
                    data: formData,
                })
                .then((response) => {
                    this.Get_Pembayaran()
                    Swal.fire({
                        icon: 'success',
                        title: response.data.Response_message,
                        showConfirmButton: true,
                        timer: 2000
                    })

                    this.Reset_form()
                    this.HandleDataPasien()
                })
                .catch((error) => {
                    console.log(error.response);
                });
        },


        HandleEditProduk(id, id_pasien, harga){
            this.data_pasien = false
            this.tambah_pasien = false
            this.edit_pasien = true

            this.form.id = id
            this.form.id_pasien = id_pasien
            this.form.harga = harga
        },


         HandleButtonHapusPasien(id){
            Swal.fire({
                    title: 'Apa kamu yakin?',
                    text: "Ingin menghapus Data " + id + " ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#1E4792',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {

                         axios.get("/api/pembayaran-hapus/" + id)
                            .then(response => {

                                Swal.fire(
                                'Deleted!',
                                'Data ' + id + ' dihapus.',
                                'success'
                                )
                                this.Get_Pembayaran()
                            })
                            .catch(err => {
                                console.error(err);
                            })

                    }
                })
        },
    },
    mounted() {
        this.Get_Pembayaran()
    },
}
</script>
