<?php

class UID {

    /** @var int $content */
    public $content;

    public function __construct(int $content = null){
        $this->content = is_null($content) ? $this->content = $this->generate_uid() : $this->content = $content;
    }

    /**
     * @return int
     */
    private function generate_uid() : int { return  mt_rand(123456, 9999999); }

    /**
     * @return int
     */
    public function get_content() : int { return $this->content; }
}
