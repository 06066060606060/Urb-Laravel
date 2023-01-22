<div class="border-b border-gray-300"></div>
@php
    $urltype = null;
    $urlprix = null;
    $urlsurface = null;
@endphp
<section class="pt-4 pb-8 mx-2 bg-white md:mx-16">
    <div class="flex flex-wrap justify-between py-4">
        <div class="pb-4 md:pb-0">
            <select name="type"
                class=" px-4 h-[40px] text-sm bg-white border-gray-200 rounded-md transition border focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                <option value="">Popular</option>
                <option value="new" {{ $urltype == 'new' ? 'selected' : '' }}>The Newest</option>
                <option value="old" {{ $urltype == 'old' ? 'selected' : '' }}>The Oldest</option>
            </select>


        </div>

        <div class="flex pt-1 md:hidden md:py-0">
            <i class="mx-2 text-gray-200 transition fa-solid fa-list fa-2x hover:text-gray-400"></i>
            <i class="mr-2 text-gray-200 transition fa-solid fa-border-all fa-2x hover:text-gray-400"></i>
            <i class="text-gray-200 transition fa-solid fa-map fa-2x hover:text-gray-400"></i>
        </div>


        <fieldset class="flex flex-wrap gap-2 md:gap-4">
            <div>
                <input type="radio" name="ColorOption" value="All" id="All" class="hidden peer" checked />

                <label for="All"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">All</p>
                </label>
            </div>

            <div>
                <input type="radio" name="ColorOption" value="Masterplan" id="Masterplan" class="hidden peer" />

                <label for="Masterplan"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">Masterplan</p>
                </label>
            </div>

            <div>
                <input type="radio" name="ColorOption" value="Streetscapes" id="Streetscapes" class="hidden peer" />

                <label for="Streetscapes"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">Streetscapes</p>
                </label>
            </div>

            <div>
                <input type="radio" name="ColorOption" value="Neiborhoods" id="Neiborhoods" class="hidden peer" />

                <label for="Neiborhoods"
                    class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 peer-checked:text-white">
                    <p class="text-sm font-medium">neighbourhoods</p>
                </label>
            </div>
        </fieldset>

        <div class="flex flex-col">
            <div class="hidden py-4 md:flex md:py-0">
                <i class="mx-2 text-gray-200 transition fa-solid fa-list fa-2x hover:text-gray-400"></i>
                <i class="mr-2 text-gray-200 transition fa-solid fa-border-all fa-2x hover:text-gray-400"></i>
                <i class="text-gray-200 transition fa-solid fa-map fa-2x hover:text-gray-400"></i>
            </div>
            <fieldset class="items-center hidden max-w-xs pt-4 space-x-2 md:flex flex-nowrap">
                <input id="slider" type="range" value="75"
                    class="w-full h-2 rounded-lg cursor-pointer slide accent-gray-200 hover:accent-gray-200">
            </fieldset>
        </div>

    </div>


    <div class="grid grid-cols-2 gap-2 mx-4 mt-4 md:grid-cols-4 md:mx-0">
        <div class="block">
            <label for="DeliveryStandard" class="block">
                <p class="pb-2 font-bold text-black">Tags</p>
            </label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </span>
                <input type="text"
                    class="w-full py-3 pl-10 pr-4 text-gray-700 bg-gray-100 border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400"
                    placeholder="">
            </div>
        </div>

        <div class="block">
            <label for="DeliveryStandard" class="block">
                <p class="pb-2 font-bold text-black">Size</p>
            </label>
            <select name="type"
                class="w-full px-4 py-3 text-sm transition bg-white border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                <option value="">Choose Size</option>
                <option value="Maison" {{ $urltype == 'Maison' ? 'selected' : '' }}>Size</option>
                <option value="Appartement" {{ $urltype == 'Appartement' ? 'selected' : '' }}>Size</option>
                <option value="Terrain" {{ $urltype == 'Terrain' ? 'selected' : '' }}>Size</option>
                <option value="" {{ $urltype == 'Villa' ? 'selected' : '' }}>Size</option>
                <option value="Bureau" {{ $urltype == 'Bureau' ? 'selected' : '' }}>Size</option>
                <option value="Commerce" {{ $urltype == 'Commerce' ? 'selected' : '' }}>Size</option>
            </select>
        </div>

        <div class="block">
            <label for="DeliveryStandard" class="block">
                <p class="pb-2 font-bold text-black">City</p>
            </label>
            <select name="prix"
                class="w-full px-4 py-3 text-sm transition bg-white border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                <option value="">Choose city</option>
                <option value="900" {{ $urlprix == '900' ? 'selected' : '' }}>city</option>
                <option value="2900" {{ $urlprix == '2900' ? 'selected' : '' }}>city</option>
                <option value="3900" {{ $urlprix == '3900' ? 'selected' : '' }}>city</option>
                <option value="5000" {{ $urlprix == '5000' ? 'selected' : '' }}>city</option>
                <option value="8000" {{ $urlprix == '8000' ? 'selected' : '' }}>city</option>
                <option value="10000" {{ $urlprix == '10000' ? 'selected' : '' }}>city</option>
            </select>
        </div>

        <div class="block">
            <label for="DeliveryStandard" class="block">
                <p class="pb-2 font-bold text-black">Country</p>
            </label>
            <select name="surface"
                class="w-full px-4 py-3 text-sm transition bg-white border rounded-md focus:border-white focus:outline-none focus:ring focus:ring-gray-400">
                <option value="">Choose country</option>
                <option value="50" {{ $urlsurface == '50' ? 'selected' : '' }}>country</option>
                <option value="100" {{ $urlsurface == '100' ? 'selected' : '' }}>country</option>
                <option value="200" {{ $urlsurface == '200' ? 'selected' : '' }}>country</option>
                <option value="300" {{ $urlsurface == '300' ? 'selected' : '' }}>country</option>
                <option value="400" {{ $urlsurface == '400' ? 'selected' : '' }}>country</option>
                <option value="500" {{ $urlsurface == '500' ? 'selected' : '' }}>country</option>
            </select>
        </div>

    </div>
