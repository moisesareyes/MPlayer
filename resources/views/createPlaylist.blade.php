<x-header><br>

<div class="flex items-center justify-center w-full">
    <form action="" method="POST" class="flex" enctype="multipart/form-data">
        <div>
            <label for="dropzone-file" class="flex flex-col items-center justify-center w-32 h-32 border-2 border-gray-500 border-dashed rounded-lg cursor-pointer bg-gray-900">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-10 h-10 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="text-xs text-gray-300">3000X3000</p>
                    <p class="text-xs text-gray-300">(NO OBLIGATORIA)</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden" />
            </label>
        </div>
        <div class="flex flex-col items-center justify-center w-32 h-32  cursor-pointer bg-gray-900">
            <div>
                <input name="superuser" type="text" class="block rounded-lg  w-full p-2 border-dashed  text-white border-2 border-gray-500 bg-gray-900 text-xs" placeholder="Nombre">
            </div>
            <div>
                <textarea required name="message" rows="4" class="block p-2.5 rounded-lg border-dashed h-18 w-full text-sm text-white bg-gray-900 border-2 border-gray-500" placeholder="Descripción"></textarea>              
            </div>
        </div>
    </form>
</div> 

<br></x-header>