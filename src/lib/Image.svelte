<script>
    export let src
    export let alt = 'image'
    export let width = '100%'
    export let height = '100%'
    export let borderRadius = 'none';
    import { fade } from 'svelte/transition';
    const imageReady = (src) => {
        return new Promise((resolve, reject) => {
            const img = new Image()
            img.src = src
            img.onload = () => {
               resolve(src)
            }
        })
    }
</script>

{#await imageReady(src)}
    <slot/>
{:then src} 
    <img src={src} style="width: {width}; height: {height}; border-radius={borderRadius}" alt={alt}>
{/await}