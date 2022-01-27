<script>
	import Footer from '$lib/footer/Footer.svelte';
	import Header from '$lib/header/Header.svelte';
	import '../app.css';

</script>

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



* {
	padding: 0;
	margin: 0;
	-webkit-transition: 1s all;
	-o-transition: 1s all;
	transition: 1s all;
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
		-webkit-box-sizing: border-box;
		        box-sizing: border-box;
		font-size: 24px;
		color: #FFFFFF;
		margin-top: 2%;
		
	}

	:global(.container) {
    max-width: 1200px;
    margin: 0 auto;
	}

	:global(a) {
		text-decoration: none;
		color: white;
	}

	:global(.button) {
		background: rgba(0, 0, 0, 0.50);
		border-radius: 35px;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-align: center;
		    -ms-flex-align: center;
		        align-items: center;
		-webkit-box-pack: center;
		    -ms-flex-pack: center;
		        justify-content: center;
		-webkit-transition: 1s all;
		-o-transition: 1s all;
		transition: 1s all;
		&:hover {
			background: rgba(0, 0, 0, 0.75);
		}
	}

	.content {
		-webkit-box-flex: 1;
		    -ms-flex: 1 0 auto;
		        flex: 1 0 auto;
		}
	.footer {
		-webkit-box-flex: 0;
		    -ms-flex: 0 0 auto;
		        flex: 0 0 auto;
		}
</style>
