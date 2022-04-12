<script>
	import Footer from '$lib/footer/Footer.svelte';
	import Header from '$lib/header/Header.svelte';
	import favicon from '../favicon.ico';
	import { writable } from 'svelte/store';
	import { setContext } from 'svelte';


	const isMobile = writable(false)
	let 
	width = writable(''), 
	height = writable('')
	
	setContext('isMobile', isMobile)
	setContext('width', width)
	

	$: if ($width > 600) $isMobile = false
	else $isMobile = true



</script>

<svelte:window bind:innerWidth={$width} bind:innerHeight={$height}/>

<svelte:head>
	<link rel="icon" href={favicon} />
</svelte:head>

<div class="bg">
	<div class="content">
		<header>
			<Header />
		</header>
	<main>
		<slot />
	</main>
</div>
<footer class="footer">
	<Footer/>
</footer>
</div>

<style lang="scss">

@import '../app.css';




:global(*) {
	margin: 0;
	padding: 0;
	font-family: 'Sansation Light', sans-serif;
	-webkit-box-sizing: border-box;
	        box-sizing: border-box;
			touch-action: manipulation;	
		
}


.bg {
	background: url('../img/bg.jpg') center center / cover no-repeat;
	min-height: 100vh;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-orient: vertical;
	-webkit-box-direction: normal;
	    -ms-flex-direction: column;
	        flex-direction: column;
	color: white;
}

main {
	font-size: 24px;
	color: #FFFFFF;
}

:global(.container) {
max-width: 1200px;
margin: 0 auto;
padding: 2%;
}

:global(.container > div, a, section, form) {
	border-radius: 5px;
}
@media (max-width: 1450px) {
	:global(.container) {
		max-width: 1000px;
	}
}

:global(a) {
	text-decoration: none;
	color: white;
}

:global(.button) {
	background: rgba(0, 0, 0, 0.50);
	border-radius: 35px;
	border: none;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	    -ms-flex-align: center;
	        align-items: center;
	-webkit-box-pack: center;
	    -ms-flex-pack: center;
	        justify-content: center;
	-webkit-transition: .5s background;
	transition: .5s background;
	&:hover {
		background: rgba(0, 0, 0, 0.75);
	}
}

.content {
	-webkit-box-flex: 1;
	    -ms-flex: 1 0 auto;
	        flex: 1 0 auto;
	padding-bottom: 15px;
	}
.footer {
	-webkit-box-flex: 0;
	    -ms-flex: 0 0 auto;
	        flex: 0 0 auto;
	}
</style>
