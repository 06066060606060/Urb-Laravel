<section class="py-16 mx-4 mb-4 border-b md:mx-16">

    <div class="w-full">
       <h1 class="pb-8 text-3xl font-bold text-center text-gray-900 select-none md:text-5xl">Web Resources</h1>
        <div class="max-w-xl mb-6 select-none sm:mx-auto sm:text-center md:mb-10 lg:max-w-2xl">
            <p class="text-base text-gray-500 md:text-lg">
               List of planning, land use, urban design and development websites, representing some of the top online resources for news, information, and research on the built environment:
            </p>
        </div>
    </div>

    <div class="mx-2">
        <div class="max-w-screen-xl pt-8 pb-4 mx-2 md:py-8 md:mx-auto ">
            <div class="grid grid-cols-2 gap-5 row-gap-5 lg:grid-cols-5">

                @forelse ($webresources as $item)
                    <div class="flex transition border shadow-md md:hover:scale-110 ">
                        <div class="flex flex-col mx-auto overflow-x-hidden">
                            <a href="{{ $item->link }}" target="_blank">
                             @php $img = $item->image ?? null; @endphp
                                <img class="object-cover w-auto h-32 saturate-120" src="{{ asset('storage/uploads/webresources/' . $img) }}" loading="lazy"
                                    alt="content" onerror="this.src='./img/empty.png'">
                                <p class="w-full pt-2 text-xs md:text-base font-bold text-center text-black bg-white border-t clamp2">
                                  {{ $item->name }}</p>
                                <p class="pb-2 text-xs text-center text-gray-500 clamp2">{{$item->type[0] ?? null; }} {{   $item->type[1] ?? null }} {{   $item->type[2] ?? null}}</p>
                            </a>
                        </div>
                    </div>
                @empty
                 <div class="flex transition border shadow-md md:hover:scale-110">
                        <div class="flex flex-col mx-auto">
                            <a href="">
                                <img class="object-cover w-auto h-32" src="./img/empty.png"
                                    alt="content">
                                <p class="w-full pt-2 text-base font-bold text-center text-black bg-white border-t">
                                    Empty</p>
                                <p class="pb-2 text-xs text-center text-gray-500">Resources</p>
                            </a>
                        </div>
                    </div>
                @endforelse


            </div>

        </div>
    </div>

    <button
        class="flex px-8 py-2 mx-auto mt-8 text-lg text-white bg-black border-0 rounded focus:outline-none hover:bg-gray-800"><a href="allwebresources">See
            All Web Resources</a></button>
</section>

 <style>
     .clamp2 {
         display: -webkit-box;
         -webkit-line-clamp: 1;
         -webkit-box-orient: vertical;
         overflow: hidden;

     }
 </style>