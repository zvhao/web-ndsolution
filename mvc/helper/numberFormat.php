<?php

function moneyFormat($num) {
    echo number_format($num, 0, '', '.') . '₫';
}