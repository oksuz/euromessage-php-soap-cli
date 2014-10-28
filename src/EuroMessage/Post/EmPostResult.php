<?php
namespace EuroMessage\Post;

class EmPostResult extends \EuroMessage\EmResult {
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

    /**
     * @return mixed
     */
    public function getCustomParams()
    {
        return $this->CustomParams;
    }

    /**
     * @return mixed
     */
    public function getDeliveryStatus()
    {
        return $this->DeliveryStatus;
    }

    /**
     * @return mixed
     */
    public function getKeyID()
    {
        return $this->KeyID;
    }

    /**
     * @return mixed
     */
    public function getLastUpdateTime()
    {
        return $this->LastUpdateTime;
    }

    /**
     * @return boolean
     */
    public function getMarkedSpam()
    {
        return $this->MarkedSpam;
    }

    /**
     * @return mixed
     */
    public function getPostID()
    {
        return $this->PostID;
    }

    /**
     * @return mixed
     */
    public function getPostType()
    {
        return $this->PostType;
    }

    /**
     * @return mixed
     */
    public function getReadTime()
    {
        return $this->ReadTime;
    }

    /**
     * @return mixed
     */
    public function getRelayBounceTime()
    {
        return $this->RelayBounceTime;
    }

    /**
     * @return mixed
     */
    public function getRelayStatus()
    {
        return $this->RelayStatus;
    }

    /**
     * @return mixed
     */
    public function getUndeliveryReason()
    {
        return $this->UndeliveryReason;
    }
}