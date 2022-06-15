<script context="module">
    export const prerender = false;
</script>

<script>
    import { getContext } from "svelte/internal";
    import { Skeleton } from 'svelte-loading-skeleton';
    import Image from "$lib/Image.svelte";
    import { Swiper, SwiperSlide } from 'swiper/svelte';
    import { Autoplay } from 'swiper';
    import 'swiper/css';

    import { fade } from 'svelte/transition';
    import { onMount } from 'svelte';
    import Full from './fullscreen.svg'
    import Horizontal from './horizontal.svg'
    import Vertical from './vertical.svg'
    import Rolled from './rolled.svg'




    let slides = [];
    let originals = [];
    let photos;
    let rerender = true
  
    let swiper;

    const isMobile = getContext('isMobile')


    let filter = {
        H: true,
        V: true,
        R: true,
    }

    const calcActiveFilter = () => {
        let counter = 0
        for (const key in filter) {
            if (filter[key]) counter++
        }
        return counter
    }

     
    const getPhotosUrls = (filterObject) => {
        rerender = !rerender
        slides = []
        originals = []
        let result = []
        for (const key in filterObject) {
            const sorted = photos.filter(photo => filterObject[key] && photo.title === key);
            result = [...result, ...sorted]
        }
        slides = result.map(item => `https://live.staticflickr.com/${item.server}/${item.id}_${item.secret}_b.jpg`);
        originals = result.map( item => item.url_o);

    }

    const clickOnFilter = (key) => {
        
        if (filter[key] && calcActiveFilter() > 1) filter[key] = false
        else if (!filter[key]) filter[key] = true

        getPhotosUrls(filter)
    }

    const clickOnFilterAll = () => {
        filter = {
            H: true,
            V: true,
            R: true,
        }
        getPhotosUrls(filter)
    }

    const getPhotos = async () => {
        const photos = await fetch('https://www.flickr.com/services/rest/?method=flickr.people.getPublicPhotos&api_key=667d78debe6b95018e501bf32f827313&user_id=194992154%40N08&extras=url_o&format=json&nojsoncallback=1');
        if (photos.ok) {
            return photos.json();
        }
    }

    onMount(async () => {
        const result = await getPhotos();
        photos = result.photos.photo;
        getPhotosUrls(filter);

    });


</script>

<svelte:head>
    <meta name="description" content="Жалюзи и рулонные шторы по индивидуальным размерам. Срок изготовления 3-5 дней. Звоните и заказывайте!" />
	<title>Жалюзи в Челябинске от производителя – Фирма Даная</title>
</svelte:head>

