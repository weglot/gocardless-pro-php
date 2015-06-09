<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardlessPro\Services;

/**
  *  Redirect Flows
  *

  *
  *  Redirect flows enable you to use GoCardless Pro's secure payment pages to
  *  set up mandates with your customers.
  *  
  *  The overall flow is:
  *  

  *   *  1. You
  *  [create](https://developer.gocardless.com/pro/2015-04-29/#create-a-redirect-flow)
  *  a redirect flow for your customer, and redirect them to the returned
  *  redirect url, e.g. `https://pay.gocardless.com/flow/RE123`.
  *  
  *  2.
  *  Your customer supplies their name, email, address, and bank account
  *  details, and submits the form. This securely stores their details, and
  *  redirects them back to your `success_redirect_url` with
  *  `redirect_flow_id=RE123` in the querystring.
  *  
  *  3. You
  *  [complete](https://developer.gocardless.com/pro/2015-04-29/#complete-a-redirect-flow)
  *  the redirect flow, which creates a
  *  [customer](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-customers),
  *  [customer bank
  *  account](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-customer-bank-accounts),
  *  and
  *  [mandate](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-mandates),
  *  and returns the ID of the mandate. You may wish to create a
  *  [subscription](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-subscriptions)
  *  or
  *  [payment](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-payments)
  *  at this point.
  *  
  *  It is recommended that you link the redirect flow
  *  to your user object as soon as it is created, and attach the created
  *  resources to that user in the complete step.
  *  
  *  Redirect flows
  *  expire 30 minutes after they are first created. You cannot
  *  [complete](https://developer.gocardless.com/pro/2015-04-29/#complete-a-redirect-flow)
  *  an expired redirect flow.
  *  
  *  [View an example
  *  integration](https://pay-sandbox.gocardless.com/AL000000AKFPFF) that uses
  *  redirect flows.
  */
class RedirectFlowsService extends Base
{
  
  /**
    *  Create a redirect flow
    *
    *  Creates a redirect flow object which can then be used to redirect your
    *  customer to the GoCardless Pro hosted payment pages.
    *
    *  Example URL: /redirect_flows
    *
    *
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return RedirectFlow
    * @throws \GoCardlessPro\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardlessPro\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function create($params = array(), $headers = array())
    {
        return $this->make_request('create', 'post', '/redirect_flows', $params, $headers);
    }

  /**
    *  Get a single redirect flow
    *
    *  Returns all details about a single redirect flow
    *
    *  Example URL: /redirect_flows/:identity
    *
    *
    * @param string $identity Unique identifier, beginning with "RE"
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return RedirectFlow
    * @throws \GoCardlessPro\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardlessPro\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function get($identity, $params = array(), $headers = array())
    {
        $path = self::sub_url('/redirect_flows/:identity', array(
            'identity' => $identity
        ));

        return $this->make_request('get', 'get', $path, $params, $headers);
    }

  /**
    *  Complete a redirect flow
    *
    *  This creates a
    *  [customer](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-customers),
    *  [customer bank
    *  account](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-customer-bank-accounts),
    *  and
    *  [mandate](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-mandates)
    *  using the details supplied by your customer and returns the ID of the
    *  created mandate.
    *  
    *  This will return a
    *  `redirect_flow_incomplete` error if your customer has not yet been
    *  redirected back to your site, and a `redirect_flow_already_completed`
    *  error if your integration has already completed this flow. It will return
    *  a `bad_request` error if the `session_token` differs to the one supplied
    *  when the redirect flow was created.
    *
    *  Example URL: /redirect_flows/:identity/actions/complete
    *
    *
    * @param string $identity Unique identifier, beginning with "RE"
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return RedirectFlow
    * @throws \GoCardlessPro\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardlessPro\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function complete($identity, $params = array(), $headers = array())
    {
        $path = self::sub_url('/redirect_flows/:identity/actions/complete', array(
            'identity' => $identity
        ));

        return $this->make_request('complete', 'post', $path, $params, $headers);
    }




   /**
    * Get the resource loading class.
    * Used internally to send http requests.
    *
    * @return string
    */
    protected function resourceClass()
    {
        return '\GoCardlessPro\Resources\RedirectFlow';
    }

  /**
    *  Get the key the response object is enclosed in in JSON.
    *  Used internally to wrap and unwrap http requests.
    *
    *  @return string
    */
    protected function envelopeKey()
    {
        return 'redirect_flows';
    }
}