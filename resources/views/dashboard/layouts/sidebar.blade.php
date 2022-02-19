 <aside id="sidebar"
   class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75"
   aria-label="Sidebar">
   <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
     <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
       <div class="flex-1 px-3 bg-white divide-y space-y-1 flex flex-col justify-between">
         <ul class="space-y-2 pb-2">
           <li>
             <form action="#" method="GET" class="lg:hidden">
               <label for="mobile-search" class="sr-only">Search</label>
               <div class="relative">
                 <input type="text" name="email" id="mobile-search"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:ring-cyan-600 block w-full pl-10 p-2.5 hidden"
                   placeholder="Search">
               </div>
             </form>
           </li>
           <li>
             <a href="/dashboard"
               class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group {{ Request::is('dashboard') ? 'bg-gray-100' : ''}} ">
               <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75" fill="currentColor"
                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                 <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
               </svg>
               <span class="ml-3 font-medium">Dashboard</span>
             </a>
           </li>
           <li>
             <a href="/dashboard/user"
               class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group {{ Request::is('dashboard/user*') ? 'bg-gray-100' : ''}} ">
               <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path
                   d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                 </path>
               </svg>
               <span class="ml-3 flex-1 whitespace-nowrap font-medium">Data</span>
             </a>
           </li>
         </ul>
         <div class="space-y-2 pt-2">
           <form action="/logout" method="post">
             @csrf
             <button type="submit"
               class="text-base font-normal rounded-lg hover:bg-red-300 flex items-center p-2 text-end bg-red-500 text-white font-semibold w-full">
               <i data-feather='log-out'></i>
               <span class="ml-3">Logout</span>
             </button>
           </form>
         </div>
       </div>
     </div>
   </div>
 </aside>