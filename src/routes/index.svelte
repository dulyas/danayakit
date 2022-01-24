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
        <a href="#" class="button main-btn-item">
            Вызвать замерщика
        </a>
    </div>
</div>



<style lang='scss'>



h1 {
    font-size: 120px;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    margin-top: 15%;
}


.buttons {
    display: flex;
    justify-content: space-between;
    width: 80%;
    margin-top: 8%;
}

.main-btn-item {
    width: 425px;
	height: 87px;
    font-size: 40px;
}

@media (max-width: 1246px) {
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
    }
    .main-btn-item {
            font-size: 25px;
        }
}

@media (max-width: 350px) {
    h1 {
        font-size: 30px;
    }
}

</style>