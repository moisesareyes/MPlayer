<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MPlayer</title>
    <link rel="stylesheet" href="css/styles.css">
    @yield('css')
    <style>
        body{
    background-color: #111827;}
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-yellow-200">
        <div class="bg-yellow-200 flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="{{route('indx')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{asset('img/vinijr.png')}}" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap">MPlayer</span>
            </a>
            <div class="bg-yellow-200 max-w-screen-xl px-4 py-3 mx-auto">
                <div class="flex items-center">
                    <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                        <li>
                            <a id="red" href="{{route('create')}}" class="text-gray-900 hover:underline">ARTISTAS</a>
                        </li>
                        <li>
                            <a id="red" href="#" class="text-gray-900 hover:underline">CANCIONES</a>
                        </li>
                        <li>
                            <a id="red" href="#" class="text-gray-900 hover:underline">INFORMACION</a>
                        </li>
                    </ul>
                </div>
            </div>
            <button type="button" class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-200">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M16 0H4a2 2 0 0 0-2 2v1H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4.5a3 3 0 1 1 0 6 3 3 0 0 1 0-6ZM13.929 17H7.071a.5.5 0 0 1-.5-.5 3.935 3.935 0 1 1 7.858 0 .5.5 0 0 1-.5.5Z"/>
                </svg>
            </button>
        </div>
    </nav>
    
<nav class="fixed top-0 z-50 w-full bg-yellow-200 border-b border-gray-200">
    <div class="bg-yellow-200 flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="{{route('indx')}}" class="flex items-center">
            <img src="{{asset('img/vinijr.png')}}" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap">MPlayer</span>
        </a>
        <div class="bg-yellow-200 max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                    <li>
                        <a id="red" href="{{route('create')}}" class="text-gray-900 hover:underline">ARTISTAS</a>
                    </li>
                    <li>
                        <a id="red" href="#" class="text-gray-900 hover:underline">CANCIONES</a>
                    </li>
                    <li>
                        <a id="red" href="#" class="text-gray-900 hover:underline">INFORMACION</a>
                    </li>
                </ul>
            </div>
        </div>
        <button type="button" class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                <path d="M16 0H4a2 2 0 0 0-2 2v1H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4.5a3 3 0 1 1 0 6 3 3 0 0 1 0-6ZM13.929 17H7.071a.5.5 0 0 1-.5-.5 3.935 3.935 0 1 1 7.858 0 .5.5 0 0 1-.5.5Z"/>
            </svg>
        </button>
    </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-gray-900 sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="{{route('login')}}" class="flex items-center p-2 text-yellow-100 rounded-lg hover:text-white">
               <svg class="flex-shrink-0 w-5 h-5 text-yellow-100 hover:text-white transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                  <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
            </a>
         </li>
         <hr>
         <li>
            <div class="items-center justify-center w-full">
                <form action="{{route('createPL')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex">
                        <div>
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-32 h-32 border-2 border-gray-500 border-dashed rounded-lg cursor-pointer bg-gray-900">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-10 h-10 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="text-xs text-gray-300">3000X3000</p>
                                    <p class="text-xs text-gray-300">(NO OBLIGATORIA)</p>
                                </div>
                                <input name="supercover" id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div>
                        <div class="flex flex-col items-center justify-center w-32 h-32  cursor-pointer bg-gray-900">
                            <div>
                                <input name="supertitle" type="text" class="block rounded-lg  w-full p-2 border-dashed  text-white border-2 border-gray-500 bg-gray-900 text-xs" placeholder="Nombre">
                            </div>
                            <div>
                                <textarea required name="superdescp" rows="4" class="block p-2.5 rounded-lg border-dashed h-18 w-full text-sm text-white bg-gray-900 border-2 border-gray-500" placeholder="Descripción"></textarea>              
                            </div>
                        </div>
                    </div><br>
                    <div class="flex justify-center items-center">
                        <button type="submit" class="flex items-center p-2 bg-gray-900 rounded-lg text-yellow-100 hover:bg-gray-800">
                            <span>NUEVA PLAYLIST</span>
                        </button>
                     </div>
                </form>
            </div> 
         </li>
         <HR>
      </ul>
   </div>
</aside>
<div class="fixed bottom-0 left-0 z-50 grid w-full h-24 grid-cols-1 px-8 bg-yellow-200 border-t border-gray-200 md:grid-cols-3">
    <div class="items-center justify-center hidden me-auto md:flex">
        <img class="h-16 me-3 rounded"  src="http://localhost/Laravel/LaravelCurso/public/public/MAKI-1716494538.png" alt="Cover">
        <h1 id="tittle" class="text-sm text-gray-900"></h1>
    </div>
    <div class="flex items-center w-full">
        <div class="w-full">
            <div class="flex items-center justify-center mx-auto mb-1">
                <button data-tooltip-target="tooltip-shuffle" type="button" class="p-2.5 group rounded-full me-1 focus:outline-none focus:ring-4 focus:ring-gray-200">
                    <svg class=" w-4 h-4 text-gray-900 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.484 6.166 13 4h6m0 0-3-3m3 3-3 3M1 14h5l1.577-2.253M1 4h5l7 10h6m0 0-3 3m3-3-3-3"/>
                    </svg>
                    <span class="sr-only">Shuffle video</span>
                </button>
                <div id="tooltip-shuffle" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                    Shuffle video
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="prev" data-tooltip-target="tooltip-previous" type="button" class="p-2.5 group rounded-full focus:outline-none focus:ring-4 focus:ring-gray-200">
                    <svg class="rtl:rotate-180 w-4 h-4 text-gray-900 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 12 16">
                        <path d="M10.819.4a1.974 1.974 0 0 0-2.147.33l-6.5 5.773A2.014 2.014 0 0 0 2 6.7V1a1 1 0 0 0-2 0v14a1 1 0 1 0 2 0V9.3c.055.068.114.133.177.194l6.5 5.773a1.982 1.982 0 0 0 2.147.33A1.977 1.977 0 0 0 12 13.773V2.227A1.977 1.977 0 0 0 10.819.4Z"/>
                    </svg>
                    <i class="fas fa-backward"></i>
                    <span class="sr-only">Previous video</span>
                </button>
                <div id="tooltip-previous" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                    Previous video
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="play" data-tooltip-target="tooltip-pause" type="button" class="inline-flex items-center justify-center p-2.5 mx-2 font-medium bg-gray-900 rounded-full group focus:ring-4 focus:ring-blue-300 focus:outline-none">
                    <svg id="icon" class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 10 16">
                        <path id="supericon" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" d="M0 .8C0 .358.32 0 .714 0h1.429c.394 0 .714.358.714.8v14.4c0 .442-.32.8-.714.8H.714a.678.678 0 0 1-.505-.234A.851.851 0 0 1 0 15.2V.8Zm7.143 0c0-.442.32-.8.714-.8h1.429c.19 0 .37.084.505.234.134.15.209.354.209.566v14.4c0 .442-.32.8-.714.8H7.857c-.394 0-.714-.358-.714-.8V.8Z" clip-rule="evenodd"/>
                    </svg>
                    <!--<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">m2.707 14.293 5.586-5.586a1 1 0 0 0 0-1.414L2.707 1.707A1 1 0 0 0 1 2.414v11.172a1 1 0 0 0 1.707.707Z
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" clip-rule="evenodd"/>
                    </svg>-->
                    <i class="fas fa-play"></i>
                    <span class="sr-only">Pause video</span>
                </button>
                <div id="tooltip-pause" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                    Pause video
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="next" data-tooltip-target="tooltip-next" type="button" class="p-2.5 group rounded-full me-1 focus:outline-none focus:ring-4 focus:ring-gray-200">
                    <svg class="rtl:rotate-180 w-4 h-4 text-gray-900 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 12 16">
                        <path d="M11 0a1 1 0 0 0-1 1v5.7a2.028 2.028 0 0 0-.177-.194L3.33.732A2 2 0 0 0 0 2.227v11.546A1.977 1.977 0 0 0 1.181 15.6a1.982 1.982 0 0 0 2.147-.33l6.5-5.773A1.88 1.88 0 0 0 10 9.3V15a1 1 0 1 0 2 0V1a1 1 0 0 0-1-1Z"/>
                    </svg>
                    <span class="sr-only">Next video</span>
                    <i class="fas fa-forward"></i>
                </button>
                <div id="tooltip-next" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                    Next video
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button data-tooltip-target="tooltip-restart" type="button" class="p-2.5 group rounded-full me-1 focus:outline-none focus:ring-4 focus:ring-gray-200">
                    <svg class="w-4 h-4 text-gray-900 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 1v5h-5M2 19v-5h5m10-4a8 8 0 0 1-14.947 3.97M1 10a8 8 0 0 1 14.947-3.97"/>
                    </svg>
                    <span class="sr-only">Restart video</span>
                </button>
                <div id="tooltip-restart" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                    Restart video
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>
            <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                <div class="text-sm font-medium text-gray-900" id="current_time">0:00</div>
                <audio id="superaudio"></audio>
                <div id="progress_container" class="w-full bg-gray-200 rounded-full h-1.5 bg-white h-1.5 rounded-full">
                    <div class="bg-gray-900 h-1.5 rounded-full" id="progress"></div>
                </div>
                <span class="text-sm font-medium text-gray-900" id="current_audio">0:00</span>
            </div>
        </div>
    </div>
</div>
<div class="p-4 sm:ml-64">
{{$slot}}
</div>
<div>
    <br>
    <br>
    <br>
    <br>
</div>
<script>
    let audio = document.getElementById("superaudio");
    let title = document.getElementById("tittle");
    let play = document.getElementById("play");
    let prev = document.getElementById("prev");
    let next = document.getElementById("next");
    let current_time = document.getElementById("current_time");
    let current_audio = document.getElementById("current_audio");
    let progressContainer = document.getElementById("progress_container");
    let progress = document.getElementById("progress");
    let audioIndex = 0;
    const songs = [
    "http://localhost/Laravel/LaravelCurso/public/music/MAKIa-1716494538.Billie Eilish - L_AMOUR DE MA VIE (Official Lyric Video)(MP3_160K).mp3.mp3",
    "http://localhost/Laravel/LaravelCurso/public/music/MAKIa-1716494538.Billie Eilish - THE GREATEST (Official Lyric Video)(MP3_160K).mp3.mp3",
    "http://localhost/Laravel/LaravelCurso/public/music/MAKIa-1716494538.BLUE(MP3_160K).mp3.mp3",
    ];
    const supertitle = [
    "Mr. Okkotsu",
    "My Greatest",
    "Soft &amp; Wet",
    ];
    
    
    loadAudio(songs[audioIndex])
    
    function loadAudio(song,minititle) {
      audio.src = song;
      title.textContent = supertitle[audioIndex]
      audio.addEventListener("loadedmetadata", () => {
        timeSong(audio.duration, current_audio);
      });
    }
    
    function playSong() {
      play.classList.add("play");
      const icon = play.querySelector("i.fas");
      icon.classList.remove("fa-play");
      icon.classList.add("fa-pause");
      play.class="inline-flex items-center justify-center p-2.5 mx-2 font-medium bg-yellow-200 rounded-full group focus:ring-4 focus:ring-blue-300 focus:outline-none"
      audio.play();
    
    }
    
    function pauseSong() {
      play.classList.remove("play");
    
      const icon = play.querySelector("i.fas");
      icon.classList.remove("fa-pause");
      icon.classList.add("fa-play");
      play.class="inline-flex items-center justify-center p-2.5 mx-2 font-medium bg-gray-900 rounded-full group focus:ring-4 focus:ring-blue-300 focus:outline-none";
      audio.pause();
    
    }
    
    function prevSong() {
      audioIndex--
    
      if (audioIndex < 0) {
        audioIndex = songs.length - 1;
      }
    
      loadAudio(songs[audioIndex]);
      playSong();
    
    }
    function nextSong() {
      audioIndex++
    
      if (audioIndex > songs.length - 1) {
        audioIndex = 0
      }
    
      loadAudio(songs[audioIndex]);
      playSong();
    
    }
    
    function updateBarPorgress(e) {
      const { duration, currentTime } = e.srcElement;
    
      const progressPercent = (currentTime / duration) * 100;
    
      progress.style.width = `${progressPercent}%`;
    
    }
    
    function setProgress(e) {
      const width = this.clientWidth;
      const clickPosition = e.offsetX;
      const duration = audio.duration;
    
      audio.currentTime = (clickPosition / width) * duration;
    }
    
    function timeSong(audio, element) {
    
      const totalSeconds = Math.round(audio);
      const minutes = Math.floor(totalSeconds / 60);
      const seconds = totalSeconds % 60; 
      
      element.textContent = `${minutes}:${seconds.toString().padStart(2, "0")}`;
    } 
    
    play.addEventListener("click", () => {
      const isPlaying = play.classList.contains("play");
    
      if (!isPlaying) {
        playSong();
      } else {
        pauseSong();
      }
    });
    
    prev.addEventListener("click", prevSong);
    next.addEventListener("click", nextSong);
    
    audio.addEventListener("timeupdate", (e) => {
      updateBarPorgress(e)
      timeSong(audio.currentTime, current_time);
    });
    
    progressContainer.addEventListener("click", setProgress);
    audio.addEventListener("ended", nextSong);
    </script>
</body>
