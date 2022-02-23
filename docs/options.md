---
title: Options
---

# Options & Parameters

## All option

Here are the all available parameter you can configure.

```php
$faker->avatarUrl(
    $style = "adventurer", 
    $size = null, 
    $slug = null, 
    $bg = null, 
    $scale = null, 
    $flip = null
);
```

## Style
**Type:** `String | Required`

**Default:** `adventurer`

It's base avatar style. You can choose from all available styles [here](/avatar-styles)

```php
$url = $faker->avatarUrl('adventurer');  
// https://avatars.dicebear.com/api/adventurer/:seed.svg
```

## Size
**Type:** `Integer`

**Default:** `null`

Accepts any positive integer value without any unit value. For example if you want `300px` just write `300`

```php
$url = $faker->avatarUrl('adventurer',300);  
// https://avatars.dicebear.com/api/adventurer/:seed.svg?size=300
```

## Slug
**Type:** `String`

**Default:** `null`

It defines the file name of generated avatar. We suggest to combine with `$faker->name()` to get the truely randomized avatar. Because the generated avatar vastly depends on the slug.

```php
$url = $faker->avatarUrl('adventurer',100,'my-custom-slug');  
// https://avatars.dicebear.com/api/adventurer/my-custom-slug.svg?size=100
```

## Background
**Type:** `String`

**Default:** `#ffffff`

Sets background of the generated avatar. Any valid **Hex Color Code** can be used as value.

```php
$url = $faker->avatarUrl('adventurer',100,'my-custom-slug','#cfcfcf');  
// https://avatars.dicebear.com/api/adventurer/my-custom-slug.svg?b=%23cfcfcf&size=100
```

## Scale
**Type:** `Integer`

**Default:** `100`

It scales the avatar itself within the defined size. Basically it's scales up or down based on the value. Any positive integer value is accepted as valid input.

```php
$url = $faker->avatarUrl('adventurer',100,'my-custom-slug','#cfcfcf',100);  
// https://avatars.dicebear.com/api/adventurer/my-custom-slug.svg?size=100&b=%23cfcfcf&scale=100
```

## Flip
**Type:** `Boolean`

**Default:** `0`

Defines whether to mirror flip the avatar or not. It's a boolean and accepts `0` or `1` as input. `1` means flip it!

```php
$url = $faker->avatarUrl('adventurer',100,'my-custom-slug','#cfcfcf',100,1);  
// https://avatars.dicebear.com/api/adventurer/my-custom-slug.svg?size=100&b=%23cfcfcf&scale=100&flip=1
```
