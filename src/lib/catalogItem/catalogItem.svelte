
<script>
import { fade } from 'svelte/transition';
let visible = true;


export let types;
let index = 0;

function next() {
    visible = false;
    setTimeout(() => {
        if (index < types.length-1) {
        index++;
    } else {
        index = 0;
    }
    visible = true;
    }, 600)
}

</script>

{#if visible}
<div transition:fade="{{duration: 500}}" class="container product">
    <div class="product__text">
        <div class="product__name">Рулонные жалюзи</div>
        <div class="product__subname">{types[index].name}</div>
        <div class="product__descr">{types[index].descr}</div>
    </div>
    <div class="product__photo">
        <img src={types[index].url} alt="">
    </div>
    <button on:click={next} class="next">next</button>
</div>
{/if}

<style lang='scss'>
    .product {
        height: 70vh;
        display: flex;
        justify-content: center;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
        &__text {
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            padding: 50px;
            width: 50%;
        }
        &__name {
            font-size: 56px;
        }
        &__subname {
            font-size: 45px;
            margin-top: 25px;
        }
        &__descr {
            margin-top: 30px;
            font-style: normal;
            font-weight: 300;
            font-size: 25px;
            line-height: 28px;
            color: #FFFFFF;
        }
        &__photo {
            height: 100%;
            img {
                height: 100%;
            }
        }
    }
</style>