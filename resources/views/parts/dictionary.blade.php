<section class="pb-16 mx-4 mb-4 border-b md:mx-16">

    <div class="w-full">
     <h1 class="pb-8 text-3xl font-bold text-center text-gray-900 md:text-5xl  select-none">Dictionary</h1>
        <div class="max-w-xl mb-6 sm:mx-auto sm:text-center md:mb-10 lg:max-w-4xl  select-none">
                          <p class="pt-4 text-sm font-bold text-gray-700 md:text-lg">
                Unlock Your Urban Design Vocabulary: Join the Largest Urban Design Jargon Community Online.
            </p>
             <p class="text-gray-500 text-ssm md:text-lg">
              Lexicon of urban design terms, from deeply informative vocabulary to light-hearted buzzwords
            </p>
        </div>
    </div>

    <div class="mx-2">
        <div class="max-w-screen-xl pt-8 pb-4 mx-2 md:py-8 md:mx-auto ">
            <div class="grid grid-cols-2 gap-5 row-gap-5 lg:grid-cols-5">

                @forelse ($dictionary as $item)
                    <div class="flex transition border shadow-md md:hover:scale-110">
                        <div class="flex flex-col mx-auto">
                            <a href="dictionaries_post?id={{ $item->id }}">
                                @php $dictigimg = $item->image ?? null; @endphp
                                <img class="object-cover w-auto h-32 saturate-120" src="{{ asset('storage/uploads/dictionaries/' . $dictigimg) }}" loading="lazy"
                                    alt="content" onerror="this.src='./img/empty.png'">
                                <p class="w-full pt-2 text-xs md:text-base font-bold text-center text-black bg-white border-t">
                                  {{ $item->name }}</p>
                                <p class="pb-2 text-xs text-center text-gray-500">{{ $item->type }}</p>
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
                                <p class="pb-2 text-xs text-center text-gray-500">Dictionary</p>
                            </a>
                        </div>
                    </div>
                @endforelse


            </div>

        </div>
    </div>

    <button
        class="flex px-8 py-2 mx-auto mt-8 text-lg text-white bg-black border-0 rounded focus:outline-none hover:bg-gray-800"><a href="alldictionary">See
            All Dictionary</a></button>
</section>