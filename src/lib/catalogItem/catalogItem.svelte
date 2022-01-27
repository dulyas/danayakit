
<script>
import { fade, blur, fly, slide, scale, draw, crossfade } from 'svelte/transition';

import PrevButton from './prevButton.svelte';
import NextButton from './nextButton.svelte';

export let types;
let index = 0;
let current = types[0].name;


function next() {

        if (index < types.length-1) {
        index++;
    } else {
        index = 0;
    }

}

function prev() {

        if (index > 0) {
        index--;
    } else {
        index = types.length-1;
}
}


</script>

{#each types as type, i}
<div 
in:fade="{{duration: 1000}}" 
class="product"
style="display: {i === index ? 'flex' : 'none'}">
    <div class="product__text">
        <h2 class="product__name">Рулонные жалюзи</h2>
    
        <div transition:fade|local class="product__subname">{type.name}</div>
        <div transition:fade|local class="product__descr">{type.descr}</div>
    
    </div>
    <div class="product__photo">
    
        <img transition:fade|local src={type.url} alt="">
        <div transition:fade|local class="product__buttons">
            <PrevButton on:click={prev}/>
            <NextButton on:click={next}/>
        </div>
    </div>   
</div>
{/each}

<style lang='scss'>

   .product {
        max-width: 80vw;
        height: 70vh;
        -webkit-transition: 1s all ease;
        -o-transition: 1s all ease;
        transition: 1s all ease;
        margin: 0 auto;
        margin-top: 1.3rem;
        display: -webkit-box;
        display: -ms-flexbox;
        -webkit-box-pack: justify;
            -ms-flex-pack: justify;
                justify-content: space-between;
        background: rgba(0, 0, 0, 0.5);
        -webkit-backdrop-filter: blur(4px);
                backdrop-filter: blur(4px);
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
        &__text {
            padding: 50px;
            max-width: 50%;
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
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -ms-flex-pack: distribute;
                justify-content: space-around;
            -webkit-box-align: center;
                -ms-flex-align: center;
                    align-items: center;
            position: absolute;
            bottom: 5%;
            right: 50%;
            -webkit-transform: translateX(50%);
                -ms-transform: translateX(50%);
                    transform: translateX(50%);
        }
    }


    @media (max-width: 1300px) {
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
           font-size: 24px;
        }
        &__photo {
            img {
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
        }
        &__subname {
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

    @media (max-width: 800px) {
        .product {

           &__text {

        }
        &__name {
        }
        &__subname {
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