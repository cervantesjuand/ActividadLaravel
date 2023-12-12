<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Laravel</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
    </head>
    <body class="bg-gray-100">

        <div class="flex flex-wrap place-items-center">
            <section class="relative mx-auto">
                <!-- navbar -->
              <nav class="flex  bg-gray-900 text-white w-screen">
                <div class="px-5 xl:px-12 py-6 flex w-full items-center justify-between">
                  <a class="text-2xl font-bold font-heading" href="#">
                    <!-- <img class="h-9" src="logo.png" alt="logo"> -->
                    Logo Here.
                  </a>
                  <!-- Nav Links -->
                  <div>
                    <h2 class="text-2xl font-bold font-heading">Universidad nacional</h2>
                  </div>
                  <!-- Header Icons -->
                  <div class="hidden xl:flex items-center space-x-5 items-center">

                    <a class="text-xl" href="{{ route('registro') }}">Crear cuenta</a>

                  </div>
                </div>
                <!-- Responsive navbar -->
                <a class="xl:hidden flex mr-6 items-center" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                  <span class="flex absolute -mt-5 ml-4">
                    <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                    </span>
                  </span>
                </a>
                <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </a>
              </nav>
              
            </section>
          </div>
          <!-- Does this resource worth a follow? -->
          <div class="absolute bottom-0 right-0 mb-4 mr-4 z-10">
              <div>
                  <a title="Follow me on twitter" href="https://www.twitter.com/asad_codes" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                      <img class="object-cover object-center w-full h-full rounded-full" src="https://www.imore.com/sites/imore.com/files/styles/large/public/field/image/2019/12/twitter-logo.jpg"/>
                  </a>
              </div>
          </div>

        <main class="container">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('contenido')
            </h2>
        </main>
    </body>
</html>