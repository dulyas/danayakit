<script>
    import { fly, scale } from 'svelte/transition';
    import { quadOut } from 'svelte/easing';
    import Vk from '$lib/footer/vk.svg';
    import Inst from '$lib/footer/inst.svg';
    import { browser } from '$app/env';
    import { getContext } from 'svelte';

    export let open;
    export let menu;

</script>


{#if open}
    <div
    transition:scale>
        {#each menu as link, i}
            <p>
                <a on:click={() => open = !open} href={link.url} transition:fly={{ y: -15, delay: 50 * i }}>
                    {link.name}
                </a>
            </p>
        {/each}
        <span class='soc-items'>
            <a href="https://vk.com/danayajaluzi">
                <Vk/>
            </a>
            <a href="https://www.instagram.com/jaluzi174">
                <Inst/>
            </a>
        </span>
    </div>



    <hr transition:scale={{ duration: 750, easing: quadOut, opacity: 1 }} />
{/if}

<style lang="scss">


div {
        z-index: 999;
        width: 100vw;
        height: 75px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        text-align: center;
        background: rgba(0, 0, 0, 0.35);
        font-size: 1.3rem;
        position: fixed;
        -ms-flex-pack: distribute;
            justify-content: space-around;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        border-bottom: black;
        -webkit-backdrop-filter: blur(44px);
                backdrop-filter: blur(44px);
        touch-action: none;
        -ms-touch-action: none;
    }

    .soc-items {
        display: none;
    }

    @media (max-width: 1000px) {
        div {
            font-size: 1rem;
                    -webkit-backdrop-filter: blur(44px);
                            backdrop-filter: blur(44px);
        }
    }

 
    @media (max-width: 500px) {
        div {
            position: absolute;
            left: 50%;
            font-size: 1.5rem;
            -webkit-transform: translateX(-50%);
                    transform: translateX(-50%);
            width: 100%;
            height: 100vh;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
                -ms-flex-direction: column;
                    flex-direction: column;
            -webkit-box-align: center;
                -ms-flex-align: center;
                    align-items: center;
            -webkit-box-pack: start;
                -ms-flex-pack: start;
                    justify-content: start;
            background: rgba(0, 0, 0, 0.336);
            -webkit-backdrop-filter: blur(44px);
                    backdrop-filter: blur(44px);
        }
        p {
        margin-top: 35px;
        }
        
        .soc-items {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-top: 8vh;
        width: 30vw;
        -webkit-box-pack: justify;
            -ms-flex-pack: justify;
                justify-content: space-between;
    }
    }   

    @media (max-width: 350px) {
        p {
            font-size: 0.9rem;
        }
    }   


</style>