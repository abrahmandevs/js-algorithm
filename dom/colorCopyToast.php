<?php include('../header.php'); ?>
	<main>
		<div id="root" class="h-screen flex items-center justify-center">
			<div class="space-y-2">
				<div class="space-x-2 flex items-center">
					<input type="text" id="colorOut" class="rounded-sm" placeholder="Color">
					<button type="button" id="colorCopy" class="block mx-auto bg-green-500 text-white px-4 py-2 rounded-sm ">Copy</button>
				</div>
				<button type="button" id="generator" class="block mx-auto bg-green-500 text-white px-4 py-2 rounded-lg ">Generate</button>
			</div>
		</div>
	</main>
<script src="../js/alpine.min.js"></script>

<script>
	window.onload = ()=>{
		main()
	}
	function main(){
		const root = document.getElementById('root');
		const generator = document.getElementById('generator');
		const output = document.getElementById('colorOut');
		const copy = document.getElementById('colorCopy');
		generator.addEventListener('click',function(){
			const bgColor = generateColor();
			root.style.backgroundColor = bgColor;
			output.value = bgColor;
		});
		copy.addEventListener('click', function(){
			navigator.clipboard.writeText(output.value);
		})
	}
	function generateColor() {
		const red = Math.floor(Math.random()*255);
		const green = Math.floor(Math.random()*255);
		const blue = Math.floor(Math.random()*255);
		let hex = `#${red.toString(16)}${green.toString(16)}${blue.toString(16)}`;
		return hex;
	}
    
</script>
	