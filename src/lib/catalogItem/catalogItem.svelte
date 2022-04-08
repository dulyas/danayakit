<script>
import { fade } from 'svelte/transition';
import { Swiper, SwiperSlide } from 'swiper/svelte';
import { Navigation, Pagination, Scrollbar, A11y, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/autoplay';
export let products;
export let name;
// import 'css-skeletons'
import { browser } from '$app/env';
import { Skeleton } from 'svelte-loading-skeleton';

let swiper;

let isMobile;
let width;




$: if (browser && width < 600) {
    isMobile = true;
} else {
    isMobile = false;

};



function getImage(url) {
    return new Promise(function(resolve, reject){
        const img = new Image()
        img.onload = function(){

                resolve(img.src)

        }
        img.src = url
    })
}


</script>


<svelte:window bind:innerWidth={width}/>

{#if browser}  
<div class="container wrapper">
    <Swiper
    spaceBetween={0}
    modules={[Autoplay]}
    autoplay={{delay: 2000, pauseOnMouseEnter: false, disableOnInteraction: true}}
    slidesPerView={1}
    centeredSlides={true}
    centeredSlidesBounds={true}
    on:swiper={(e) => swiper = e.detail[0]}
    >
    {#each products as product, i}
        <SwiperSlide>
            <div in:fade="{{duration: 200}}" class="product">
                <div class="product__text">
                    <div class="product__name">{name}</div>
                    <div class="product__subname">{product.name}</div>
                    <div class="product__descr">{@html product.descr}</div>
                </div>
                {#await getImage(product.url)}             
                        <div class="product__wrapper">
                            <Skeleton 
                            width="100%"
                            height="60vh" 
                            baseColor="#D1BC8A" 
                            highlightColor="#FFFFFF" 
                            animationLength="1.2s" 
                            />
                        </div>

                {:then url} 
                    <div class="product__wrapper">
                        <img class="product__img" src={url} alt="">
                    </div>
                {/await}
            </div>
        </SwiperSlide>
    {/each}
    </Swiper>
</div>
{/if}

<style lang='scss'>

.product {
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    margin: 0 auto;
    position: relative;
    padding: 30px;
    background: rgba(0, 0, 0, 0.5);
    -webkit-backdrop-filter: blur(4px);
            backdrop-filter: blur(4px);
    will-change: transform;
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
        margin-top: 25px;
        font-size: 18px;
    }
    &__buttons {
        position: absolute;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        bottom: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center;
    }
    &__wrapper {
    position: relative;
    width: 53%;
    height: 100%;
    -ms-flex-item-align: start;
        -ms-grid-row-align: start;
        align-self: start;
    }
}

@media (max-width: 1440px) {
    .product {
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    margin: 0 auto;
    position: relative;
    padding: 20px 35px;
    background: rgba(0, 0, 0, 0.5);
    -webkit-backdrop-filter: blur(4px);
            backdrop-filter: blur(4px);      
  &__text {
        width: 50%;
    } 
    &__img {
        // width: 100%;
    }
    &__name {
        font-size: 35px;
    }
    &__subname {
        margin-top: 10px;
        font-size: 25px;
    }
    &__descr {
        margin-top: 15px;
        font-size: 16px;
    }
    &__buttons {
        position: absolute;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        bottom: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center;
    }
    &__wrapper {
    position: relative;
    width: 47%;
    // display: flex;
    // justify-content: end;
    //     .product__img {
    //         max-width: 90%;
    //     }
    }
}
}

@media (max-width: 1060px) {
    
.product {

    max-height: none;
    // -webkit-box-orient: vertical;
    // -webkit-box-direction: normal;
    //     -ms-flex-direction: column;
    //         flex-direction: column;
    // -webkit-box-align: center;
    //     -ms-flex-align: center;
    //         align-items: center;
    &__text {
        width: 100%;
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
        width: 100%;
        justify-content: center;
        .product__img {
            max-width: 100%;
        }
    }
}
}

@media (max-width: 770px) {
    
    .product {
    
        max-height: none;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        &__text {
            width: 100%;
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
            width: 100%;
            justify-content: center;
            .product__img {
                max-width: 100%;
            }
        }
    }
    }

@media (max-width: 450px) {
    
    .product {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        padding: 15px;
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
            align-self: center;
            -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        }
    }
    }
    


</style>