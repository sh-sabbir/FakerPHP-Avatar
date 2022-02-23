# FakerPHP Avatar

[![Packagist Downloads](https://img.shields.io/packagist/dt/sh-sabbir/faker-php-avatar?style=for-the-badge)](https://packagist.org/packages/sh-sabbir/faker-php-avatar) ![GitHub file size in bytes](https://img.shields.io/github/size/sh-sabbir/FakerPHP-Avatar/AvatarProvider.php?style=for-the-badge) [![GitHub](https://img.shields.io/github/license/sh-sabbir/FakerPHP-Avatar?style=for-the-badge)](https://github.com/sh-sabbir/FakerPHP-Avatar/blob/master/LICENSE)

FakerPHP Avatar is an addon package for [Faker](https://github.com/FakerPHP/Faker) to generate fake avatars based on [DiceBear](https://avatars.dicebear.com/). It Supports all **22 styles** of DiceBear.

## Getting Started

### Installation

FakerPHP Avatar requires Faker >= 1.0.

```shell
composer require sh-sabbir/faker-php-avatar
```

### Documentation

Full documentation can be found over on [sh-sabbir.github/FakerPHP-Avatar](https://sh-sabbir.github/FakerPHP-Avatar).

### Basic Usage

#### Add Provider

```php
$faker = Faker\Factory::create();
$faker->addProvider(new Sabbir\Faker\AvatarProvider($faker));
```

#### Default settings
```php
$faker->avatarUrl($style = "adventurer", $size = null, $slug = null, $bg = null, $scale = null, $flip = null);
```

#### Generate Avatar URL

```php
$url = $faker->avatarUrl();  
// https://avatars.dicebear.com/api/adventurer/:seed.svg

$url = $faker->avatarUrl('male');  
// https://avatars.dicebear.com/api/male/:seed.svg

$url = $faker->avatarUrl('male',100);  
// https://avatars.dicebear.com/api/adventurer/:seed.svg?size=100

$url = $faker->avatarUrl('male',100,'my-custom-slug');  
// https://avatars.dicebear.com/api/adventurer/my-custom-slug.svg?size=100

$url = $faker->avatarUrl('male',100,'my-custom-slug','#cfcfcf');  
// https://avatars.dicebear.com/api/adventurer/my-custom-slug.svg?b=%23cfcfcf&size=100

$url = $faker->avatarUrl('male',100,'my-custom-slug','#cfcfcf',100);  
// https://avatars.dicebear.com/api/adventurer/my-custom-slug.svg?size=100&b=%23cfcfcf&scale=100

$url = $faker->avatarUrl('male',100,'my-custom-slug','#cfcfcf',100,1);  
// https://avatars.dicebear.com/api/adventurer/my-custom-slug.svg?size=100&b=%23cfcfcf&scale=100&flip=1

```

Check [documentation](https://sh-sabbir.github/FakerPHP-Avatar) for more complex example.

### Available Styles

| Style Name         	| Option Value 	        |
|--------------------	|:---------------------:|
| Adventurer         	| adventurer *(Default)*|
| Adventurer Neutral 	| adventurer-neutral    |
| Avataaars          	| avataaars	            |
| Big Ears           	| big-ears   	        |
| Big Ears Neutral   	| big-ears-neutral      |
| Big Smile          	| big-smile    	        |
| Bottts             	| bottts       	        |
| Croodles           	| croodles     	        |
| Croodles Neutral   	| croodles-neutral      |
| Gridy              	| gridy     	        |
| Human                	| human        	        |
| Identicon         	| identicon             |
| Initials          	| initials   	        |
| Jdenticon         	| jdenticon   	        |
| Male                	| male       	        |
| Female            	| female    	        |
| Micah              	| micah        	        |
| Miniavs            	| miniavs      	        |
| Open Peeps           	| open-peeps   	        |
| Personas          	| personas              |
| Pixel Art           	| pixel-art             |
| Pixel Art Neutral    	| pixel-art-neutral	    |


### All Settings and Default Values

| Parameter 	| Type 	                   | Default 	| Available 	|
|-----------	|------------------------- |---------	|-----------	|
| $style        | `String`                 | adventurer | Check [here](#available-styles)         	|
| $size         | `integer`                | `null`    	| integer without and extension. For example `150px` write `150`           |
| $slug         | `string`     	           | `null`     | It will be the filename. If you define this you will get specific imgaes everytime. write it like this `my-avatar-image`. Don't include any file extension     	|
| $bg          	| `string` `hex colorcode` | `null`    	| Background Color. Accepts all kind of valid Hex Color Code          	|
| $scale        | `integer`     	       | `null`    	| `0` to higest integer you can imagine but I suggest you not to imagine sky high 😉 |
| $flip         | `boolean`    	           | `null`    	| It accepts `0` or `1` where `0 is false` & `1 is true`          	|

$size = null, $slug = null, $bg = null, $scale = null, $scale = null