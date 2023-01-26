<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cd:\Program Files\Microsoft VS Code\resources\app\out\vs\code\electron-sandbox\workbench\workbench.htmldn.min.js"></script>
        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
         <!-- Styles -->
        
    </head>
    <body class="font-sans antialiased">
        <div class="p-20s"></div>
        <div class="min-h-screen bg-gray-100">
            <main class="bg-gray-100 white:bg-gray-800 rounded-lg h-screen overflow-hidden relative">
                
                <div class="flex items-start justify-center">
                    
                
                <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
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
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown','data' => ['align' => 'right','width' => '48']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
                                                 <?php $__env->slot('trigger', null, []); ?> 
                                                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                                        <div><?php echo e(Auth::user()->name); ?></div>
                            
                                                        <div class="ml-1">
                                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                    </button>
                                                 <?php $__env->endSlot(); ?>
                            
                                                 <?php $__env->slot('content', null, []); ?> 
                                                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                                                        <?php echo csrf_field(); ?>
                            
                                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                                                            this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                                                            this.closest(\'form\').submit();']); ?>
                                                            <?php echo e(__('Log Out')); ?>

                                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                    </form>
                                                 <?php $__env->endSlot(); ?>
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>

                        
                        <?php echo e($slot); ?>

                        

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
                    if(host.indexOf('edit')==49){
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
                        var base_url = '<?php echo e(URL::to("/")); ?>';
                        $.ajax({
                            type: 'POST',
                            url: base_url+"/allowancerate/fetchrate",
                            data: {
                                allowance_id: allowance_id,
                                _token: '<?php echo e(csrf_token()); ?>'
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
                var zz = 1;
            }else if(host.indexOf('edit')==49){
                var zz = document.getElementById('count').value;
            }else{
                var zz = 1;
            }
            $("body").on("click", ".addAllowance", function(e) {
                e.preventDefault();
                zz++;
                var $append = $(this).parents('.appends');
                var nextHtml = $append.clone().find("input:text").val('').end();
                nextHtml.find('select').val('');
                nextHtml.attr('id', 'appends' + zz);
                var hasRmBtn = $('.remAllowance', nextHtml).length > 0;
                if (!hasRmBtn) {
                    var rms = "<button class='flex items-center justify-center px-2 py-2  my-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50  remAllowance'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-4 h-4'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg></button>";
                    $('.addmoreappend', nextHtml).append(rms);
                }
                if(host.indexOf('edit')==49){
                    document.getElementById("counterX").value = zz;
                }
                
                $append.after(nextHtml);
                refreshTable();
                if(host.indexOf('edit')==49){
                    document.getElementById("delete_func"+zz).style.display = "none";
                }
                //$(".addAllowance").hide();
                //document.getElementsByClassName("remover").style.display = "block";
                // var btn_allowance = document.getElementById("btn_allowance");
                // btn_allowance.style.display = "block";
            });

            $( document ).ready(function() {
                //refreshTable();
                $(".allowance_name").each(function(index, element){
                    var add=index+1;
                    $("body").on("change", "#allowance_name"+add, function(e) {
                        e.preventDefault();
                        var allowance_id = document.getElementById("allowance_name1").value;
                        var base_url = '<?php echo e(URL::to("/")); ?>';
                        $.ajax({
                            type: 'POST',
                            url: base_url+"/allowancerate/fetchrate",
                            data: {
                                allowance_id: allowance_id,
                                _token: '<?php echo e(csrf_token()); ?>'
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

            function refreshTable_payslip(){
                $(".appends").each(function(index, element){
                    var ind = index+1;
                    
                    $(this).find("select.description").attr('id', 'description' + ind);
                    $(this).find("input.employee_rate").attr('id', 'employee_rate' + ind);
                    if(host.indexOf('edit')==48){
                        $(this).find("a.delete_func").attr('id', 'delete_func' + ind);
                        var description = document.getElementById("description"+ind).value;
                        if(description!=''){
                            document.getElementById("delete_func"+ind).style.display = "block";
                        }else{
                            document.getElementById("delete_func"+ind).style.display = "none";
                        }
                    }
                });
            }
            
            //var ee = 1;
            var host = window.location.href;
            
            if(host.indexOf('create')==36){
                var ii = 1;
            }else if(host.indexOf('edit')==48){
                var ii = document.getElementById('count').value;
            }else{
                var ii = 1;
            }
            $("body").on("click", ".addInfo", function(e) {
                e.preventDefault();
                ii++;
                var $append = $(this).parents('.appends');
                var nextHtml = $append.clone().find("input:text").val('').end();
                nextHtml.find('select').val('');
                nextHtml.attr('id', 'appends' + ii);
                var hasRmBtn = $('.remInfo', nextHtml).length > 0;
                if (!hasRmBtn) {
                    var rms = "<button class='flex items-center justify-center px-2 py-2  my-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50  remInfo'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-4 h-4'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg></button>";
                    $('.addmoreappend', nextHtml).append(rms);
                }
                if(host.indexOf('edit')==48){
                    document.getElementById("counterX").value = ii;
                }
                $append.after(nextHtml);
                refreshTable_payslip();
                if(host.indexOf('edit')==48){
                    document.getElementById("delete_func"+ii).style.display = "none";
                }
                
                //$(".addAllowance").hide();
                //document.getElementsByClassName("remover").style.display = "block";
                // var btn_allowance = document.getElementById("btn_allowance");
                // btn_allowance.style.display = "block";
            });

            // $( document ).ready(function() {
            //     refreshTable_payslip();
            // });

            $("body").on("click", ".remInfo", function() {
                $(this).parents('.appends').remove();
            });

            function check_duplicate_info() {
                var selects = document.getElementsByTagName('select');
                var values = [];
                for(i=0;i<selects.length;i++) {
                    var select = selects[i];
                    if(values.indexOf(select.value)>-1) {
                        document.getElementById('show_alert').style.display = "block";
                        document.getElementById('alerterror').innerHTML='Duplicate Deduction Entry';
                        $('#save_button').hide();
                    }else{ 
                        document.getElementById('show_alert').style.display = "none";
                        $('#save_button').show();
                        values.push(select.value);
                    }
                }
            }

            function getRecordedtime(personal_id){
                var employee_id=document.getElementById("employee_id").value; 
                var personal_id=document.getElementById("personal_id").value; 
                var month_year=document.getElementById("month_year").value; 
                var period=document.getElementById("period").value; 
                var overtime_date=document.getElementById("overtime_date").value; 
                var overtimeurl=document.getElementById("overtimedate").value; 
                var base_url = '<?php echo e(URL::to("/")); ?>';
                $.ajax({
                    type: 'POST',
                    url: base_url+"/ot/fetchtime",
                    data: {
                        personal_id: personal_id,
                        overtime_date: overtime_date,
                        overtimeurl: overtimeurl,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    dataType: 'json',
                    cache: false,
                    success: function(response){
                       // alert(response);
                        var replace_url=base_url+"/ot/create?employee_id="+employee_id+'&personal_id='+personal_id+'&month_year='+month_year+'&period='+period+'&overtimedate='+overtime_date;
                        window.history.replaceState(null, null, replace_url);
                        //document.getElementById("showTime").innerHTML  = output;
                        document.getElementById("timein").innerHTML  = response.time_in;
                        document.getElementById("timeout").innerHTML  = response.time_out;
                        document.getElementById("name").innerHTML  = response.fullname;
                        document.getElementById("ot_head_id").value  = response.ot_head_id;
                        if(response.total_sumhour==0){
                            document.getElementById("no_hrs").innerHTML  = response.total_timemins+' min/s';
                        }else{
                            document.getElementById("no_hrs").innerHTML  = response.total_sumhour+' hr/s. & '+response.total_timemins+' min/s.';
                        }
                        document.getElementById("holidays").innerHTML  = response.holiday;
                        document.getElementById("overtimedate").value  = overtime_date;
                        $('#loadpage').load(replace_url+" #loadpage");
                        
                    }
                }); 
            }
        </script>
        <script>

            function refreshTable_schedule(){
                $(".appends_emp").each(function(index, element){
                
                    var ind = index+1;
                    
                    $(this).find("select.employee").attr('id', 'employee' + ind);
                    if(host.indexOf('edit')==38){
                        $(this).find("a.delete_func").attr('id', 'delete_func' + ind);
                        var employee_name = document.getElementById("employee"+ind).value;
                        if(employee_name!=''){
                            document.getElementById("delete_func"+ind).style.display = "block";
                        }else{
                            document.getElementById("delete_func"+ind).style.display = "none";
                        }
                    }
                    $("body").on("change", "#employee"+ind, function(e) {
                        e.preventDefault();
                        var employee_id = document.getElementById("employee"+ind).value;
                        var base_url = '<?php echo e(URL::to("/")); ?>';
                        $.ajax({
                            type: 'POST',
                            url: base_url+"/shiftschedule/fetchEmployees",
                            data: {
                                employee_id: employee_id,
                                _token: '<?php echo e(csrf_token()); ?>'
                            },
                            dataType: 'json',
                            cache: false,
                            success: function(response){
                                document.getElementById("employee"+ind).value  = response.full_name;
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
            $("body").on("click", ".addEmployee", function(e) {
                e.preventDefault();
                ee++;
                var $append = $(this).parents('.appends_emp');
                var nextHtml = $append.clone().find("input:text").val('').end();
                nextHtml.find('select').val('');
                nextHtml.attr('id', 'appends_emp' + ee);
                var hasRmBtn = $('.remEmployee', nextHtml).length > 0;
                if (!hasRmBtn) {
                    var rms = "<button class='flex items-center justify-center px-2 py-2  my-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50 remEmployee'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-4 h-4'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg></button>";
                    $('.addmoreappend', nextHtml).append(rms);
                }
                if(host.indexOf('edit')==38){
                    document.getElementById("counterX").value = ee;
                }
                
                $append.after(nextHtml);
                refreshTable_schedule();
                if(host.indexOf('edit')==38){
                    document.getElementById("delete_func"+ee).style.display = "none";
                }
              
            });

            $( document ).ready(function() {
                refreshTable_schedule();
                $(".employee").each(function(index, element){
                    var add=index+1;
                    $("body").on("change", "#employee"+add, function(e) {
                        e.preventDefault();
                        var employee_id = document.getElementById("employee1").value;
                        var base_url = '<?php echo e(URL::to("/")); ?>';
                        $.ajax({
                            type: 'POST',
                            url: base_url+"shiftschedule/fetchEmployees",
                            data: {
                                employee_id: employee_id,
                                _token: '<?php echo e(csrf_token()); ?>'
                            },
                            dataType: 'json',
                            cache: false,
                            success: function(response){
                                document.getElementById("employee1").value  = response.full_name;
                            }
                        }); 
                    });
                });
            });

            $("body").on("click", ".remEmployee", function() {
                $(this).parents('.appends_emp').remove();
            });

            /*************** SHIFTING JS  *****************/
            function refresh_shifting(){
                $(".appends_emp_shift").each(function(index, element){
                
                    var ind = index+1;
                    
                    $(this).find("select.employee_shift").attr('id', 'employee_shift' + ind);
                    if(host.indexOf('edit')==38){
                        $(this).find("a.delete_func").attr('id', 'delete_func' + ind);
                        var employee_name = document.getElementById("employee_shift"+ind).value;
                        if(employee_name!=''){
                            document.getElementById("delete_func"+ind).style.display = "block";
                        }else{
                            document.getElementById("delete_func"+ind).style.display = "none";
                        }
                    }
                    $("body").on("change", "#employee_shift"+ind, function(e) {
                        e.preventDefault();
                        var employee_id = document.getElementById("employee_shift"+ind).value;
                        var base_url = '<?php echo e(URL::to("/")); ?>';
                        $.ajax({
                            type: 'POST',
                            url: base_url+"/shiftschedule/fetchEmployees",
                            data: {
                                employee_id: employee_id,
                                _token: '<?php echo e(csrf_token()); ?>'
                            },
                            dataType: 'json',
                            cache: false,
                            success: function(response){
                                document.getElementById("employee_shift"+ind).value  = response.full_name;
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
           
            var x=1;
            $("body").on("click", ".addEmployeeShift", function(e) {
                e.preventDefault();
                ee++;
              
                var $append = $(this).parents('.appends_emp_shift');
                var nextHtml = $append.clone().find("input:text").val('').end();
                nextHtml.find('select').val('');
                nextHtml.attr('id', 'appends_emp_shift' + ee);
             
               
                var hasRmBtn = $('.remEmployee', nextHtml).length > 0;
                if (!hasRmBtn) {
                    var rms = "<button class='flex items-center justify-center px-2 py-2  my-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50 remEmployee'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-4 h-4'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg></button>";
                    $('.addmoreappendShift', nextHtml).append(rms);
                }
                if(host.indexOf('edit')==38){
                    document.getElementById("counterX").value = ee;
                }
                
                $append.after(nextHtml);
              
                refresh_shifting();
                if(host.indexOf('edit')==38){
                    document.getElementById("delete_func"+ee).style.display = "none";
                }
                 
            });
          
            $( document ).ready(function() {
                refresh_shifting();
                $(".employee_shift").each(function(index, element){
                    var add=index+1;
                  
                    $("body").on("change", "#employee_shift"+add, function(e) {
                        e.preventDefault();
                        var employee_id = document.getElementById("employee_shift1").value;
                    
                   
                        var base_url = '<?php echo e(URL::to("/")); ?>';
                        $.ajax({
                            type: 'POST',
                            url: base_url+"shiftschedule/fetchEmployees",
                            data: {
                                employee_id: employee_id,
                                _token: '<?php echo e(csrf_token()); ?>'
                            },
                            dataType: 'json',
                            cache: false,
                            success: function(response){
                                document.getElementById("employee_shift1").value  = response.full_name;
                            }
                        }); 
                    });
                });
            });

            $("body").on("click", ".remEmployee", function() {
                $(this).parents('.appends_emp_shift').remove();
            });

            //OT Office Report
            $("body").on("change", "#employee", function(e) {
                e.preventDefault();
                var base_url = '<?php echo e(URL::to("/")); ?>';
                var employee_id = document.getElementById("employee").value;
                $.ajax({
                    type: 'POST',
                    url: base_url+"/otOffice/fetchEmployee",
                    data: {
                        employee_id: employee_id,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    dataType: 'json',
                    cache: false,
                    success: function(response){
                        document.getElementById("designation").value  = response.designation;
                    }
                }); 
            });

            var yy=1;
            $("body").on("click", ".addAdjustment", function(e) {
                e.preventDefault();
                yy++;
                var $appendadj = $(this).parents('.appendsadj');
                var nextHtmladj = $appendadj.clone().find("input:text").val('').end();
                nextHtmladj.attr('id', 'appendsadj' + yy);
                var hasRmBtn = $('.remAdjustment', nextHtmladj).length > 0;
                if (!hasRmBtn) {
                    var rmsadj = "<button class='flex items-center justify-center px-1 py-1 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 white:bg-red-600 white:hover:bg-1red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50  remAdjustment'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-5'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg></button>";
                    $('.addmoreappendadj', nextHtmladj).append(rmsadj);
                }
                $appendadj.after(nextHtmladj);
            });

            $("body").on("click", ".remAdjustment", function() {
                $(this).parents('.appendsadj').remove();
            });

            function calculateAdjustment(){
                $(".appendsadj").each(function(index, element){
                    var ind = index+1;
                    var amount = document.getElementById("amount"+ind).value;
                    var days_hr = document.getElementById("days_hr"+ind).value;
                    var total_amnt = document.getElementById("total_amount"+ind).value;
                    if(amount==0){
                        var amnt=0;
                    }else{
                        var amnt=amount;
                    }

                    if(days_hr==0){
                        var dh=0;
                    }else{
                        var dh=days_hr;
                    }
                    //var total = (parseFloat(amnt)*parseFloat(dh));
                    var arr = [1, 2, 3, 4];
                    var total = 0;
                    for (var i in arr) {
                    total += arr[i];
                    }
                    document.getElementById("total_amount"+ind).value = parseFloat(total).toFixed(2);
                });
            }

        </script>
        
    </body>
</html><?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/layouts/app.blade.php ENDPATH**/ ?>