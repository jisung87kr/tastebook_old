<?php
function makeSort(array $allowSortings, array $sortFields) : array
{
    $sorting = [];
    foreach ($sortFields as $index => $item) {
        if(in_array($index, $allowSortings)){
            $sorting[] = [$index => $item];
        }
    }
    return $sorting;
}

function makeOrderByRaw(array $sorting) : string
{
    $rawOrder = '';
    foreach ($sorting as $index => $item) {
        foreach ($item as $key => $value) {
            $comma = ( $index == 0 ) ? '' : ', ';
            $rawOrder .= $comma."$key $value";
        }
    }

    return $rawOrder;
}