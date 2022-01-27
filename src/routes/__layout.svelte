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
	transition: 1s all;
}


	.bg {
		background: url('../img/bg.jpg') center center / cover no-repeat;
		min-height: 100vh;
		display: flex;
		flex-direction: column;
		color: white;
	}

	main {
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
		display: flex;
		align-items: center;
		justify-content: center;
		transition: 1s all;
		&:hover {
			background: rgba(0, 0, 0, 0.75);
		}
	}

	.content {
		flex: 1 0 auto;
		}
	.footer {
		flex: 0 0 auto;
		}

</style>
