<?php
/**
 * WARNING: Do not edit by hand, this file was generated by Crank:
 *
 * https://github.com/gocardless/crank
 */

namespace GoCardlessPro\Resources;

/**
 * A thin wrapper around a scheme_identifier, providing access to its
 * attributes
 *
 * @property-read $address_line1
 * @property-read $address_line2
 * @property-read $address_line3
 * @property-read $can_specify_mandate_reference
 * @property-read $city
 * @property-read $country_code
 * @property-read $created_at
 * @property-read $currency
 * @property-read $email
 * @property-read $id
 * @property-read $minimum_advance_notice
 * @property-read $name
 * @property-read $phone_number
 * @property-read $postal_code
 * @property-read $reference
 * @property-read $region
 * @property-read $scheme
 * @property-read $status
 */
class SchemeIdentifier extends BaseResource
{
    protected $model_name = "SchemeIdentifier";

    /**
     * The first line of the scheme identifier's support address.
     */
    protected $address_line1;

    /**
     * The second line of the scheme identifier's support address.
     */
    protected $address_line2;

    /**
     * The third line of the scheme identifier's support address.
     */
    protected $address_line3;

    /**
     * Whether a custom reference can be submitted for mandates using this
     * scheme identifier.
     */
    protected $can_specify_mandate_reference;

    /**
     * The city of the scheme identifier's support address.
     */
    protected $city;

    /**
     * [ISO 3166-1 alpha-2
     * code.](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements)
     */
    protected $country_code;

    /**
     * Fixed [timestamp](#api-usage-time-zones--dates), recording when this
     * resource was created.
     */
    protected $created_at;

    /**
     * The currency of the scheme identifier.
     */
    protected $currency;

    /**
     * Scheme identifier's support email address.
     */
    protected $email;

    /**
     * Unique identifier, usually beginning with "SU".
     */
    protected $id;

    /**
     * The minimum interval, in working days, between the sending of a
     * pre-notification to the customer, and the charge date of a payment using
     * this scheme identifier.
     * 
     * By default, GoCardless sends these notifications automatically. Please
     * see our [compliance requirements](#appendix-compliance-requirements) for
     * more details.
     */
    protected $minimum_advance_notice;

    /**
     * The name which appears on customers' bank statements. This should usually
     * be the merchant's trading name.
     */
    protected $name;

    /**
     * Scheme identifier's support phone number.
     */
    protected $phone_number;

    /**
     * The scheme identifier's support postal code.
     */
    protected $postal_code;

    /**
     * The scheme-unique identifier against which payments are submitted.
     */
    protected $reference;

    /**
     * The scheme identifier's support address region, county or department.
     */
    protected $region;

    /**
     * The scheme which this scheme identifier applies to.
     */
    protected $scheme;

    /**
     * The status of the scheme identifier. Only `active` scheme identifiers
     * will be applied to a creditor and used against payments.
     */
    protected $status;

}