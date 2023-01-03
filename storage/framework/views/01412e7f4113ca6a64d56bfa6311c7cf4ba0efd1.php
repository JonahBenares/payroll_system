<?php if (isset($component)) { $__componentOriginal78333e4de215ce53dfc8764496177807312747a2 = $component; } ?>
<?php $component = App\View\Components\PrintLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('print-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PrintLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <style>
        body{
            background:#f0f1f3;
        }
    </style>
    <div class="justify-center flex my-5" id="print_buttons">
        <a href="<?php echo e(route("payroll_allowance.index")); ?>" class="flex items-center justify-center px-3 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" >Back</a>
        
        <button class="flex items-center justify-center px-3 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" onclick="window.print();">Print</button>
    </div>

    <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $det): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <page size="A4" id="div_print" class=" px-3 py-1">
        <div class="">
            <div class="">   
                <table class="border border-x border-y border-gray-300 mt-2 text-xs w-full">
                    <tr>
                        <td colspan="5" class="text-center py-5">
                            <?php if (isset($component)) { $__componentOriginal35af8903ccd520b2f8c2044ff071f7d1e935357b = $component; } ?>
<?php $component = App\View\Components\CenpriLogo::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cenpri-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CenpriLogo::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal35af8903ccd520b2f8c2044ff071f7d1e935357b)): ?>
<?php $component = $__componentOriginal35af8903ccd520b2f8c2044ff071f7d1e935357b; ?>
<?php unset($__componentOriginal35af8903ccd520b2f8c2044ff071f7d1e935357b); ?>
<?php endif; ?>
                            <span class="uppercase font-bold text-base">Central Negros Power Reliability, Inc.</span><br>
                            <span class="uppercase">Request for Disbursement</span>
                        </td>
                    </tr>                                            
                    <tr>
                        <td width="10%"></td>
                        <td></td>
                        <td width="5%"></td>
                        <td width="10%">APV:</td>
                        <td width="20%"class="border-b"></td>
                    </tr>
                    <tr>
                        <td>Company</td>
                        <td class="border-b"><?php echo e(getBUName($det->employee_id)); ?></td>
                        <td ></td>
                        <td>Date:</td>
                        <td class="border-b"></td>
                    </tr>
                    <tr>
                        <td>Pay To:</td>
                        <td class="border-b"><?php echo e(getEmployeeName($det->employee_id)); ?></td>
                        <td></td>
                        <td>Due Date:</td>
                        <td class="border-b"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="pt-2"></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="flex justify-left pl-16">
                                <div class="flex justify-between mx-3">
                                    <span class="border-b w-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-3 text-green-700">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    </span>
                                    <span>Cash</span>
                                </div>
                                <div class="flex justify-between mx-3">
                                    <span class="border-b w-10"></span>
                                    <span>Check</span>
                                </div>
                            </div>
                        </td>
                        <td>Bank/No:</td>
                        <td class="border-b"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="pt-2"></td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <table class="w-full">
                                <tr>
                                    <td colspan="3" class="border text-center">Explanation</td>
                                    <td colspan="2" width="20%" class="border text-center">Amount</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r"><br></td>
                                    <td colspan="" ><br></td>
                                    <td colspan="" ><br></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r pl-20"><b> <?php echo e(getAllowanceName($head_id)); ?>for Period <?php echo e(date("M j, Y",strtotime($from))); ?> to <?php echo e(date("M j, Y", strtotime($to))); ?> @ Php <?php echo e(getAllowance($det->id, $head_id, 'amount')); ?></b></td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right"><?php echo e(number_format($det->total_allowance,2)); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r pl-20"><small>Actual Duty</small></td>
                                    <td class=" text-center"></td>
                                    <td class=" text-center"></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r pl-20">September 10, 2022</td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right">1001.22</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r pl-20">September 11, 2022</td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right">1001.22</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r pl-20">September 12, 2022</td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right">1001.22</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r pl-20">September 13, 2022</td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right">1001.22</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r pl-20">September 14, 2022</td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right">1001.22</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r border-b"><br><br><br><br><br></td>
                                    <td colspan=""  class="border-b"><br></td>
                                    <td colspan=""  class="border-b"><br></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <table class="w-full">
                                <tr>
                                    <td width="25%" class="border-r">Requested by:</td>
                                    <td width="25%" class="border-r">Checked by:</td>
                                    <td width="25%" class="border-r">Endoresed for payment by:</td>
                                    <td width="25%" class="">Received by:</td>
                                </tr>
                                <tr>
                                    <td class="border-r"></td>
                                    <td class="border-r"></td>
                                    <td class="border-r"></td>
                                    <td class=""><br></td>
                                </tr>
                                <tr>
                                    <td class="border-r text-center font-bold"><?php echo e($session_name); ?></td>
                                    <td class="border-r text-center font-bold">Cristy Cesar</td>
                                    <td class="border-r text-center font-bold">Marianita Tabilla</td>
                                    <td class=" text-center font-bold"><?php echo e(getEmployeeName($det->employee_id)); ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                </table>
            </div>
            
            <div class="">
                <table class="border border-x border-y border-gray-300 mt-2 text-xs w-full">
                    <tr>
                        <td colspan="5" class="text-center py-5">
                            <?php if (isset($component)) { $__componentOriginal35af8903ccd520b2f8c2044ff071f7d1e935357b = $component; } ?>
