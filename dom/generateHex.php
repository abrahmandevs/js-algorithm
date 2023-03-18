<?php include('../header.php'); ?>
	<main>
		<div id="root" class="h-screen flex items-center justify-center">
			<div class="space-y-2">
				<input type="text" id="hexView" placeholder="HEX Color">
				<button type="button" id="btnHex" class="block mx-auto bg-green-500 text-white px-4 py-2 rounded-lg ">Generate HEX</button>
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
		const btn = document.getElementById('btnHex');
		const output = document.getElementById('hexView');
		btn.addEventListener('click',function(){
			const bgColor = generateHex();
			root.style.backgroundColor = bgColor;
			output.value = bgColor;
		})
	}
	function generateHex() {
		const red = Math.floor(Math.random()*255);
		const green = Math.floor(Math.random()*255);
		const blue = Math.floor(Math.random()*255);
		let hex = `#${red.toString(16)}${green.toString(16)}${blue.toString(16)}`;
		return hex;
	}
</script>
	