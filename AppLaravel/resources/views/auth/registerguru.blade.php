@extends('component.app')
@section('content')
<div class="login w-full">
    <div class=" mt-10">
        <form action="{{ route('register') }}" method="post" class="card border w-5/12 mx-auto p-5  rounded-4xl">
            @csrf
            <div class="p-3 font-semibold border-b text-4xl">
                <h1>Register Guru</h1>
            </div>
            <div class="p-5">
                <div class="w-full flex flex-col gap-5">
                    <div>
                        <label>Username</label>
                        <input type="text" name="name" class="border w-full p-2 rounded">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" class="border w-full p-2 rounded">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" class="border w-full p-2 rounded">
                    </div>
                    <div>
                        <input type="hidden" name="role" value="pengajar">
                    </div>
                    <div>
                        <button type="submit" class="border w-full p-2 rounded">Daftar</button>
                        <p>sudah Punya Akun? <span><a href="/login"> Masuk Disni</a></span> </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
