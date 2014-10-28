<?php
namespace EuroMessage\Post;

class EmPostBulkReport {
    public $PostID; // string
    public $RelayStatus; // string
    public $DeliveryStatus; // string
    public $UndeliveryReason; // string
    public $MarkedSpam; // boolean
    public $KeyID; // string
    public $CustomParams; // string
    public $PostType; // string
    public $ReadTime; // string
    public $RelayBounceTime; // string
    public $LastUpdateTime; // string
}
