<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#051922] flex items-center justify-center h-screen">

    <form method="POST" action="/register" class=" bg-[#12455e] p-16 rounded shadow w-96">
        @csrf
        <h2 class="text-xl font-bold mb-4 text-center text-[#F28123]">Register</h2>

        <input type="text" name="name" placeholder="Nama Lengkap" class="bg-white w-full border p-2 mb-3 rounded-sm"
            value="{{ old('name') }}">
        <input type="email" name="email" placeholder="Email" class="bg-white w-full border p-2 mb-3 rounded-sm"
            value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Password"
            class="bg-white w-full border p-2 mb-3 rounded-sm">
        <input type="password" name="password_confirmation" placeholder="Confirm Password"
            class="bg-white w-full border p-2 mb-3 rounded-sm">

        <button class="bg-[#F28123] text-white w-full py-2 rounded">
            Register
        </button>
        <p class="text-sm mt-3 text-center text-white">
            Sudah punya akun?
            <span class="text-[#F28123]">
                <a href="/login" class="text-[#F28123]">Login</a>
            </span>
        </p>
        @if ($errors->any())
            <div class="text-red-500 text-sm mt-3">
                {{ $errors->first() }}
            </div>
        @endif
    </form>


    {{-- <form method="POST" action="/register" class="bg-white p-6 rounded shadow w-96">
        @csrf

        <h2 class="text-xl font-bold mb-4 text-center">Register</h2>

        <input type="text" name="name" placeholder="Nama Lengkap" class="w-full border p-2 mb-3"
            value="{{ old('name') }}">

        <input type="email" name="email" placeholder="Email" class="w-full border p-2 mb-3"
            value="{{ old('email') }}">

        <input type="password" name="password" placeholder="Password" class="w-full border p-2 mb-3">

        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password"
            class="w-full border p-2 mb-3">

        <button class="bg-green-600 text-white w-full py-2 rounded">
            Register
        </button>

        <p class="text-sm mt-3 text-center">
            Sudah punya akun?
            <a href="/login" class="text-blue-500">Login</a>
        </p>

        @if ($errors->any())
            <div class="text-red-500 text-sm mt-3">
                {{ $errors->first() }}
            </div>
        @endif
    </form> --}}

</body>

</html>
