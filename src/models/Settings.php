<?php
/**
 * Stripe Checkout plugin for Craft CMS 3.x
 *
 * Bringing the power of Stripe Checkout to your Craft templates.
 *
 * @link      https://github.com/lukeyouell/craft-stripecheckout
 * @copyright Copyright (c) 2018 Luke Youell
 */

namespace lukeyouell\stripecheckout\models;

use lukeyouell\stripecheckout\StripeCheckout;

use Craft;
use craft\base\Model;

class Settings extends Model
{
    // Public Properties
    // =========================================================================

    public $pluginNameOverride;

    public $accountMode = 'test';

    public $defaultCurrency = 'GBP';

    public $testPublishableKey;

    public $testSecretKey;

    public $livePublishableKey;

    public $liveSecretKey;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pluginNameOverride', 'accountMode', 'defaultCurrency', 'testPublishableKey', 'testSecretKey', 'livePublishableKey', 'liveSecretKey'], 'string'],
            [['accountMode', 'defaultCurrency'], 'required'],
        ];
    }
}
