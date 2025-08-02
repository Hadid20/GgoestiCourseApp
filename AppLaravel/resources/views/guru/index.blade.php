@extends('component.dashboard')

@section('content')
@yield('content-kelas')
@endsection

@section('link-aside')
<li>
    <a href="#" @click="openSidebar = false"
        class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-100 rounded-lg transition-colors"
        :class="{ 'bg-gray-100': route === 'guru-siswa' }">
        <span
            :class="{ 'block opacity-100': openSidebar || window.innerWidth >= 768, 'hidden opacity-0': !openSidebar && window.innerWidth < 768 }"
            class="text-gray-700 transition-opacity duration-300">Siswa</span>
    </a>
</li>
<li>
    <a href="#" @click="openSidebar = false"
        class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-100 rounded-lg transition-colors"
        :class="{ 'bg-gray-100': route === 'guru-tugas' }">
        <span
            :class="{ 'block opacity-100': openSidebar || window.innerWidth >= 768, 'hidden opacity-0': !openSidebar && window.innerWidth < 768 }"
            class="text-gray-700 transition-opacity duration-300">Tugas</span>
    </a>
</li>
<li>
    <a href="#" @click="openSidebar = false"
        class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-100 rounded-lg transition-colors"
        :class="{ 'bg-gray-100': route === 'guru-absen' }">
        <span
            :class="{ 'block opacity-100': openSidebar || window.innerWidth >= 768, 'hidden opacity-0': !openSidebar && window.innerWidth < 768 }"
            class="text-gray-700 transition-opacity duration-300">Absen</span>
    </a>
</li>
<li>
    <a href="{{ route('guru-index.kelas') }}"
        class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-100 rounded-lg transition-colors"
        :class="{ 'bg-gray-100': route === 'guru-index.kelas' }">
        <span
            :class="{ 'block opacity-100': openSidebar || window.innerWidth >= 768, 'hidden opacity-0': !openSidebar && window.innerWidth < 768 }"
            class="text-gray-700 transition-opacity duration-300">Kelas</span>
    </a>
</li>
@endsection