</section>

<section class="block pb-16 mx-4 md:mx-16">
    <div class="grid grid-cols-2 gap-5 lg:grid-cols-4 xl:grid-cols-5">

        <div class="transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
            <a href="#" class="flex flex-col h-full">
                <img alt="Art" src="./img/OCEANIX-BIG.jpg" class="object-cover h-full max-h-[480px]" />
                <div class="p-2">
                    <h3 class="mt-4 font-bold text-gray-900 md:text-xl">Lorem, ipsum dolor.</h3>
                    <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                        Lorem ipsum dolor sit
                    </p>
                </div>
            </a>
        </div>

       <div class="transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
            <a href="#" class="flex flex-col h-full">
                <img alt="Art" src="./img/M_DOUBLE-DUTCH_Stadstuin-1-1-scaled.jpg" class="object-cover h-full max-h-[480px]" />
                <div class="p-2">
                    <h3 class="mt-4 font-bold text-gray-900 md:text-xl">Lorem, ipsum dolor.</h3>
                    <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                        Lorem ipsum dolor sit
                    </p>
                </div>
            </a>
        </div>

        <div class="col-span-2 bg-gray-50 hover:bg-gray-100 transition md:hover:scale-[102%] shadow-md"> 
         <a href="#" class="flex flex-col h-full">
                <img alt="Art" src="./img/LIME-STREET2.jpg" class="object-cover h-full max-h-[480px] " />
                <div class="p-2">
                    <h3 class="mt-4 font-bold text-gray-900 md:text-xl">Lorem, ipsum dolor.</h3>
                    <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                        Lorem ipsum dolor sit
                    </p>
                </div>
            </a>
        </div>

       <div class="transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
            <a href="#" class="flex flex-col h-full">
                <img alt="Art" src="./img/az.jpg" class="object-cover h-full max-h-[480px]" />
                <div class="p-2">
                    <h3 class="mt-4 font-bold text-gray-900 md:text-xl">Lorem, ipsum dolor.</h3>
                    <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                        Lorem ipsum dolor sit
                    </p>
                </div>
            </a>
        </div>
         <div class="transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
            <a href="#" class="flex flex-col h-full">
                <img alt="Art" src="./img/OMA-UNICORN.jpg" class="object-cover h-full max-h-[480px]" />
                <div class="p-2">
                    <h3 class="mt-4 font-bold text-gray-900 md:text-xl">Lorem, ipsum dolor.</h3>
                    <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                        Lorem ipsum dolor sit
                    </p>
                </div>
            </a>
        </div>
         <div class="col-span-2 transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
            <a href="#" class="flex flex-col h-full">
                <img alt="Art" src="./img/z.jpg" class="object-cover h-full max-h-[480px]" />
                <div class="p-2">
                    <h3 class="mt-4 font-bold text-gray-900 md:text-xl">Lorem, ipsum dolor.</h3>
                    <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                        Lorem ipsum dolor sit
                    </p>
                </div>
            </a>
        </div>
         <div class="transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
            <a href="#" class="flex flex-col h-full">
                <img alt="Art" src="./img/zz.jpg" class="object-cover h-full max-h-[480px]" />
                <div class="p-2">
                    <h3 class="mt-4 font-bold text-gray-900 md:text-xl">Lorem, ipsum dolor.</h3>
                    <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                        Lorem ipsum dolor sit
                    </p>
                </div>
            </a>
        </div>
         <div class="transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
            <a href="#" class="flex flex-col h-full">
                <img alt="Art" src="./img/za.jpg" class="object-cover h-full max-h-[480px]" />
                <div class="p-2">
                    <h3 class="mt-4 font-bold text-gray-900 md:text-xl">Lorem, ipsum dolor.</h3>
                    <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                        Lorem ipsum dolor sit
                    </p>
                </div>
            </a>
        </div>

             <div class="transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
            <a href="#" class="flex flex-col h-full">
                <img alt="Art" src="./img/zz.jpg" class="object-cover h-full max-h-[480px]" />
                <div class="p-2">
                    <h3 class="mt-4 font-bold text-gray-900 md:text-xl">Lorem, ipsum dolor.</h3>
                    <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                        Lorem ipsum dolor sit
                    </p>
                </div>
            </a>
        </div>
         <div class="transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
            <a href="#" class="flex flex-col h-full">
                <img alt="Art" src="./img/M_DOUBLE-DUTCH_Stadstuin-1-1-scaled.jpg" class="object-cover h-full max-h-[480px]" />
                <div class="p-2">
                    <h3 class="mt-4 font-bold text-gray-900 md:text-xl">Lorem, ipsum dolor.</h3>
                    <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                        Lorem ipsum dolor sit
                    </p>
                </div>
            </a>
        </div>

           <div class="transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
            <a href="#" class="flex flex-col h-full">
                <img alt="Art" src="./img/zz.jpg" class="object-cover h-full max-h-[480px]" />
                <div class="p-2">
                    <h3 class="mt-4 font-bold text-gray-900 md:text-xl">Lorem, ipsum dolor.</h3>
                    <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                        Lorem ipsum dolor sit
                    </p>
                </div>
            </a>
        </div>
         <div class="transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
            <a href="#" class="flex flex-col h-full">
                <img alt="Art" src="./img/za.jpg" class="object-cover h-full max-h-[480px]" />
                <div class="p-2">
                    <h3 class="mt-4 font-bold text-gray-900 md:text-xl">Lorem, ipsum dolor.</h3>
                    <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                        Lorem ipsum dolor sit
                    </p>
                </div>
            </a>
        </div>



    </div>

    <div class="flex flex-row items-center justify-center pt-12 mx-auto">
        <div>
            <span class="z-0 inline-flex justify-center space-x-1 text-white rounded-md shadow-sm">

                <button
                    class="flex items-center justify-center w-10 h-10 duration-150 bg-black rounded-md shadow-md hover:bg-gray-600 focus:shadow-outline">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>


                <button
                    class="flex items-center justify-center w-10 h-10 duration-150 bg-black rounded-md shadow-md hover:bg-gray-600 focus:shadow-outline">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>

            </span>
        </div>
    </div>
