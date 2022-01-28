<script>
    import CatalogItem from "$lib/catalogItem/catalogItem.svelte";
    import zebraSrc from '../rolled/zebra__bg.png';
    const products = [
    {
        name: 'Олень',
        descr: 'LALALALALAL',
        url: zebraSrc,
    },
    {
        name: 'Собака',
        descr: 'LALALALALALfdsf',
        url: "https://designmyhome.ru/sites/default/files/styles/large/public/field/image/45/zhalyuzi_na_kuhnyu.jpg",
    },
    {
        name: 'Лань',
        descr: 'LALALALALALfsadfa',
        url: "https://designmyhome.ru/sites/default/files/images/vertikalnye_zhalyuzi_na_kuhnyu_1_0.jpg",
    },
];
    </script>
    
    <div>
        <CatalogItem name='Вертикальные жалюзи' products={products}/>
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