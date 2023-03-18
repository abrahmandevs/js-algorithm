
<nav id="" x-data="{ open: false}" class="hidden md:block w-full mt-0  z-50">
	<div class="px-10 md:px-16 lg:px-20 bg-gray-800 text-white mx-auto">
		<!-- demos dropdown -->
		<div class="flex items-center space-x-4 py-1.5">
			<!-- logo -->
			<div class="relative z-10 hidden lg:block">
				<a href="<?php echo $baseUrl?>" class=""><img src="<?php echo $baseUrl?>images/demo/logo-terminal-1.png" class="h-10 bg-gray-200/40 rounded-lg  px-4" alt="logo"></a>
			</div>
			<!-- home -->
			<div x-data="{ dropdown: false }" x-init="init()" @keydown.escape.stop="dropdown = false; focusButton()" @click.away="dropdown = false" class="relative z-10">
				<a href="<?php echo $baseUrl?>" class="text-gray-300  hover:text-gray-400 px-2 transition-all duration-300" id="user-menu-button" x-ref="button" @click="dropdown =! dropdown" @keyup.space.prevent="dropdown =! dropdown" @keydown.enter.prevent="dropdown =! dropdown" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
					<span class="sr-only">Open user menu</span>
					Home
				</a>
				<!-- 
				<div class="capitalize max-h-0 overflow-hidden absolute inset-0 bottom-auto mt-10 w-56 rounded-md shadow-lg px-5 bg-white transition-all duration-500" x-ref="dropdown1" :class="dropdown = dropdown ? 'pb-16 border-t-4 border-yellow-400' : '' " :style="dropdown = dropdown ?  'max-height: '+ $refs.dropdown1.scrollHeight + 'px' :'' ">
					<a href="index.php" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Home</a>
				</div>-->
			</div>
			<!-- javascpirt -->
			<div x-data="{ dropdown: false }" x-init="init()" @keydown.escape.stop="dropdown = false; focusButton()" @click.away="dropdown = false" class="relative z-10">
				<button type="button" class="text-gray-300  hover:text-gray-400 px-2 transition-all duration-300" id="user-menu-button" x-ref="button" @click="dropdown =! dropdown" @keyup.space.prevent="dropdown =! dropdown" @keydown.enter.prevent="dropdown =! dropdown" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
					Javascript
				</button>
				<div class="capitalize max-h-0 overflow-hidden absolute inset-0 bottom-auto mt-10 w-56 rounded-md shadow-lg px-5 bg-white transition-all duration-500" x-ref="dropdown1" :class="dropdown = dropdown ? 'pb-2.5 border-t-4 border-yellow-400' : '' " :style="dropdown = dropdown ?  'max-height: '+ $refs.dropdown1.scrollHeight + 'px' :'' ">
					<a href="<?php echo $baseUrl; ?>draggable-element.php" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Draggable Element</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">About me</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Client</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">History</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Profile</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Comming soon</a>
				</div>
			</div>
			<!-- dom -->
			<div x-data="{ dropdown: false }" x-init="init()" @keydown.escape.stop="dropdown = false; focusButton()" @click.away="dropdown = false" class="relative z-10">
				<button type="button" class="text-gray-300  hover:text-gray-400 px-2 transition-all duration-300" id="user-menu-button" x-ref="button" @click="dropdown =! dropdown" @keyup.space.prevent="dropdown =! dropdown" @keydown.enter.prevent="dropdown =! dropdown" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
					Dom
				</button>
				<div class="capitalize max-h-0 overflow-hidden absolute inset-0 bottom-auto mt-10 w-56 rounded-md shadow-lg px-5 bg-white transition-all duration-500" x-ref="dropdown1" :class="dropdown = dropdown ? 'pb-2.5 border-t-4 border-yellow-400' : '' " :style="dropdown = dropdown ?  'max-height: '+ $refs.dropdown1.scrollHeight + 'px' :'' ">
					<a href="<?php echo $baseUrl?>dom/generateRGB.php" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Generate RGB</a>
					<a href="<?php echo $baseUrl?>dom/generateHex.php" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Generate HEX</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">About me</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Client</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">History</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Profile</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Comming soon</a>
				</div>
			</div>
			<!-- Portfolio -->
			<div x-data="{ dropdown: false }" x-init="init()" @keydown.escape.stop="dropdown = false; focusButton()" @click.away="dropdown = false" class="relative z-10">
				<button type="button" class="text-gray-300  hover:text-gray-400 px-2 transition-all duration-300" id="user-menu-button" x-ref="button" @click="dropdown =! dropdown" @keyup.space.prevent="dropdown =! dropdown" @keydown.enter.prevent="dropdown =! dropdown" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
					Portfolio
				</button>
				<div class="capitalize max-h-0 overflow-hidden absolute inset-0 bottom-auto mt-10 w-56 rounded-md shadow-lg px-5 bg-white transition-all duration-500" x-ref="dropdown1" :class="dropdown = dropdown ? 'pb-2.5 border-t-4 border-yellow-400' : '' " :style="dropdown = dropdown ?  'max-height: '+ $refs.dropdown1.scrollHeight + 'px' :'' ">
					<a href="portfolio/portfolio-grid.php" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Grid</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Grid gutter</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Grid width</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Grid width full</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Grid row</a>
					<a href="portfolio/portfolio-list.php" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">List</a>
					<a href="portfolio/portfolio-single-default.php" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Default</a>
					<a href="portfolio/portfolio-single-parallax.php" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Single Parallax</a>
					<a href="portfolio/portfolio-single-extended.php" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Single Extended</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Comming soon</a>
				</div>
			</div>
			<!-- Shop -->
			<div x-data="{ dropdown: false }" x-init="init()" @keydown.escape.stop="dropdown = false; focusButton()" @click.away="dropdown = false" class="relative z-10">
				<button type="button" class="text-gray-300  hover:text-gray-400 px-2 transition-all duration-300" id="user-menu-button" x-ref="button" @click="dropdown =! dropdown" @keyup.space.prevent="dropdown =! dropdown" @keydown.enter.prevent="dropdown =! dropdown" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
					Shop
				</button>
				<div class="capitalize max-h-0 overflow-hidden absolute inset-0 bottom-auto mt-10 w-56 rounded-md shadow-lg px-5 bg-white transition-all duration-500" x-ref="dropdown1" :class="dropdown = dropdown ? 'pb-2.5 border-t-4 border-yellow-400' : '' " :style="dropdown = dropdown ?  'max-height: '+ $refs.dropdown1.scrollHeight + 'px' :'' ">
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">4 column</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">3 column</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">2 column</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">List product</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">shop single</a>
					<a href="shop/shop.php" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Left SideBar</a>
				</div>
			</div>
			<!-- Features -->
			<div x-data="{ dropdown: false }" x-init="init()" @keydown.escape.stop="dropdown = false; focusButton()" @click.away="dropdown = false" class="relative z-10">
				<button type="button" class="text-gray-300  hover:text-gray-400 px-2 transition-all duration-300" id="user-menu-button" x-ref="button" @click="dropdown =! dropdown" @keyup.space.prevent="dropdown =! dropdown" @keydown.enter.prevent="dropdown =! dropdown" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
					Features
				</button>
				<div class="capitalize max-h-0 overflow-hidden absolute inset-0 bottom-auto mt-10 w-56 rounded-md shadow-lg px-5 bg-white transition-all duration-500" x-ref="dropdown1" :class="dropdown = dropdown ? 'pb-2.5 border-t-4 border-yellow-400' : '' " :style="dropdown = dropdown ?  'max-height: '+ $refs.dropdown1.scrollHeight + 'px' :'' ">
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">4 column</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">3 column</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">2 column</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">List product</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">shop single</a>
				</div>
			</div>
			<!-- blog -->
			<div x-data="{ dropdown: false }" x-init="init()" @keydown.escape.stop="dropdown = false; focusButton()" @click.away="dropdown = false" class="relative z-10">
				<button type="button" class="text-gray-300  hover:text-gray-400 px-2 transition-all duration-300" id="user-menu-button" x-ref="button" @click="dropdown =! dropdown" @keyup.space.prevent="dropdown =! dropdown" @keydown.enter.prevent="dropdown =! dropdown" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
					Blog
				</button>
				<div class="capitalize max-h-0 overflow-hidden absolute inset-0 bottom-auto mt-10 w-56 rounded-md shadow-lg px-5 bg-white transition-all duration-500" x-ref="dropdown1" :class="dropdown = dropdown ? 'pb-2.5 border-t-4 border-yellow-400' : '' " :style="dropdown = dropdown ?  'max-height: '+ $refs.dropdown1.scrollHeight + 'px' :'' ">
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">4 column</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">3 column</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">2 column</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">List product</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">shop single</a>
				</div>
			</div>
			<!-- Contact -->
			<div x-data="{ dropdown: false }" x-init="init()" @keydown.escape.stop="dropdown = false; focusButton()" @click.away="dropdown = false" class="relative z-10">
				<button type="button" class="text-gray-300  hover:text-gray-400 px-2 transition-all duration-300" id="user-menu-button" x-ref="button" @click="dropdown =! dropdown" @keyup.space.prevent="dropdown =! dropdown" @keydown.enter.prevent="dropdown =! dropdown" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
					Contact
				</button>
				<div class="capitalize max-h-0 overflow-hidden absolute inset-0 bottom-auto mt-10 w-56 rounded-md shadow-lg px-5 bg-white transition-all duration-500" x-ref="dropdown1" :class="dropdown = dropdown ? 'pb-2.5 border-t-4 border-yellow-400' : '' " :style="dropdown = dropdown ?  'max-height: '+ $refs.dropdown1.scrollHeight + 'px' :'' ">
					
					<!-- login / signin modal -->
					<div x-data="{ <?php echo(isset( $old['login_email'] ) ? 'open : true ' : 'open : false ')?>}" @keydown.window.escape="open = false" @click.away="open=false" class="group z-20">
						
							<?php
								if (isset($_SESSION['dashboard_open'])) {
							?>
							
							<div class="flex gap-1 py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
								</svg>
								<a href="dashboard/index.php" class="decoration-none" >Go Dashboard</a>
							</div>
							
							<?php
								}else{
							?>
							
							<button id="signIn" class="flex gap-1 py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" @click="open = true" >
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
								</svg>
								<span class="font-medium ">Sign in</span>
							</button>
							
							<?php
								}
							?>
							
						<div x-show="open" class="fixed z-50 inset-0 overflow-y-auto my-auto top-5 -bottom-5" x-ref="dialog" aria-modal="true" style="display: none;">
							<div class="flex sm:block md:px-2 lg:px-4" style="font-size: 0;">
								<div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95" x-transition:enter-end="opacity-100 translate-y-0 md:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 md:scale-100" x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95" x-description="Modal panel, show/hide based on modal state." class="w-full lg:w-9/12 m-auto mt-6 transform transition p-2 sm:align-middle z-1010" style="display: none;">
									<div class=" relative bg-gray-200 rounded-lg  shadow-2xl overflow-hidden border border-yellow-400">
										<!-- close-button -->
										<button type="button" class="absolute top-4 right-4 text-gray-400 trnsition-all duration-300 hover:text-red-500" @click="open = false">
											<span class="sr-only">Close</span>
											<svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
											</svg>
										</button>

										<div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-base divide-x divide-yellow-400 ">
											<div class="px-8 py-14 space-y-4">
												<h1 class="text-3xl font-medium">Hey there!<br>Welcome back.</h1>
												<img id="signUP" src="images/demo/signin-dark.svg" alt="" class="p-4 block w-full h-auto text-center">
												<h3 class="">Don't have an account? <span class="cursor-pointer text-blue-700 underline hover:no-underline transition-all" onclick=" function signUp(){return signUp()}; if ( signUp() == null){console.log(' net name')}else{console.log('pisssa')};">Sign up here</span></h3>
											</div>

											<form method="post" class="text-left text-black space-y-8 px-8 py-14 ">
												<div class="space-y-4">
													<button type="button" class="flex items-center justify-center gap-x-2 w-full text-blue-600 hover:text-white hover:bg-blue-500 border border-blue-600 font-bold rounded-md px-5 py-2 transition-all duration-500 ">
														<i class="fab fa-google"></i>
														<span>Sign in with Google</span>
													</button>
													<button type="button" class="flex items-center justify-center gap-x-2 w-full text-blue-600 hover:text-white hover:bg-blue-500 border border-blue-600 font-bold rounded-md px-5 py-2 transition-all duration-500 ">
														<i class="fab fa-facebook-f"></i>
														<span>Sign in with Facebook</span>
													</button>
												</div>
												<div class="flex items-center gap-3">
													<hr class="border-t border-yellow-400 w-3/6 inline-block"><span>Or</span>
													<hr class="border-t border-yellow-400 w-3/6 inline-block">
												</div>
												<div class="space-y-4">
													<div class="space-y-1 relative">
														<label for="login_email">Email adderss</label>
														<input type="email" id="login_email" name="login_email" class="form-input w-full text-md font-semibold bg-gray-400 bg-opacity-30 rounded-lg border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-transparent placeholder-white" placeholder="Email" value="<?php echo($old['login_email']?? '' ); ?>">
														<div class="text-xs text-red-500 font-bold absolute -bottom-3.5"><?php echo($errors['login_email']?? '')?></div>
													</div>
													<div class="space-y-1">
														<label for="login_password" class="flex items-center justify-between">
															<h4>Password</h4>
															<h4 class="underline hover:no-underline text-sm">Forger password</h4>
														</label>
														<input type="password" id="login_password" name="login_password" class="form-input w-full text-md font-semibold bg-gray-400 bg-opacity-30 rounded-lg border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-transparent placeholder-white" placeholder="Password">
													</div>
													<div>
														<button name="loginSubmition" class="mt-6 flex justify-center gap-x-2 w-full text-white bg-yellow-500 rounded-md px-5 py-2 transition-all duration-500 ">Sign in</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- modal sign up page -->
					<div x-data="{ <?php echo(isset( $old['signUp_email'] ) ? 'open : true ' : 'open : false ')?> }" @keydown.window.escape="open = false" @click.away="open=false"  class="group z-20">
						<button id=" signUP" ft="signUp(); console.log('ame'); " class="flex gap-1 py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" @click="open = true" >
							
							<?php
								if (!isset($_SESSION['dashboard_open'])) {
							?>
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
								</svg>
								<span class="font-medium ">Sign up</span>
							<?php		
								}
							?>
							
						</button>
						<div x-show="open" class="fixed z-50 inset-0 overflow-y-hidden my-auto top-5 -bottom-5" x-ref="dialog" aria-modal="true" style="display: none;">
							<div class="flex sm:block md:px-2 lg:px-4" style="font-size: 0;">
								<div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95" x-transition:enter-end="opacity-100 translate-y-0 md:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 md:scale-100" x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95" x-description="Modal panel, show/hide based on modal state." class="w-full lg:w-9/12 m-auto transform transition p-2 sm:align-middle z-1010" style="display: none;">
									<div class="relative bg-gray-900 text-white rounded-lg shadow-2xl overflow-hidden border border-gray-800">
										<!-- close-button -->
										<button type="button" class="absolute top-2 right-2 text-gray-400 trnsition-all duration-300 hover:text-red-500" @click="open = false">
											<span class="sr-only">Close</span>
											<svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
											</svg>
										</button>
										<div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-base divide-x divide-gray-800 ">
											<div class="px-8 pt-8 md:py-14 space-y-4">
												<h1 class="text-3xl font-bold pb-5">Join Finder.<br>Get premium benefits:</h1>
												<div class="space-y-1 pt-5">
													<div class="flex items-center gap-x-2">
														<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
														</svg>
														<p>Add and promote your listings</p>
													</div>
													<div class="flex items-center gap-x-2">
														<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
														</svg>
														<p>Easily manage your wishlist</p>
													</div>
													<div class="flex items-center gap-x-2">
														<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
														</svg>
														<p>Leave reviews</p>
													</div>
												</div>
												<img src="images/demo/signup-dark.svg" alt="" class="p-4 block w-full h-auto text-center">
												<h3 class="text-gray-400">You have an account? <a href="#" class="text-white underline hover:no-underline transition-all" onclick="if(!confirm('Do You Want To Delete Section Image')){ return event.preventDefault(); }else{ document.getElementById('#signIn').click();}">Sign in here</a></h3>
											</div>
											<form method="post" class="text-left text-white text-sm space-y-2 p-8 ">
												<div class="space-y-2">
													<button type="button" class="flex items-center justify-center gap-x-2 w-full text-blue-600 hover:text-white hover:bg-blue-500 border border-blue-600 font-bold rounded-md px-5 py-1.5 transition-all duration-500 ">
														<i class="fab fa-google"></i>
														<span>Sign in with Google</span>
													</button>
													<button type="button" class="flex items-center justify-center gap-x-2 w-full text-blue-600 hover:text-white hover:bg-blue-500 border border-blue-600 font-bold rounded-md px-5 py-1.5 transition-all duration-500 ">
														<i class="fab fa-facebook-f"></i>
														<span>Sign in with Facebook</span>
													</button>
												</div>
												<div class="flex items-center gap-3">
													<hr class="border-t border-gray-700 w-3/6 inline-block"><span>Or</span>
													<hr class="border-t border-gray-700 w-3/6 inline-block">
												</div>
												<div class="space-y-3.5">
													<div class="space-y-1 relative">
														<label for="signUp_name">Full name</label>
														<input type="text" id="signUp_name" name="signUp_name" class="form-input py-1.5 w-full text-sm font-semibold bg-gray-600 bg-opacity-30 rounded-lg border border-gray-700 focus:border-gray-600 focus:bg-gray-800 focus:ring-transparent placeholder-gray-400" placeholder="Full Name" value="<?php echo($old['signUp_name']?? '')?>">
														<div class="text-xs text-red-500 font-bold absolute -bottom-3.5"><?php echo($errors['signUp_name']?? '')?></div>
													</div>
													<div class="space-y-1 relative">
														<label for="signUp_phone">Phone</label>
														<input type="text" id="signUp_phone" name="signUp_phone" class="form-input py-1.5 w-full text-sm font-semibold bg-gray-600 bg-opacity-30 rounded-lg border border-gray-700 focus:border-gray-600 focus:bg-gray-800 focus:ring-transparent placeholder-gray-400" placeholder="Your Phone Number" value="<?php echo($old['signUp_phone']?? '')?>" >
														<div class="text-xs text-red-500 font-bold absolute -bottom-3.5"><?php echo($errors['signUp_phone']?? '')?></div>
													</div>
													<div class="space-y-1 relative">
														<label for="signUp_email">Email</label>
														<input type="email" id="signUp_email" name="signUp_email" class="form-input py-1.5 w-full text-sm font-semibold bg-gray-600 bg-opacity-30 rounded-lg border border-gray-700 focus:border-gray-600 focus:bg-gray-800 focus:ring-transparent placeholder-gray-400" placeholder="email address" value="<?php echo($old['signUp_email']?? '')?>">
														<div class="text-xs text-red-500 font-bold absolute -bottom-3.5"><?php echo($errors['signUp_email']?? '')?></div>
													</div>
													<div class="space-y-1 relative">
														<label for="signUp_password" class="flex items-center gap-1">
															<h4>Password</h4>
															<span class="text-gray-500 text-sm">min.8 char</span>
														</label>
														<input type="password" id="signUp_password" name="signUp_password" class="form-input py-1.5 w-full text-sm font-semibold bg-gray-600 bg-opacity-30 rounded-lg border border-gray-700 focus:border-gray-600 focus:bg-gray-800 focus:ring-transparent" placeholder="Password">
														<div class="text-xs text-red-500 font-bold absolute -bottom-3.5"><?php echo($errors['signUp_password']?? '')?></div>
													</div>
													<div class="space-y-1 relative">
														<label for="signUp_confirm_Password">
															<h4>Confirm password</h4>
														</label>
														<input type="password" id="signUp_confirm_Password" name="signUp_confirm_Password" class="form-input py-1.5 w-full text-sm font-semibold bg-gray-600 bg-opacity-30 rounded-lg border border-gray-700 focus:border-gray-600 focus:bg-gray-800 focus:ring-transparent" placeholder="Confirm Password">
														<div class="text-xs text-red-500 font-bold absolute -bottom-3.5"><?php echo($errors['signUp_confirm_Password']?? '')?></div>
													</div>
													<div class="flex gap-x-2 ">
														<input id="" type="checkbox" name="" class="form-checkbox rounded text-transparent bg-transparent border-0 ring-2 ring-red-500 focus:ring-red-500 focus:ring-offset-0 mt-1">
														<span class="text-gray-400">By joining, I agree to the <a class="text-white font-medium cursor-pointer underline hover:no-underline">Terms of use</a> and <a class="text-white font-medium cursor-pointer underline hover:no-underline">Privacy policy</a></span>
													</div>
													<div>
														<button name="signUpSubmition" class="mt-4 flex justify-center gap-x-2 w-full text-white bg-red-500 rounded-md px-5 py-2 transition-all duration-500 ">Sign up</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!-- Shortcodes -->
			<div x-data="{ dropdown: false }" x-init="init()" @keydown.escape.stop="dropdown = false; focusButton()" @click.away="dropdown = false" class="relative z-10">
				<button type="button" class="text-gray-300  hover:text-gray-400 px-2 transition-all duration-300" id="user-menu-button" x-ref="button" @click="dropdown =! dropdown" @keyup.space.prevent="dropdown =! dropdown" @keydown.enter.prevent="dropdown =! dropdown" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
					Shortcodes
				</button>
				<div class="capitalize max-h-0 overflow-hidden absolute inset-0 bottom-auto mt-10 w-56 rounded-md shadow-lg px-5 bg-white transition-all duration-500" x-ref="dropdown1" :class="dropdown = dropdown ? ' pb-2.5 border-t-4 border-yellow-400' : '' " :style="dropdown = dropdown ?  'max-height: '+ $refs.dropdown1.scrollHeight + 'px' :'' ">
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">4 column</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">3 column</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">2 column</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">List product</a>
					<a href="#" class="block py-1.5 text-gray-700 text-medium hover:text-yellow-500 transform hover:translate-x-2 transition-all duration-500" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">shop single</a>
				</div>
			</div>
		</div>
	</div>
</nav>