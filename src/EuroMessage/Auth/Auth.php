<?php
namespace EuroMessage\Auth;
/**
 * Auth class
 * @author    {Yunus Oksuz}
 */
class Auth extends \SoapClient {

  private static $classmap = array(
        'ELogin' => '\EuroMessage\Auth\Login',
        'LoginResponse' => '\EuroMessage\Auth\LoginResponse',
        'EmAuthResult' => '\EuroMessage\Auth\EmAuthResult',
        'EmResult' => '\EuroMessage\EmResult',
        'Logout' => '\EuroMessage\Auth\Logout',
        'LogoutResponse' => '\EuroMessage\Auth\LogoutResponse',
  );

  public function __construct($wsdl = "http://ws.euromsg.com/ecomm/auth.asmx?wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * Logon the system. 
   *
   * @param Login $parameters
   * @return LoginResponse
   */
  public function Login(\EuroMessage\Auth\Login $parameters) {
    return $this->__soapCall('Login', array($parameters),       array(
            'uri' => 'http://ws.euromsg.com/auth',
            'soapaction' => ''
           )
      );
  }

  /**
   * Logoff the system. 
   *
   * @param \EuroMessage\Auth\Logout $parameters
   * @return \EuroMessage\Auth\LogoutResponse
   */
  public function Logout(\EuroMessage\Auth\Logout $parameters) {
    return $this->__soapCall('Logout', array($parameters),       array(
            'uri' => 'http://ws.euromsg.com/auth',
            'soapaction' => ''
           )
      );
  }

}

?>
