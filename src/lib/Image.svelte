<script>
    export let src
    export let alt = 'image'
    export let width = '100%'
    export let height = '100%'
    export let borderRadius = 'none';
    const imageReady = (src) => {
        return new Promise((resolve, reject) => {
            const img = new Image()
            img.src = src
            img.onload = () => {
               resolve(src)
            }
            img.onerror = () => {
                reject(console.log("Image not loaded"))
            }
        })
    }
</script>

{#await imageReady(src)}
    <slot/>
{:then src} 
    <img src={src} style="width: {width}; height: {height}; border-radius={borderRadius}" alt={alt}>
{/await}