<?php
namespace Solvire\API\Serializers\DataFields;

/**
 *
 *
 *
 * @group DataFields
 *
 * @author solvire <stevenjscott@gmail.com>
 * @package DataFields
 * @namespace Solvire\API\Serializers\DataFields
 */
class ReadOnlyFieldTest extends \BaseTestCase
{

    /**
     * @expectedException \RuntimeException
     */
    public function testReadOnlyFieldNotWorking()
    {
        $ro = new ReadOnlyField();
        $ro->setData('test');
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testReadOnlyFieldGetDataNotWorking()
    {
        $ro = new ReadOnlyField();
        $ro->getData();
    }
}