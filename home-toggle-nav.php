


<!-- Section-of- home_toggle_manue_nav -->
<section id="home_toggle_manue_nav" class="px-4 md:px-16 lg:px-20 sticky w-full bg-white z-50">
    <!-- Mobile manue -->
	<div x-data="{ mobile: false }" x-init="init()" @click.away="mobile = false"  @keydown.escape.stop="mobile = false; focusButton()" class="flex items-center justify-between md:justify-center">
		<!-- logo -->
		<div class="relative z-10 lg:hidden">
			<a href="#" ><img src="images/demo/logo.png" class="h-16" alt="logo"></a>
		</div>
		<!-- Mobile menu dropdown button-->
		<button type="button" class="md:hidden" x-ref="button" @click="mobile = !mobile">
			<svg x-state:on="Menu open" x-state:off="Menu closed" class="text-yellow-400 transition-all duration-300 h-6 w-6 block" :class="{ 'hidden': mobile, 'block': !(mobile) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
			</svg>
			<svg x-state:on="Menu open" x-state:off="Menu closed" class="h-6 w-6 hidden" :class="{'text-yellow-400 block': mobile, 'hidden': !(mobile) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
			</svg>
		</button>
		<div class=" max-h-0 absolute inset-0 top-16 bg-gray-900  transition-all duration-500 " x-show="mobile" x-ref="mobile1" :style="mobile == mobile ?  'max-height: '+ $refs.mobile1.scrollHeight + 'px' :'' ">
			<?php include("mobile-menu.php") ?>
		</div>
	</div>
</section>