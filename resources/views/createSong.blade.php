<x-header><br>
    <div class="items-center">
        <div class="flex justify-center items-center"><h1 class="mb-4 text-4xl font-bold tracking-tight text-white lg:font-extrabold lg:leading-none lg:text-center">NUEVO ALBUM</h1></div>
        <form method="POST" action="{{route('recepAlb')}}" class="max-w-sm mx-auto justify-center items-center" enctype="multipart/form-data">
            @csrf
            <input value="1" name="superid" hidden>
            <div>
                <label for="small-input" class="block mb-2 text-sm font-semibold text-yellow-200">Titulo</label>
                <input maxlength="100" required name="supertt" max='100' type="text" id="small-input" class="block w-full p-2 text-gray-800 border border-gray-300 rounded-lg bg-yellow-50 text-xs focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="items-center justify-center w-full">
                <label class="block mb-2 text-sm font-medium text-yellow-200" for="file_input">Portada</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-900 rounded-lg cursor-pointer bg-yellow-50 focus:outline-none" id="file_input" name="supercover" type="file" accept="image/*">                
            </div> 
            @error('primg')
            <small>{{$message}}</small> 
            @enderror
            <br>
            <div class="relative max-w-sm">
                <label for="small-input" class="block mb-2 text-sm font-semibold text-yellow-200">Lanzamiento</label>
                <input name="superelease" required datepicker datepicker-format="mm/dd/yyyy" type="date" class="bg-yellow-50 border border-gray-900 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Select date">
              </div><br>
            <div class="flex justify-center items-center"><button type="submit" class="focus:outline-none text-black bg-yellow-200 hover:text-yellow-200 hover:bg-gray-900 focus:ring-4 focus:ring-gray-900 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">CREAR ALBUM</button></div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <div class="items-center justify-center w-full">
                    @foreach ($errors->all() as $error)
                        <label class="block mb-2 text-sm font-medium text-yellow-200">{{ $error }}</label>
                    @endforeach
                </div>
            </div>
            @endif
        </form>
    </div>
</section>
</x-header>