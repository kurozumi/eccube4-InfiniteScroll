<?php

namespace Plugin\InfiniteScroll;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Eccube\Event\TemplateEvent;

class Event implements EventSubscriberInterface
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'Product/list.twig' => 'addAsset'
        ];
    }
    
    public function addAsset(TemplateEvent $event)
    {
        $event->addSnippet('@InfiniteScroll4/default/js/script.twig');
    }
}
