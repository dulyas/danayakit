<script>
    import { fly, scale } from 'svelte/transition';
    import { quadOut } from 'svelte/easing';
    export let open;

    const menu = [
        {name: 'Главная',
        url: '/'},
        {name: 'Контакты',
        url: '/contacts'},
        {name: 'Каталог',
        url: '/catalog'},
        {name: 'О компании',
        url: '/company'},
        {name: 'Галерея',
        url: '/gallery'},
        {name: 'Вызвать замерщика',
        url: '/call'},
        ]


    
    //  $: document.body.style.overflow = open ? 'hidden': '';
    
</script>

{#if open}
    <div transition:scale>
        {#each menu as link, i}
            <p>
                <a on:click={() => open = !open} href={link.url} transition:fly={{ y: -15, delay: 50 * i }}>
                    {link.name}
                </a>
            </p>
        {/each}
    </div>

    <hr transition:scale={{ duration: 750, easing: quadOut, opacity: 1 }} />
{/if}

<style lang="scss">

    div {
        width: 100%;
        height: 10%;
        display: flex;
        text-align: center;
        background: rgba(0, 0, 0, 0.35);
        z-index: 1000;
        font-size: 1.3rem;
        position: fixed;
        justify-content: space-around;
        align-items: center;
        transition: 1s all;
        border-bottom: black;
    }

    @media (max-width: 1000px) {
        div {
            font-size: 0.9rem;
            height: 10%;
        }
    }

 
    @media (max-width: 500px) {
        div {
            left: 50%;
            font-size: 1.5rem;
            transform: translateX(-50%);
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
            background: rgba(0, 0, 0, 0.336);
            backdrop-filter: blur(4px);
        }
        p {
        margin-top: 35px;
        }
    }   
</style>