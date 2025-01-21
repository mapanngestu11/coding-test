<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { useForm, Link } from "@inertiajs/vue3";

const props = defineProps({
    post: {
        type: Object,
        default: null,
    },
});

const form = useForm({
    nama: props.post.nama,
    email: props.post.email,
    status: props.post.status,
    kode_divisi: props.post.kode_divisi,
});

const submit = () => {
    form.put(`/karyawans/${props.karyawan.id}`);
};
</script>

<template>
    <Head title="Manage Posts" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Post
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <Link href="/karyawans"
                            ><button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3"
                            >
                                Back
                            </button></Link
                        >

                        <form @submit.prevent="submit">
                            <div class="mb-4">
                                <label
                                    for="nama"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                >
                                    Nama:</label
                                >
                                <input
                                    type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Masukan Nama Lengkap"
                                    id="nama"
                                    v-model="form.nama"
                                />
                            </div>

                            <div class="mb-4">
                                <label
                                    for="email"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                >
                                    Email:</label
                                >
                                <input
                                    type="email"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Email"
                                    id="email"
                                    v-model="form.email"
                                />
                            </div>

                            <div class="mb-4">
                                <label
                                    for="status"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                >
                                    Status:</label
                                >
                                <select
                                    id="status"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    v-model="form.status"
                                >
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">
                                        Tidak Aktif
                                    </option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label
                                    for="kode_divisi"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                >
                                    Divisi:</label
                                >
                                <input
                                    type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Masukan Divisi"
                                    id="kode_divisi"
                                    v-model="form.kode_divisi"
                                />
                            </div>

                            <button
                                type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3 text-white"
                            >
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
