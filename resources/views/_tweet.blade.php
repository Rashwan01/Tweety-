   
   <div
       class="flex p-4  {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">

       <div class="mr-4 flex-shrink-0 ">
           <a href="{{ $tweet->user->path() }}">
               <img src="{{ $tweet->user->avatar }}" class="rounded-full mr-2" width="40" height="40">
           </a>
       </div>
       <div class="">
           <a href="{{ $tweet->user->path() }}">
               <h5 class="font-bold text-lg my-2">{{ $tweet->user->name }} <span class="text-gray-500 text-sm">1h
                   </span>
           </a>
           </h5>
           <p class="text-sm">{{ $tweet->body }}</p>
         <x-like-button :tweet="$tweet"></x-like-button>
       </div>

   </div>
