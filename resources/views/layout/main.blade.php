<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-200">
    <div class="flex flex-col h-screen">
        <header>
            <nav class= "fixed left-0 right-0 bg-gray-700">
                <div class="mx-auto w-auto px-16">
                    <div class="flex h-16 justify-between items-center text-white">
                        <div class="flex flex-1 item-center space-x-6">
                            <div class="shrink-0 flex items-center justify-center">
                                <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="" class="h-8 w-auto">
                            </div>
                            <div class="hidden sm:block">
                                <div class="flex space-x-4">
                                    <a href="/" class="px-4 py-2 hover:bg-slate-500 rounded-md">Home</a>
                                    <a href="#" class="px-4 py-2 hover:bg-slate-500 rounded-md">About</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <i data-feather="search"></i>
                              </button>
                      
                              <!-- Profile dropdown -->
                              <div class="ml-3">
                                <div>
                                  <button type="button" onclick="window.location='{{ url('login') }}'" class="px-4 pb-2 pt-1 relative flex rounded-md bg-indigo-600 text-md hover:bg-indigo-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    Login
                                  </button>
                                </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main class="flex-1 p-10 mt-14">
            @yield('container')
        </main>
    </div>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>