</section>



<section class="mx-4 border-t border-b md:mx-16">
    <div class="block py-16 mx-4 md:mx-auto max-w-7xl">
        <div class="w-full">
            <h1 class="pb-4 text-3xl font-bold text-center text-gray-900 md:text-5xl">Streetscapes</h1>
        </div>
        <div class="max-w-xl mb-6 sm:mx-auto sm:text-center md:mb-10 lg:max-w-2xl">
            <p class="text-base text-gray-700 md:text-lg">
                Examples of streetscapes with explanation, measures and solutions to incorporate in your designs:
            </p>
        </div>
        <div class="grid gap-6 row-gap-5 lg:grid-cols-3">
            <div>
                <a href="">
                    <img class="object-cover w-full h-64 mb-6 rounded shadow-lg lg:h-80 xl:h-96" src="./img/011.png"
                        alt="" />
                    <h5 class="mb-2 text-xl font-bold leading-none sm:text-2xl">
                        A slice of heaven
                    </h5>
                    <p class="text-sm text-gray-700">
                        O for awesome, this chocka full cuzzie is as rip-off as a cracker. Meanwhile, in behind the
                        bicycle shed,
                        Hercules Morse.
                    </p>
                </a>
            </div>
            <div>
                <a href="">
                    <img class="object-cover w-full h-64 mb-6 rounded shadow-lg lg:h-80 xl:h-96" src="./img/012.png"
                        alt="" />
                    <h5 class="mb-2 text-xl font-bold leading-none sm:text-2xl">
                        Disrupt inspire
                    </h5>
                    <p class="text-sm text-gray-700">
                        I'll be sure to note that in my log. Smooth as an android's bottom, eh, Data? When has justice
                        ever been
                        as
                        simple as a rule book?
                    </p>
                </a>
            </div>
            <div>
                <a href="">
                    <img class="object-cover w-full h-64 mb-6 rounded shadow-lg lg:h-80 xl:h-96" src="./img/013.png"
                        alt="" />
                    <h5 class="mb-2 text-xl font-bold leading-none sm:text-2xl">
                        Storage shed
                    </h5>
                    <p class="text-sm text-gray-700">
                        Yolo ipsum dolor sit amet, consectetur adipiscing elit. Ut ac suscipit leo. Carpe diem vulputate
                        est nec
                        commodo rutrum.
                    </p>
                </a>
            </div>
        </div>
        <a href="./streetscapes">
            <button
                class="flex px-8 py-2 mx-auto mt-16 text-lg text-white bg-black border-0 rounded focus:outline-none hover:bg-gray-800">See
                All</button>
        </a>
    </div>
