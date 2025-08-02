@extends('component.dashboard')
@section('content')
@endsection

@section('link-aside')
<li>
    <a href="{{ route('user-index') }}" @click.prevent="openSidebar = false"
        class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-100 rounded-lg transition-colors"
        :class="{ 'bg-gray-100': route === 'user-index' }">

        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0l-2-2m2 2V4a1 1 0 00-1-1h-3a1 1 0 00-1 1z" />
        </svg>

        <span
            :class="{ 'block opacity-100': openSidebar || window.innerWidth >= 768, 'hidden opacity-0': !openSidebar && window.innerWidth < 768 }"
            class="text-gray-700 transition-opacity duration-300">
            Dashboard
        </span>
    </a>
</li>
<li>
    <a href="#" @click.prevent="openSidebar = false"
        class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-100 rounded-lg transition-colors"
        :class="{ 'bg-gray-100': route === 'user-tugas' }">
        <span
            :class="{ 'block opacity-100': openSidebar || window.innerWidth >= 768, 'hidden opacity-0': !openSidebar && window.innerWidth < 768 }"
            class="text-gray-700 transition-opacity duration-300">Tugas</span>
    </a>
</li>
</li>
<li>
    <a href="#" @click.prevent="openSidebar = false"
        class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-100 rounded-lg transition-colors"
        :class="{ 'bg-gray-100': route === 'user-absen' }">
        <span
            :class="{ 'block opacity-100': openSidebar || window.innerWidth >= 768, 'hidden opacity-0': !openSidebar && window.innerWidth < 768 }"
            class="text-gray-700 transition-opacity duration-300">absen</span>
    </a>
</li>
<li>
    <a href="#" @click.prevent="openSidebar = false"
        class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-100 rounded-lg transition-colors"
        :class="{ 'bg-gray-100': route === 'user-absen' }">
        <span
            :class="{ 'block opacity-100': openSidebar || window.innerWidth >= 768, 'hidden opacity-0': !openSidebar && window.innerWidth < 768 }"
            class="text-gray-700 transition-opacity duration-300">Kelas</span>
    </a>
</li>
@endsection