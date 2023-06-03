<?php
	
	include('header.php');

?>

	<main>
		<div class="h-full w-full flex flex-col items-center justify-center">
			<div id="dragAble" class="grow m-auto border border-indigo-700 w-[500px] rounded-md absolute top-[50%] right-[50%]">
				<header id="drag" class="w-full z-50 bg-indigo-400 text-lg font-medium px-2 py-4 border-b-2 "></header>
				<div class="content m-4">
					<div class="icon"></div>
					<h5 class="title">Dragable div</h5>
					<p class="icon"></p>
				</div>
			</div>
		</div>
	</main>
	
	
	<script src="js/alpine.min.js"></script>
	<script src="js/scripts.js"></script>
	
	<script>
		const dragable = document.querySelector("#dragAble"),
		header = dragable.querySelector("#drag");
		function onDrag({movementX, movementY}){
			let getStyle = window.getComputedStyle(dragable);
			let left = parseInt(getStyle.left);
			let top = parseInt(getStyle.top);
			dragable.style.left = `${left + movementX}px`;
			dragable.style.top = `${top + movementY}px`;
		}
		header.addEventListener("mousedown", ()=>{
			header.addEventListener("mousemove", onDrag);
		})
		header.addEventListener("mouseup", ()=>{
			header.removeEventListener("mousemove", onDrag);

		})
		
	</script>