 <section class="pt-8">
     @php
         $size = urldecode(request()->get('size'));
         $q = urldecode(request()->get('q'));
     @endphp
     <div class="p-8 md:p-12 lg:px-12 lg:py-12">
         <div class="max-w-lg mx-auto text-center lg:max-w-4xl">
             <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                 Masterplans
             </h2>

             <p class="text-sm font-bold text-gray-700 md:text-lg pt-4">
                 Discover Urban Design's Hidden Gems: Explore The Urbanitarian Masterplan Archive
             </p>
             <p class="text-ssm text-gray-700 md:text-lg">
                 Get your daily dose of inspiration in our curated list of urban design projects from all around the
                 world. Each project contains key insights along with useful diagrams, measurements and data
             </p>
         </div>

         <div class="max-w-2xl mx-auto mt-8">
             <div action=" " class="sm:flex sm:gap-4">
                 <div class="sm:flex-1">
                     <input id="searchbar" type="text" placeholder="SEARCH" name="q" value=""
                         class="w-full p-3 text-gray-700 transition bg-gray-100 border-gray-200 rounded-md shadow-sm focus:border-white focus:outline-none focus:ring focus:ring-gray-400" />
                 </div>
             </div>
         </div>

         <fieldset class="flex flex-wrap justify-center gap-2 pt-8 mx-auto md:gap-4">
             <button id="all">
                 <label for="All" id="Alltag"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">All</p>
                 </label>
             </button>

             <button id="child">
                 <label for="child" id="childtag"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">Child-friendly</p>
                 </label>
             </button>

             <button id="green">
                 <label for="green"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">Green</p>
                 </label>
             </button>

             <button id="climate">
                 <label for="climate"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">Climate-proof</p>
                 </label>
             </button>

             <button id="age">
                 <label for="age"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">Age-friendly</p>
                 </label>
             </button>

             <button id="placemaking">
                 <label for="placemaking"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">Placemaking</p>
                 </label>
             </button>
         </fieldset>

         <fieldset class="flex flex-wrap justify-center gap-2 pt-8 mx-auto md:gap-4">
             <button id="Allsize">
                 <label for="Allsize" id="Allsizetag"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">All sizes</p>
                 </label>
             </button>

             <button id="XS">
                 <label for="xs"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">XS</p>
                 </label>
             </button>

             <button id="SMALL">
                 <label for="small"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">S</p>
                 </label>
             </button>

             <button id="MEDIUM">
                 <label for="medium"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">M</p>
                 </label>
             </button>


             <button id="LARGE">
                 <label for="large"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">L</p>
                 </label>
             </button>

             <button id="XL">
                 <label for="XL"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">XL</p>
                 </label>
             </button>

             <button id="XXL">
                 <label for="XXL"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">XXL</p>
                 </label>
             </button>

             <button id="XXXL">
                 <label for="XXXL"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">XXXL</p>
                 </label>
             </button>

             <button id="XXXXL">
                 <label for="XXXXL"
                     class="flex items-center justify-center px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 hover:bg-gray-200 peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">XXXXL</p>
                 </label>
             </button>


         </fieldset>
 </section>

 <div class="mx-4 border-t">
     <section class="pb-16 md:py-16 md:mx-auto">
         <div id="boucle" class="grid grid-cols-1 gap-7 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5">


         </div>
         <div class="flex pt-8">
             <button id="prev"
                 class="flex items-center justify-center px-3 py-2 mx-auto text-gray-900 border border-gray-300 rounded-md cursor-pointer hover:border-gray-300 hover:bg-gray-200  peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                 <p class="text-sm font-medium">previous</p>
                 <button id="next"
                     class="flex items-center justify-center px-3 py-2 mx-auto text-gray-900 border border-gray-300 rounded-md cursor-pointer hover:border-gray-300 hover:bg-gray-200  peer-checked:border-gray-500 peer-checked:bg-gray-500 active:bg-gray-500 active:text-white peer-checked:text-white">
                     <p class="text-sm font-medium">Next</p>
         </div>
     </section>
 </div>

 <script>
     $('button').click(function() {
         $(this).addClass('bg-gray-200 rounded').siblings().removeClass('bg-gray-200 rounded');

     });

     const itemsPerPage = 50;
     let currentPage = 1;



     $(document).ready(function() {
         url = "api/masterplans";
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $("#next").click(function() {
         $('#boucle').empty();
         currentPage++;
         if (currentPage > totalPages) {
             currentPage = totalPages;
         }
         fetchAndRenderData(url);
     });

     $("#prev").click(function() {
         $('#boucle').empty();
         currentPage--;
         if (currentPage < 1) {
             currentPage = 1;
         }
         fetchAndRenderData(url);
     });



     const fetchAndRenderData = (url) => {
         fetch(url)
             .then((res) => res.json())
             .then((out) => {
                 const obj = JSON.parse(JSON.stringify(out));
                 let textFromJSON = obj;
                 totalPages = Math.ceil(textFromJSON.length / itemsPerPage);
                 const startIndex = (currentPage - 1) * itemsPerPage;
                 const endIndex = startIndex + itemsPerPage;
                 const itemsToDisplay = textFromJSON.slice(startIndex, endIndex);
                 $.each(itemsToDisplay, function(i, item) {
                     let html = `
                        <div class="">
                    <a href="masterplans_post?id=${item.id}">
                        <div class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-auto border-b saturate-120" src="storage/uploads/masterplans/${item.image}"alt=""  onerror="this.src='./img/empty.png'"/>
                                <h1 class="pt-3 text-sm font-bold text-center truncate mx-2">${item.title} |${item.author} | ${item.city}</h1>
                                <p class="pb-2 mx-8 text-xs text-center text-gray-700">
                                   ${item.category}, ${item.size} 
                                </p>
                            </div>
                        </div>
                    </a>
                </div> `;
                     $('#boucle').append(html);
                 });
             })
     };

     $('#child').click(function() {
         url = "api/masterplans?tags=Child-friendly";
         $('#searchbar').val('Child-friendly');
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#green').click(function() {
         url = "api/masterplans?tags=Green";
         $('#searchbar').val('Green');
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#climate').click(function() {
         url = "api/masterplans?tags=climate";
         $('#searchbar').val('climate');
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#age').click(function() {
         url = "api/masterplans?tags=age";
         $('#searchbar').val('Age-friendly');
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#all').click(function() {
         url = "api/masterplans";
         $('#searchbar').val('');
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#Allsize').click(function() {
         url = "api/masterplans";
         $('#searchbar').val('');
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#LARGE').click(function() {
         url = "api/masterplans?size=L";
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#MEDIUM').click(function() {
         url = "api/masterplans?size=M";
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#SMALL').click(function() {
         url = "api/masterplans?size=S";
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#XS').click(function() {
         url = "api/masterplans?size=XS";
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#XL').click(function() {
         url = "api/masterplans?size=XL";
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#XXL').click(function() {
         url = "api/masterplans?size=XXL";
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#XXXL').click(function() {
         url = "api/masterplans?size=XXXL";
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#XXXXL').click(function() {
         url = "api/masterplans?size=XXXXL";
         $('#boucle').empty();
         fetchAndRenderData(url);
     });

     $('#searchbar').keyup(function() {
         url = "api/masterplans?q=" + $('#searchbar').val();
         $('#boucle').empty();
         fetchAndRenderData(url);
     });
 </script>