</section>

<section>
    <div class="w-full pt-12">
        <h1 class="pt-4 pb-8 text-3xl font-bold text-center text-gray-900 md:text-5xl">Masterplans</h1>
        <div class="max-w-xl mb-6 sm:mx-auto sm:text-center md:mb-10 lg:max-w-2xl">
            <p class="mx-8 text-base text-gray-700 md:text-lg">
                Samples of housing diagrams and schemes inspirations showing many ways of how residential areas can be
                developed.<br>
                Each example includes measurements, data and explanation of the project:.
            </p>
        </div>
    </div>
    <div x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,
    
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            1440: {
                slidesPerView: 4,
                spaceBetween: 0,
            },
        },
    })" class="relative flex flex-row w-10/12 mx-auto">
        <div class="absolute inset-y-0 left-0 z-10 flex items-center mb-4">
            <button @click="swiper.slidePrev()"
                class="flex items-center justify-center w-10 h-10 -ml-2 transition bg-black border rounded-full shadow lg:-ml-4 focus:outline-none hover:bg-gray-800 active:bg-black border-opacity-20">
                <svg viewBox="0 0 20 20" fill="white" class="w-6 h-6 chevron-left">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <div class="swiper-container" x-ref="container">
            <div class="my-8 swiper-wrapper">


                <div class="p-4 swiper-slide">
                    <a href="">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="h-[450px] w-full object-cover border-b"
                                    src="./img/M_DOUBLE-DUTCH_Stadstuin-1-1-scaled.jpg" alt="">
                                <h1 class="pt-4 mx-8 font-bold text-center text-black">KROYER PLADS | VLA+COBE |
                                    COPENHAGEN</h1>
                                <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                    Masterplans, small
                                </p>
                            </div>
                        </div>
                    </a>
                </div>



                <div class="p-4 swiper-slide">
                    <a href="">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="h-[450px] w-full object-cover border-b"
                                    src="./img/S_FCB-STUDIOS_Lime-Tree-Square-scaled.jpg" alt="">
                                <h1 class="pt-4 mx-8 font-bold text-center text-black">KROYER PLADS | VLA+COBE |
                                    COPENHAGEN</h1>
                                <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                    Masterplans, small
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="p-4 swiper-slide">
                    <a href="">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="h-[450px] w-full object-cover border-b"
                                    src="./img/S_HOLSCHER-NORDBERG_Strandlodsvej_web.jpg" alt="">
                                <h1 class="pt-4 mx-8 font-bold text-center text-black">KARTOFFELRAEKKERNE | OSTERBRO |
                                    COPENHAGEN</h1>
                                <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                    Masterplans, small
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="p-4 swiper-slide">
                    <a href="">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="h-[450px] w-full object-cover border-b"
                                    src="./img/S_HOLSCHER-NORDBERG_Strandlodsvej_web.jpg" alt="">
                                <h1 class="pt-4 mx-8 font-bold text-center text-black">LIME TREE SQUARE | FCB | STREET
                                    SOMERSET</h1>
                                <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                    Masterplans, xs
                                </p>
                            </div>
                        </div>
                    </a>
                </div>



                <div class="p-4 swiper-slide">
                    <a href="">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="h-[450px] w-full object-cover border-b"
                                    src="./img/S_Kartoffelraekkerne-scaled.jpg" alt="">
                                <h1 class="pt-4 mx-8 font-bold text-center text-black">LIME TREE SQUARE | FCB | STREET
                                    SOMERSET</h1>
                                <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                    Masterplans, xs
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <div class="absolute inset-y-0 right-0 z-10 flex items-center mb-4">
            <button @click="swiper.slideNext()"
                class="flex items-center justify-center w-10 h-10 -mr-2 transition bg-black border rounded-full shadow lg:-mr-4 focus:outline-none hover:bg-gray-800 active:bg-black border-opacity-20">
                <svg viewBox="0 0 20 20" fill="white" class="w-6 h-6 chevron-right">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>


    <button
        class="flex px-8 py-2 mx-auto mt-8 mb-20 text-lg text-white bg-black border-0 rounded focus:outline-none hover:bg-gray-800"><a
            href="./masterplans">
            See all Masterplans</a></button>
