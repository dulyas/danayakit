import adapter from '@sveltejs/adapter-static';
import sveltePreprocess from 'svelte-preprocess';
import vercel from '@sveltejs/adapter-vercel';


/** @type {import('@sveltejs/kit').Config} */
const config = {
	preprocess: sveltePreprocess(),
	kit: {
		// adapter: adapter({
		// 	// default options are shown
		// 	pages: 'build',
		// 	assets: 'build',
		// 	fallback: null,
		// 	precompress: false
		// }),

		adapter: vercel(),

		// hydrate the <div id="svelte"> element in src/app.html
		target: '#svelte',

		// Override http methods in the Todo forms
		methodOverride: {
			allowed: ['PATCH', 'DELETE']
		}
	}
};

export default config;
