<script>
    import { fade, blur, fly, slide, scale, draw, crossfade } from 'svelte/transition';
    let visible = true;
    const photos = [
        'https://sun9-26.userapi.com/impg/BELZohA348Lq-TCPzs1m2IGN5czLFUy8MzSyOw/gzwxZ2OMToI.jpg?size=900x675&quality=95&sign=7f581d4fe4e73f6a4593db72039c16fe&type=album',
        'https://sun9-38.userapi.com/impg/bYImssiEfAMydiKmIAxp8Kfw0ng14gdECN9JAQ/xgKcoRuLHlY.jpg?size=900x675&quality=95&sign=c10a29b5dff5063ea472f9e04b9f7778&type=album',
        'https://sun9-26.userapi.com/impg/BELZohA348Lq-TCPzs1m2IGN5czLFUy8MzSyOw/gzwxZ2OMToI.jpg?size=900x675&quality=95&sign=7f581d4fe4e73f6a4593db72039c16fe&type=album',
        'https://sun9-38.userapi.com/impg/bYImssiEfAMydiKmIAxp8Kfw0ng14gdECN9JAQ/xgKcoRuLHlY.jpg?size=900x675&quality=95&sign=c10a29b5dff5063ea472f9e04b9f7778&type=album',
        'https://sun9-26.userapi.com/impg/BELZohA348Lq-TCPzs1m2IGN5czLFUy8MzSyOw/gzwxZ2OMToI.jpg?size=900x675&quality=95&sign=7f581d4fe4e73f6a4593db72039c16fe&type=album',
        'https://sun9-38.userapi.com/impg/bYImssiEfAMydiKmIAxp8Kfw0ng14gdECN9JAQ/xgKcoRuLHlY.jpg?size=900x675&quality=95&sign=c10a29b5dff5063ea472f9e04b9f7778&type=album',
        'https://sun9-26.userapi.com/impg/BELZohA348Lq-TCPzs1m2IGN5czLFUy8MzSyOw/gzwxZ2OMToI.jpg?size=900x675&quality=95&sign=7f581d4fe4e73f6a4593db72039c16fe&type=album',
        'https://sun9-38.userapi.com/impg/bYImssiEfAMydiKmIAxp8Kfw0ng14gdECN9JAQ/xgKcoRuLHlY.jpg?size=900x675&quality=95&sign=c10a29b5dff5063ea472f9e04b9f7778&type=album',
        'https://sun9-26.userapi.com/impg/BELZohA348Lq-TCPzs1m2IGN5czLFUy8MzSyOw/gzwxZ2OMToI.jpg?size=900x675&quality=95&sign=7f581d4fe4e73f6a4593db72039c16fe&type=album',
        'https://sun9-38.userapi.com/impg/bYImssiEfAMydiKmIAxp8Kfw0ng14gdECN9JAQ/xgKcoRuLHlY.jpg?size=900x675&quality=95&sign=c10a29b5dff5063ea472f9e04b9f7778&type=album',
        'https://sun9-26.userapi.com/impg/BELZohA348Lq-TCPzs1m2IGN5czLFUy8MzSyOw/gzwxZ2OMToI.jpg?size=900x675&quality=95&sign=7f581d4fe4e73f6a4593db72039c16fe&type=album',
        'https://sun9-38.userapi.com/impg/bYImssiEfAMydiKmIAxp8Kfw0ng14gdECN9JAQ/xgKcoRuLHlY.jpg?size=900x675&quality=95&sign=c10a29b5dff5063ea472f9e04b9f7778&type=album',
        'https://sun9-51.userapi.com/impg/G03OI2SibWNT5wYXwjTQJZabuQGpXfnubhqWJg/gasMCJxd-BM.jpg?size=747x769&quality=95&sign=58064bc35a6c3728a8d4fc19690d75a0&type=album',
        'https://sun9-51.userapi.com/impg/G03OI2SibWNT5wYXwjTQJZabuQGpXfnubhqWJg/gasMCJxd-BM.jpg?size=747x769&quality=95&sign=58064bc35a6c3728a8d4fc19690d75a0&type=album',
    ];
    let current = photos[0];
    
    function handleClick(i) {
        visible = false;
        setTimeout(() => {
        current = photos[i];
        visible = true;
        }, 350)
    }
</script>


<div in:fade="{{duration: 1000}}" class="container gallery">
    <div class="gallery__current">
        {#if visible}
        <img transition:fade|local="{{duration: 300}}" src={current} alt="">
        {/if}
    </div>
    <div class="gallery__items">
        {#each photos as photo, i}
        <img on:click={() => handleClick(i)} src={photo} alt="">
        {/each}
    </div>
</div>

<style lang='scss'>
    .gallery {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 60vh;
        &__current {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60vh;
            img {
                max-height: 60vh;
                max-width: 80%;
            }
        }
        &__items {
            display: flex;
            align-items: center;
            max-width: 80%;
            overflow-x: scroll;
            min-height: 15vh;
            &::-webkit-scrollbar {
                width: 7px;
                background-color: rgba(0, 0, 0, 0.5);
                border-radius: 8px;
                height: 25px;
            }
            &::-webkit-scrollbar-thumb {
                background-color: #000000a4;
                border-radius: 8px;
            }
            &::-webkit-scrollbar-track {
                box-shadow: 5px 5px 5px -5px rgba(34, 60, 80, 0.2) inset;
                -webkit-box-shadow: 5px 5px 5px -5px rgba(34, 60, 80, 0.2) inset;
            }
            img {
                height: 10vh;
                margin: 0 5px;
                cursor: pointer;
            }
        }
    }
</style>