<section class="py-4 mx-4 text-gray-600 border-t border-b body-font md:mx-16 md:py-8">
    <div class="container px-5 pt-12 pb-8 mx-auto">
        <div class="flex flex-wrap w-full mb-8 md:mb-20">
            <div class="w-full">
                <h1 class="pb-4 text-3xl font-bold text-center text-gray-900 select-none md:text-5xl">Urbanscapes</h1>
                <div class="max-w-xl mb-6 select-none sm:mx-auto sm:text-center lg:max-w-4xl">
                    <p class="pt-4 text-base font-bold text-gray-700 md:text-lg">
                Design the Future of Urban Living with our ultimate resource for Urbanscapes
            </p>
             <p class="text-base text-gray-500 md:text-lg">
                Take a deep-dive into some of the finest urban developments through our insightful articles
            </p>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap mx-auto">

@forelse ($neighbourhoods as $neighbourhood)
      <div class="p-4 mx-auto xl:w-1/4 md:w-1/2">
                <a href="urbanscapes_post?id={{ $neighbourhood->id }}">
                    <div class="p-4 transition border shadow-lg bg-gray-50 hover:bg-gray-100 md:hover:scale-110 max-w-[309px] mx-auto">
                        @php $nimg = $neighbourhood->imagea ?? null; @endphp
                        <img class="object-cover object-center w-full h-40 mb-3 saturate-120" src="{{ asset('storage/uploads/thumbnails/urbanscapes/' . $nimg) }}" alt="" loading="lazy" onerror="this.src='{{ asset('storage/uploads/urbanscapes/' . $nimg) }}'"/>
                        <h2 class="mb-1 text-sm font-bold text-black title-font clamp1">{{ $neighbourhood->title }}</h2>
                        <p class="text-xs font-semibold leading-relaxed text-gray-500 truncate">
                        @foreach($neighbourhood->tags as $tag)
                        {{ $tag }} &nbsp;
                        @endforeach
                        </p>
                    </div>
                </a>
            </div>
@empty
      <div class="p-4 xl:w-1/4 md:w-1/2">
                <a href="">
                    <div class="p-6 transition shadow-lg bg-gray-50 hover:bg-gray-100 md:hover:scale-110">
                        <img class="object-cover object-center w-full h-40 mb-6" src="./img/empty.png"
                            alt="content">

                        <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">Empty</h2>
                        <p class="text-base leading-relaxed">dummy</p>
                    </div>
                </a>
            </div>
@endforelse
          

           
        </div>

        <button
            class="flex px-8 py-2 mx-auto mt-16 text-lg text-white bg-black border-0 rounded focus:outline-none hover:bg-gray-800">
            <a href="./urbanscapes">See
            All</a></button>

    </div>
</section>
 <style>
     .clamp1 {
         display: -webkit-box;
         -webkit-line-clamp: 1;
         -webkit-box-orient: vertical;
         overflow: hidden;

     }
 </style>