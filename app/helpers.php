<?php

function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}