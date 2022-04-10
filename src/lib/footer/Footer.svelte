<script>
    import Vk from '$lib/footer/vk.svg';
    import Inst from '../../img/icons/inst.svg';
</script>


<div class="footer">
    <div class="footer-info">
        ИНН: 7453151875 ОГРН: 1057424606249 ООО “Даная” г. Челябинск, ул. Клары Цеткин, д. 11 тел.: 8 (351) 231-55-00 © 2020-2022
    </div>
    <div class="soc__items">
        <div class="soc__items-worktime">
            пн-пт 10:00-19:00
        </div>
        <a href="https://vk.com/danayajaluzi">
            <Vk/>
        </a>
        <a href="https://www.instagram.com/jaluzi174">
            <Inst/>
        </a>
    </div>
</div>


<style lang='scss'>
.footer {
    height: 65px;
    background: rgba(0, 0, 0, 0.5);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-backdrop-filter: blur(4px);
            backdrop-filter: blur(4px);
    &-info {
        pointer-events: none;
        font-size: 15px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        text-align: center;

        color: #FFFFFF;

  }
}

.soc__items {
    position: absolute;
    right: 15px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
        a {
            margin: 0 2px;
            transition: .6s;
            &:hover {
                :global(svg path) {
                    fill-opacity: 1;
                    transition: .6s;
                }
            }
        }
        &-worktime {
            font-style: normal;
            font-weight: normal;
            font-size: 15px;
            line-height: 18px;
            margin-right: 15px;
            pointer-events: none;
        }
    }

    @media (max-width: 1400px) {
        .footer {
            height: 55px;
        }
        .footer-info {
            display: none;
        }
    }
    @media (max-width: 480px) {
        .footer {
            display: none;
        }
    }

</style>