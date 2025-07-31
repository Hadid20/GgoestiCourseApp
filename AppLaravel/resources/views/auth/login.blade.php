@extends('component.app')
@section('content')
<div class="login w-full">
    <div class=" mt-10">
        <form action="{{ route('login') }}" method="post" class="card border w-5/12 mx-auto p-5  rounded-4xl">
            @csrf
            <div class="p-3 font-semibold border-b text-4xl">
                <h1>Login</h1>
            </div>
            <div class="p-5">
                <div class="w-full flex flex-col gap-5">
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" class="border w-full p-2 rounded">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" class="border w-full p-2 rounded">
                    </div>
                    <div>
                        <button type="submit" class="border w-full p-2 rounded">Masuk</button>
                        <p>Belum Punya Akun? <span><a href="/register"> Daftar Disni</a></span> </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection