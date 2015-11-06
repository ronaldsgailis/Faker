<?php

namespace Faker\Test\Provider\en_AU;

use Faker\Generator;
use Faker\Provider\en_AU\PhoneNumber;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumberCanReturnData()
    {
      $number = $this->faker->phoneNumber;
      $this->assertNotEmpty($number);
    }
}
