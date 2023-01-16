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
    <!-- component -->
    <style>
        [x-cloak] {
        display: none;
        }
    </style>
    
    <div class="overflow-auto h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="p-4 relative h-full w-full text-center bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex space-x-2 pb-5">
                    <a href="<?php echo e(route('dtrOffice.index')); ?>" class="hover:bg-blue-300 bg-blue-500 text-sm px-5 py-1 rounded-2xl text-white font-bold">DTR Office</a>
                    <a href="<?php echo e(route('dtrSite.index')); ?>" class="hover:bg-emerald-200 hover:text-white  bg-gray-100  text-sm px-6 py-1 rounded-2xl text-gray-300 font-bold">DTR Site</a>
                </div>
                <form action="">
                    <div class="flex justify-between space-x-4 w-full my-1">
                        
                        <div class="space-y-1 w-7/12">
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm w-24 text-left">Name:</p>
                                <input type="text" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                            </div>
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm w-24 text-left">Designation:</p>
                                <input type="text" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                            </div>
                        </div>
                        <div class="space-y-1 w-5/12">
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm w-24 text-right">Period:</p>
                                <input type="text" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                            </div>
                        </div>
                    </div>
                    <div class=" hover:overflow-x-auto overflow-x-hidden h-100 max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 ">
                        <table class="border border-gray-300 text-xs w-full">
                            <tr>
                                <td class=""></td>
                                <td class="bg-blue-100 border border-gray-300" colspan="4">REGULAR</td>
                                <td class="bg-purple-200 border border-gray-300" colspan="6">NO. OF DAYS WORKED</td>
                                <td class="bg-green-100 break-words border border-gray-300" colspan="6">NIGHT PREMIUM</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="5%" class="border border-gray-300">DAY</td>
                                <td width="6%" class="bg-blue-100 border border-gray-300">IN</td>
                                <td width="6%" class="bg-blue-100 border border-gray-300">OUT</td>
                                <td width="6%" class="bg-blue-100 border border-gray-300">IN</td>
                                <td width="6%" class="bg-blue-100 border border-gray-300">OUT</td>
                                <td width="4%" class="bg-purple-200 break-words border border-gray-300 px-1" >REG DAY</td>
                                <td width="4%" class="bg-purple-200 break-words border border-gray-300 px-1" >RD2</td>
                                <td width="4%" class="bg-purple-200 break-words border border-gray-300 px-1" >SH</td>
                                <td width="4%" class="bg-purple-200 break-words border border-gray-300 px-1" >SH on RD2</td>
                                <td width="4%" class="bg-purple-200 break-words border border-gray-300 px-1" >Reg Hol</td>
                                <td width="4%" class="bg-purple-200 break-words border border-gray-300 px-1" >RH on RD2</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">REG NP</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">REG NP OT</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">RD2/SH NP</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">RD2/SH NP OT</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">RH NP</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">RH NP OT</td>
                                <td class="border border-gray-300 px-1">TARDY</td>
                                <td class="border border-gray-300 px-1">REMARKS</td>
                            </tr>
                            <tr>
                                <td>Aug</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">21</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">22</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">23</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">24</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">25</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">26</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">27</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">28</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">29</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">30</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">31</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td>Sep</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">01</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">02</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">03</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">04</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">05</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1" ></td>
                                <td class="border border-gray-300 px-1" colspan="4">Working Days</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/dtr_office/index.blade.php ENDPATH**/ ?>