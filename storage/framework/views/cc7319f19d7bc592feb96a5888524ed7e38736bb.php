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
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <div class="justify-center flex my-5 ">
        <a href="<?php echo e(route("uploadallowance.index")); ?>" class="flex items-center justify-center px-3 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" >Back</a>
        <input name="b_print" type="button" class="flex items-center justify-center px-3 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" onClick="printdiv('div_print');" value="Print">
    </div>
    <page size="A4" id="div_print" class="shadow-lg">
        <div class="p-5">
            <table class="border border-b-0 w-full text-xs" >
                <tr>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                </tr>
                <tr>
                    <td colspan="12" class="align-center text-center ">
                        <br>
                        <p class="text-base font-bold">CENTRAL NEGROS POWER RELIABILITY INC.</p>
                        <br>
                    </td>
                </tr>
            </table>
            <table class="text-xs border border-b-0 w-full">
                <thead class="uppercase">
                    <tr class="border">
                        <th class="border px-1 uppercase text-center" width="3%">
                            #
                        </th>
                        <th class="border px-1 uppercase" width="%">
                            Name 
                        </th>
                        <th class="border px-1 uppercase" width="%">
                            Amount
                        </th>
                        <th class="border px-1 uppercase text-center" width="%">
                            Received By
                        </th>
                    </tr>
                    <tr>
                        <td class="border px-1">01</td>
                        <td class="border px-1">Mira Rana</td>
                        <td class="border px-1 text-right">1002</td>
                        <td class="border px-1"></td>
                    </tr>
                    <tr>
                        <td class="border px-1">01</td>
                        <td class="border px-1">Mira Rana</td>
                        <td class="border px-1 text-right">1002</td>
                        <td class="border px-1"></td>
                    </tr>
                    <tr>
                        <td class="border px-1">01</td>
                        <td class="border px-1">Mira Rana</td>
                        <td class="border px-1 text-right">1002</td>
                        <td class="border px-1"></td>
                    </tr>
                    <tr>
                        <td class="border px-1">01</td>
                        <td class="border px-1">Mira Rana</td>
                        <td class="border px-1 text-right">1002</td>
                        <td class="border px-1"></td>
                    </tr>
                    <tr>
                        <td class="border px-1">01</td>
                        <td class="border px-1">Mira Rana</td>
                        <td class="border px-1 text-right">1002</td>
                        <td class="border px-1"></td>
                    </tr>
                    <tr>
                        <td class="border px-1">01</td>
                        <td class="border px-1">Mira Rana</td>
                        <td class="border px-1 text-right">1002</td>
                        <td class="border px-1"></td>
                    </tr>
                    <tr>
                        <td class="border px-1">01</td>
                        <td class="border px-1">Mira Rana</td>
                        <td class="border px-1 text-right">1002</td>
                        <td class="border px-1"></td>
                    </tr>
                    <tr>
                        <td class="border px-1">01</td>
                        <td class="border px-1">Mira Rana</td>
                        <td class="border px-1 text-right">1002</td>
                        <td class="border px-1"></td>
                    </tr>
                    <tr>
                        <td class="border px-1">01</td>
                        <td class="border px-1">Mira Rana</td>
                        <td class="border px-1 text-right">1002</td>
                        <td class="border px-1"></td>
                    </tr>
                    <tr>
                        <td class="border px-1">01</td>
                        <td class="border px-1">Mira Rana</td>
                        <td class="border px-1 text-right">1002</td>
                        <td class="border px-1"></td>
                    </tr>
                    <tr>
                        <td class="border px-1">01</td>
                        <td class="border px-1">Mira Rana</td>
                        <td class="border px-1 text-right">1002</td>
                        <td class="border px-1"></td>
                    </tr>
                    <tr>
                        <td class="border px-1">01</td>
                        <td class="border px-1">Mira Rana</td>
                        <td class="border px-1 text-right">1002</td>
                        <td class="border px-1"></td>
                    </tr>
                    <tr>
                        <td class="border px-1">01</td>
                        <td class="border px-1">Mira Rana</td>
                        <td class="border px-1 text-right">1002</td>
                        <td class="border px-1"></td>
                    </tr>
                    <tr>
                        <td class="border px-1">01</td>
                        <td class="border px-1">Mira Rana</td>
                        <td class="border px-1 text-right">1002</td>
                        <td class="border px-1"></td>
                    </tr>
                    <tr>
                        <td class="border px-1">01</td>
                        <td class="border px-1">Mira Rana</td>
                        <td class="border px-1 text-right">1002</td>
                        <td class="border px-1"></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </page>

    <script language="javascript">
        function printdiv(printpage) {
            var headstr = "<html><head><title></title></head><body>";
            var footstr = "</body>";
            var newstr = document.all.item(printpage).innerHTML;
            var oldstr = document.body.innerHTML;
            document.body.innerHTML = headstr + newstr + footstr;
            window.print();
            document.body.innerHTML = oldstr;
            return false;
        }
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal78333e4de215ce53dfc8764496177807312747a2)): ?>
<?php $component = $__componentOriginal78333e4de215ce53dfc8764496177807312747a2; ?>
<?php unset($__componentOriginal78333e4de215ce53dfc8764496177807312747a2); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/upload/receive.blade.php ENDPATH**/ ?>