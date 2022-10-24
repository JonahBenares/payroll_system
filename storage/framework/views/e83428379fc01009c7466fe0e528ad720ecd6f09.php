<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
         <!-- Styles -->
        <?php echo \Livewire\Livewire::styles(); ?>

        <?php echo view('livewire-powergrid::assets.styles')->render(); ?>
    </head>
    <body class="font-sans antialiased">
        <div class="p-20s"></div>
        <div class="min-h-screen bg-gray-100">
            <main class="bg-gray-100 white:bg-gray-800 rounded-2xl h-screen overflow-hidden relative">
                
                <div class="flex items-start justify-center">
                    
                
                <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
                <div class="flex flex-col w-3/4 pl-0 md:p-4 md:space-y-4">
                
                    <header class="w-full shadow-lg bg-white white:bg-gray-700 items-center h-16 rounded-2xl ">
                        <div class="relative  flex flex-col justify-center h-full px-3 mx-auto flex-center">
                            <div class="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
                                <div class="container relative left-0  flex w-3/4 h-auto h-full">
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500 white:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                        </div>
                                        <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-2xl border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="Search">
                                    </div>
                                </div>
                                
                                <div class="relative p-1 flex items-center justify-end w-1/4 ml-5 mr-4 sm:mr-0 sm:right-auto">
                                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown','data' => ['align' => 'right','width' => '48']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
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
                                                <!-- Authentication -->
                                                <form method="POST" action="<?php echo e(route('logout')); ?>">
                                                    <?php echo csrf_field(); ?>
                        
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                                                        this.closest(\'form\').submit();']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
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
            </main>
        </div>
        <!-- Scripts -->
        <?php echo \Livewire\Livewire::scripts(); ?>

        <?php echo view('livewire-powergrid::assets.scripts')->render(); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/layouts/app.blade.php ENDPATH**/ ?>