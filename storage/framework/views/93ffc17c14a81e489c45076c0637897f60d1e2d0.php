<div class="h-screen hidden lg:block my-4 ml-4 shadow-lg relative w-72">
    <div class="bg-white h-full rounded-2xl white:bg-gray-700">
        <div class="flex items-center justify-center pt-6">
            <svg width="35" height="30" viewBox="0 0 256 366" version="1.1" preserveAspectRatio="xMidYMid">
                <defs>
                    <linearGradient x1="12.5189534%" y1="85.2128611%" x2="88.2282959%" y2="10.0225497%" id="linearGradient-1">
                        <stop stop-color="#FF0057" stop-opacity="0.16" offset="0%">
                        </stop>
                        <stop stop-color="#FF0057" offset="86.1354%">
                        </stop>
                    </linearGradient>
                </defs>
                <g>
                    <path d="M0,60.8538006 C0,27.245261 27.245304,0 60.8542121,0 L117.027019,0 L255.996549,0 L255.996549,86.5999776 C255.996549,103.404155 242.374096,117.027222 225.569919,117.027222 L145.80812,117.027222 C130.003299,117.277829 117.242615,130.060011 117.027019,145.872817 L117.027019,335.28252 C117.027019,352.087312 103.404567,365.709764 86.5997749,365.709764 L0,365.709764 L0,117.027222 L0,60.8538006 Z" fill="#001B38">
                    </path>
                    <circle fill="url(#linearGradient-1)" transform="translate(147.013244, 147.014675) rotate(90.000000) translate(-147.013244, -147.014675) " cx="147.013244" cy="147.014675" r="78.9933938">
                    </circle>
                    <circle fill="url(#linearGradient-1)" opacity="0.5" transform="translate(147.013244, 147.014675) rotate(90.000000) translate(-147.013244, -147.014675) " cx="147.013244" cy="147.014675" r="78.9933938">
                    </circle>
                </g>
            </svg>
        </div>
        <nav class="mt-6 ">
            <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                
                <div class="bg-white" x-data="{selected:0}">
                    <ul >  
                        <li class="relative ">
                            <a class="w-full font-thin uppercase text-blue-500 text-gray-500 white:text-gray-200 flex items-center px-4 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500 bg-gradient-to-r from-white to-blue-100 white:from-gray-700 white:to-gray-800" href="<?php echo e(route("dashboard")); ?>">
                                <span class="text-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                                        <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                                    </svg>
                                      
                                </span>
                                <span class="mx-4 text-xs font-bold">
                                    Dashboard
                                </span>
                            </a>
                        </li>   
                        <li class="relative ">
                            <a class="w-full font-thin uppercase text-gray-500 white:text-gray-200 flex items-center px-4 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" href="#" @click="selected !== 1 ? selected = 1 : selected = null">
                                <span class="text-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.875 14.25l1.214 1.942a2.25 2.25 0 001.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 011.872 1.002l.164.246a2.25 2.25 0 001.872 1.002h2.092a2.25 2.25 0 001.872-1.002l.164-.246A2.25 2.25 0 0116.954 9h4.636M2.41 9a2.25 2.25 0 00-.16.832V12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 01.382-.632l3.285-3.832a2.25 2.25 0 011.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0021.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                      
                                      
                                </span>
                                <span class="mx-4 text-xs font-bold">
                                    Masterfile
                                </span>
                            </a>
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''">
                                <ul>
                                    <li class="relative">
                                        <a href="<?php echo e(route('calendar_list')); ?>" class="w-full font-thin text-gray-500 text-sm white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Calendar</a>
                                    </li>
                                    <li class="relative">
                                        <a href="<?php echo e(route('cut_off_list')); ?>" class="w-full font-thin text-gray-500 text-sm white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Cut Off</a>
                                    </li>
                                    <li class="relative">
                                        <a href="<?php echo e(route('deduction_list')); ?>" class="w-full text-sm font-thin text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Deductions</a>
                                    </li>
                                    <li class="relative">
                                        <a href="<?php echo e(route('employee_list')); ?>" class="w-full text-sm font-thin text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Employee List</a>
                                    </li>
                                    <li class="relative">
                                        <a href="<?php echo e(route('rates_list')); ?>" class="w-full font-thin text-sm text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Rates</a>
                                    </li>
                                    <li class="relative">
                                        <a href="<?php echo e(route('schedule_list')); ?>" class="w-full font-thin text-sm text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Schedules</a>
                                    </li>
                                    <li class="relative">
                                        <a href="<?php echo e(route('statutory_bracket')); ?>" class="w-full font-thin text-sm text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Statutory Bracket</a>
                                    </li>
                                    <li class="relative">
                                        <a href="<?php echo e(route('tardiness_rate_list')); ?>" class="w-full font-thin text-sm text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Tardiness Rates</a>
                                    </li>
                                </ul>
                            </div>
                        </li>       
                        <li class="relative ">
                            <a class="w-full font-thin uppercase text-gray-500 white:text-gray-200 flex items-center px-4 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" href="#" @click="selected !== 2 ? selected = 2 : selected = null">
                                <span class="text-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                                      </svg>
                                      
                                      
                                </span>
                                <span class="mx-4 text-xs font-bold">
                                    Payroll
                                </span>
                            </a>
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <ul>
                                    <li class="px-14 py-2 my-1">Report 1</li>
                                    <li class="px-14 py-2 my-1">Report 2</li>
                                    <li class="px-14 py-2 my-1">Report 3</li>
                                    <li class="px-14 py-2 my-1">Report 4</li>
                                    <li class="px-14 py-2 my-1">Report 5</li>
                                </ul>
                            </div>
                        </li>
                        <li class="relative ">
                            <a class="w-full font-thin uppercase text-gray-500 white:text-gray-200 flex items-center px-4 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" href="#" @click="selected !== 3 ? selected = 3 : selected = null">
                                <span class="text-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                      </svg>
                                </span>
                                <span class="mx-4 text-xs font-bold">
                                    Reports
                                </span>
                            </a>
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <ul>
                                    <li class="px-14 py-2 my-1">Report 1</li>
                                    <li class="px-14 py-2 my-1">Report 2</li>
                                    <li class="px-14 py-2 my-1">Report 3</li>
                                    <li class="px-14 py-2 my-1">Report 4</li>
                                    <li class="px-14 py-2 my-1">Report 5</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
        
    
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/layouts/navigation.blade.php ENDPATH**/ ?>