<script>
    import CatalogItem from "$lib/catalogItem/catalogItem.svelte";
    import alumSrc from './alum.jpg';;
    import isolateSrc from './isolate.jpg';
    import woodSrc from './wood.jpg';

    const products = [
    {
        name: 'Алюминиевые',
        descr: 'Горизонтальные жалюзи системы Holis с ламелями из ленты профилированного алюминия 16/25/50 мм широко используются для оформления офисных перегородок, оконных и дверных проёмов.<br><br>Просты и удобны в эксплуатации, являются эффективной защитой от солнечных лучей, а лёгкость конструкции обеспечивает надёжный и продолжительный срок службы.<br><br>Возможные варианты крепления: на стену, в потолок или на створку окна или двери.<br><br>Устойчивы к воздействию агрессивной среды и перепадам температуры.<br><br>Не впитывают грязь, жир и неприятные запахи. ',
        url: alumSrc,
    },
    {
        name: 'Алюминиевые жалюзи системы Isolite',
        descr: 'Горизонтальные кассетные жалюзи системы Isolite с удобным цепочным управлением и боковой фиксацией при помощи лески предназначены специально для пластиковых или деревянных евроокон. <br><br>Устанавливаются на раму окна в непосредственной близости к стеклу, ламели двигаются по леске, тем самым обеспечивая сохранность полного функционала поворотно-откидной створки.<br><br>Isolite  - лучшее сочетание надежности и функциональности, они  просты в уходе, не деформируются от нагрева, не впитывают грязь, не накапливают статическое электричество. ',
        url: isolateSrc,
    },
    {
        name: 'Деревянные и бамбуковые',
        descr: 'Горизонтальные деревянные и бамбуковые жалюзи относятся к элитным и изготавливаются из натурального неокрашенного дерева, бамбука.<br><br>Жалюзи из дерева создают в доме атмосферу роскоши, уюта и тепла. Деревянные жалюзи прекрасно вписываются в любое интерьерное решение.<br><br>Отлично подходят для офисов, гостиных, а также используются для оформления бильярдных, студий и т.д. ',
       
        url: woodSrc,
    },
];
    </script>
    
    <div>
        <CatalogItem name='Горизонтальные жалюзи' products={products}/>
    </div>


<style lang='scss'>
</style>