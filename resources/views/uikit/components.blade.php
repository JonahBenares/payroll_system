<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="overflow-auto h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
		<div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="p-4 relative h-full w-full bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <h2>Buttons</h2>
                <div class="py-3 flex ">
                    <p class="px-3 py-2">Sizes :</p>
                    <a href="#" type="button" >
                        <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-xs tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Button - xs</span>
                        </div>
                    </a>
                    <a href="#" type="button" >
                        <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Button - sm</span>
                        </div>
                    </a>
                    <a href="#" type="button" >
                        <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-base tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Button - base</span>
                        </div>
                    </a>
                    <a href="#" type="button" >
                        <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-lg tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Button -  lg</span>
                        </div>
                    </a>
                    <a href="#" type="button" >
                        <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-xl tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Button - xl</span>
                        </div>
                    </a>
                    
                </div>
                <div class="py-3 flex ">
                    <p class="px-3 py-2">Color :</p>
                    <a href="#" type="button" >
                        <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Primary</span>
                        </div>
                    </a>
                    <a href="#" type="button" >
                        <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-purple-500 rounded-2xl white:bg-purple-600 white:hover:bg-purple-700 white:focus:bg-purple-700 hover:bg-purple-600 focus:outline-none focus:bg-purple-500 focus:ring focus:ring-purple-300 focus:ring-opacity-50">
                            <span>Secondary</span>
                        </div>
                    </a>
                    <a href="#" type="button" >
                        <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-2xl white:bg-blue-600 white:hover:bg-blue-700 white:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            <span>Info</span>
                        </div>
                    </a>
                    <a href="#" type="button" >
                        <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-emerald-500 rounded-2xl white:bg-emerald-600 white:hover:bg-emerald-700 white:focus:bg-emerald-700 hover:bg-emerald-600 focus:outline-none focus:bg-emerald-500 focus:ring focus:ring-emerald-300 focus:ring-opacity-50">
                            <span>Success</span>
                        </div>
                    </a>
                    <a href="#" type="button" >
                        <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-amber-500 rounded-2xl white:bg-amber-600 white:hover:bg-amber-700 white:focus:bg-amber-700 hover:bg-amber-600 focus:outline-none focus:bg-amber-500 focus:ring focus:ring-amber-300 focus:ring-opacity-50">
                            <span>Warning</span>
                        </div>
                    </a>
                    <a href="#" type="button" >
                        <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
                            <span>Danger</span>
                        </div>
                    </a>
                </div>
            </div> 
        </div>
    </div>
</x-app-layout>