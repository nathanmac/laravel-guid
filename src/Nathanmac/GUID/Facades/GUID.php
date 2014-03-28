<?php namespace Nathanmac\GUID\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class GUID extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'guid'; }
 
}