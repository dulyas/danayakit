<script>
import CatalogItem from "$lib/catalogItem/catalogItem.svelte";
import zebraSrc from '../../img/zebra__bg.png';

const products = [
    {
        name: 'Зебра',
        descr: 'Рулонные шторы зебра сочитают в себе функциолнал горизонтальных жалюзи по управлению световым потоком и эстетическую составляющую классических рулонных штор. В готовом изделии используется двойное полотно ткани "зебра", позволяющее закрыться от посторонних глаз и регулировать поступление света в помещение за счет смещения чередующихся полос плотной ткани и прзрачной сетки-вуали относительно друг друга.',
        url: zebraSrc,
    },
    {
        name: 'Юни',
        descr: 'Рулонные шторы юни сливаются с плоскостью рамы окна благодаря лаконичной конструкции и широкой цветовой гамме фурнитуры. Элегантный котоб-кассета скрывает тканевый рулон и механизмы, а направляющие надежно защищают от боковых просветов и провисания ткани на откидных створках. Модельный ряд представлен изделиями с цепочным и пружинным механизмом управления а так же моторизацией.',
        url: zebraSrc,
    },
    {
        name: 'Конь',
        descr: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio illum quae eveniet error eaque voluptate neque eos ea aut cumque maiores quidem expedita, quia velit et repudiandae. Optio, nisi debitis?aLorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio illum quae eveniet error eaque voluptate neque eos ea aut cumque maiores quidem expedita, quia velit et repudiandae. Optio, nisi debitis?',
        url: zebraSrc,
    },
];
</script>

<div>
    <CatalogItem name='Рулонные жалюзи' products={products}/>
</div>

<style lang='scss'>
    div {
        display: flex;
        flex-direction: column;
        min-height: 74vh;
        justify-content: center;
        align-items: center;
    }
</style>