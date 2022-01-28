<script>
import { fade, blur, fly, slide, scale, draw, crossfade } from 'svelte/transition';
import PrevButton from './prevButton.svelte';
import NextButton from './nextButton.svelte';


export let products;
export let name;
let index = 0;

function next() {

if (index < products.length-1) {
        index++;
    } else {
        index = 0;
    }
}

function prev() {

if (index > 0) {
        index--;
    } else {
    index = products.length-1;
    }
}

</script>

{#each products as product, i}
    <div class="container">
        {#key index}
            <div in:fade style='display: {i === index ? "flex" : "none"}' class="product">
                <div class="product__text">
                    <div class="product__name">{name}</div>
                    <div class="product__subname">{product.name}</div>
                    <div class="product__descr">{product.descr}</div>
                </div>
                <div class="product__wrapper">
                    <img class="product__img" src={product.url} alt="">
                    <div class="product__buttons">
                        <PrevButton on:click={prev}/>
                        <NextButton on:click={next}/>
                    </div>
                </div>
            </div>
        {/key}
    </div>
{/each}


<style lang='scss'>


.product {
    transition: 1s all;
    width: 100%;
    display: flex;
    justify-content: space-between;
    margin: 0 auto;
    position: relative;
    padding: 30px;
    background: rgba(0, 0, 0, 0.5);
    -webkit-backdrop-filter: blur(4px);
            backdrop-filter: blur(4px);
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
    &__text {
        width: 43%;
    } 
    &__img {
        width: 100%;
    }
    &__name {
        font-size: 40px;
    }
    &__subname {
        margin-top: 15px;
        font-size: 30px;
    }
    &__descr {
        margin-top: 15px;
        font-size: 23px;
    }
    &__buttons {
        position: absolute;
        display: flex;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        justify-content: center;
    }
    &__wrapper {
    position: relative;
    width: 53%;
    align-self: center;
    }
}
@media (max-width: 1060px) {
    
.product {
    flex-direction: column;
    align-items: center;
    &__text {
        width: 95%;
    } 
    &__img {

    }
    &__name {
        font-size: 30px;
    }
    &__subname {
        font-size: 20px;
    }
    &__descr {
        font-size: 15px;
    }
    &__buttons {

    }
    &__wrapper {
        margin-top: 2%;
        width: 95%;
    }
}
}

@media (max-width: 450px) {
    
    .product {
        flex-direction: column;
        align-items: center;
        padding: 5px;
        &__text {
            width: 95%;
        } 
        &__img {
    
        }
        &__name {
    
        }
        &__subname {
    
        }
        &__descr {
    
        }
        &__buttons {
    
        }
        &__wrapper {
            margin-top: 5%;
            width: 95%;
        }
    }
    }
    

</style>