{#if !$isMobile}

<div 
in:fade={{duration: 200}} 
class="container">
    <div class="gallery-container">
        <div class="gallery-top">
            <div class="gallery-filter">
                <div class="sort-buttons">
                    <div class='sort-buttons-item all'
                    class:active-button="{filter.H && filter.V && filter.R}"
                    on:click={() => clickOnFilterAll()}>Все</div>
                    <div class='sort-buttons-item h'
                    class:active-button="{filter.H}"
                    on:click={() => clickOnFilter('H')}>
                        <Horizontal/>
                    </div>
                    <div class='sort-buttons-item v '
                    class:active-button="{filter.V}"
                    on:click={() => clickOnFilter('V')}>
                        <Vertical/>
                    </div>
                    <div class='sort-buttons-item r'
                    class:active-button="{filter.R}"
                    on:click={() => clickOnFilter('R')}>
                        <Rolled/>
                    </div>
                </div>
            </div>
            <div class="gallery-icon">
                {#if originals.length && swiper}
                    <span transition:fade|local={{duration:200}} on:click={() => window.open(originals[swiper.activeIndex], '_blank')}>
                        <Full/>
                    </span>
                {/if}
            </div>
        </div>
        {#key rerender}
            <div in:fade={{duration: 200}} class="gallery-bottom" >
                {#if !slides.length}
                    <Skeleton 
                    width={'100%'}
                    height={'100%'}
                    baseColor="#BAA07D" 
                    highlightColor="#F9D5A6" 
                    animationLength="1.2s" 
                    />  
                {:else}
                <Swiper
                    spaceBetween={5}
                    slidesPerView={1}
                    centeredSlides={true}
                    on:swiper={(e) => swiper = e.detail[0]}
                    modules={[Autoplay]}
                    autoplay={{delay: 5000, pauseOnMouseEnter: false, disableOnInteraction: true}}
                    >
                    {#each slides as slide, i}
                        <SwiperSlide>
                            <Image src={slide} height="auto" width="100%" borderRadius="5px"/>
                        </SwiperSlide>
                    {/each}
                </Swiper>
                {/if}
            </div>
        {/key}
    </div>
</div>



{:else if $isMobile}

<div class="container"
in:fade={{duration: 200}} >
    <div 
    class="gallery-mobile">
        <div class="gallery-mobile__top">
            <button 
            class:active-button-mobile="{filter.H && filter.V && filter.R}"
            on:click={() => clickOnFilterAll()}
            class="gallery-mobile__button">
                Все
            </button>
            <button 
            transition:fade|local={{duration:2000}}
            class:active-button-mobile="{filter.H}"
            on:click={() => clickOnFilter('H')}
            class="gallery-mobile__button">
                Горизонтaльные
            </button>
            <button class="gallery-mobile__button"
            class:active-button-mobile="{filter.R}"
            on:click={() => clickOnFilter('R')}>
                Рулонные
            </button>
            <button class="gallery-mobile__button"
            class:active-button-mobile="{filter.V}"
            on:click={() => clickOnFilter('V')}>
                Вертикальные
            </button>
        </div>
        <div class="gallery-mobile__bottom">
            {#key rerender}
                <div in:fade={{duration: 200}} class="gallery-bottom" >
                    {#if !slides.length}
                        <Skeleton 
                        width={'100%'}
                        height={'40vh'}
                        baseColor="#BAA07D" 
                        highlightColor="#F9D5A6" 
                        animationLength="1.2s" 
                        />  
                    {:else}
                    <Swiper
                        spaceBetween={5}
                        slidesPerView={1}
                        centeredSlides={true}
                        on:swiper={(e) => swiper = e.detail[0]}
                        modules={[Autoplay]}
                        autoplay={{delay: 5000, pauseOnMouseEnter: false, disableOnInteraction: true}}
                        >
                        {#each slides as slide, i}
                            <SwiperSlide>
                                <Image src={slide} height="auto" width="100%" borderRadius="5px"/>
                            </SwiperSlide>
                        {/each}
                    </Swiper>
                    {/if}
                </div>
            {/key}
        </div>
    </div>
</div>

{/if}





<style lang="scss">


:global(.swiper) {
    width: 100%;
    height: 100%;
    border-radius: 5px;
}

:global(.swiper-slide) {
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: grab;
}


.gallery {
    z-index: 1;
    position: relative;
    &-container {
        max-width: calc(70vh * 1.3333);
        margin: 0 auto;
        height: 70vh;
        background: rgba(0, 0, 0, 0.5);
        -webkit-backdrop-filter: blur(4px);
                    backdrop-filter: blur(4px);
                    // overflow: hidden;
        @media (max-width: 1400px) {
            max-width: calc(68vh * 1.3333);
            height: 68vh;
        }
    }
    &-top {
        min-height: 40px;
        height: 10%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 5px;
    }
    &-bottom {
        height: 90%;
        width: 100%;
        padding: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
    }



    &-icon {
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        :global(svg path) {
            cursor: pointer;
            fill: #FFFFFF;
            transition: .6s;
            fill-opacity: .55;
        }

        &:hover {
            :global(svg path) {
            fill-opacity: .85;
        }
        }
    }
}


.sort-buttons {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto ;
    height: 100%;
    z-index: 99;
    &-item {
        display: flex;
        height: 100%;
        justify-content: center;
        align-items: center;
        margin: 5px 15px;
        padding: 15px;
        color: rgba(255, 255, 255, 0.3);
        cursor: pointer;
        position: relative;
        transition: .4s;
        z-index: 99;
        will-change: transform;
        @keyframes opacity {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
         }
        }
        &.h {
            &:hover::after {
                content: 'Горизонтальные';
                overflow: visible;
                position: absolute;
                font-size: 15px;
                padding: 5px 15px;
                background: rgba(0, 0, 0, 0.5);
                border-radius: 32px;
                transform: translateY(-49px);
                animation: opacity .4s forwards;
            }
            &:hover::before {
                content: '';
                position: absolute;
                border: 8px solid transparent; 
                border-top: 8px solid rgba(0, 0, 0, 0.5);
                animation: opacity .4s forwards;
                transform: translateY(-27px);
            }
        }
        &.v {
            &:hover::after {
                content: 'Вертикальные';
                overflow: visible;
                position: absolute;
                font-size: 15px;
                padding: 5px 15px;
                background: rgba(0, 0, 0, 0.5);
                border-radius: 32px;
                transform: translateY(-49px);
                animation: opacity .4s forwards;
            }
            &:hover::before {
                content: '';
                position: absolute;
                border: 8px solid transparent; 
                border-top: 8px solid rgba(0, 0, 0, 0.5);
                animation: opacity .4s forwards;
                transform: translateY(-27px);
            }
        }
        &.r {
            &:hover::after {
                content: 'Рулонные';
                overflow: visible;
                position: absolute;
                font-size: 15px;
                padding: 5px 15px;
                background: rgba(0, 0, 0, 0.5);
                border-radius: 32px;
                transform: translateY(-49px);
                animation: opacity .4s forwards;
            }
            &:hover::before {
                content: '';
                position: absolute;
                border: 8px solid transparent; 
                border-top: 8px solid rgba(0, 0, 0, 0.5);
                animation: opacity .4s forwards;
                transform: translateY(-27px);
            }
        }
        :global(svg) {
            height: 40px;
            width: 40px;
        }
        :global(svg path) {
            transition: .5s;
            fill-opacity: .4;
        }
        &:hover {
            :global(svg path) {
            fill-opacity: .6;
        }
        }
    }
    .active-button {
        transform: scale(1.06);
        color: rgba(255, 255, 255, 0.8);
        :global(svg path) {
            fill-opacity: .75;
        }
    }
}



// mobile 

.gallery {
    &-mobile {
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    border-radius: 5px;
        button {
            background: transparent;
            border: none;
            font-weight: 300;
            font-size: 15px;
            display: flex;
            align-items: center;
            text-align: center;
            color: #ffffff85;
            &.active-button-mobile {
                color: #FFFFFF;
            }
            }  
        &__top {
            min-height: 40px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        &__bottom {
            min-height: 35vh;
        }
    }
}
</style>