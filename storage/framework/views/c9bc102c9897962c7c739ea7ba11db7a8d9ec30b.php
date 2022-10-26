<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
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
			<div class="p-4 relative h-full w-full text-center bg-white rounded-2xl shadow-lg white:bg-gray-800 white:border-gray-700">
				<div class="flex justify-between  pb-4 bg-white white:bg-gray-900">
					<div > 
						<h2 class="uppercase font-semibold py-2">Holidays</h2>
					</div>
					<div class="flex">
						<div x-data="{ modelOpen: false }">
							<button @click="modelOpen =!modelOpen" class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
								<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
									<path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
								</svg>
								<span>Add New</span>
							</button>
					
							<div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
								<div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
									<div x-cloak @click="modelOpen = false"
										x-transition:enter="transition ease-out duration-300 transform"
										x-transition:enter-start="opacity-0" 
										x-transition:enter-end="opacity-100"
										x-transition:leave="transition ease-in duration-200 transform"
										x-transition:leave-start="opacity-100" 
										x-transition:leave-end="opacity-0"
										class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
									></div>
					
									<div x-cloak  
										x-transition:enter="transition ease-out duration-300 transform"
										x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
										x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
										x-transition:leave="transition ease-in duration-200 transform"
										x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
										x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
										class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
									>
										<div class="flex items-center justify-between space-x-4 px-2">
											<h1 class="text-xl font-medium text-gray-800 ">Add Holiday</h1>
					
											<button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
												<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
												</svg>
											</button>
										</div>
					
										<form class="mt-5">
											<div class="px-2">
												<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Date</label>
												<input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
											</div>
											<div class=" mt-4 px-2">
												<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Name</label>
												<input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
											</div>
											<div class=" mt-4 px-2">
												<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Type</label>
												<select type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
													<option value=""> -- Select Type -- </option>
												</select>
											</div>
											
											<div class="flex ">
												<div class="mt-4 w-full px-2">
													<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
													<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
												</div>
												<div class="mt-4 w-full px-2">
													<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Rate</label>
													<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
												</div>
											</div> 
											<div class="flex justify-end mt-6 px-2">
												<button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
													Save
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<label for="table-search" class="sr-only">Search</label>
						<div class="relative">
							<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
								<svg class="w-5 h-5 text-gray-500 white:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
							</div>
							<input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-2xl border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="Search">
						</div>
					</div>
				</div>
				<div class="overflow-x-auto overflow-y-hidden hover:overflow-y-auto h-100 relative  sm:rounded-2xl">
					<table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
						<thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0 z-10">
							<tr class="">
								<th scope="col" class="py-3 px-6" width="15%">
									Date
								</th>
								<th scope="col" class="py-3 px-6" width="30%">
									Holiday Name
								</th>
								<th scope="col" class="py-3 px-6" width="30%">
									Holiday Type
								</th>
								<th scope="col" class="py-3 px-6" width="10%">
									Year
								</th>
								<th scope="col" class="py-3 px-6" width="5%">
									Rate
								</th>
								<th scope="col" class="py-3 px-6" width="12%" align="center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
										<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
									</svg>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
								<th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
									January 1
								</th>
								<td class="py-3 px-6">
									New Year
								</td>
								<td class="py-3 px-6">
									Regular Holiday
								</td>
								<td class="py-3 px-6">2022</td>
								<td class="py-3 px-6 ">90%</td>
								<td class="py-3 px-6 flex justify-center " align="center">
									<div x-data="{ updateModal: false }">
										<button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
												<path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
												<path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
											</svg> 
										</button>
								
										<div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
											<div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
												<div x-cloak @click="updateModal = false"  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0" 
													x-transition:enter-end="opacity-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100" 
													x-transition:leave-end="opacity-0"
													class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
												></div>
								
												<div x-cloak  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
													x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
													x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
													class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
												>
													<div class="flex items-center justify-between space-x-4 px-2">
														<h1 class="text-xl font-medium text-gray-800 ">Update Holiday</h1>
								
														<button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
															<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
															</svg>
														</button>
													</div>
								
													<form class="mt-5">
														<div class="px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Date</label>
															<input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														<div class="mt-4 px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Name</label>
															<input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														
														<div class="flex ">
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Type</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
														</div> 
														<div class="flex justify-end mt-6 px-2">
															<button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
																Save
															</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<button type="button" class="ml-2 py-1.5 px-2 text-xs font-medium text-center text-white bg-red-500 rounded-2xl hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-red-500 white:focus:ring-blue-800" title="Update"> 
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
											<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
										</svg>                                                
									</button>
								</td>
							</tr>
							<tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
								<th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
									February 1
								</th>
								<td class="py-3 px-6">
									Chinese New Year
								</td>
								<td class="py-3 px-6">
									Special Non-working Holiday
								</td>
								<td class="py-3 px-6">2002</td>
								<td class="py-3 px-6">90%</td>
								<td class="py-3 px-6 flex justify-center " align="center">
									<div x-data="{ updateModal: false }">
										<button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
												<path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
												<path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
											</svg> 
										</button>
								
										<div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
											<div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
												<div x-cloak @click="updateModal = false"  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0" 
													x-transition:enter-end="opacity-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100" 
													x-transition:leave-end="opacity-0"
													class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
												></div>
								
												<div x-cloak  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
													x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
													x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
													class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
												>
													<div class="flex items-center justify-between space-x-4 px-2">
														<h1 class="text-xl font-medium text-gray-800 ">Update Holiday</h1>
								
														<button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
															<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
															</svg>
														</button>
													</div>
								
													<form class="mt-5">
														<div class="px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Date</label>
															<input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														<div class=" mt-4 px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Name</label>
															<input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														<div class=" mt-4 px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Type</label>
															<select type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
																<option value=""> -- Select Type -- </option>
															</select>
														</div>
														
														<div class="flex ">
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Rate</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
														</div> 
														<div class="flex justify-end mt-6 px-2">
															<button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
																Save
															</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<button type="button" class="ml-2 py-1.5 px-2 text-xs font-medium text-center text-white bg-red-500 rounded-2xl hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-red-500 white:focus:ring-blue-800" title="Update"> 
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
											<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
										</svg>                                                
									</button>
								</td>
							</tr>
							<tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
								<th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
									February 25
								</th>
								<td class="py-3 px-6">
									People Power Revolution
								</td>
								<td class="py-3 px-6">
									Special Non-working Holiday
								</td>
								<td class="py-3 px-6">2022</td>
								<td class="py-3 px-6 ">90%</td>
								<td class="py-3 px-6 flex justify-center " align="center">
									<div x-data="{ updateModal: false }">
										<button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
												<path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
												<path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
											</svg> 
										</button>
								
										<div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
											<div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
												<div x-cloak @click="updateModal = false"  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0" 
													x-transition:enter-end="opacity-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100" 
													x-transition:leave-end="opacity-0"
													class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
												></div>
								
												<div x-cloak  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
													x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
													x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
													class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
												>
													<div class="flex items-center justify-between space-x-4 px-2">
														<h1 class="text-xl font-medium text-gray-800 ">Update Holiday</h1>
								
														<button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
															<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
															</svg>
														</button>
													</div>
								
													<form class="mt-5">
														<div class="px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Date</label>
															<input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														<div class="mt-4 px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Name</label>
															<input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														
														<div class="flex ">
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Type</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
														</div> 
														<div class="flex justify-end mt-6 px-2">
															<button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
																Save
															</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<button type="button" class="ml-2 py-1.5 px-2 text-xs font-medium text-center text-white bg-red-500 rounded-2xl hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-red-500 white:focus:ring-blue-800" title="Update"> 
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
											<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
										</svg>                                                
									</button>
								</td>
							</tr>
							<tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
								<th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
									April 9
								</th>
								<td class="py-3 px-6">
									Araw ng Kagitingan
								</td>
								<td class="py-3 px-6">
									Regular Holiday
								</td>
								<td class="py-3 px-6">2022</td>
								<td class="py-3 px-6 ">90%</td>
								<td class="py-3 px-6 flex justify-center " align="center">
									<div x-data="{ updateModal: false }">
										<button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
												<path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
												<path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
											</svg> 
										</button>
								
										<div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
											<div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
												<div x-cloak @click="updateModal = false"  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0" 
													x-transition:enter-end="opacity-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100" 
													x-transition:leave-end="opacity-0"
													class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
												></div>
								
												<div x-cloak  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
													x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
													x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
													class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
												>
													<div class="flex items-center justify-between space-x-4 px-2">
														<h1 class="text-xl font-medium text-gray-800 ">Update Holiday</h1>
								
														<button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
															<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
															</svg>
														</button>
													</div>
								
													<form class="mt-5">
														<div class="px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Date</label>
															<input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														<div class="mt-4 px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Name</label>
															<input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														
														<div class="flex ">
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Type</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
														</div> 
														<div class="flex justify-end mt-6 px-2">
															<button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
																Save
															</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<button type="button" class="ml-2 py-1.5 px-2 text-xs font-medium text-center text-white bg-red-500 rounded-2xl hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-red-500 white:focus:ring-blue-800" title="Update"> 
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
											<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
										</svg>                                                
									</button>
								</td>
							</tr>
							<tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
								<th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
									April 14
								</th>
								<td class="py-3 px-6">
									Maundy Thursday
								</td>
								<td class="py-3 px-6">
									Regular Holiday
								</td>
								<td class="py-3 px-6">2022</td>
								<td class="py-3 px-6 ">90%</td>
								<td class="py-3 px-6 flex justify-center " align="center">
									<div x-data="{ updateModal: false }">
										<button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
												<path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
												<path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
											</svg> 
										</button>
								
										<div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
											<div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
												<div x-cloak @click="updateModal = false"  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0" 
													x-transition:enter-end="opacity-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100" 
													x-transition:leave-end="opacity-0"
													class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
												></div>
								
												<div x-cloak  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
													x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
													x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
													class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
												>
													<div class="flex items-center justify-between space-x-4 px-2">
														<h1 class="text-xl font-medium text-gray-800 ">Update Holiday</h1>
								
														<button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
															<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
															</svg>
														</button>
													</div>
								
													<form class="mt-5">
														<div class="px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Date</label>
															<input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														<div class="mt-4 px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Name</label>
															<input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														
														<div class="flex ">
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Type</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
														</div> 
														<div class="flex justify-end mt-6 px-2">
															<button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
																Save
															</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<button type="button" class="ml-2 py-1.5 px-2 text-xs font-medium text-center text-white bg-red-500 rounded-2xl hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-red-500 white:focus:ring-blue-800" title="Update"> 
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
											<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
										</svg>                                                
									</button>
								</td>
							</tr>
							<tr class="bg-white border-b white:bg-gray-800 hover:bg-gray-50 white:hover:bg-gray-600">
								<th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
									April 15
								</th>
								<td class="py-3 px-6">
									Good Friday
								</td>
								<td class="py-3 px-6">
									Regular Holiday
								</td>
								<td class="py-3 px-6">2022</td>
								<td class="py-3 px-6 ">90%</td>
								<td class="py-3 px-6 flex justify-center " align="center">
									<div x-data="{ updateModal: false }">
										<button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
												<path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
												<path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
											</svg> 
										</button>
								
										<div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
											<div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
												<div x-cloak @click="updateModal = false"  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0" 
													x-transition:enter-end="opacity-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100" 
													x-transition:leave-end="opacity-0"
													class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
												></div>
								
												<div x-cloak  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
													x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
													x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
													class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
												>
													<div class="flex items-center justify-between space-x-4 px-2">
														<h1 class="text-xl font-medium text-gray-800 ">Update Holiday</h1>
								
														<button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
															<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
															</svg>
														</button>
													</div>
								
													<form class="mt-5">
														<div class="px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Date</label>
															<input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														<div class="mt-4 px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Name</label>
															<input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														
														<div class="flex ">
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Type</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
														</div> 
														<div class="flex justify-end mt-6 px-2">
															<button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
																Save
															</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<button type="button" class="ml-2 py-1.5 px-2 text-xs font-medium text-center text-white bg-red-500 rounded-2xl hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-red-500 white:focus:ring-blue-800" title="Update"> 
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
											<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
										</svg>                                                
									</button>
								</td>
							</tr>
							<tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
								<th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
									April 16
								</th>
								<td class="py-3 px-6">
									Black Saturday
								</td>
								<td class="py-3 px-6">
									Special Non-working Holiday
								</td>
								<td class="py-3 px-6">2022</td>
								<td class="py-3 px-6 ">90%</td>
								<td class="py-3 px-6 flex justify-center " align="center">
									<div x-data="{ updateModal: false }">
										<button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
												<path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
												<path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
											</svg> 
										</button>
								
										<div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
											<div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
												<div x-cloak @click="updateModal = false"  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0" 
													x-transition:enter-end="opacity-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100" 
													x-transition:leave-end="opacity-0"
													class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
												></div>
								
												<div x-cloak  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
													x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
													x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
													class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
												>
													<div class="flex items-center justify-between space-x-4 px-2">
														<h1 class="text-xl font-medium text-gray-800 ">Update Holiday</h1>
								
														<button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
															<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
															</svg>
														</button>
													</div>
								
													<form class="mt-5">
														<div class="px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Date</label>
															<input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														<div class="mt-4 px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Name</label>
															<input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														
														<div class="flex ">
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Type</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
														</div> 
														<div class="flex justify-end mt-6 px-2">
															<button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
																Save
															</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<button type="button" class="ml-2 py-1.5 px-2 text-xs font-medium text-center text-white bg-red-500 rounded-2xl hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-red-500 white:focus:ring-blue-800" title="Update"> 
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
											<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
										</svg>                                                
									</button>
								</td>
							</tr>
							<tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
								<th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
									May 1
								</th>
								<td class="py-3 px-6">
									Labor Day
								</td>
								<td class="py-3 px-6">
									Regular Holiday
								</td>
								<td class="py-3 px-6">2022</td>
								<td class="py-3 px-6 ">90%</td>
								<td class="py-3 px-6 flex justify-center " align="center">
									<div x-data="{ updateModal: false }">
										<button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
												<path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
												<path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
											</svg> 
										</button>
								
										<div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
											<div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
												<div x-cloak @click="updateModal = false"  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0" 
													x-transition:enter-end="opacity-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100" 
													x-transition:leave-end="opacity-0"
													class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
												></div>
								
												<div x-cloak  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
													x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
													x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
													class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
												>
													<div class="flex items-center justify-between space-x-4 px-2">
														<h1 class="text-xl font-medium text-gray-800 ">Update Holiday</h1>
								
														<button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
															<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
															</svg>
														</button>
													</div>
								
													<form class="mt-5">
														<div class="px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Date</label>
															<input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														<div class="mt-4 px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Name</label>
															<input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														
														<div class="flex ">
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Type</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
														</div> 
														<div class="flex justify-end mt-6 px-2">
															<button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
																Save
															</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<button type="button" class="ml-2 py-1.5 px-2 text-xs font-medium text-center text-white bg-red-500 rounded-2xl hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-red-500 white:focus:ring-blue-800" title="Update"> 
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
											<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
										</svg>                                                
									</button>
								</td>
							</tr>
							<tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
								<th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
									June 12
								</th>
								<td class="py-3 px-6">
									Independence Day
								</td>
								<td class="py-3 px-6">
									Regular Holiday
								</td>
								<td class="py-3 px-6">2022</td>
								<td class="py-3 px-6 ">90%</td>
								<td class="py-3 px-6 flex justify-center " align="center">
									<div x-data="{ updateModal: false }">
										<button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
												<path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
												<path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
											</svg> 
										</button>
								
										<div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
											<div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
												<div x-cloak @click="updateModal = false"  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0" 
													x-transition:enter-end="opacity-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100" 
													x-transition:leave-end="opacity-0"
													class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
												></div>
								
												<div x-cloak  
													x-transition:enter="transition ease-out duration-300 transform"
													x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
													x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
													x-transition:leave="transition ease-in duration-200 transform"
													x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
													x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
													class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
												>
													<div class="flex items-center justify-between space-x-4 px-2">
														<h1 class="text-xl font-medium text-gray-800 ">Update Holiday</h1>
								
														<button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
															<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
															</svg>
														</button>
													</div>
								
													<form class="mt-5">
														<div class="px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Date</label>
															<input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														<div class="mt-4 px-2">
															<label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Name</label>
															<input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
														</div>
														
														<div class="flex ">
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Holiday Type</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
															<div class="mt-4 w-full px-2">
																<label class="block text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
																<input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
															</div>
														</div> 
														<div class="flex justify-end mt-6 px-2">
															<button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
																Save
															</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<button type="button" class="ml-2 py-1.5 px-2 text-xs font-medium text-center text-white bg-red-500 rounded-2xl hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-red-500 white:focus:ring-blue-800" title="Update"> 
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
											<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
										</svg>                                                
									</button>
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
			
		</div>
	</div>


	
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/masterfile/calendar_list.blade.php ENDPATH**/ ?>