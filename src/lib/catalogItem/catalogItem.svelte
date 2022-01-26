
<script>
import { fade, blur, fly, slide, scale, draw, crossfade } from 'svelte/transition';
let visible = true;
import PrevButton from './prevButton.svelte';
import NextButton from './nextButton.svelte';

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
    }, 400)
}

function prev() {
    visible = false;
    setTimeout(() => {
        if (index > 0) {
        index--;
    } else {
        index = types.length-1;
    }
    visible = true;
    }, 400)
}


</script>


<div in:fade="{{duration: 1000}}" class="product">
    <div class="product__text">
        <h2 class="product__name">Рулонные жалюзи</h2>
        {#if visible}
        <div transition:fade|local="{{duration: 300}}" class="product__subname">{types[index].name}</div>
        <div transition:fade|local="{{duration: 300}}" class="product__descr">{types[index].descr}</div>
        {/if}
    </div>
    <div class="product__photo">
        {#if visible}
        <img transition:fade|local="{{duration: 300}}" src={types[index].url} alt="">
        <div transition:fade|local="{{duration: 300}}" class="product__buttons">
            <PrevButton on:click={prev}/>
            <NextButton on:click={next}/>
        </div>
        {/if}
    </div>

</div>


<style lang='scss'>
    .product {
        max-width: 1400px;
        height: 70vh;
        transition: 1s all;
        margin: 0 auto;
        margin-top: 1.3rem;
        display: flex;
        justify-content: space-between;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(4px);
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
        &__text {
            padding: 50px;
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
            font-size: 23px;
            line-height: 28px;
            color: #FFFFFF;
        }
        &__photo {
            position: relative;
            img {
                height: 100%;
            }
        }
        &__buttons {
            display: flex;
            width: 100%;
            justify-content: space-around;
            align-items: center;
            position: absolute;
            bottom: 5%;
            right: 50%;
            transform: translateX(50%);
        }
    }


    @media (max-width: 1300px) {
        .product {
            display: block;
            height: auto;
           &__text {
        }
        &__name {
         font-size: 50px;
        }
        &__subname {
           font-size: 38px;
        }
        &__descr {
           font-size: 18px;
        }
        &__photo {
            img {
            width: 100%;
            }
        }
        &__buttons {
           
        }
    }
    }

    @media (max-width: 1050px) {
        .product {
           &__text {
           
        }
        &__name {
         font-size: 50px;
        }
        &__subname {
           font-size: 38px;
        }
        &__descr {
           font-size: 15px;
        }
        &__photo {
          
            img {
              
            }
        }
        &__buttons {
           
        }
    }
    }

    @media (max-width: 800px) {
        .product {
           &__text {

        }
        &__name {
            font-size: 30px;
        }
        &__subname {
            font-size: 25px;
        }
        &__descr {

        }
        &__photo {

            img {

            }
        }
        &__buttons {

        }
    }
    }


    // @media (max-width: 1300px) {
    //     .product {
    //        &__text {
           
    //     }
    //     &__name {
         
    //     }
    //     &__subname {
           
    //     }
    //     &__descr {
           
    //     }
    //     &__photo {
          
    //         img {
              
    //         }
    //     }
    //     &__buttons {
           
    //     }
    // }
    // }


</style>