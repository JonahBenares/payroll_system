<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?>  <?php $__env->endSlot(); ?>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
    <style>
        .fc td.fc-today {
            border-style: double;
            background-color: #6dfdaddb;
        }
    </style>
    <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="w-7/12">
                <div class="mb-2 mx-0 xl:mr-2">
                    <div class="shadow-md rounded-lg w-full bg-gradient-to-r from-blue-400 to-blue-100">
                        <div class="bg-[url('images/kalendaryo.png')] bg-[length:200px_120px] bg-no-repeat bg-right-bottom"> 
                            <div class="flex justify-between ">
                                <div class="px-6 py-6">
                                    
                                    <p class="font-bold text-lg text-white uppercase leading-snone">
                                        <?php echo e($start_date); ?>  <span class="mx-2"> ● </span> <?php echo e($end_date); ?>

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
                        <a href="<?php echo e(route('leavefailure.index',['month' => $month,'year' => $year,'period' => $period])); ?>" class="shadow-md rounded-lg w-full bg-gradient-to-r from-emerald-300 to-lime-300">
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
                                            <?php echo e(($unfiled_leave!=0) ? str_pad($unfiled_leave, 2, "0", STR_PAD_LEFT) : '0'); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- <a href="" class="shadow-md rounded-lg w-full bg-gradient-to-r from-emerald-300 to-lime-300">
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
                        </a> -->
                        <a href="<?php echo e(route('ot.index',['month' => $month,'year' => $year,'period' => $period])); ?>" class="shadow-md rounded-lg w-full bg-gradient-to-r from-emerald-300 to-lime-300">
                            <div class="bg-[url('images/circle.png')] bg-[length:170px_100px] bg-no-repeat bg-right-top rounded-lg"> 
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
                                            <?php echo e($unfiled_overtime); ?>

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
                                Reminders
                                <!-- <span class="text-sm text-gray-500 white:text-gray-300 white:text-white ml-2">
                                    (05)
                                </span> -->
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
                            <?php if(Session::has('success')): ?>
                                <div class="mb-5 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                    <span class="block sm:inline"><?php echo e(Session::get('success')); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if(Session::has('fail')): ?>
                                <div class="mb-5 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                    <span class="block sm:inline"><?php echo e(Session::get('fail')); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if($now==date('Y-12-15')): ?>
                            <!-- every 15 days before new of the year -->
                            <li class="flex items-center text-gray-600 white:text-gray-200 justify-between py-3 border-b-2 border-gray-100 white:border-gray-800 px-4 bg-red-100">
                                <table class="w-full text-sm border-0">
                                    <tr>
                                        <td align="center">Set Holiday for (<?php echo e(date('Y',strtotime('+1 year'))); ?>) </td> 
                                        <td align="right" class="" width="8%" >
                                            <div class="flex justify-center">
                                                
                                                <a href="" class=>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"  width="22" height="22"  class="text-blue-500">
                                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                                                </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </li>
                            <?php endif; ?>
                            <?php if($nextmonthdisp=='6'): ?>
                            <!--- 5 days before next month nd pag include sa loop -->
                            <li class="flex items-center text-gray-600 white:text-gray-200 justify-between py-3 border-b-2 border-gray-100 white:border-gray-800 px-4 bg-yellow-100">
                                <table class="w-full text-sm border-0">
                                    <tr>
                                        <td align="center">Update Shift Schedule </td> 
                                        <td align="right" class="" width="8%" >
                                            <div class="flex justify-center">
                                                
                                                <a href="" class=>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"  width="22" height="22"  class="text-blue-500">
                                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                                                </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </li>
                            <?php endif; ?>
                            <?php if($day=='Fri'): ?>
                            <!--- every friday --> 
                            <li class="flex items-center text-gray-600 white:text-gray-200 justify-between py-3 border-b-2 border-gray-100 white:border-gray-800 px-4 bg-emerald-100">
                                <table class="w-full text-sm border-0">
                                    <tr>
                                        <td align="center">Generate/Upload Allowance</td> 
                                        <td align="right" class="" width="8%" >
                                            <div class="flex justify-center">
                                                
                                                <a href="" class=>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"  width="22" height="22"  class="text-blue-500">
                                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                                                </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </li>
                            <?php endif; ?>
                            <?php $__currentLoopData = $reminders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="flex items-center text-gray-600 white:text-gray-200 justify-between py-3 border-b-2 border-gray-100 white:border-gray-800 px-4">
                                
                                    <table class="w-full text-sm border-0">
                                        <tr>
                                            <td align="left" class="px-2 text-sm" width="20%"><?php echo e(date('M. d,Y',strtotime($r->reminder_date))); ?></td>
                                            <td align="left" class="hover:text-blue-500">
                                                <a data-modal-target="updateRem" data-modal-toggle="updateRem" id='reminderUpdate' data-id='<?php echo e($r->id); ?>' data-reminder='<?php echo e($r->reminder); ?>' data-date='<?php echo e($r->reminder_date); ?>' class="w-full cursor-pointer" title="Update Reminder">
                                                    <?php echo e($r->reminder); ?>

                                                </a>
                                            </td>
                                            <td align="right" class="" width="5%" >
                                                <div class="flex justify-center">
                                            
                                                <a href="<?php echo e(route('dashupdate',$r->id)); ?>" class="">
                                                    <svg width="22" height="22" fill="currentColor" viewBox="0 0 1024 1024" class="text-green-500">
                                                        <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <form method="GET" action="<?php echo e(route('dashdestroy',$r->id)); ?>" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                                    <?php echo method_field('delete'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="">
                                                        <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-red-500">
                                                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </form>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-5/12">
                <div class="mb-2">
                    <div class="shadow-md rounded-lg p-4 bg-white white:bg-gray-700">
                        <div class="flex flex-wrap overflow-hidden">
                            <div class="w-full rounded shadow-sm">
                                <h3>Calendar</h3>
                                <div id='calendar'></div>
                            </div>
                        </div>
                        <hr class="mb-2">
                        <p class="font-bold text-md text-black white:text-white">
                            Holidays
                        </p>
                        <ul>
                            <?php $__currentLoopData = $holiday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="flex items-center my-6 space-x-2">
                                <a href="#" class="block relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-blue-500">
                                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <div class="flex flex-col">
                                    <span class="text-sm text-gray-900 font-semibold white:text-white ml-2">
                                        <?php echo e($h->holiday_name); ?> 
                                    </span>
                                    <span class="text-sm text-gray-400 white:text-gray-300 ml-2">
                                        <?php echo e(date('F d,Y',strtotime($h->holiday_date))); ?> 
                                    </span>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <div id="medium-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-lg md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 ">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Create Reminder
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="medium-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span> 
                    </button>
                </div>
                <form action="<?php echo e(route('dashstore')); ?>" method="POST" >
                    <?php echo csrf_field(); ?>
                    <!-- Modal body -->
                    <div class="px-6 space-y-6">
                        <input type="date" name="reminder_date" class="block text-sm w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        <input type="text" name="reminder" class="block text-sm w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2">
                        <button data-modal-hide="medium-modal" type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-3xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
       
    <div id="updateRem" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-lg md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 ">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Update Reminder
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="updateRem">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span> 
                    </button>
                </div>
                <form action="<?php echo e(route('dashupreminder')); ?>" method="POST" >
                    <?php echo csrf_field(); ?>
                    <!-- Modal body -->
                    <div class="px-6 space-y-6">
                        <input type="date" name="reminder_date" id="reminder_date" class="block text-sm w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        <input type="text" name="reminder" id="reminder" class="block text-sm w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2">
                        <input type="hidden" name="reminder_id" id="reminder_id" class="block text-sm w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        <button data-modal-hide="medium-modal" type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-3xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).on("click", "#reminderUpdate", function () {
            var reminder_id = $(this).attr("data-id");
            var reminder = $(this).attr("data-reminder");
            var reminder_date = $(this).attr("data-date");
            $("#reminder_id").val(reminder_id);
            $("#reminder").val(reminder);
            $("#reminder_date").val(reminder_date);
        
        });
    </script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here.
                aspectRatio: 1,
                eventMouseover: function (event, jsEvent, view) {
                    if (view.name !== 'agendaDay') {
                        $(jsEvent.target).attr('title', event.title);
                    }
                },
                dayClick: function (date, allDay, jsEvent, view) {
                    $(".fc-state-highlight").removeClass("fc-state-highlight");
                    $(jsEvent.target).addClass("fc-state-highlight");
                },
                events : [
                    <?php $__currentLoopData = $holiday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    {
                        title : '<?php echo e($h->holiday_name); ?>',
                        start : '<?php echo e($h->holiday_date); ?>',
                    },
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ]
            })
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/dashboard.blade.php ENDPATH**/ ?>