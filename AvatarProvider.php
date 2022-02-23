<?php

namespace Sabbir\Faker;

use Faker\Provider\Base as BaseProvider;
use InvalidArgumentException;
use RuntimeException;

/**
 * loremflickr.com provider for Faker
 *
 * @author Vladyslav Volynets <xvladxtreme@gmail.com>
 *
 * @link http://loremflickr.com/
 */
class AvatarProvider extends BaseProvider {

    /**
     * Generate the URL that will return a random image
     *
     * Set randomize to false to remove the random GET parameter at the end of the url.
     *
     * @param  integer  $width
     * @param  integer  $height
     * @param  array|null|bool  $keywords
     * @param  bool  $randomize
     * @param  bool  $gray
     *
     * @return string
     * @throws \Exception
     * @example 'https://loremflickr.com/640/480?random=1'
     *
     */

    //https://avatars.dicebear.com/api/adventurer/sabbir.svg?b=%23a93d3d&r=29&size=500&scale=96&flip=1

    public static function imageUrl($style = "adventurer", $size = null, $slug = null, $bg = null, $scale = null, $flip = null) {
        $baseUrl = "https://avatars.dicebear.com/api/";
        $url = '';

        if ($style) {
            $url .= $style;
        }

        if ($slug) {
            $url .= "/" . $slug . ".svg";
        } else {
            $url .= "/:seed.svg";
        }

        $options = [
            'size' => $size,
            'scale' => $scale,
            'flip' => $flip
        ];

        if ($bg) {

            $options = array('b' => $bg) + $options;
            // array_unshift($options,['b'=>$bg]);
            // $options['b'] = $bg;
        }

        $params = http_build_query($options);

        if($params){
            $url .= "?" . $params;
        }

        $url = $baseUrl . $url;

        return $url;
    }

    /**
     * Download a remote random image to disk and return its location
     *
     * Requires curl, or allow_url_fopen to be on in php.ini.
     *
     * @example '/path/to/dir/13b73edae8443990be1aa8f1a483bc27.jpg'
     */
    // public static function image($dir = null, $width = 640, $height = 480, $keywords = null, $fullPath = true, $randomize = true, $gray = false) {
    //     $dir = is_null($dir) ? sys_get_temp_dir() : $dir; // GNU/Linux / OS X / Windows compatible
    //     // Validate directory path
    //     if (!is_dir($dir) || !is_writable($dir)) {
    //         throw new InvalidArgumentException(sprintf('Cannot write to directory "%s"', $dir));
    //     }

    //     // Generate a random filename. Use the server address so that a file
    //     // generated at the same time on a different server won't have a collision.
    //     $name = md5(uniqid(empty($_SERVER['SERVER_ADDR']) ? '' : $_SERVER['SERVER_ADDR'], true));
    //     $filename = $name . '.jpg';
    //     $filepath = $dir . DIRECTORY_SEPARATOR . $filename;

    //     $url = static::imageUrl($width, $height, $keywords, $randomize, $gray);

    //     // save file
    //     if (function_exists('curl_exec')) {
    //         // use cURL
    //         $fp = fopen($filepath, 'wb');
    //         $ch = curl_init($url);
    //         curl_setopt($ch, CURLOPT_FILE, $fp);
    //         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    //         $success = curl_exec($ch) && curl_getinfo($ch, CURLINFO_HTTP_CODE) === 200;
    //         fclose($fp);
    //         curl_close($ch);

    //         if (!$success) {
    //             unlink($filepath);

    //             // could not contact the distant URL or HTTP error - fail silently.
    //             return false;
    //         }
    //     } elseif (ini_get('allow_url_fopen')) {
    //         // use remote fopen() via copy()
    //         copy($url, $filepath);
    //     } else {
    //         return new RuntimeException('The image formatter downloads an image from a remote HTTP server. Therefore, it requires that PHP can request remote hosts, either via cURL or fopen()');
    //     }

    //     return $fullPath ? $filepath : $filename;
    // }
}
