<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="w-7/12">
                <div class="mb-2 mx-0 xl:mr-2">
                    <div class="shadow-md rounded-lg w-full bg-gradient-to-r from-blue-400 to-blue-100">
                        <div class="bg-[url('images/kalendaryo.png')] bg-[length:200px_120px] bg-no-repeat bg-right-bottom"> 
                            <div class="flex justify-between ">
                                <div class="px-6 py-6">
                                    
                                    <p class="font-bold text-lg text-white uppercase leading-snone">
                                        December 20, 2022  <span class="mx-2"> ● </span> January 5, 2023
                                    </p>
                                    <p class="text-sm text-white leading-none"> 
                                        Current Cut Off
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-2 mx-0 xl:mr-2">
                    <div class="flex justify-between space-x-2">
                        <a href="" class="shadow-md rounded-lg w-full bg-gradient-to-r from-emerald-300 to-lime-300">
                            <div class="bg-[url('images/circle.png')] bg-[length:170px_100px] bg-no-repeat bg-right-top rounded-lg"> 
                                <div class="flex justify-between">
                                    <div class="px-6 py-4">
                                        <p class="text-sm text-white leading-none">
                                            Unfiled 
                                        </p>
                                        <p class="font-bold text-md  text-white leading-none">
                                            Leave
                                        </p>
                                    </div>
                                    <div class="px-6 py-4">
                                        <p class="font-bold text-2xl text-lime-400">
                                            09
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="shadow-md rounded-lg w-full bg-gradient-to-r from-emerald-300 to-lime-300">
                            <div class="bg-[url('images/circle.png')] bg-[length:170px_100px] bg-no-repeat bg-right rounded-lg"> 
                                <div class="flex justify-between">
                                    <div class="px-6 py-4">
                                        <p class="text-sm text-white leading-none">
                                            Unfiled 
                                        </p>
                                        <p class="font-bold text-md  text-white leading-none">
                                            Swap
                                        </p>
                                    </div>
                                    <div class="px-6 py-4">
                                        <p class="font-bold text-2xl text-lime-400">
                                            09
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="shadow-md rounded-lg w-full bg-gradient-to-r from-emerald-300 to-lime-300">
                            <div class="bg-[url('images/circle.png')] bg-[length:170px_100px] bg-no-repeat bg-right-bottom rounded-lg"> 
                                <div class="flex justify-between">
                                    <div class="px-6 py-4">
                                        <p class="text-sm text-white leading-none">
                                            Unfiled 
                                        </p>
                                        <p class="font-bold text-md  text-white leading-none">
                                            Overtime
                                        </p>
                                    </div>
                                    <div class="px-6 py-4">
                                        <p class="font-bold text-2xl text-lime-400">
                                            09
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="mb-2 mx-0 xl:mr-2">
                    <div class="shadow-md rounded-lg bg-white white:bg-gray-700 w-full p">
                        <div class="flex justify-between p-4 px-6 ">
                            <p class="font-bold text-md text-black white:text-white">
                                Reminder 
                                <span class="text-sm text-gray-500 white:text-gray-300 white:text-white ml-2">
                                    (05)
                                </span>
                            </p>
                            <button data-modal-target="medium-modal" data-modal-toggle="medium-modal">
                                <div class="items-center justify-center px-2 py-2  text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                        <ul>
                            <li class="flex items-center text-gray-600 white:text-gray-200 justify-between py-3 border-b-2 border-gray-100 white:border-gray-800 px-4">
                                <div class="flex items-center justify-start text-sm">
                                    <span class="mx-4">
                                        01
                                    </span>
                                    <span>
                                        Create wireframe
                                    </span>
                                </div>
                                <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 white:text-gray-300" viewBox="0 0 1024 1024">
                                    <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                    </path>
                                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                    </path>
                                </svg>
                            </li>
                            <li class="flex items-center text-gray-600 white:text-gray-200 justify-between py-3 border-b-2 border-gray-100 white:border-gray-800 px-4">
                                <div class="flex items-center justify-start text-sm">
                                    <span class="mx-4">
                                        02
                                    </span>
                                    <span>
                                        Dashboard design
                                    </span>
                                    <span class="lg:ml-6 ml-2 flex items-center text-gray-400 white:text-gray-300">
                                        3
                                        <svg width="15" height="15" fill="currentColor" class="ml-1" viewBox="0 0 512 512">
                                            <path d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2l-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29c7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1l-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160s-93.3 160-208 160z" fill="currentColor">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="mx-4 flex items-center text-gray-400 white:text-gray-300">
                                        3
                                        <svg width="15" height="15" class="ml-1" fill="currentColor" viewBox="0 0 384 512">
                                            <path d="M384 144c0-44.2-35.8-80-80-80s-80 35.8-80 80c0 36.4 24.3 67.1 57.5 76.8c-.6 16.1-4.2 28.5-11 36.9c-15.4 19.2-49.3 22.4-85.2 25.7c-28.2 2.6-57.4 5.4-81.3 16.9v-144c32.5-10.2 56-40.5 56-76.3c0-44.2-35.8-80-80-80S0 35.8 0 80c0 35.8 23.5 66.1 56 76.3v199.3C23.5 365.9 0 396.2 0 432c0 44.2 35.8 80 80 80s80-35.8 80-80c0-34-21.2-63.1-51.2-74.6c3.1-5.2 7.8-9.8 14.9-13.4c16.2-8.2 40.4-10.4 66.1-12.8c42.2-3.9 90-8.4 118.2-43.4c14-17.4 21.1-39.8 21.6-67.9c31.6-10.8 54.4-40.7 54.4-75.9zM80 64c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16zm0 384c-8.8 0-16-7.2-16-16s7.2-16 16-16s16 7.2 16 16s-7.2 16-16 16zm224-320c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16z" fill="currentColor">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 white:text-gray-300" viewBox="0 0 1024 1024">
                                    <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                    </path>
                                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                    </path>
                                </svg>
                            </li>
                            <li class="flex items-center text-gray-600 white:text-gray-200 justify-between py-3 border-b-2 border-gray-100 white:border-gray-800 px-4">
                                <div class="flex items-center justify-start text-sm">
                                    <span class="mx-4">
                                        03
                                    </span>
                                    <span>
                                        Components card
                                    </span>
                                    <span class="lg:ml-6 ml-2 flex items-center text-gray-400 white:text-gray-300">
                                        3
                                        <svg width="15" height="15" fill="currentColor" class="ml-1" viewBox="0 0 512 512">
                                            <path d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2l-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29c7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1l-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160s-93.3 160-208 160z" fill="currentColor">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 white:text-gray-300" viewBox="0 0 1024 1024">
                                    <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                    </path>
                                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                    </path>
                                </svg>
                            </li>
                            <li class="flex items-center text-gray-400 justify-between py-3 border-b-2 border-gray-100 white:border-gray-800 px-4">
                                <div class="flex items-center justify-start text-sm">
                                    <span class="mx-4">
                                        04
                                    </span>
                                    <span class="line-through">
                                        Google logo design
                                    </span>
                                </div>
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024" class="text-green-500 mx-4">
                                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z" fill="currentColor">
                                    </path>
                                </svg>
                            </li>
                            <li class="flex items-center text-gray-400  justify-between py-3 border-b-2 border-gray-100 white:border-gray-800 px-4">
                                <div class="flex items-center justify-start text-sm">
                                    <span class="mx-4">
                                        05
                                    </span>
                                    <span class="line-through">
                                        Header navigation
                                    </span>
                                </div>
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024" class="text-green-500 mx-4">
                                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z" fill="currentColor">
                                    </path>
                                </svg>
                            </li>
                            <li class="flex items-center text-gray-600 white:text-gray-200 justify-between py-3 border-b-2 border-gray-100 white:border-gray-800 px-4">
                                <div class="flex items-center justify-start text-sm">
                                    <span class="mx-4">
                                        06
                                    </span>
                                    <span>
                                        International
                                    </span>
                                    <span class="lg:ml-6 ml-2 flex items-center text-gray-400 white:text-gray-300">
                                        3
                                        <svg width="15" height="15" fill="currentColor" class="ml-1" viewBox="0 0 512 512">
                                            <path d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2l-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29c7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1l-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160s-93.3 160-208 160z" fill="currentColor">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="mx-4 flex items-center text-gray-400 white:text-gray-300">
                                        3
                                        <svg width="15" height="15" class="ml-1" fill="currentColor" viewBox="0 0 384 512">
                                            <path d="M384 144c0-44.2-35.8-80-80-80s-80 35.8-80 80c0 36.4 24.3 67.1 57.5 76.8c-.6 16.1-4.2 28.5-11 36.9c-15.4 19.2-49.3 22.4-85.2 25.7c-28.2 2.6-57.4 5.4-81.3 16.9v-144c32.5-10.2 56-40.5 56-76.3c0-44.2-35.8-80-80-80S0 35.8 0 80c0 35.8 23.5 66.1 56 76.3v199.3C23.5 365.9 0 396.2 0 432c0 44.2 35.8 80 80 80s80-35.8 80-80c0-34-21.2-63.1-51.2-74.6c3.1-5.2 7.8-9.8 14.9-13.4c16.2-8.2 40.4-10.4 66.1-12.8c42.2-3.9 90-8.4 118.2-43.4c14-17.4 21.1-39.8 21.6-67.9c31.6-10.8 54.4-40.7 54.4-75.9zM80 64c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16zm0 384c-8.8 0-16-7.2-16-16s7.2-16 16-16s16 7.2 16 16s-7.2 16-16 16zm224-320c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16z" fill="currentColor">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 white:text-gray-300" viewBox="0 0 1024 1024">
                                    <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                    </path>
                                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                    </path>
                                </svg>
                            </li>
                            <li class="flex items-center text-gray-600 white:text-gray-200 justify-between py-3 px-4">
                                <div class="flex items-center justify-start text-sm">
                                    <span class="mx-4">
                                        07
                                    </span>
                                    <span>
                                        Production data
                                    </span>
                                </div>
                                <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 white:text-gray-300" viewBox="0 0 1024 1024">
                                    <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                    </path>
                                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                    </path>
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-5/12">
                <div class="mb-2">
                    <div class="shadow-md rounded-lg p-4 bg-white white:bg-gray-700">
                        <div class="flex flex-wrap overflow-hidden">
                            <div class="w-full rounded shadow-sm">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="text-left font-bold text-xl text-black white:text-white">
                                        Dec 2021
                                    </div>
                                    <div class="flex space-x-4">
                                        <button class="p-2 rounded-full bg-blue-500 text-white">
                                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M13.83 19a1 1 0 0 1-.78-.37l-4.83-6a1 1 0 0 1 0-1.27l5-6a1 1 0 0 1 1.54 1.28L10.29 12l4.32 5.36a1 1 0 0 1-.78 1.64z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button class="p-2 rounded-full bg-blue-500 text-white">
                                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M10 19a1 1 0 0 1-.64-.23a1 1 0 0 1-.13-1.41L13.71 12L9.39 6.63a1 1 0 0 1 .15-1.41a1 1 0 0 1 1.46.15l4.83 6a1 1 0 0 1 0 1.27l-5 6A1 1 0 0 1 10 19z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="-mx-2">
                                    <table class="w-full white:text-white">
                                        <tr>
                                            <th class="py-3 px-2 md:px-3 ">
                                                S
                                            </th>
                                            <th class="py-3 px-2 md:px-3 ">
                                                M
                                            </th>
                                            <th class="py-3 px-2 md:px-3 ">
                                                T
                                            </th>
                                            <th class="py-3 px-2 md:px-3 ">
                                                W
                                            </th>
                                            <th class="py-3 px-2 md:px-3 ">
                                                T
                                            </th>
                                            <th class="py-3 px-2 md:px-3 ">
                                                F
                                            </th>
                                            <th class="py-3 px-2 md:px-3 ">
                                                S
                                            </th>
                                        </tr>
                                        <tr class="text-gray-400 white:text-gray-500">
                                            <td class="py-3 px-2 md:px-3  text-center text-gray-300 white:text-gray-500">
                                                25
                                            </td>
                                            <td class="py-3 px-2 md:px-3  text-center text-gray-300 white:text-gray-500">
                                                26
                                            </td>
                                            <td class="py-3 px-2 md:px-3  text-center text-gray-300 white:text-gray-500">
                                                27
                                            </td>
                                            <td class="py-3 px-2 md:px-3  text-center text-gray-300 white:text-gray-500">
                                                28
                                            </td>
                                            <td class="py-3 px-2 md:px-3  text-center text-gray-300 white:text-gray-500">
                                                29
                                            </td>
                                            <td class="py-3 px-2 md:px-3  text-center text-gray-300 white:text-gray-500">
                                                30
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center text-gray-800 cursor-pointer">
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                2
                                            </td>
                                            <td class="py-3 relative px-1  hover:text-blue-500 text-center cursor-pointer">
                                                3
                                                <span class="absolute rounded-full h-2 w-2 bg-blue-500 bottom-0 left-1/2 transform -translate-x-1/2">
                                                </span>
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                4
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                5
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                6
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                7
                                            </td>
                                            <td class="py-3 px-2 md:px-3 md:px-2 relative lg:px-3 hover:text-blue-500 text-center cursor-pointer">
                                                8
                                                <span class="absolute rounded-full h-2 w-2 bg-yellow-500 bottom-0 left-1/2 transform -translate-x-1/2">
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                9
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                10
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                11
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                12
                                            </td>
                                            <td class="py-3 px-2 md:px-3  text-center text-white cursor-pointer">
                                                <span class="p-2 rounded-full bg-blue-500">
                                                    13
                                                </span>
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                14
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                15
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                16
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                17
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                18
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                19
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                20
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                21
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                22
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                23
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                24
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 relative text-center cursor-pointer">
                                                25
                                                <span class="absolute rounded-full h-2 w-2 bg-red-500 bottom-0 left-1/2 transform -translate-x-1/2">
                                                </span>
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                26
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                27
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                28
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                29
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                30
                                            </td>
                                            <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                31
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-2">
                        <p class="font-bold text-md text-black white:text-white">
                            Messages
                        </p>
                        <ul>
                            <li class="flex items-center my-6 space-x-2">
                                <a href="#" class="block relative">
                                    <img alt="profil" src="/images/person/1.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                </a>
                                <div class="flex flex-col">
                                    <span class="text-sm text-gray-900 font-semibold white:text-white ml-2">
                                        Charlie Rabiller
                                    </span>
                                    <span class="text-sm text-gray-400 white:text-gray-300 ml-2">
                                        Hey John ! Do you read the NextJS doc ?
                                    </span>
                                </div>
                            </li>
                            <li class="flex items-center my-6 space-x-2">
                                <a href="#" class="block relative">
                                    <img alt="profil" src="/images/person/5.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                </a>
                                <div class="flex flex-col">
                                    <span class="text-sm text-gray-900 font-semibold white:text-white ml-2">
                                        Marie Lou
                                    </span>
                                    <span class="text-sm text-gray-400 white:text-gray-300 ml-2">
                                        No I think the dog is better...
                                    </span>
                                </div>
                            </li>
                            <li class="flex items-center my-6 space-x-2">
                                <a href="#" class="block relative">
                                    <img alt="profil" src="/images/person/6.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                </a>
                                <div class="flex flex-col">
                                    <span class="text-sm text-gray-900 font-semibold white:text-white ml-2">
                                        Ivan Buck
                                    </span>
                                    <span class="text-sm text-gray-400 white:text-gray-300 ml-2">
                                        Seriously ? haha Bob is not a child !
                                    </span>
                                </div>
                            </li>
                            <li class="flex items-center my-6 space-x-2">
                                <a href="#" class="block relative">
                                    <img alt="profil" src="/images/person/7.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                </a>
                                <div class="flex flex-col">
                                    <span class="text-sm text-gray-900 font-semibold white:text-white ml-2">
                                        Marina Farga
                                    </span>
                                    <span class="text-sm text-gray-400 white:text-gray-300 ml-2">
                                        Do you need that design ?
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- modal --}}
    <div id="medium-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-lg md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Default modal
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="medium-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span> 
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="medium-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                    <button data-modal-hide="medium-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
            </div>
        </div>
    </div>
        
</x-app-layout>