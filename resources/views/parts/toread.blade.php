<section class="mx-4">
    <div class="px-4 py-8 pb-16 mx-8 max-w-screen-2xl md:py-16 md:mx-auto">
        <div class="flex flex-wrap w-full mb-8 md:mb-10">
            <div class="w-full">
                <h1 class="pb-4 text-3xl font-bold text-center text-gray-900 md:text-5xl">To Read</h1>
                <div class="max-w-xl mb-6 sm:mx-auto sm:text-center lg:max-w-2xl">
                    <p class="text-base text-gray-700 md:text-lg">
                        Rundown of a variety of printed/online planning magazines and books you might consider reading.
                    </p>
                </div>
            </div>
        </div>
        <div class="py-8">
            <div class="grid grid-cols-1 gap-5 row-gap-5 lg:grid-cols-4 xl:grid-cols-5 md:grid-cols-2">
                @forelse ($magazines as $magazine)
                    <div class="flex transition border shadow-md md:hover:scale-105">
                        <div class="flex flex-col mx-auto mb-16">
                            <a href=" {{  $magazine->link }}">
                                <img class="object-cover w-full h-full" src="{{ asset('storage/' . $magazine->image) }}"
                                    alt="content" onerror="this.src='./img/empty.png'">
                                <p class="w-full pt-2 text-base font-bold text-center text-black bg-white border-t">
                                  {{  $magazine->name }}
                                </p>
                                <p class="pb-2 text-xs text-center text-gray-800">  {{  $magazine->type }}</p>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="flex transition border shadow-md md:hover:scale-105">
                        <div class="flex flex-col mx-auto mb-16">
                            <a href="">
                                <img class="object-cover w-full h-full" src="./img/empty.png" alt="content">
                                <p class="w-full pt-2 text-base font-bold text-center text-black bg-white border-t">
                                    Empty
                                </p>
                                <p class="pb-2 text-xs text-center text-gray-800"> magazine</p>
                            </a>
                        </div>
                    </div>
                @endforelse




            </div>
        </div>
        <button
            class="flex px-8 py-2 mx-auto mt-8 text-lg text-white bg-black border-0 rounded focus:outline-none hover:bg-gray-800">
            <a href="/read">See All to Read </a></button>

    </div>
</section>