<?php $component = App\View\Components\CenpriLogo::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cenpri-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CenpriLogo::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal35af8903ccd520b2f8c2044ff071f7d1e935357b)): ?>
<?php $component = $__componentOriginal35af8903ccd520b2f8c2044ff071f7d1e935357b; ?>
<?php unset($__componentOriginal35af8903ccd520b2f8c2044ff071f7d1e935357b); ?>
<?php endif; ?>
                            <span class="uppercase font-bold text-base">Central Negros Power Reliability, Inc.</span><br>
                            <span class="uppercase">Request for Disbursement</span>
                        </td>
                    </tr>                                            
                    <tr>
                        <td width="10%"></td>
                        <td></td>
                        <td width="5%"></td>
                        <td width="10%">APV:</td>
                        <td width="20%"class="border-b"></td>
                    </tr>
                    <tr>
                        <td>Company</td>
                        <td class="border-b"><?php echo e(getBUName($det->employee_id)); ?></td>
                        <td ></td>
                        <td>Date:</td>
                        <td class="border-b"></td>
                    </tr>
                    <tr>
                        <td>Pay To:</td>
                        <td class="border-b"><?php echo e(getEmployeeName($det->employee_id)); ?></td>
                        <td></td>
                        <td>Due Date:</td>
                        <td class="border-b"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="pt-2"></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="flex justify-left pl-16">
                                <div class="flex justify-between mx-3">
                                    <span class="border-b w-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-3 text-green-700">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    </span>
                                    <span>Cash</span>
                                </div>
                                <div class="flex justify-between mx-3">
                                    <span class="border-b w-10"></span>
                                    <span>Check</span>
                                </div>
                            </div>
                        </td>
                        <td>Bank/No:</td>
                        <td class="border-b"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="pt-2"></td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <table class="w-full">
                                <tr>
                                    <td colspan="3" class="border text-center">Explanation</td>
                                    <td colspan="2" width="20%" class="border text-center">Amount</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r"><br></td>
                                    <td colspan="" ><br></td>
                                    <td colspan="" ><br></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r pl-20"><b><?php echo e(getAllowanceName($head_id)); ?>for Period <?php echo e(date("M j, Y",strtotime($from))); ?> to <?php echo e(date("M j, Y", strtotime($to))); ?> @ Php <?php echo e(getAllowance($det->id, $head_id, 'amount')); ?></b></td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right">1001.22</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r pl-20"><small>Actual Duty</small></td>
                                    <td class=" text-center"></td>
                                    <td class=" text-center"></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r pl-20">September 10, 2022</td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right">1001.22</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r pl-20">September 11, 2022</td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right">1001.22</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r pl-20">September 12, 2022</td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right">1001.22</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r pl-20">September 13, 2022</td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right">1001.22</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r pl-20">September 14, 2022</td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right">1001.22</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r border-b"><br><br><br><br><br></td>
                                    <td colspan=""  class="border-b"><br></td>
                                    <td colspan=""  class="border-b"><br></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <table class="w-full">
                                <tr>
                                    <td width="25%" class="border-r">Requested by:</td>
                                    <td width="25%" class="border-r">Checked by:</td>
                                    <td width="25%" class="border-r">Endoresed for payment by:</td>
                                    <td width="25%" class="">Received by:</td>
                                </tr>
                                <tr>
                                    <td class="border-r"></td>
                                    <td class="border-r"></td>
                                    <td class="border-r"></td>
                                    <td class=""><br></td>
                                </tr>
                                <tr>
                                <td class="border-r text-center font-bold"><?php echo e($session_name); ?></td>
                                    <td class="border-r text-center font-bold">Cristy Cesar</td>
                                    <td class="border-r text-center font-bold">Marianita Tabilla</td>
                                    <td class=" text-center font-bold"><?php echo e(getEmployeeName($det->employee_id)); ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </page>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal78333e4de215ce53dfc8764496177807312747a2)): ?>
<?php $component = $__componentOriginal78333e4de215ce53dfc8764496177807312747a2; ?>
<?php unset($__componentOriginal78333e4de215ce53dfc8764496177807312747a2); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/payroll_allowance/bulk.blade.php ENDPATH**/ ?>