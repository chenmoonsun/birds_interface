<?php
namespace App\Interfaces;

/**
 * Description of MovieServiceInterface
 *
 * @author chenyueyang
 */
interface VideoServiceInterface {
    public function play_info($v_id):array;
}