</section>

<section class="py-4 mx-4 text-gray-600 border-t border-b body-font md:mx-16 md:py-8">
    <div class="container px-5 pt-12 pb-8 mx-auto">
        <div class="flex flex-wrap w-full mb-8 md:mb-20">
            <div class="w-full">
                <h1 class="pb-4 text-3xl font-bold text-center text-gray-900 md:text-5xl">Neighbourhoods</h1>
                <div class="max-w-xl mb-6 sm:mx-auto sm:text-center lg:max-w-2xl">
                    <p class="text-base text-gray-700 md:text-lg">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 xl:w-1/4 md:w-1/2">
                <a href="">
                    <div class="p-6 transition shadow-lg bg-gray-50 hover:bg-gray-100 md:hover:scale-110">
                        <img class="object-cover object-center w-full h-40 mb-6" src="./img/OMA-UNICORN.jpg"
                            alt="content">

                        <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">Chichen Itza</h2>
                        <p class="text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery
                            hexagon
                            disrupt edison bulbche.</p>
                    </div>
                </a>
            </div>
            <div class="p-4 xl:w-1/4 md:w-1/2">
                <a href="">
                    <div class="p-6 transition shadow-lg bg-gray-50 hover:bg-gray-100 md:hover:scale-110">
                        <img class="object-cover object-center w-full h-40 mb-6" src="./img/LIME-STREET2.jpg"
                            alt="content">

                        <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">Colosseum Roma</h2>
                        <p class="text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery
                            hexagon
                            disrupt edison bulbche.</p>
                    </div>
                </a>
            </div>
            <div class="p-4 xl:w-1/4 md:w-1/2">
                <a href="">
                    <div class="p-6 transition shadow-lg bg-gray-50 hover:bg-gray-100 md:hover:scale-110">
                        <img class="object-cover object-center w-full h-40 mb-6" src="./img/az.jpg" alt="content">

                        <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">Great Pyramid of Giza</h2>
                        <p class="text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery
                            hexagon
                            disrupt edison bulbche.</p>
                    </div>
                </a>
            </div>
            <div class="p-4 xl:w-1/4 md:w-1/2">
                <a href="">
                    <div class="p-6 transition shadow-lg bg-gray-50 hover:bg-gray-100 md:hover:scale-110">
                        <img class="object-cover object-center w-full h-40 mb-6" src="./img/image1.jpg"
                            alt="content">

                        <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">San Francisco</h2>
                        <p class="text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery
                            hexagon
                            disrupt edison bulbche.</p>
                    </div>
                </a>
            </div>
            <div class="p-4 xl:w-1/4 md:w-1/2">
                <a href="">
                    <div class="p-6 transition shadow-lg bg-gray-50 hover:bg-gray-100 md:hover:scale-110">
                        <img class="object-cover object-center w-full h-40 mb-6" src="./img/house3.jpeg"
                            alt="content">

                        <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">Chichen Itza</h2>
                        <p class="text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery
                            hexagon
                            disrupt edison bulbche.</p>
                    </div>
                </a>
            </div>
            <div class="p-4 xl:w-1/4 md:w-1/2">
                <a href="">
                    <div class="p-6 transition shadow-lg bg-gray-50 hover:bg-gray-100 md:hover:scale-110">
                        <img class="object-cover object-center w-full h-40 mb-6" src="./img/house1.jpeg"
                            alt="content">

                        <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">Colosseum Roma</h2>
                        <p class="text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery
                            hexagon
                            disrupt edison bulbche.</p>
                    </div>
                </a>
            </div>
            <div class="p-4 xl:w-1/4 md:w-1/2">
                <a href="">
                    <div class="p-6 transition shadow-lg bg-gray-50 hover:bg-gray-100 md:hover:scale-110">
                        <img class="object-cover object-center w-full h-40 mb-6" src="./img/za.jpg" alt="content">

                        <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">Great Pyramid of Giza</h2>
                        <p class="text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery
                            hexagon
                            disrupt edison bulbche.</p>
                    </div>
            </div>
            <div class="p-4 xl:w-1/4 md:w-1/2">
                <a href="">
                    <div class="p-6 transition shadow-lg bg-gray-50 hover:bg-gray-100 md:hover:scale-110">
                        <img class="object-cover object-center w-full h-40 mb-6" src="./img/z.jpg" alt="content">

                        <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">San Francisco</h2>
                        <p class="text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery
                            hexagon
                            disrupt edison bulbche.</p>
                    </div>
                </a>
            </div>
        </div>

        <button
            class="flex px-8 py-2 mx-auto mt-16 text-lg text-white bg-black border-0 rounded focus:outline-none hover:bg-gray-800">
            <a href="./neighbourhoods">See
            All</a></button>

    </div>
