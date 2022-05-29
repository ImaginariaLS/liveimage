<?php

namespace Imaginaria\LiveImage;

interface LiveImageInterface
{
    /**
     * Создает объект изображения из переданного файла
     *
     * @param string $file
     * @throws LiveImageException
     */
    public function __construct($file);
    
    /**
     * Resize image
     *
     * @param int|mixed $width
     * @param int|mixed $height
     * @param bool $scale
     * @param bool $alfa
     * @return mixed
     */
    public function resize($width = null, $height = null, bool $scale = false, bool $alfa = true);
    
    /**
     * Crop image
     *
     * @param  int $width
     * @param  int $height
     * @param  int $start_width
     * @param  int $start_height
     * @return mixed
     */
    public function crop($width, $height, $start_width, $start_height);
    
    /**
     * Return image object
     *
     * @return mixed
     */
    public function get_image();
    
    /**
     * Add new image object to current handler
     *
     * @param  resource $image_res
     * @return bool
     *
     * @todo   Find format of given image
     */
    public function set_image($image_res);
    
    /**
     * Return image params
     *
     * @param  string $key
     * @return mixed
     */
    public function get_image_params($key = null);
    
    /**
     * Setter for font params
     *
     * @param string $font_size
     * @param int $font_angle
     * @param string $name
     */
    public function set_font($font_size = 20, $font_angle = 0, $name = '');
    
    /**
     * Setter for color
     *
     * @param  int $r
     * @param  int $g
     * @param  int $b
     * @param  bool $transparency
     *
     * @return mixed
     */
    public function set_color($r = 255, $g = 255, $b = 255, $transparency = false);
    
    /**
     * Set JPG output quality
     *
     * @param  int $quality
     */
    public function set_jpg_quality($quality = null);
    
    /**
     * Make true type font text label on image
     *
     * @param  string $text
     * @param  int $x
     * @param  int $y
     * @param  bool $unicode
     * @param  int $letter_space
     * @return array
     */
    public function ttf_text($text, $x = 0, $y = 0, $unicode = false, $letter_space = 20);
    
    /**
     * Create text watermark
     *
     * @param  string $text
     * @param  array $position
     * @param  array $font_color
     * @param  array $bg_color
     * @param  int $font_alpha
     * @param  int $bg_alfa
     * @return bool
     */
    public function watermark($text, $position = array(0, 24), $font_color = array(255, 255, 255), $bg_color = array(0, 0, 0), $font_alpha = 0, $bg_alfa = 40);
    
    /**
     * Make rounded corners
     *
     * @param  int $radius
     * @param  int $rate
     * @return bool
     */
    public function round_corners($radius = 5, $rate = 5);
    
    /**
     * Make image output in file or in browser.
     * Can output image in one of this formats: png, gif, jpg.
     * If you don`t give format, it will use
     * the format of image object.
     *
     * @param string $format
     * @param string $file
     */
    public function output($format = null, $file = null);
    
    /**
     *
     * @param $file
     * @param false $copyresized
     * @param int[] $position
     * @param int $src_x
     * @param int $src_y
     * @param int $src_w
     * @param int $src_h
     * @param int $dst_w
     * @param int $dst_h
     * @return bool
     */
    public function paste_image($file, $copyresized = false, $position = array(0, 0), $src_x = 0, $src_y = 0, $src_w = -1, $src_h = -1, $dst_w = -1, $dst_h = -1);
    
    /**
     * Allocate color to image
     *
     * @param int $r
     * @param int $g
     * @param int $b
     * @return false|int
     */
    public function rgb($r = 255, $g = 255, $b = 255);
    
    
    
    
}