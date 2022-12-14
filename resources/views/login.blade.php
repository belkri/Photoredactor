<!DOCTYPE html>
<head>
<title>Photo Redactor</title>
<meta name="description" content="Our first page">
<meta name="keywords" content="html tutorial template">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" bg-violet-500 h-full">
    <a class="m-10 flex relative text-white flex" href="/">Zurück</a>
<section class="px-6 py-6 flex items-center justify-center mt-32">
        <main class="max-w-lg mx-auto w-1/4 mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-3xl">Log In!</h1> 

            <form method="POST" action="/login" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           value="{{ old('email') }}"
                           required
                    >
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           required
                    >
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                    <input type="checkbox" onclick="myFunction()" class="m-4 ml-0">Password zeigen
                </div>
                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 ml-80" 
                    >
                        Submit
                    </button>
                </div>
                    <a class="flex justify-center underline" href="forgot-password">Passwort vergessen? Hier clicken</a>
                <script>
                function myFunction() {
                var x = document.getElementById("password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
                } </script>
            </form>
        </main>
    </section>
</html>
</body>