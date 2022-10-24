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
                            <a class="w-full font-thin uppercase text-blue-500 text-gray-500 white:text-gray-200 flex items-center px-4 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500 bg-gradient-to-r from-white to-blue-100 white:from-gray-700 white:to-gray-800" href="{{  route("dashboard") }}">
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
                                        <a href="{{ route('employee_list') }}" class="w-full text-sm font-thin text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Employee List</a>
                                    </li>
                                    <li class="relative">
                                        <a href="{{ route('schedule_list') }}" class="w-full font-thin text-sm text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Schedule</a>
                                    </li>
                                    <li class="relative">
                                        <a href="{{ route('calendar_list') }}" class="w-full font-thin text-gray-500 text-sm white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Calendar</a>
                                    </li>
                                    <li class="relative">
                                        <a href="{{ route('allowance_list') }}" class="w-full font-thin text-gray-500 text-sm white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Allowances</a>
                                    </li>
                                    <li class="relative">
                                        <a href="{{ route('allowance_rate_list') }}" class="w-full font-thin text-gray-500 text-sm white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Allowance Rates</a>
                                    </li>
                                    <li class="relative">
                                        <a href="{{ route('deduction_list') }}" class="w-full text-sm font-thin text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Deductions</a>
                                    </li>
                                    <li class="relative">
                                        <a href="{{ route('rates_list') }}" class="w-full font-thin text-sm text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Rates</a>
                                    </li>
                                    <li class="relative">
                                        <a href="{{ route('statutory_bracket') }}" class="w-full font-thin text-sm text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Statutory Bracket</a>
                                    </li>
                                    <li class="relative">
                                        <a href="{{ route('tardiness_rate_list') }}" class="w-full font-thin text-sm text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Tardiness Rates</a>
                                    </li>
                                    <li class="relative mb-10">
                                        <a href="{{ route('cut_off_list') }}" class="w-full font-thin text-gray-500 text-sm white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Cut Off</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li> 
                        <li class="relative ">
                            <a class="w-full font-thin uppercase text-gray-500 white:text-gray-200 flex items-center px-4 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500 bg-gradient-to-r white:from-gray-700 white:to-gray-800" href="{{  route("shift_sched") }}">
                                <span class="text-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                    </svg>                                         
                                      
                                </span>
                                <span class="mx-4 text-xs font-bold">
                                    Shift Schedule
                                </span>
                            </a>
                        </li>    
                        <li class="relative ">
                            <a class="w-full font-thin uppercase text-gray-500 white:text-gray-200 flex items-center px-4 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" href="#" @click="selected !== 5 ? selected = 5 : selected = null">
                                <span class="text-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>
                                </span>
                                <span class="mx-4 text-xs font-bold">
                                    Filing
                                </span>
                            </a>
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 5 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <ul>
                                    <li class="relative">
                                        <a href="{{ route('leave_list') }}" class="w-full text-sm font-thin text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Leave/Failure to Log In/Out</a>
                                    </li>
                                    <li class="relative">
                                        <a href="{{ route('ot_list') }}" class="w-full font-thin text-sm text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Overtime</a>
                                    </li>
                                </ul>
                            </div>
                        </li>    
                        <li class="relative ">
                            <a class="w-full font-thin uppercase text-gray-500 white:text-gray-200 flex items-center px-4 py-2 my-1  duration-200 justify-start hover:text-blue-500 " href="{{  route("upload_allowance") }}">
                                <span class="text-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m0-3l-3-3m0 0l-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75" />
                                    </svg>
                                </span>
                                <span class="mx-4 text-xs font-bold">
                                    Upload Allowance
                                </span>
                            </a>
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
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                <ul>
                                    <li class="relative">
                                        <a href="{{ route('payroll_salary') }}" class="w-full text-sm font-thin text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Salary</a>
                                    </li>
                                    <li class="relative">
                                        <a href="{{ route('payroll_allowance') }}" class="w-full font-thin text-sm text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Allowance</a>
                                    </li>
                                    <li class="relative">
                                        <a href="{{ route('payroll_overtime') }}" class="w-full font-thin text-gray-500 text-sm white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Overtime</a>
                                    </li>
                                    <li class="relative">
                                        <a href="{{ route('payroll_bonus') }}" class="w-full font-thin text-gray-500 text-sm white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Bonus</a>
                                    </li>
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
                                    <li class="relative">
                                        <a href="{{ route('employee_list') }}" class="w-full text-sm font-thin text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Sample 1</a>
                                    </li>
                                    <li class="relative">
                                        <a href="{{ route('schedule_list') }}" class="w-full font-thin text-sm text-gray-500 white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Sample 2</a>
                                    </li>
                                    <li class="relative">
                                        <a href="{{ route('calendar_list') }}" class="w-full font-thin text-gray-500 text-sm white:text-gray-200 flex items-center px-14 py-2 my-1 transition-colors duration-200 justify-start hover:text-blue-500" >Sample 3</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
        
    
