<section class="pt-8">
    <div class="p-8 md:p-12 lg:px-12 lg:py-16">
      <div class="max-w-lg mx-auto text-center lg:max-w-xl">
        <img class="flex justify-center w-12 mx-auto my-8" src="./img/logo.png">
        <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
          Explore the best world's urban design projects collection
        </h2>

        <p class="mt-4 text-sm text-gray-500">
          We are number one destination to get knowledge on urban design.
        </p>
      </div>

      <div class="max-w-2xl mx-auto mt-8">
        <form action="{{ route('filter') }}" method="get" class="sm:flex sm:gap-4">
          <div class="sm:flex-1">
            <input type="text" placeholder="SEARCH" name="q"
              class="w-full p-3 text-gray-700 transition bg-gray-100 border-gray-200 rounded-md shadow-sm focus:border-white focus:outline-none focus:ring focus:ring-gray-400" />
          </div>
        </form>


      </div>

      <fieldset class="flex flex-wrap justify-center gap-3 pt-8 mx-auto">
        <div>
          <label for="ColorBlack" class="flex items-center justify-center gap-2 px-3 py-2 text-black ">
            <p class="text-base font-medium">Trending searchs</p>
          </label>
        </div>

        <a href="filter?q=child-friendly">
          <label for="ColorBlack"
            class="flex items-center justify-center gap-2 px-12 py-2 text-gray-700 border border-gray-100 rounded-md cursor-pointer hover:text-black hover:border-gray-200 ">
            <p class="text-sm font-medium">Child-friendly</p>
          </label>
        </a>

         <a href="filter?q=wsud">
          <label for="ColorRed"
            class="flex items-center justify-center gap-2 px-12 py-2 text-gray-700 border border-gray-100 rounded-md cursor-pointer hover:text-black hover:border-gray-200 ">
            <p class="text-sm font-medium">WSUD</p>
          </label>
        </a>

         <a href="filter?q=playful">
          <label for="ColorBlue"
            class="flex items-center justify-center gap-2 px-12 py-2 text-gray-700 border border-gray-100 rounded-md cursor-pointer hover:text-black hover:border-gray-200 ">
            <p class="text-sm font-medium">Playful</p>
          </label>
        </a>

         <a href="filter?q=car-free">
          <label for="ColorGold"
            class="flex items-center justify-center gap-2 px-12 py-2 text-gray-700 border border-gray-100 rounded-md cursor-pointer hover:text-black hover:border-gray-200 ">
            <p class="text-sm font-medium">car-free</p>
          </label>
        </a>
      </fieldset>
  </section>