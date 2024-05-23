<x-header>
    <div class="fixed bottom-0 left-0 z-50 grid w-full h-24 grid-cols-1 px-8 bg-yellow-200 border-t border-gray-200 md:grid-cols-3">
        <div class="items-center justify-center hidden me-auto md:flex">
            <img class="h-16 me-3 rounded" src="{{asset($album['album_img'])}}" alt="Cover">
            <h1 id="tittle" class="text-sm text-gray-900"></h1>
        </div>
        <div class="flex items-center w-full">
            <div class="w-full">
                <div class="flex items-center justify-center mx-auto mb-1">
                    <button data-tooltip-target="tooltip-shuffle" type="button" class="p-2.5 group rounded-full hover:bg-gray-100 me-1 focus:outline-none focus:ring-4 focus:ring-gray-200">
                        <svg class=" w-4 h-4 text-gray-900 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.484 6.166 13 4h6m0 0-3-3m3 3-3 3M1 14h5l1.577-2.253M1 4h5l7 10h6m0 0-3 3m3-3-3-3"/>
                        </svg>
                        <span class="sr-only">Shuffle video</span>
                    </button>
                    <div id="tooltip-shuffle" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                        Shuffle video
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button id="prev" data-tooltip-target="tooltip-previous" type="button" class="p-2.5 group rounded-full hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200">
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
                    <button id="next" data-tooltip-target="tooltip-next" type="button" class="p-2.5 group rounded-full hover:bg-gray-100 me-1 focus:outline-none focus:ring-4 focus:ring-gray-200">
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
                    <button data-tooltip-target="tooltip-restart" type="button" class="p-2.5 group rounded-full hover:bg-gray-100 me-1 focus:outline-none focus:ring-4 focus:ring-gray-200">
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
@foreach ($songs as $song)
"{{asset($song['audio_dir'])}}",
@endforeach
];
const supertitle = [
@foreach ($songs as $song)
"{{$song['nameSong']}}",
@endforeach
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
</x-header>