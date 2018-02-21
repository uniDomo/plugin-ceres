<?php

namespace CeresCustom\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresCustom::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}