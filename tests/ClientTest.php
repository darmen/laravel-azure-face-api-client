<?php

namespace Darmen\AzureFace\Tests;

use Darmen\AzureFace\Client;
use Darmen\AzureFace\Resources\FaceList;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function setUp(): void
    {
        $this->sut = new Client('any_endpoint', 'any_key');
    }

    public function testFacelistReturnsFaceList(): void
    {
        $this->assertEquals(
            get_class($this->sut->facelist()),
            FaceList::class
        );
    }

    public function testLargefacelistReturnsLargeFaceList(): void
    {
        $this->assertEquals(
            get_class($this->sut->facelist()),
            FaceList::class
        );
    }
}
