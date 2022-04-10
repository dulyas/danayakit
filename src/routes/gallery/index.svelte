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

        if (filter[key]) filter[key] = false
        else filter[key] = true

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

{#if !$isMobile}

<div 
in:fade={{duration: 200}} 
class="container">
    <div class="gallery-container">
        <div class="gallery-top">
            <div class="gallery-filter">
                <div class="sort-buttons">
                    <button class='button sort-buttons-item'
                    class:active-button="{filter.H && filter.V && filter.R}"
                    on:click={() => clickOnFilterAll()}>Все</button>
                    <button class='button sort-buttons-item'
                    class:active-button="{filter.H}"
                    on:click={() => clickOnFilter('H')}>Горизонатльные</button>
                    <button class='button sort-buttons-item'
                    class:active-button="{filter.V}"
                    on:click={() => clickOnFilter('V')}>Вертикальные</button>
                    <button class='button sort-buttons-item'
                    class:active-button="{filter.R}"
                    on:click={() => clickOnFilter('R')}>Рулонные</button>
                </div>
            </div>
            <div class="gallery-icon">
                {#if originals.length && swiper}
                    <span in:fade={{duration:200}} on:click={() => window.open(originals[swiper.activeIndex], '_blank')}>
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
                    autoplay={{delay: 2000, pauseOnMouseEnter: false, disableOnInteraction: true}}
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
            class:active-button-mobile="{filter.H}"
            on:click={() => clickOnFilter('H')}
            class="gallery-mobile__button">
                Горизонатльные
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
    &-container {
        max-width: calc(70vh * 1.3333);
        margin: 0 auto;
        height: 70vh;
        background: rgba(0, 0, 0, 0.5);
        -webkit-backdrop-filter: blur(4px);
                    backdrop-filter: blur(4px);
                    overflow: hidden;
        @media (max-width: 1400px) {
            max-width: calc(68vh * 1.3333);
            height: 68vh;
        }
    }
    &-top {
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
    &-item {
        margin: 5px 15px;
        padding: 15px;
        height: 25px;
        color: white;
        cursor: pointer;
    }
    .active-button {
        background: black;
        transform: scale(1.03);
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