<?php

/**
 * Post class
 * @author    {Yunus Oksuz}
 */
namespace EuroMessage\Post;

class Post extends \SoapClient {

  private static $classmap = array (
        'PostHtml' => '\EuroMessage\Post\PostHtml',
        'EmAttachment' => '\EuroMessage\Post\EmAttachment',
        'PostHtmlResponse' => '\EuroMessage\Post\PostHtmlResponse',
        'EmPostResult' => '\EuroMessage\Post\EmPostResult',
        'EmResult' => '\EuroMessage\EmResult',
        'PostHtmlWithType' => '\EuroMessage\Post\PostHtmlWithType',
        'PostHtmlWithTypeResponse' => '\EuroMessage\Post\PostHtmlWithTypeResponse',
        'PostHtmlWithTypeKeyIDAndCustomParams' => '\EuroMessage\Post\PostHtmlWithTypeKeyIDAndCustomParams',
        'PostHtmlWithTypeKeyIDAndCustomParamsResponse' => '\EuroMessage\Post\PostHtmlWithTypeKeyIDAndCustomParamsResponse',
        'GetPostResult' => '\EuroMessage\Post\GetPostResult',
        'GetPostResultResponse' => '\EuroMessage\Post\GetPostResultResponse',
        'GetPostBulkResult' => '\EuroMessage\Post\GetPostBulkResult',
        'GetPostBulkResultResponse' => '\EuroMessage\Post\GetPostBulkResultResponse',
        'EmPostBulkReport' => '\EuroMessage\Post\EmPostBulkReport',
        'GetPostBulkBounceResult' => '\EuroMessage\Post\GetPostBulkBounceResult',
        'GetPostBulkBounceResultResponse' => '\EuroMessage\Post\GetPostBulkBounceResultResponse',
        'GetPostBulkResultByLastUpdate' => '\EuroMessage\Post\GetPostBulkResultByLastUpdate',
        'GetPostBulkResultByLastUpdateResponse' => '\EuroMessage\Post\GetPostBulkResultByLastUpdateResponse',
  );

  public function __construct($wsdl = "http://ws.euromsg.com/ecomm/post.asmx?wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * Enables free-html posting. 
   *
   * @param \EuroMessage\Post\PostHtml $parameters
   * @return \EuroMessage\Post\PostHtmlResponse
   */
  public function PostHtml(\EuroMessage\Post\PostHtml $parameters) {
    return $this->__soapCall('PostHtml', array($parameters),       array(
            'uri' => 'http://ws.euromsg.com/post',
            'soapaction' => ''
           )
      );
  }

  /**
   * Enables free-html posting with type 
   *
   * @param \EuroMessage\Post\PostHtmlWithType $parameters
   * @return \EuroMessage\Post\PostHtmlWithTypeResponse
   */
  public function PostHtmlWithType(\EuroMessage\Post\PostHtmlWithType $parameters) {
    return $this->__soapCall('PostHtmlWithType', array($parameters),       array(
            'uri' => 'http://ws.euromsg.com/post',
            'soapaction' => ''
           )
      );
  }

  /**
   * Enables free-html posting with type, key_id and custom fields 
   *
   * @param \EuroMessage\Post\PostHtmlWithTypeKeyIDAndCustomParams $parameters
   * @return \EuroMessage\Post\PostHtmlWithTypeKeyIDAndCustomParamsResponse
   */
  public function PostHtmlWithTypeKeyIDAndCustomParams(\EuroMessage\Post\PostHtmlWithTypeKeyIDAndCustomParams $parameters) {
    return $this->__soapCall('PostHtmlWithTypeKeyIDAndCustomParams', array($parameters),       array(
            'uri' => 'http://ws.euromsg.com/post',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets Delivery Report For A Transactional Message 
   *
   * @param \EuroMessage\Post\GetPostResult $parameters
   * @return \EuroMessage\Post\GetPostResultResponse
   */
  public function GetPostResult(\EuroMessage\Post\GetPostResult $parameters) {
    return $this->__soapCall('GetPostResult', array($parameters),       array(
            'uri' => 'http://ws.euromsg.com/post',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets Bulk Result For Transacrtional Messages Between Two Dates 
   *
   * @param \EuroMessage\Post\GetPostBulkResult $parameters
   * @return \EuroMessage\Post\GetPostBulkResultResponse
   */
  public function GetPostBulkResult(\EuroMessage\Post\GetPostBulkResult $parameters) {
    return $this->__soapCall('GetPostBulkResult', array($parameters),       array(
            'uri' => 'http://ws.euromsg.com/post',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets Bulk Bounce Result For Transacrtional Messages Between Two Dates 
   *
   * @param \EuroMessage\Post\GetPostBulkBounceResult $parameters
   * @return \EuroMessage\Post\GetPostBulkBounceResultResponse
   */
  public function GetPostBulkBounceResult(\EuroMessage\Post\GetPostBulkBounceResult $parameters) {
    return $this->__soapCall('GetPostBulkBounceResult', array($parameters),       array(
            'uri' => 'http://ws.euromsg.com/post',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets Bulk Result For Transacrtional Messages Between Two Last Update Dates 
   *
   * @param \EuroMessage\Post\GetPostBulkResultByLastUpdate $parameters
   * @return \EuroMessage\Post\GetPostBulkResultByLastUpdateResponse
   */
  public function GetPostBulkResultByLastUpdate(\EuroMessage\Post\GetPostBulkResultByLastUpdate $parameters) {
    return $this->__soapCall('GetPostBulkResultByLastUpdate', array($parameters),       array(
            'uri' => 'http://ws.euromsg.com/post',
            'soapaction' => ''
           )
      );
  }

}

?>
