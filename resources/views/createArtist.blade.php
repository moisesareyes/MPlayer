<x-header>
    <div>
        <h1 class="mb-4 text-4xl font-bold tracking-tight text-black lg:font-extrabold lg:leading-none lg:text-center">NUEVO ARTISTA</h1>
        <form method="POST" action="{{route('recepArtist')}}" class="max-w-sm mx-auto" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="small-input" class="block mb-2 text-sm font-semibold text-gray-800">Nombre</label>
                <input required name="name" max='100' type="text" id="small-input" class="block w-full p-2 text-gray-800 border border-gray-300 rounded-lg bg-yellow-50 text-xs focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="message" class="block mb-2 text-sm font-semibold text-gray-800">Biografia</label>
                <textarea required name="message" rows="4" class="block p-2.5 w-full text-sm text-gray-800 bg-yellow-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Leave a comment..."></textarea>              
            </div>
            <div>
                <label><input type="file" accept="image/*" name="primg" required>
                    @error('primg')
                    <small>{{$message}}</small> 
                    @enderror
                </label>
            </div>
            <button type="submit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">CREATE ARTIST</button>
        </form>
        </div>
</x-header>