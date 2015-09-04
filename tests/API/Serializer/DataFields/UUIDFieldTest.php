<?php
namespace Solvire\API\Serializers\DataFields;


/**
 * 
 * @author solvire <stevenjscott@gmail.com>
 * @package DataFields
 * @group DataFields
 * @namespace Solvire\API\Serializers\DataFields
 */
class UUIDFieldTest extends \GenericTestCase
{
    
    /**
     * @expectedException \RuntimeException
     */
    public function testUUIDFieldNotWorking()
    {
        $uuid = new UUIDField();
        $uuid->setData('test');
    }

     /**
      * @expectedException \RuntimeException
      * 
      */
    public function testUUIDFieldGetDataNotWorking()
    {
        $uuid = new UUIDField();
        $uuid->getData();
    }
    
}