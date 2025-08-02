@extends('guru.index')
@section('content-kelas')
<div class="container flex flex-wrap justify-between">
    <h1>Kelas</h1>
    <a href="{{ route('guru-index.kelas.create') }}"
        class="flex px-3 py-2 bg-blue-400 mr-1 text-white font-semibold rounded">
        <span class="ml-1">Buat Kelas</span>
    </a>
</div>
<div class="container  gap-2 grid grid-cols-3">
    @forelse ( $kelas as $item )
    <div class="border bg-blue-800  rounded-xl">
        <div class="inline-flex flex-col space-y-2 items-center justify-end flex-1 h-full p-4">
            <p class="w-full text-2xl font-semibold text-white">{{ $item->namakelas }}</p>
            <p class="w-full pb-8 text-sm tracking-wide leading-tight text-white">{{ $item->deskripsikelas }}</p>
            <div class="rounded mr-auto">
                <div class="opacity-95 border rounded-lg border-white px-4">
                    <a href="" class="m-auto inset-0 text-sm font-medium leading-normal text-center text-white py-2">
                        Masuk</a>
                </div>
            </div>
        </div>
    </div>
    @empty
    Belum ada Kelas Yang Kamu Buat
    @endforelse
</div>

@endsection