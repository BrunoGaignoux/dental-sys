<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace OpenApiTests;

class AugmentParameterTest extends OpenApiTestCase
{
    public function testAugmentParameter()
    {
        $openapi = \OpenApi\scan(__DIR__.'/Fixtures/UsingRefs.php');
        $this->assertCount(1, $openapi->components->parameters, 'OpenApi contains 1 reusable parameter specification');
        $this->assertEquals('ItemName', $openapi->components->parameters[0]->parameter, 'When no @OA\Parameter()->parameter is specified, use @OA\Parameter()->name');
    }
}
