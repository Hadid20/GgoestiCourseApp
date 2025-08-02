@extends('guru.index')
@section('content-kelas')
<!-- component -->
<div class="my-5">

    <div
        class="container mx-auto max-w-screen shadow-md dark:shadow-white py-4 px-6 sm:px-10 bg-white dark:bg-gray-800 border-emerald-500 rounded-md">
        <div class="my-3">
            <!-- Form title -->
            <h1 class="text-center text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white">Create Kelas </h1>
            <form action="{{ route('guru-index.kelas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="my-2">
                    <label for="namakelas" class="text-sm sm:text-md font-bold text-gray-700 dark:text-gray-300">Nama
                        Kelas </label>
                    <input type="text" name="namakelas"
                        class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-sm sm:text-md rounded-md my-2 bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                        id="name">
                </div>

                <div class="my-2">
                    <label for="deskripsikelas" class="text-sm sm:text-md font-bold text-gray-700 dark:text-gray-300">
                        Deskripsi Kelas
                    </label>
                    <input type="text" name="deskripsikelas"
                        class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-sm sm:text-md rounded-md my-2 bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                        id="first_name">
                </div>

                <div class="my-2">
                    <label for="pengajar" class="text-sm sm:text-md font-bold text-gray-700 dark:text-gray-300">
                        Nama Pengajar</label>
                    <input type="text" name="pengajar" value="{{ auth()->user()->name }}"
                        class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-sm sm:text-md rounded-md my-2 bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                        id="class" readonly>
                </div>
                <div class="my-2 ">
                    <label for="kodekelas" class="text-sm sm:text-md font-bold text-gray-700 dark:text-gray-300">Kode
                        Kelas</label>
                    <input type="text" name="kodekelas" value="{{ substr(uniqid(),0,6) }}"
                        class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-sm sm:text-md rounded-md my-2 bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                        id="class" readonly>
                </div>

                <!-- Save button -->
                <button
                    class="px-4 py-1 bg-emerald-500 rounded-md text-black text-sm sm:text-lg shadow-md">Save</button>
                <a href="{{ url()->previous() }}"
                    class="px-4 py-1 bg-emerald-500 rounded-md text-black text-sm sm:text-lg shadow-md">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection