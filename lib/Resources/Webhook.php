<?php
/**
 * WARNING: Do not edit by hand, this file was generated by Crank:
 *
 * https://github.com/gocardless/crank
 */

namespace GoCardlessPro\Resources;

/**
 * A thin wrapper around a webhook, providing access to its
 * attributes
 *
 * @property-read mixed $created_at
 * @property-read mixed $id
 * @property-read mixed $is_test
 * @property-read mixed $request_body
 * @property-read mixed $request_headers
 * @property-read mixed $response_body
 * @property-read mixed $response_body_truncated
 * @property-read mixed $response_code
 * @property-read mixed $response_headers
 * @property-read mixed $response_headers_content_truncated
 * @property-read mixed $response_headers_count_truncated
 * @property-read mixed $successful
 * @property-read mixed $url
 */
class Webhook extends BaseResource
{
    protected $model_name = "Webhook";

    /**
     * Fixed [timestamp](#api-usage-time-zones--dates), recording when this
     * resource was created.
     */
    protected $created_at;

    /**
     * Unique identifier, beginning with "WB".
     */
    protected $id;

    /**
     * Boolean value showing whether this was a demo webhook for testing
     */
    protected $is_test;

    /**
     * The body of the request sent to the webhook URL
     */
    protected $request_body;

    /**
     * The request headers sent with the webhook
     */
    protected $request_headers;

    /**
     * The body of the response from the webhook URL
     */
    protected $response_body;

    /**
     * Boolean value indicating the webhook response body was truncated
     */
    protected $response_body_truncated;

    /**
     * The response code from the webhook request
     */
    protected $response_code;

    /**
     * The headers sent with the response from the webhook URL
     */
    protected $response_headers;

    /**
     * Boolean indicating the content of response headers was truncated
     */
    protected $response_headers_content_truncated;

    /**
     * Boolean indicating the number of response headers was truncated
     */
    protected $response_headers_count_truncated;

    /**
     * Boolean indicating whether the request was successful or failed
     */
    protected $successful;

    /**
     * URL the webhook was POST-ed to
     */
    protected $url;

}
