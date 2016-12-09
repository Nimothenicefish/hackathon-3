<?php

namespace Hackathon3\Robinduval\Tests;

use Hackathon3\Robinduval\Geo;
use Hackathon3\Robinduval\CitiesData;

class LevelATest extends \PHPUnit_Framework_TestCase
{
    public function testA()
    {
        $geo = new Geo();
        $myCities = new CitiesData();
        $idSrc = 2659933;
        $srcCity = $myCities->getCityInfoById($idSrc);
        $closestCity = $geo->getClosestCityFromId($srcCity['id']);

        $this->assertEquals($srcCity['city'], "Les Cornettes de Bise");
        $this->assertEquals($closestCity['city'], "Verne, Col de");
    }

    public function testB()
    {
        $myCities = new CitiesData();

        $this->assertEquals(count($myCities->getCities()), 142714);
    }


    public function testC()
    {
        $geo = new Geo();
        $myCities = new CitiesData();
        $idSrc = 8296949;
        $srcCity = $myCities->getCityInfoById($idSrc);
        $closestCity = $geo->getClosestCityFromId($srcCity['id']);

        $this->assertEquals($srcCity['city'], "Bureau de Poste de Saint Ouen");
        $this->assertEquals($closestCity['city'], "Saint-Ouen");
    }

    public function testE()
    {
        $startedAt = microtime(true);

        $geo = new Geo();
        $myCities = new CitiesData();
        $idSrc = 11103547;
        $srcCity = $myCities->getCityInfoById($idSrc);
        $closestCity = $geo->getClosestCityFromId($srcCity['id']);

        $this->assertEquals($srcCity['city'], "Hot Dog Town");
        $this->assertEquals(md5($closestCity['city']), "3dcfbb736e3f322f20569fdcc83691e7");

        $stopedAt = microtime(true);
        $time = $stopedAt - $startedAt;

        echo $time;
        $this->assertLessThanOrEqual(1.8, $time);
    }
}
