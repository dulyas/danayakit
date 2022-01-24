<script>
import CatalogItem from "$lib/catalogItem/catalogItem.svelte";

const types = [
    {
        name: 'Зебра',
        descr: 'LALALALALAL',
        url: "/src/img/zebra__bg.png",
    },
    {
        name: 'Лошадь',
        descr: 'LALALALALALfdsf',
        url: "/src/img/zebra_3.jpg",
    },
    {
        name: 'Конь',
        descr: 'LALALALALALfsadfa',
        url: "/src/img/zebra_2.jfif",
    },
];
</script>

<div>
    <CatalogItem types={types}/>
</div>