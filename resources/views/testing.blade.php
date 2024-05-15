<x-header>
    <section class="px-2.5 flex justify-center py-0.5 items-center">
        <div class="items-center">
            <br><br>
            <div class="w-full max-w-screen-md bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col items-center pb-5">
                    <br><br>
                    <img class="w-32 h-32 mb-3 rounded-full shadow-lg" src="{{asset($newimg->dir)}}" alt="Bonnie image"/>
                    <h5 class="mb-1 text-xl font-medium text-gray-900">{{$new->name}}</h5>
                    <div class="flex mt-4 md:mt-6">
                        <a href="#" class="inline-flex ms-2 items-center px-4 py-2 text-sm font-medium text-center text-black bg-yellow-200 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 hover:text-yellow-200">YOUTUBE</a>
                        <a href="#" class="inline-flex ms-2 items-center px-4 py-2 text-sm font-medium text-center text-black bg-yellow-200 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 hover:text-yellow-200">SPOTIFY</a>
                        <a href="#" class="inline-flex ms-2 items-center px-4 py-2 text-sm font-medium text-center text-black bg-yellow-200 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 hover:text-yellow-200">INSTAGRAM</a>
                        <a href="#" class="inline-flex ms-2 items-center px-4 py-2 text-sm font-medium text-center text-black bg-yellow-200 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 hover:text-yellow-200">TWITTER</a>
                        <a href="#" class="inline-flex ms-2 items-center px-4 py-2 text-sm font-medium text-center text-black bg-white rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 hover:text-yellow-200"><svg class="w-6 h-6 text-gray-900 hover:text-yellow-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M1 5h1.424a3.228 3.228 0 0 0 6.152 0H19a1 1 0 1 0 0-2H8.576a3.228 3.228 0 0 0-6.152 0H1a1 1 0 1 0 0 2Zm18 4h-1.424a3.228 3.228 0 0 0-6.152 0H1a1 1 0 1 0 0 2h10.424a3.228 3.228 0 0 0 6.152 0H19a1 1 0 0 0 0-2Zm0 6H8.576a3.228 3.228 0 0 0-6.152 0H1a1 1 0 0 0 0 2h1.424a3.228 3.228 0 0 0 6.152 0H19a1 1 0 0 0 0-2Z"/></svg></a>
                    </div>
                    <div class="flex mt-4 md:mt-6 py-2 px-4">
                        <p>{!!nl2br($new->bio)!!}</p>
                    </div>
                </div>
            </div><br><br>
            <div class="screen-md"> 
                <div class="max-w-screen-md">
                    <div class="grid gap-4 px-2.5 py-1.5">
                        <div class="flex justify-center items-center">
                            <img class="h-auto max-w-full rounded-lg" src="{{asset($newimg->dir)}}" alt="">
                        </div>
                        <div class="grid grid-cols-5 gap-4">
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset($newimg->dir)}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-yellow-200">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Album
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Lanzamiento
                            </th>
                            <th scope="col" class="px-6 py-3">
                                >
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                            <td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Play</a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>
                            <td class="px-6 py-4">
                                Laptop PC
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Play</a>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">
                                Black
                            </td>
                            <td class="px-6 py-4">
                                Accessories
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Play</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-header>