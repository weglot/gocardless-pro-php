<?php
/**
 * WARNING: Do not edit by hand, this file was generated by Crank:
 *
 * https://github.com/gocardless/crank
 */

namespace GoCardlessPro\Services;

use \GoCardlessPro\Core\Paginator;
use \GoCardlessPro\Core\Util;
use \GoCardlessPro\Core\ListResponse;
use \GoCardlessPro\Resources\VerificationDetail;
use \GoCardlessPro\Core\Exception\InvalidStateException;


/**
 * Service that provides access to the VerificationDetail
 * endpoints of the API
 *  @method create()
 */
class VerificationDetailsService extends BaseService
{

    protected $envelope_key   = 'verification_details';
    protected $resource_class = '\GoCardlessPro\Resources\VerificationDetail';


    /**
    * Create a verification detail
    *
    * Example URL: /verification_details/:identity
    *
    * @param  string        $identity Unique identifier of the creditor these details are being
 stored against,
 beginning with "CR".
    * @param  string[mixed] $params An associative array for any params
    * @return VerificationDetail
    **/
    public function create($identity, $params = array())
    {
        $path = Util::subUrl(
            '/verification_details/:identity',
            array(
                
                'identity' => $identity
            )
        );
        if(isset($params['params'])) { 
          $params['body'] = json_encode(array($this->envelope_key => (object)$params['params']));
        
          unset($params['params']);
        }

        
        $response = $this->api_client->post($path, $params);
        

        return $this->getResourceForResponse($response);
    }

}
