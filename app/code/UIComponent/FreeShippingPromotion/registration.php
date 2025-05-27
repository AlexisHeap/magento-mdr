<?php
use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    type: ComponentRegistrar::MODULE,
    componentName: 'UIComponent_FreeShippingPromotion',
    path: __DIR__
);