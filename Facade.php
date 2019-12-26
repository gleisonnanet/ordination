<?php namespace gleisonnanet\Ordination;

class Facade extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() { return 'order'; }

}