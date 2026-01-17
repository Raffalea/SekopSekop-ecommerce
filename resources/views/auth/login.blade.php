<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

    <form method="POST" action="/login" class="bg-white p-6 rounded shadow w-96">
        @csrf
        <h2 class="text-xl font-bold mb-4 text-center">Login</h2>

        <input type="email" name="email" placeholder="Email" class="w-full border p-2 mb-3">

        <input type="password" name="password" placeholder="Password" class="w-full border p-2 mb-3">

        <button class="bg-blue-500 text-white w-full py-2 rounded">
            Login
        </button>
        <p class="text-sm mt-3 text-center">
            Belum punya akun?
            <a href="/register" class="text-blue-500">Register</a>
        </p>
        @error('email')
            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
    </form>

</body>

</html>
