<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MPlayer</title>
    <link rel="stylesheet" href="css/styles.css">
    @yield('css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="dark: bg-yellow-200">
        <div class="bg-yellow-200 flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="{{route('indx')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{asset('img/vinijr.png')}}" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap">MPlayer</span>
            </a>
            <div class="bg-yellow-200 max-w-screen-xl px-4 py-3 mx-auto">
                <div class="flex items-center">
                    <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                        <li>
                            <a href="#" class="text-gray-900 hover:underline">ARTISTAS</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 hover:underline">CANCIONES</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 hover:underline">INFORMACION</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    {{$slot}}


    <footer class="bg-yellow-200">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
              <div class="mb-6 md:mb-0">
                  <a href="{{route('indx')}}" class="flex items-center">
                      <img src="{{asset('img/vinijr.png')}}" class="h-8 me-3" alt="FlowBite Logo" />
                      <span class="self-center text-2xl font-semibold whitespace-nowrap">MPlayer</span>
                  </a>
              </div>
              <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Resources by</h2>
                      <ul class="text-gray-500 font-medium">
                          <li class="mb-4">
                              <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                          </li>
                      </ul>
                  </div>
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Page by M. Reyes</h2>
                      <ul class="text-gray-500 font-medium">
                          <li class="mb-4">
                              <a href="https://github.com/moisesareyes" class="hover:underline ">Github</a>
                          </li>
                          <li>
                              <a href="https://www.instagram.com/mosi.reyes13/" class="hover:underline">Instagram</a>
                          </li>
                      </ul>
                  </div>
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Legal</h2>
                      <ul class="text-gray-500 font-medium">
                          <li class="mb-4">
                              <a href="#" class="hover:underline">Privacy Policy</a>
                          </li>
                          <li>
                              <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                          </li>
                      </ul>
                  </div>
                  <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
                  <div class="sm:flex sm:items-center sm:justify-between">
                      <span class="text-sm text-gray-500 sm:text-center">© 2024 <a href="https://www.youtube.com/playlist?list=PLZ2ovOgdI-kVtF2yQ2kiZetWWTmOQoUSG" class="hover:underline">Laravel Practice</a>. All Rights Reserved.
                      </span>
              </div>
          </div>
        </div>
    </footer>
    
</body>