</section>



<section class="pb-16 mx-4 mb-16 border-b md:mx-16">
    <div class="w-full">
        <h1 class="pt-16 pb-16 text-3xl font-bold text-center text-gray-900 md:text-5xl">Search on the map</h1>
    </div>
    <div class="flex md:mx-4">
        <div id="map" class="mx-2 mt-4 rounded h-[550px] w-screen">
        </div>
    </div>
</section>


@include('parts.dictionary')

@include('parts.toread')



<script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"
    integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
<script>
    let mymap = L.map('map').setView([48.6890, 11.14086], 5);
    osmLayer = L.tileLayer(
        'https://wxs.ign.fr/{apikey}/geoportail/wmts?REQUEST=GetTile&SERVICE=WMTS&VERSION=1.0.0&STYLE={style}&TILEMATRIXSET=PM&FORMAT={format}&LAYER=ORTHOIMAGERY.ORTHOPHOTOS&TILEMATRIX={z}&TILEROW={y}&TILECOL={x}', {
            maxZoom: 19,
            apikey: 'choisirgeoportail',
            format: 'image/jpeg',
            style: 'normal'
        }).addTo(mymap);
    mymap.addLayer(osmLayer);
    L.marker([47.97618, 7.82580]).addTo(mymap);
    L.marker([44.97618, 9.82580]).addTo(mymap);
    mymap.touchZoom.enable();
    mymap.scrollWheelZoom.disable();
</script>