<script context="module">
	export const prerender = true;
</script>

<script>
    import { fade } from 'svelte/transition';
</script>


<div in:fade="{{duration: 1000}}" class="container home">
    <h1>Жалюзи в Челябинске</h1>
    <div class="buttons">
        <a href="/catalog" class="button main-btn-item">
            Перейти в каталог
        </a>
        <a href="/call" class="button main-btn-item">
            Вызвать замерщика
        </a>
    </div>
</div>



<style lang='scss'>

.home {
    min-height: 70vh;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
}

h1 {
    font-size: 120px;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}


.buttons {
    display: flex;
    justify-content: space-between;
    width: 80%;
}

.main-btn-item {
    width: 425px;
	height: 87px;
    font-size: 40px;
}

@media (max-width: 1246px) {
    h1 {
        font-size: 100px;
    }
    .home {
        text-align: center;
    }
    .buttons {
        margin: 0 auto;
        flex-wrap: wrap;
        justify-content: space-evenly;
        .main-btn-item {
            margin-top: 25px;
        }
    }
}

@media (max-width: 668px) {
    h1 {
        font-size: 50px;
        margin: 50px;
        text-align: center;
    }
    .main-btn-item {
            font-size: 25px;
        }
        .buttons {
        .main-btn-item {
            margin-top: 8px;
        }
    }    
}

@media (max-width: 350px) {

    .home {
        justify-content: center;
    }

    h1 {
        font-size: 35px;
        text-align: center;
        margin: 0;
        padding: 0;
    }
    .buttons {
        .main-btn-item {
            margin-top: 20px;
            font-size: 18px;
            height: 60px;
        }
    }
}

</style>