<?php
namespace EuroMessage\Post;

class PostHtmlWithTypeResponse extends \EuroMessage\EmResult {
    public $PostHtmlWithTypeResult; // EmPostResult

    /**
     * @return \EuroMessage\Post\EmPostResult
     */
    public function getPostHtmlWithTypeResult()
    {
        return $this->PostHtmlWithTypeResult;
    }


}