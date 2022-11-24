<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
         <!-- Styles -->
        {{-- @livewireStyles
        @powerGridStyles --}}
    </head>
    <body class="font-sans antialiased">
        <div class="p-20s"></div>
        <div class="min-h-screen bg-gray-100">
            <main class="bg-gray-100 white:bg-gray-800 rounded-lg h-screen overflow-hidden relative">
                
                <div class="flex items-start justify-center">
                    
                {{-- Navigation Bar --}}
                @include('layouts.navigation')
                
                    <div class="flex flex-col w-10/12 pl-0 m-2 ml-0 md:space-y-2">
                    
                        <header class="w-full shadow-lg bg-white white:bg-gray-700 items-center h-16 rounded-lg ">
                            <div class="relative  flex flex-col justify-center h-full px-3 mx-auto flex-center">
                                <div class="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
                                    <div class="container relative left-0  flex w-3/4 h-auto h-full">
                                        <div class="relative flex text-gray-700 text-sm">
                                            <div class="relative flex mx-1 ">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </span>
                                                <span class="mx-1 py-1"> 10:30 pm</span>
                                            </div>
                                            <div class="relative flex mx-1">
                                                <span class="mx-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                                    </svg>
                                                </span>
                                                <span class="mx-1 py-1"> January 01, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="relative p-1 flex items-center justify-end w-1/4 ml-5 mr-4 sm:mr-0 sm:right-auto">
                                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                                            <x-dropdown align="right" width="48">
                                                <x-slot name="trigger">
                                                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                                        <div>{{ Auth::user()->name }}</div>
                            
                                                        <div class="ml-1">
                                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </x-slot>
                            
                                                <x-slot name="content">
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                            
                                                        <x-dropdown-link :href="route('logout')"
                                                                onclick="event.preventDefault();
                                                                            this.closest('form').submit();">
                                                            {{ __('Log Out') }}
                                                        </x-dropdown-link>
                                                    </form>
                                                </x-slot>
                                            </x-dropdown>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>

                        {{-- MAIN Start--}}
                        {{ $slot }}
                        {{-- MAIN END --}}

                    </div>
                </div>
            </main>
        </div>
        <!-- Scripts -->
        <script>
            function isNumberKey(txt, evt){
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode == 46) {
                    //Check if the text already contains the . character
                    if (txt.value.indexOf('.') === -1) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    if (charCode > 31
                        && (charCode < 48 || charCode > 57))
                        return false;
                }
                return true;
            }

            
            
            function refreshTable(){
                $(".appends").each(function(index, element){
                    var ind = index+1;
                    
                    $(this).find("select.allowance_name").attr('id', 'allowance_name' + ind);
                    $(this).find("input.allowance_rate").attr('id', 'allowance_rate' + ind);
                    if(host.indexOf('edit')==38){
                        $(this).find("a.delete_func").attr('id', 'delete_func' + ind);
                        var allowance_name = document.getElementById("allowance_name"+ind).value;
                        if(allowance_name!=''){
                            document.getElementById("delete_func"+ind).style.display = "block";
                        }else{
                            document.getElementById("delete_func"+ind).style.display = "none";
                        }
                    }
                    $("body").on("change", "#allowance_name"+ind, function(e) {
                        e.preventDefault();
                        var allowance_id = document.getElementById("allowance_name"+ind).value;
                        var base_url = '{{URL::to("/")}}';
                        $.ajax({
                            type: 'POST',
                            url: base_url+"/allowancerate/fetchrate",
                            data: {
                                allowance_id: allowance_id,
                                _token: '{{csrf_token()}}'
                            },
                            dataType: 'json',
                            cache: false,
                            success: function(response){
                                document.getElementById("allowance_rate"+ind).value  = response.allowance_rate;
                            }
                        }); 
                    }); 
                });
            }
            //var ee = 1;
            var host = window.location.href;
            
            if(host.indexOf('create')==36){
                var ee = 1;
            }else if(host.indexOf('edit')==38){
                var ee = document.getElementById('count').value;
            }else{
                var ee = 1;
            }
            $("body").on("click", ".addAllowance", function(e) {
                e.preventDefault();
                ee++;
                var $append = $(this).parents('.appends');
                var nextHtml = $append.clone().find("input:text").val('').end();
                nextHtml.find('select').val('');
                nextHtml.attr('id', 'appends' + ee);
                var hasRmBtn = $('.remAllowance', nextHtml).length > 0;
                if (!hasRmBtn) {
                    var rms = "<button class='flex items-center justify-center px-2 py-2 mt-3 ml-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-lg white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50 remAllowance'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-4 h-4'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg></button>";
                    $('.addmoreappend', nextHtml).append(rms);
                }
                if(host.indexOf('edit')==38){
                    document.getElementById("counterX").value = ee;
                }
                
                $append.after(nextHtml);
                refreshTable();
                if(host.indexOf('edit')==38){
                    document.getElementById("delete_func"+ee).style.display = "none";
                }
                //$(".addAllowance").hide();
                //document.getElementsByClassName("remover").style.display = "block";
                // var btn_allowance = document.getElementById("btn_allowance");
                // btn_allowance.style.display = "block";
            });

            $( document ).ready(function() {
                refreshTable();
                $(".allowance_name").each(function(index, element){
                    var add=index+1;
                    $("body").on("change", "#allowance_name"+add, function(e) {
                        e.preventDefault();
                        var allowance_id = document.getElementById("allowance_name1").value;
                        var base_url = '{{URL::to("/")}}';
                        $.ajax({
                            type: 'POST',
                            url: base_url+"/allowancerate/fetchrate",
                            data: {
                                allowance_id: allowance_id,
                                _token: '{{csrf_token()}}'
                            },
                            dataType: 'json',
                            cache: false,
                            success: function(response){
                                document.getElementById("allowance_rate1").value  = response.allowance_rate;
                            }
                        }); 
                    });
                });
            });

            $("body").on("click", ".remAllowance", function() {
                $(this).parents('.appends').remove();
            });

            function check_duplicate() {
                var selects = document.getElementsByTagName('select');
                var values = [];
                for(i=0;i<selects.length;i++) {
                    var select = selects[i];
                    if(values.indexOf(select.value)>-1) {
                        document.getElementById('show_alert').style.display = "block";
                        document.getElementById('alerterror').innerHTML='Duplicate Allowance Entry';
                        $('#save_button').hide();
                    }else{ 
                        document.getElementById('show_alert').style.display = "none";
                        $('#save_button').show();
                        values.push(select.value);
                    }
                }
            }
        </script>
        {{-- @livewireScripts
        @powerGridScripts --}}
    </body>
</html>