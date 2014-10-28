<?php
namespace EuroMessage\Post;

class GetPostBulkResult {

    public $ServiceTicket; // string
    public $BeginDate; // string
    public $EndDate; // string

    /**
     * @return mixed
     */
    public function getBeginDate()
    {
        return $this->BeginDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @return mixed
     */
    public function getServiceTicket()
    {
        return $this->ServiceTicket;
    }


}