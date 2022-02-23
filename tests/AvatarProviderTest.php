<?php

namespace Sabbir\Faker\Tests;

use Sabbir\Faker\AvatarProvider;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass Xvladqt\Faker\LoremFlickrProvider
 */
class AvatarProviderTest extends TestCase
{
    /**
     * @covers ::imageUrl
     * @dataProvider imageUrlDataProvider
     */
    public function testImageUrl($expected, $style = 'adventurer', $size = null, $slug = null, $bg = null, $scale = null, $flip = null)
    {
        $url = AvatarProvider::imageUrl($style, $size, $slug, $bg, $scale, $flip);

        $this->assertEquals("https://avatars.dicebear.com/api/".$expected, $url);
    }

    public function imageUrlDataProvider()
    {
        return [
            [
                'adventurer/:seed.svg',
            ],
            [
                'adventurer/:seed.svg',
                'adventurer',
            ],
            [
                'avataaars/:seed.svg',
                'avataaars',
            ],
            [
                'human/:seed.svg',
                'human',
            ],
            [
                'human/sabbir.svg?size=50',
                'human', 50, 'sabbir',
            ],
            [
                'human/kamal.svg?b=%23f00&size=100',
                'human', 100, 'kamal', '#f00',
            ],
            [
                'human/kamal.svg?b=%23f00&size=200&scale=90',
                'human', 200, 'kamal', '#f00', 90,
            ],
            [
                'human/kamal.svg?b=%23ff0&size=500&scale=98&flip=1',
                'human', 500, 'kamal', '#ff0', 98, 1
            ]
        ];
    }


}