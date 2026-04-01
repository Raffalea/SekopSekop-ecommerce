    <!DOCTYPE html>
    <html>

    <head>
        <title>Login</title>
        @vite('resources/css/app.css')
    </head>

    <body class="bg-[#051922] flex items-center justify-center h-screen">

        <form method="POST" action="/login" class=" bg-[#12455e] p-12 py-16 rounded shadow w-96">
            @csrf
            <h2 class="text-xl font-bold mb-4 text-center text-[#F28123]">Login</h2>

            <input type="email" name="email" placeholder="Email" class="bg-white w-full border p-2 mb-3 rounded-sm">

            <input type="password" name="password" placeholder="Password" class="bg-white w-full border p-2 mb-3 rounded-sm">

            <button class="bg-[#F28123] text-white w-full py-2 rounded">
                Login
            </button>
            <p class="text-sm mt-3 text-center text-white">
                Belum punya akun?
                <span class="text-[#F28123]">
                    <a href="/register" class="text-[#F28123]">Register</a>
                </span>
            </p>
            @error('email')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </form>

    </body>

    </html>
