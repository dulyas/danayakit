<script>  
import { Swiper, SwiperSlide } from 'swiper/svelte';
import { Navigation, Pagination, Scrollbar, A11y, Autoplay } from 'swiper';
import 'swiper/css';
import Loading from "./loading.svelte";
import { fade } from 'svelte/transition';
import { onMount } from 'svelte';
import { browser } from '$app/env';
// import full from './full.svg';
import full2 from './full.png';


let slides = [];
let originals = [];
let photos;
let active;


let isMobile;
let width;
let swiper;



$: if (browser && width < 600) {
    isMobile = true;
} else {
    isMobile = false;

};



async function getPhotos() {
	const photos = await fetch('https://www.flickr.com/services/rest/?method=flickr.people.getPublicPhotos&api_key=667d78debe6b95018e501bf32f827313&user_id=194992154%40N08&extras=url_o&format=json&nojsoncallback=1');
	if (photos.ok) {
		return photos.json();
	}
}

onMount(async () => {
    const result = await getPhotos();
    photos = result.photos.photo;
    getPhotosUrls('All');

});



let rerender = false


function getPhotosUrls(type) {
    rerender = !rerender
    slides = []
    originals = []
    if (type === 'All') {
        slides = photos.map(item => `https://live.staticflickr.com/${item.server}/${item.id}_${item.secret}_b.jpg`);
        originals = photos.map(item => item.url_o);
        active = 'All';
    } else {
        const sorted = photos.filter(photo => photo.title === type);
        slides = sorted.map(item => `https://live.staticflickr.com/${item.server}/${item.id}_${item.secret}_b.jpg`);
        originals = sorted.map( item => item.url_o);
        active = type;
    }
    console.log(slides, originals)




}


</script>

<svelte:window bind:innerWidth={width}/>


{#if !slides.length}
    <Loading/>
{:else}
{#key rerender}
    <div in:fade={{duration: 200}} class="container">
            <div class="slider_big">
                <Swiper
                spaceBetween={isMobile ? 15 : 0}
                slidesPerView={1}
                centeredSlides={true}
                on:swiper={(e) => swiper = e.detail[0]}
                modules={[Autoplay]}
                autoplay={{delay: 2000, pauseOnMouseEnter: false, disableOnInteraction: true}}
                >
                {#each slides as slide, i}
                    <SwiperSlide>
                        <div class="slide__wrapper">
                            <div class="img-wrapper">
                                <div 
                                class="left"
                                on:click={() => swiper.slideTo(i - 1)}
                                >лево</div>
                                <div 
                                class="right"
                                on:click={() => swiper.slideTo(i + 1)}
                                >право</div>
                                <a href={originals[i]}
                                style={'position: absolute; z-index: 99; right: 0; top: 0;'}
                                class='full'>
                                    <img src={full2} alt="full" style="width: 30px;">
                                </a>
                                <img src={slide} alt="slide">
                            </div>
                        
                        </div>
                    </SwiperSlide>
                {/each}
                </Swiper>
            </div>
    </div> 
    <div class="sort-buttons">
        <button class='button sort-buttons-item'
        class:active-button="{active === 'All'}"
        on:click={() => getPhotosUrls('All')}>Показать все</button>
        <button class='button sort-buttons-item'
        class:active-button="{active === 'H'}"
        on:click={() => getPhotosUrls('H')}>Показать только горизонатльные</button>
        <button class='button sort-buttons-item'
        class:active-button="{active === 'V'}"
        on:click={() => getPhotosUrls('V')}>Показать только вертикальные</button>
        <button class='button sort-buttons-item'
        class:active-button="{active === 'R'}"
        on:click={() => getPhotosUrls('R')}>Показать только рулонные</button>
    </div>
{/key}
{/if}




<style lang="scss">

    .slide__wrapper {
        max-height: 62vh;
        position: relative;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        will-change: transform;
        .img-wrapper {
            position: relative;
        }
        .left {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 50%;
            z-index: 98;
            opacity: 0;
        }
        .right {
            position: absolute;
            left: 50%;
            top: 0;
            height: 100%;
            width: 50%;
            z-index: 98;
            opacity: 0;
        }
        img {
            max-height: 61vh;
            align-self: center;
            max-width: 100%;
        }
        // margin-left: 15%;
        .full {
            opacity: 0.5;
            transition: opacity .5s;
            &:hover {
                opacity: 1;
            }
        }
    }



.sort-buttons {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    margin: 10px auto 0;
    &-item {
        margin: 5px 15px;
        padding: 15px;
        height: 25px;
        color: white;
        width: 240px;
        cursor: pointer;
    }
    .active-button {
        background: black;
        transform: scale(1.03);
    }
}


</style>