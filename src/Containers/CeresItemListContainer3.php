<?php

namespace CeresCustom\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresCustom::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}