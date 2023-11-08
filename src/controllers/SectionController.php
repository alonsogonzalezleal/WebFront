<?php

class SectionController{

    const folder = '/';

    // Here you can administrate your routes
    const routes = array(
        '/section/page/\d+' => self::folder . 'PageView',
        '/section/class-example' => self::folder . 'ClassExampleView'
    );

    
}