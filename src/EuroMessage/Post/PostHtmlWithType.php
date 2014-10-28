<?php
namespace EuroMessage\Post;

class PostHtmlWithType {
    public $ServiceTicket; // string
    public $FromName; // string
    public $FromAddress; // string
    public $ReplyAddress; // string
    public $Subject; // string
    public $HtmlBody; // string
    public $Charset; // string
    public $ToName; // string
    public $ToEmailAddress; // string
    public $Attachments; // ArrayOfEmAttachment
    public $PostType; // string
}