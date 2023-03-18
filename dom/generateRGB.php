<?php include('../header.php'); ?>
	<main>
		<div id="root" class="h-screen  flex items-center justify-center">
			<button type="button" id="btnRGB" class="bg-green-500 text-white px-4 py-2 rounded-lg ">Generate RGB</button>
		</div>
	</main>
<script src="../js/alpine.min.js"></script>
<script>
	window.onload = ()=>{
		main()
	}
	function main(){
		const root = document.getElementById('root');
		const btn = document.getElementById('btnRGB');
		btn.addEventListener('click',function(){
			const bgColor = generateRGB();
			root.style.backgroundColor = bgColor;
		})
	}
	function generateRGB(params) {
		const red = Math.floor(Math.random()*255);
		const green = Math.floor(Math.random()*255);
		const blue = Math.floor(Math.random()*255);
		let rgb = `rgb(${red}, ${green}, ${blue})`;
		return rgb;
	}
</script>
	