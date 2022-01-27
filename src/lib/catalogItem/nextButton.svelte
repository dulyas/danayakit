<div on:click class="arrow-6">
<svg width="18px" height="17px" viewBox="-1 0 18 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g>
        <polygon class="arrow-6-pl" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon>
        <polygon class="arrow-6-pl-fixed" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon>
        <path d="M-4.58892184e-16,0.56157424 L-4.58892184e-16,16.1929159 L9.708,8.33860465 L-1.64313008e-15,0.56157424 L-4.58892184e-16,0.56157424 Z M1.33333333,3.30246869 L7.62533333,8.34246869 L1.33333333,13.4327013 L1.33333333,3.30246869 L1.33333333,3.30246869 Z"></path>
    </g>
</svg>
</div>

<style>
    .arrow-6 {
    margin:20px;
}
.arrow-6 svg {
    width: 100px;
    height: auto;
    margin: 0 2rem;
    cursor: pointer;
    overflow: visible;
}
.arrow-6 svg polygon, 
.arrow-6 svg path {
    -webkit-transition: all 0.5s cubic-bezier(0.2, 1, 0.3, 1);
    -o-transition: all 0.5s cubic-bezier(0.2, 1, 0.3, 1);
    transition: all 0.5s cubic-bezier(0.2, 1, 0.3, 1);
    fill: #337AB7;
}
.arrow-6 svg:hover polygon, 
.arrow-6 svg:hover path {
    -webkit-transition: all 1s cubic-bezier(0.2, 1, 0.3, 1);
    -o-transition: all 1s cubic-bezier(0.2, 1, 0.3, 1);
    transition: all 1s cubic-bezier(0.2, 1, 0.3, 1);
    fill: #000;
}
.arrow-6 svg:hover .arrow-6-pl {
    -webkit-animation: arrow-6-anim 1s cubic-bezier(0.2, 1, 0.3, 1) infinite;
            animation: arrow-6-anim 1s cubic-bezier(0.2, 1, 0.3, 1) infinite;
}
.arrow-6 svg:hover .arrow-6-pl-fixed {
    -webkit-animation: arrow-6-fixed-anim 1s cubic-bezier(0.2, 1, 0.3, 1) infinite;
            animation: arrow-6-fixed-anim 1s cubic-bezier(0.2, 1, 0.3, 1) infinite;
}
 
@-webkit-keyframes arrow-6-anim {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
                transform: translateX(0);
    }
    5% {
        -webkit-transform: translateX(-0.1rem);
                transform: translateX(-0.1rem);
    }
    100% {
        -webkit-transform: translateX(1rem);
                transform: translateX(1rem);
        opacity: 0;
    }
}
 
@keyframes arrow-6-anim {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
                transform: translateX(0);
    }
    5% {
        -webkit-transform: translateX(-0.1rem);
                transform: translateX(-0.1rem);
    }
    100% {
        -webkit-transform: translateX(1rem);
                transform: translateX(1rem);
        opacity: 0;
    }
}
@-webkit-keyframes arrow-6-fixed-anim {
    5% {
        opacity: 0;
    }
    20% {
        opacity: 0.4;
    }
    100% {
        opacity: 1;
    }
}
@keyframes arrow-6-fixed-anim {
    5% {
        opacity: 0;
    }
    20% {
        opacity: 0.4;
    }
    100% {
        opacity: 1;
    }
}

@media (max-width: 768px) {
    .arrow-6 svg {
    width: 50px;
}
}
</style>