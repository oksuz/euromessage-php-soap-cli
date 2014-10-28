<?php
namespace EuroMessage\Post;

class PostHtmlResponse extends \EuroMessage\EmResult {

    public $PostHtmlResult; // EmPostResult

    /**
     * @return \EuroMessage\Post\EmPostResult
     */
    public function getPostHtmlResult()
    {
        return $this->PostHtmlResult;
    }



}