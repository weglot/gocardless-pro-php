<?php
/**
 * WARNING: Do not edit by hand, this file was generated by Crank:
 *
 * https://github.com/gocardless/crank
 */

namespace GoCardlessPro\Resources;

/**
 * A thin wrapper around a mandate_request_constraints, providing access to its
 * attributes
 *
 * @property-read mixed $end_date
 * @property-read mixed $max_amount_per_payment
 * @property-read mixed $periodic_limits
 * @property-read mixed $start_date
 */
class MandateRequestConstraints extends BaseResource
{
    protected $model_name = "MandateRequestConstraints";

    /**
     * The latest date at which payments can be taken, must occur after
     * start_date if present
     * 
     * This is an optional field and if it is not supplied the agreement will be
     * considered open and
     * will not have an end date. Keep in mind the end date must take into
     * account how long it will
     * take the user to set up this agreement via the BillingRequest.
     */
    protected $end_date;

    /**
     * The maximum amount that can be charged for a single payment
     */
    protected $max_amount_per_payment;

    /**
     * List of periodic limits and constraints which apply to them
     */
    protected $periodic_limits;

    /**
     * The date from which payments can be taken.
     * 
     * This is an optional field and if it is not supplied the start date will
     * be set to the day
     * authorisation happens.
     */
    protected $start_date;

}
