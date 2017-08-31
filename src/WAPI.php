<?php

namespace cloudposse\wild_west_reseller_api;

class WAPI extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ProcessRequest' => 'cloudposse\\wild_west_reseller_api\\ProcessRequest',
      'ProcessRequestResponse' => 'cloudposse\\wild_west_reseller_api\\ProcessRequestResponse',
      'Describe' => 'cloudposse\\wild_west_reseller_api\\Describe',
      'Credential' => 'cloudposse\\wild_west_reseller_api\\Credential',
      'DescribeResponse' => 'cloudposse\\wild_west_reseller_api\\DescribeResponse',
      'CheckAvailability' => 'cloudposse\\wild_west_reseller_api\\CheckAvailability',
      'ArrayOfString' => 'cloudposse\\wild_west_reseller_api\\ArrayOfString',
      'CheckAvailabilityResponse' => 'cloudposse\\wild_west_reseller_api\\CheckAvailabilityResponse',
      'CheckDomains' => 'cloudposse\\wild_west_reseller_api\\CheckDomains',
      'ArrayOfCheckDomain' => 'cloudposse\\wild_west_reseller_api\\ArrayOfCheckDomain',
      'CheckDomain' => 'cloudposse\\wild_west_reseller_api\\CheckDomain',
      'CheckDomainsResponse' => 'cloudposse\\wild_west_reseller_api\\CheckDomainsResponse',
      'Info' => 'cloudposse\\wild_west_reseller_api\\Info',
      'InfoResponse' => 'cloudposse\\wild_west_reseller_api\\InfoResponse',
      'NameGen' => 'cloudposse\\wild_west_reseller_api\\NameGen',
      'NameGenResponse' => 'cloudposse\\wild_west_reseller_api\\NameGenResponse',
      'NameGenDB' => 'cloudposse\\wild_west_reseller_api\\NameGenDB',
      'NameGenDBResponse' => 'cloudposse\\wild_west_reseller_api\\NameGenDBResponse',
      'NameGenDBWithTimeLimit' => 'cloudposse\\wild_west_reseller_api\\NameGenDBWithTimeLimit',
      'NameGenDBWithTimeLimitResponse' => 'cloudposse\\wild_west_reseller_api\\NameGenDBWithTimeLimitResponse',
      'Poll' => 'cloudposse\\wild_west_reseller_api\\Poll',
      'PollResponse' => 'cloudposse\\wild_west_reseller_api\\PollResponse',
      'OrderCredits' => 'cloudposse\\wild_west_reseller_api\\OrderCredits',
      'Shopper' => 'cloudposse\\wild_west_reseller_api\\Shopper',
      'ArrayOfOrderItem' => 'cloudposse\\wild_west_reseller_api\\ArrayOfOrderItem',
      'OrderItem' => 'cloudposse\\wild_west_reseller_api\\OrderItem',
      'Order' => 'cloudposse\\wild_west_reseller_api\\Order',
      'OrderCreditsResponse' => 'cloudposse\\wild_west_reseller_api\\OrderCreditsResponse',
      'OrderDomains' => 'cloudposse\\wild_west_reseller_api\\OrderDomains',
      'ArrayOfDomainRegistration' => 'cloudposse\\wild_west_reseller_api\\ArrayOfDomainRegistration',
      'DomainRegistration' => 'cloudposse\\wild_west_reseller_api\\DomainRegistration',
      'ContactInfo' => 'cloudposse\\wild_west_reseller_api\\ContactInfo',
      'Nexus' => 'cloudposse\\wild_west_reseller_api\\Nexus',
      'ArrayOfNS' => 'cloudposse\\wild_west_reseller_api\\ArrayOfNS',
      'NS' => 'cloudposse\\wild_west_reseller_api\\NS',
      'ArrayOfDomainByProxy' => 'cloudposse\\wild_west_reseller_api\\ArrayOfDomainByProxy',
      'DomainByProxy' => 'cloudposse\\wild_west_reseller_api\\DomainByProxy',
      'OrderDomainsResponse' => 'cloudposse\\wild_west_reseller_api\\OrderDomainsResponse',
      'OrderDomainRenewals' => 'cloudposse\\wild_west_reseller_api\\OrderDomainRenewals',
      'ArrayOfDomainRenewal' => 'cloudposse\\wild_west_reseller_api\\ArrayOfDomainRenewal',
      'DomainRenewal' => 'cloudposse\\wild_west_reseller_api\\DomainRenewal',
      'OrderDomainRenewalsResponse' => 'cloudposse\\wild_west_reseller_api\\OrderDomainRenewalsResponse',
      'OrderPrivateDomainRenewals' => 'cloudposse\\wild_west_reseller_api\\OrderPrivateDomainRenewals',
      'ArrayOfResourceRenewal' => 'cloudposse\\wild_west_reseller_api\\ArrayOfResourceRenewal',
      'ResourceRenewal' => 'cloudposse\\wild_west_reseller_api\\ResourceRenewal',
      'OrderPrivateDomainRenewalsResponse' => 'cloudposse\\wild_west_reseller_api\\OrderPrivateDomainRenewalsResponse',
      'OrderDomainTransfers' => 'cloudposse\\wild_west_reseller_api\\OrderDomainTransfers',
      'ArrayOfDomainTransfer' => 'cloudposse\\wild_west_reseller_api\\ArrayOfDomainTransfer',
      'DomainTransfer' => 'cloudposse\\wild_west_reseller_api\\DomainTransfer',
      'OrderDomainTransfersResponse' => 'cloudposse\\wild_west_reseller_api\\OrderDomainTransfersResponse',
      'OrderDomainRedemptions' => 'cloudposse\\wild_west_reseller_api\\OrderDomainRedemptions',
      'ArrayOfDomainRedemption' => 'cloudposse\\wild_west_reseller_api\\ArrayOfDomainRedemption',
      'DomainRedemption' => 'cloudposse\\wild_west_reseller_api\\DomainRedemption',
      'OrderDomainRedemptionsResponse' => 'cloudposse\\wild_west_reseller_api\\OrderDomainRedemptionsResponse',
      'OrderDomainPrivacy' => 'cloudposse\\wild_west_reseller_api\\OrderDomainPrivacy',
      'OrderDomainPrivacyResponse' => 'cloudposse\\wild_west_reseller_api\\OrderDomainPrivacyResponse',
      'OrderResourceRenewals' => 'cloudposse\\wild_west_reseller_api\\OrderResourceRenewals',
      'OrderResourceRenewalsResponse' => 'cloudposse\\wild_west_reseller_api\\OrderResourceRenewalsResponse',
      'OrderServiceRenewals' => 'cloudposse\\wild_west_reseller_api\\OrderServiceRenewals',
      'ArrayOfServiceRenewal' => 'cloudposse\\wild_west_reseller_api\\ArrayOfServiceRenewal',
      'ServiceRenewal' => 'cloudposse\\wild_west_reseller_api\\ServiceRenewal',
      'OrderServiceRenewalsResponse' => 'cloudposse\\wild_west_reseller_api\\OrderServiceRenewalsResponse',
      'OrderServices' => 'cloudposse\\wild_west_reseller_api\\OrderServices',
      'ArrayOfProductGroup' => 'cloudposse\\wild_west_reseller_api\\ArrayOfProductGroup',
      'ProductGroup' => 'cloudposse\\wild_west_reseller_api\\ProductGroup',
      'OrderServicesResponse' => 'cloudposse\\wild_west_reseller_api\\OrderServicesResponse',
      'OrderDomainBackOrders' => 'cloudposse\\wild_west_reseller_api\\OrderDomainBackOrders',
      'ArrayOfDomainBackOrder' => 'cloudposse\\wild_west_reseller_api\\ArrayOfDomainBackOrder',
      'DomainBackOrder' => 'cloudposse\\wild_west_reseller_api\\DomainBackOrder',
      'OrderDomainBackOrdersResponse' => 'cloudposse\\wild_west_reseller_api\\OrderDomainBackOrdersResponse',
      'Cancel' => 'cloudposse\\wild_west_reseller_api\\Cancel',
      'CancelResponse' => 'cloudposse\\wild_west_reseller_api\\CancelResponse',
      'UpdateDomainOwnership' => 'cloudposse\\wild_west_reseller_api\\UpdateDomainOwnership',
      'GainingOwner' => 'cloudposse\\wild_west_reseller_api\\GainingOwner',
      'ShopperNoDBP' => 'cloudposse\\wild_west_reseller_api\\ShopperNoDBP',
      'UpdateDomainOwnershipResponse' => 'cloudposse\\wild_west_reseller_api\\UpdateDomainOwnershipResponse',
      'ResetPassword' => 'cloudposse\\wild_west_reseller_api\\ResetPassword',
      'ResetPasswordResponse' => 'cloudposse\\wild_west_reseller_api\\ResetPasswordResponse',
      'SetShopperInfo' => 'cloudposse\\wild_west_reseller_api\\SetShopperInfo',
      'SetShopperInfoResponse' => 'cloudposse\\wild_west_reseller_api\\SetShopperInfoResponse',
      'CreateNewShopper' => 'cloudposse\\wild_west_reseller_api\\CreateNewShopper',
      'CreateNewShopperResponse' => 'cloudposse\\wild_west_reseller_api\\CreateNewShopperResponse',
      'CheckUser' => 'cloudposse\\wild_west_reseller_api\\CheckUser',
      'CheckUserResponse' => 'cloudposse\\wild_west_reseller_api\\CheckUserResponse',
      'SetupDomainAlert' => 'cloudposse\\wild_west_reseller_api\\SetupDomainAlert',
      'DomainAlert' => 'cloudposse\\wild_west_reseller_api\\DomainAlert',
      'SetupDomainAlertResponse' => 'cloudposse\\wild_west_reseller_api\\SetupDomainAlertResponse',
      'UpdateDomainAlert' => 'cloudposse\\wild_west_reseller_api\\UpdateDomainAlert',
      'UpdateDomainAlertResponse' => 'cloudposse\\wild_west_reseller_api\\UpdateDomainAlertResponse',
      'RemoveDomainAlert' => 'cloudposse\\wild_west_reseller_api\\RemoveDomainAlert',
      'RemoveDomainAlertResponse' => 'cloudposse\\wild_west_reseller_api\\RemoveDomainAlertResponse',
      'GetDomainAlertCredits' => 'cloudposse\\wild_west_reseller_api\\GetDomainAlertCredits',
      'GetDomainAlertCreditsResponse' => 'cloudposse\\wild_west_reseller_api\\GetDomainAlertCreditsResponse',
      'GetMonitoredDomainList' => 'cloudposse\\wild_west_reseller_api\\GetMonitoredDomainList',
      'GetMonitoredDomainListResponse' => 'cloudposse\\wild_west_reseller_api\\GetMonitoredDomainListResponse',
      'GetExpiringNameList' => 'cloudposse\\wild_west_reseller_api\\GetExpiringNameList',
      'GetExpiringNameListResponse' => 'cloudposse\\wild_west_reseller_api\\GetExpiringNameListResponse',
      'DomainForwarding' => 'cloudposse\\wild_west_reseller_api\\DomainForwarding',
      'DomainForwardingResponse' => 'cloudposse\\wild_west_reseller_api\\DomainForwardingResponse',
      'UpdateNameServer' => 'cloudposse\\wild_west_reseller_api\\UpdateNameServer',
      'ArrayOfDomain' => 'cloudposse\\wild_west_reseller_api\\ArrayOfDomain',
      'Domain' => 'cloudposse\\wild_west_reseller_api\\Domain',
      'UpdateNameServerResponse' => 'cloudposse\\wild_west_reseller_api\\UpdateNameServerResponse',
      'UpdateDomainContact' => 'cloudposse\\wild_west_reseller_api\\UpdateDomainContact',
      'UpdateDomainContactResponse' => 'cloudposse\\wild_west_reseller_api\\UpdateDomainContactResponse',
      'SetDomainLocking' => 'cloudposse\\wild_west_reseller_api\\SetDomainLocking',
      'SetDomainLockingResponse' => 'cloudposse\\wild_west_reseller_api\\SetDomainLockingResponse',
      'ManageTransfer' => 'cloudposse\\wild_west_reseller_api\\ManageTransfer',
      'ManageTransferResponse' => 'cloudposse\\wild_west_reseller_api\\ManageTransferResponse',
      'UpdateDomainForwarding' => 'cloudposse\\wild_west_reseller_api\\UpdateDomainForwarding',
      'UpdateDomainForwardingResponse' => 'cloudposse\\wild_west_reseller_api\\UpdateDomainForwardingResponse',
      'UpdateDomainMasking' => 'cloudposse\\wild_west_reseller_api\\UpdateDomainMasking',
      'UpdateDomainMaskingResponse' => 'cloudposse\\wild_west_reseller_api\\UpdateDomainMaskingResponse',
      'ModifyDNS' => 'cloudposse\\wild_west_reseller_api\\ModifyDNS',
      'ArrayOfDNSRequest' => 'cloudposse\\wild_west_reseller_api\\ArrayOfDNSRequest',
      'DNSRequest' => 'cloudposse\\wild_west_reseller_api\\DNSRequest',
      'ModifyDNSResponse' => 'cloudposse\\wild_west_reseller_api\\ModifyDNSResponse',
      'GetIDNLanguageList' => 'cloudposse\\wild_west_reseller_api\\GetIDNLanguageList',
      'GetIDNLanguageListResponse' => 'cloudposse\\wild_west_reseller_api\\GetIDNLanguageListResponse',
      'GetPunycodeIDN' => 'cloudposse\\wild_west_reseller_api\\GetPunycodeIDN',
      'GetPunycodeIDNResponse' => 'cloudposse\\wild_west_reseller_api\\GetPunycodeIDNResponse',
      'GetUnicodeIDN' => 'cloudposse\\wild_west_reseller_api\\GetUnicodeIDN',
      'GetUnicodeIDNResponse' => 'cloudposse\\wild_west_reseller_api\\GetUnicodeIDNResponse',
      'ValidateRegistration' => 'cloudposse\\wild_west_reseller_api\\ValidateRegistration',
      'DomainContacts' => 'cloudposse\\wild_west_reseller_api\\DomainContacts',
      'ArrayOfDomainData' => 'cloudposse\\wild_west_reseller_api\\ArrayOfDomainData',
      'DomainData' => 'cloudposse\\wild_west_reseller_api\\DomainData',
      'ValidateRegistrationResponse' => 'cloudposse\\wild_west_reseller_api\\ValidateRegistrationResponse',
      'SetServiceAddOnQty' => 'cloudposse\\wild_west_reseller_api\\SetServiceAddOnQty',
      'SetServiceAddOnQtyResponse' => 'cloudposse\\wild_west_reseller_api\\SetServiceAddOnQtyResponse',
      'GetAutoResponderForEmail' => 'cloudposse\\wild_west_reseller_api\\GetAutoResponderForEmail',
      'ReturnConfig' => 'cloudposse\\wild_west_reseller_api\\ReturnConfig',
      'GetAutoResponderForEmailResponse' => 'cloudposse\\wild_west_reseller_api\\GetAutoResponderForEmailResponse',
      'GetCatchallStatusForEmail' => 'cloudposse\\wild_west_reseller_api\\GetCatchallStatusForEmail',
      'GetCatchallStatusForEmailResponse' => 'cloudposse\\wild_west_reseller_api\\GetCatchallStatusForEmailResponse',
      'GetDiskUsageForEmail' => 'cloudposse\\wild_west_reseller_api\\GetDiskUsageForEmail',
      'GetDiskUsageForEmailResponse' => 'cloudposse\\wild_west_reseller_api\\GetDiskUsageForEmailResponse',
      'GetEmailAddressInfoForShopper' => 'cloudposse\\wild_west_reseller_api\\GetEmailAddressInfoForShopper',
      'GetEmailAddressInfoForShopperResponse' => 'cloudposse\\wild_west_reseller_api\\GetEmailAddressInfoForShopperResponse',
      'GetEmailAddressesForDomain' => 'cloudposse\\wild_west_reseller_api\\GetEmailAddressesForDomain',
      'GetEmailAddressesForDomainResponse' => 'cloudposse\\wild_west_reseller_api\\GetEmailAddressesForDomainResponse',
      'GetEmailAddressesForPlan' => 'cloudposse\\wild_west_reseller_api\\GetEmailAddressesForPlan',
      'GetEmailAddressesForPlanResponse' => 'cloudposse\\wild_west_reseller_api\\GetEmailAddressesForPlanResponse',
      'GetEmailAddressesForShopper' => 'cloudposse\\wild_west_reseller_api\\GetEmailAddressesForShopper',
      'GetEmailAddressesForShopperResponse' => 'cloudposse\\wild_west_reseller_api\\GetEmailAddressesForShopperResponse',
      'GetEmailPlanInfoForShopper' => 'cloudposse\\wild_west_reseller_api\\GetEmailPlanInfoForShopper',
      'GetEmailPlanInfoForShopperResponse' => 'cloudposse\\wild_west_reseller_api\\GetEmailPlanInfoForShopperResponse',
      'GetEmailPlansForDomain' => 'cloudposse\\wild_west_reseller_api\\GetEmailPlansForDomain',
      'GetEmailPlansForDomainResponse' => 'cloudposse\\wild_west_reseller_api\\GetEmailPlansForDomainResponse',
      'GetEmailPlansForShopper' => 'cloudposse\\wild_west_reseller_api\\GetEmailPlansForShopper',
      'GetEmailPlansForShopperResponse' => 'cloudposse\\wild_west_reseller_api\\GetEmailPlansForShopperResponse',
      'GetIMAPForEmail' => 'cloudposse\\wild_west_reseller_api\\GetIMAPForEmail',
      'GetIMAPForEmailResponse' => 'cloudposse\\wild_west_reseller_api\\GetIMAPForEmailResponse',
      'GetRIMForEmail' => 'cloudposse\\wild_west_reseller_api\\GetRIMForEmail',
      'GetRIMForEmailResponse' => 'cloudposse\\wild_west_reseller_api\\GetRIMForEmailResponse',
      'GetSMTPRelayInfoForShopper' => 'cloudposse\\wild_west_reseller_api\\GetSMTPRelayInfoForShopper',
      'GetSMTPRelayInfoForShopperResponse' => 'cloudposse\\wild_west_reseller_api\\GetSMTPRelayInfoForShopperResponse',
      'GetSMTPRelayPlansForDomain' => 'cloudposse\\wild_west_reseller_api\\GetSMTPRelayPlansForDomain',
      'GetSMTPRelayPlansForDomainResponse' => 'cloudposse\\wild_west_reseller_api\\GetSMTPRelayPlansForDomainResponse',
      'GetSMTPRelayPlansForEmail' => 'cloudposse\\wild_west_reseller_api\\GetSMTPRelayPlansForEmail',
      'GetSMTPRelayPlansForEmailResponse' => 'cloudposse\\wild_west_reseller_api\\GetSMTPRelayPlansForEmailResponse',
      'GetSMTPRelaysForEmail' => 'cloudposse\\wild_west_reseller_api\\GetSMTPRelaysForEmail',
      'GetSMTPRelaysForEmailResponse' => 'cloudposse\\wild_west_reseller_api\\GetSMTPRelaysForEmailResponse',
      'GetSMTPRelaysForShopper' => 'cloudposse\\wild_west_reseller_api\\GetSMTPRelaysForShopper',
      'GetSMTPRelaysForShopperResponse' => 'cloudposse\\wild_west_reseller_api\\GetSMTPRelaysForShopperResponse',
      'GetStatusForEmail' => 'cloudposse\\wild_west_reseller_api\\GetStatusForEmail',
      'GetStatusForEmailResponse' => 'cloudposse\\wild_west_reseller_api\\GetStatusForEmailResponse',
      'MoveEmailAccount' => 'cloudposse\\wild_west_reseller_api\\MoveEmailAccount',
      'MoveEmailAccountResponse' => 'cloudposse\\wild_west_reseller_api\\MoveEmailAccountResponse',
      'RemoveEmailAddress' => 'cloudposse\\wild_west_reseller_api\\RemoveEmailAddress',
      'RemoveEmailAddressResponse' => 'cloudposse\\wild_west_reseller_api\\RemoveEmailAddressResponse',
      'RemoveRIMAccount' => 'cloudposse\\wild_west_reseller_api\\RemoveRIMAccount',
      'RemoveRIMAccountResponse' => 'cloudposse\\wild_west_reseller_api\\RemoveRIMAccountResponse',
      'RemoveSmtpRelay' => 'cloudposse\\wild_west_reseller_api\\RemoveSmtpRelay',
      'RemoveSmtpRelayResponse' => 'cloudposse\\wild_west_reseller_api\\RemoveSmtpRelayResponse',
      'RenameEmailPlan' => 'cloudposse\\wild_west_reseller_api\\RenameEmailPlan',
      'RenameEmailPlanResponse' => 'cloudposse\\wild_west_reseller_api\\RenameEmailPlanResponse',
      'SetAutoResponder' => 'cloudposse\\wild_west_reseller_api\\SetAutoResponder',
      'SetAutoResponderResponse' => 'cloudposse\\wild_west_reseller_api\\SetAutoResponderResponse',
      'SetEmailAccount' => 'cloudposse\\wild_west_reseller_api\\SetEmailAccount',
      'SetEmailAccountResponse' => 'cloudposse\\wild_west_reseller_api\\SetEmailAccountResponse',
      'SetRIMAccount' => 'cloudposse\\wild_west_reseller_api\\SetRIMAccount',
      'SetRIMAccountResponse' => 'cloudposse\\wild_west_reseller_api\\SetRIMAccountResponse',
      'SetSmtpRelays' => 'cloudposse\\wild_west_reseller_api\\SetSmtpRelays',
      'SetSmtpRelaysResponse' => 'cloudposse\\wild_west_reseller_api\\SetSmtpRelaysResponse',
      'TestEmailPassword' => 'cloudposse\\wild_west_reseller_api\\TestEmailPassword',
      'TestEmailPasswordResponse' => 'cloudposse\\wild_west_reseller_api\\TestEmailPasswordResponse',
      'GetAvailableBalance' => 'cloudposse\\wild_west_reseller_api\\GetAvailableBalance',
      'GetAvailableBalanceResponse' => 'cloudposse\\wild_west_reseller_api\\GetAvailableBalanceResponse',
      'GetLegalAgreementUrl' => 'cloudposse\\wild_west_reseller_api\\GetLegalAgreementUrl',
      'GetLegalAgreementUrlResponse' => 'cloudposse\\wild_west_reseller_api\\GetLegalAgreementUrlResponse',
      'GetLegalAgreementContent' => 'cloudposse\\wild_west_reseller_api\\GetLegalAgreementContent',
      'GetLegalAgreementContentResponse' => 'cloudposse\\wild_west_reseller_api\\GetLegalAgreementContentResponse',
      'ResendContactValidation' => 'cloudposse\\wild_west_reseller_api\\ResendContactValidation',
      'ResendContactValidationResponse' => 'cloudposse\\wild_west_reseller_api\\ResendContactValidationResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://api.wildwestdomains.com/wswwdapi/wapi.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Provide support for calling WWD services using legacy WAPI request XMLs.
     *
     * @param ProcessRequest $parameters
     * @return ProcessRequestResponse
     */
    public function ProcessRequest(ProcessRequest $parameters)
    {
      return $this->__soapCall('ProcessRequest', array($parameters));
    }

    /**
     * Returns activity timeout and version information from the server.
     *
     * @param Describe $parameters
     * @return DescribeResponse
     */
    public function Describe(Describe $parameters)
    {
      return $this->__soapCall('Describe', array($parameters));
    }

    /**
     * Checks the availability of domains, hosts and name servers.
     *
     * @param CheckAvailability $parameters
     * @return CheckAvailabilityResponse
     */
    public function CheckAvailability(CheckAvailability $parameters)
    {
      return $this->__soapCall('CheckAvailability', array($parameters));
    }

    /**
     * Checks the availability of domains, supports IDN domain checks.
     *
     * @param CheckDomains $parameters
     * @return CheckDomainsResponse
     */
    public function CheckDomains(CheckDomains $parameters)
    {
      return $this->__soapCall('CheckDomains', array($parameters));
    }

    /**
     * Gets information about items that have been previously ordered.
     *
     * @param Info $parameters
     * @return InfoResponse
     */
    public function Info(Info $parameters)
    {
      return $this->__soapCall('Info', array($parameters));
    }

    /**
     * Used to get the list of alternative domain names based on a given name.
     *
     * @param NameGen $parameters
     * @return NameGenResponse
     */
    public function NameGen(NameGen $parameters)
    {
      return $this->__soapCall('NameGen', array($parameters));
    }

    /**
     * Used to get the list of alternative domain names based on a given name (Domains Bot Service).
     *
     * @param NameGenDB $parameters
     * @return NameGenDBResponse
     */
    public function NameGenDB(NameGenDB $parameters)
    {
      return $this->__soapCall('NameGenDB', array($parameters));
    }

    /**
     * Used to get the list of alternative domain names based on a given name (Domains Bot Service).
     *
     * @param NameGenDBWithTimeLimit $parameters
     * @return NameGenDBWithTimeLimitResponse
     */
    public function NameGenDBWithTimeLimit(NameGenDBWithTimeLimit $parameters)
    {
      return $this->__soapCall('NameGenDBWithTimeLimit', array($parameters));
    }

    /**
     * Used to retrieve status notifications about pending orders.
     *
     * @param Poll $parameters
     * @return PollResponse
     */
    public function Poll(Poll $parameters)
    {
      return $this->__soapCall('Poll', array($parameters));
    }

    /**
     * Used to place an order on items that do not require customization (non-domain).
     *
     * @param OrderCredits $parameters
     * @return OrderCreditsResponse
     */
    public function OrderCredits(OrderCredits $parameters)
    {
      return $this->__soapCall('OrderCredits', array($parameters));
    }

    /**
     * Used for registering new domain names.
     *
     * @param OrderDomains $parameters
     * @return OrderDomainsResponse
     */
    public function OrderDomains(OrderDomains $parameters)
    {
      return $this->__soapCall('OrderDomains', array($parameters));
    }

    /**
     * Used for renewing registration for existing public domain names.
     *
     * @param OrderDomainRenewals $parameters
     * @return OrderDomainRenewalsResponse
     */
    public function OrderDomainRenewals(OrderDomainRenewals $parameters)
    {
      return $this->__soapCall('OrderDomainRenewals', array($parameters));
    }

    /**
     * Used for renewing registration for existing private domain names.
     *
     * @param OrderPrivateDomainRenewals $parameters
     * @return OrderPrivateDomainRenewalsResponse
     */
    public function OrderPrivateDomainRenewals(OrderPrivateDomainRenewals $parameters)
    {
      return $this->__soapCall('OrderPrivateDomainRenewals', array($parameters));
    }

    /**
     * Used for transfering ownership of a domain from one user to another.
     *
     * @param OrderDomainTransfers $parameters
     * @return OrderDomainTransfersResponse
     */
    public function OrderDomainTransfers(OrderDomainTransfers $parameters)
    {
      return $this->__soapCall('OrderDomainTransfers', array($parameters));
    }

    /**
     * Used for redeeming expired domains.
     *
     * @param OrderDomainRedemptions $parameters
     * @return OrderDomainRedemptionsResponse
     */
    public function OrderDomainRedemptions(OrderDomainRedemptions $parameters)
    {
      return $this->__soapCall('OrderDomainRedemptions', array($parameters));
    }

    /**
     * Used for adding privacy to a domain registration.
     *
     * @param OrderDomainPrivacy $parameters
     * @return OrderDomainPrivacyResponse
     */
    public function OrderDomainPrivacy(OrderDomainPrivacy $parameters)
    {
      return $this->__soapCall('OrderDomainPrivacy', array($parameters));
    }

    /**
     * Used for renewing non-domain items.
     *
     * @param OrderResourceRenewals $parameters
     * @return OrderResourceRenewalsResponse
     */
    public function OrderResourceRenewals(OrderResourceRenewals $parameters)
    {
      return $this->__soapCall('OrderResourceRenewals', array($parameters));
    }

    /**
     * Used for renewing service items.
     *
     * @param OrderServiceRenewals $parameters
     * @return OrderServiceRenewalsResponse
     */
    public function OrderServiceRenewals(OrderServiceRenewals $parameters)
    {
      return $this->__soapCall('OrderServiceRenewals', array($parameters));
    }

    /**
     * Used to place an order for services (e.g. email) and/or service add-ons.
     *
     * @param OrderServices $parameters
     * @return OrderServicesResponse
     */
    public function OrderServices(OrderServices $parameters)
    {
      return $this->__soapCall('OrderServices', array($parameters));
    }

    /**
     * Used for back ordering an existing (public or private) domain name.
     *
     * @param OrderDomainBackOrders $parameters
     * @return OrderDomainBackOrdersResponse
     */
    public function OrderDomainBackOrders(OrderDomainBackOrders $parameters)
    {
      return $this->__soapCall('OrderDomainBackOrders', array($parameters));
    }

    /**
     * Used for cancelling existing resources.
     *
     * @param Cancel $parameters
     * @return CancelResponse
     */
    public function Cancel(Cancel $parameters)
    {
      return $this->__soapCall('Cancel', array($parameters));
    }

    /**
     * Used for changing the ownership of a resource from one end user to another (both must be end-users of the currently logged in reseller).
     *
     * @param UpdateDomainOwnership $parameters
     * @return UpdateDomainOwnershipResponse
     */
    public function UpdateDomainOwnership(UpdateDomainOwnership $parameters)
    {
      return $this->__soapCall('UpdateDomainOwnership', array($parameters));
    }

    /**
     * Used for resetting the user's password in the WWD system.
     *
     * @param ResetPassword $parameters
     * @return ResetPasswordResponse
     */
    public function ResetPassword(ResetPassword $parameters)
    {
      return $this->__soapCall('ResetPassword', array($parameters));
    }

    /**
     * Used for allowing the reseller to modify the user information for either their top-level account or any of its sub-accounts.
     *
     * @param SetShopperInfo $parameters
     * @return SetShopperInfoResponse
     */
    public function SetShopperInfo(SetShopperInfo $parameters)
    {
      return $this->__soapCall('SetShopperInfo', array($parameters));
    }

    /**
     * Used for creating a new reseller sub-account.
     *
     * @param CreateNewShopper $parameters
     * @return CreateNewShopperResponse
     */
    public function CreateNewShopper(CreateNewShopper $parameters)
    {
      return $this->__soapCall('CreateNewShopper', array($parameters));
    }

    /**
     * Used for checking whether the account information for the specified user is valid or not.
     *
     * @param CheckUser $parameters
     * @return CheckUserResponse
     */
    public function CheckUser(CheckUser $parameters)
    {
      return $this->__soapCall('CheckUser', array($parameters));
    }

    /**
     * Used for setting domain alert credit or backorder a domain.
     *
     * @param SetupDomainAlert $parameters
     * @return SetupDomainAlertResponse
     */
    public function SetupDomainAlert(SetupDomainAlert $parameters)
    {
      return $this->__soapCall('SetupDomainAlert', array($parameters));
    }

    /**
     * Used for updating an existing domain alert record.
     *
     * @param UpdateDomainAlert $parameters
     * @return UpdateDomainAlertResponse
     */
    public function UpdateDomainAlert(UpdateDomainAlert $parameters)
    {
      return $this->__soapCall('UpdateDomainAlert', array($parameters));
    }

    /**
     * Used for removing an existing domain alert record.
     *
     * @param RemoveDomainAlert $parameters
     * @return RemoveDomainAlertResponse
     */
    public function RemoveDomainAlert(RemoveDomainAlert $parameters)
    {
      return $this->__soapCall('RemoveDomainAlert', array($parameters));
    }

    /**
     * Used for querying the number of domain alert, private backorder, and backorder credits.
     *
     * @param GetDomainAlertCredits $parameters
     * @return GetDomainAlertCreditsResponse
     */
    public function GetDomainAlertCredits(GetDomainAlertCredits $parameters)
    {
      return $this->__soapCall('GetDomainAlertCredits', array($parameters));
    }

    /**
     * Used for querying a list of monitored domains.
     *
     * @param GetMonitoredDomainList $parameters
     * @return GetMonitoredDomainListResponse
     */
    public function GetMonitoredDomainList(GetMonitoredDomainList $parameters)
    {
      return $this->__soapCall('GetMonitoredDomainList', array($parameters));
    }

    /**
     * This method is used to get the list of expiring domain names for users that have an Investors Edge subscription.
     *
     * @param GetExpiringNameList $parameters
     * @return GetExpiringNameListResponse
     */
    public function GetExpiringNameList(GetExpiringNameList $parameters)
    {
      return $this->__soapCall('GetExpiringNameList', array($parameters));
    }

    /**
     * This method is used for forwarding a domain to a specified URL.
     *
     * @param DomainForwarding $parameters
     * @return DomainForwardingResponse
     */
    public function DomainForwarding(DomainForwarding $parameters)
    {
      return $this->__soapCall('DomainForwarding', array($parameters));
    }

    /**
     * This method is used for modifying associated name servers for the given domains.
     *
     * @param UpdateNameServer $parameters
     * @return UpdateNameServerResponse
     */
    public function UpdateNameServer(UpdateNameServer $parameters)
    {
      return $this->__soapCall('UpdateNameServer', array($parameters));
    }

    /**
     * This method is used for modifying associated contact information for the given domains.
     *
     * @param UpdateDomainContact $parameters
     * @return UpdateDomainContactResponse
     */
    public function UpdateDomainContact(UpdateDomainContact $parameters)
    {
      return $this->__soapCall('UpdateDomainContact', array($parameters));
    }

    /**
     * This method is used for setting or clearing the lock on a list of domains.
     *
     * @param SetDomainLocking $parameters
     * @return SetDomainLockingResponse
     */
    public function SetDomainLocking(SetDomainLocking $parameters)
    {
      return $this->__soapCall('SetDomainLocking', array($parameters));
    }

    /**
     * This method is used for managing the transfer of domains.
     *
     * @param ManageTransfer $parameters
     * @return ManageTransferResponse
     */
    public function ManageTransfer(ManageTransfer $parameters)
    {
      return $this->__soapCall('ManageTransfer', array($parameters));
    }

    /**
     * This method is used for performing multiple domain forwarding.
     *
     * @param UpdateDomainForwarding $parameters
     * @return UpdateDomainForwardingResponse
     */
    public function UpdateDomainForwarding(UpdateDomainForwarding $parameters)
    {
      return $this->__soapCall('UpdateDomainForwarding', array($parameters));
    }

    /**
     * This method is used for performing multiple domain masking.
     *
     * @param UpdateDomainMasking $parameters
     * @return UpdateDomainMaskingResponse
     */
    public function UpdateDomainMasking(UpdateDomainMasking $parameters)
    {
      return $this->__soapCall('UpdateDomainMasking', array($parameters));
    }

    /**
     * This method is used for modifying DNS settings for a given domain.
     *
     * @param ModifyDNS $parameters
     * @return ModifyDNSResponse
     */
    public function ModifyDNS(ModifyDNS $parameters)
    {
      return $this->__soapCall('ModifyDNS', array($parameters));
    }

    /**
     * This method is used for retrieving languages for IDN TLDs.
     *
     * @param GetIDNLanguageList $parameters
     * @return GetIDNLanguageListResponse
     */
    public function GetIDNLanguageList(GetIDNLanguageList $parameters)
    {
      return $this->__soapCall('GetIDNLanguageList', array($parameters));
    }

    /**
     * This method encodes a Unicode (UTF-8) domain to Punycode format.
     *
     * @param GetPunycodeIDN $parameters
     * @return GetPunycodeIDNResponse
     */
    public function GetPunycodeIDN(GetPunycodeIDN $parameters)
    {
      return $this->__soapCall('GetPunycodeIDN', array($parameters));
    }

    /**
     * This method decodes a Punycode domain to Unicode (UTF-8) format.
     *
     * @param GetUnicodeIDN $parameters
     * @return GetUnicodeIDNResponse
     */
    public function GetUnicodeIDN(GetUnicodeIDN $parameters)
    {
      return $this->__soapCall('GetUnicodeIDN', array($parameters));
    }

    /**
     * This method is used for validating a domain's period and contacts.
     *
     * @param ValidateRegistration $parameters
     * @return ValidateRegistrationResponse
     */
    public function ValidateRegistration(ValidateRegistration $parameters)
    {
      return $this->__soapCall('ValidateRegistration', array($parameters));
    }

    /**
     * Sets a service add-on's quantity, which either downgrades or submit new add-on orders.
     *
     * @param SetServiceAddOnQty $parameters
     * @return SetServiceAddOnQtyResponse
     */
    public function SetServiceAddOnQty(SetServiceAddOnQty $parameters)
    {
      return $this->__soapCall('SetServiceAddOnQty', array($parameters));
    }

    /**
     * Retrieve the Auto Response/Vacation settings for an email address.
     *
     * @param GetAutoResponderForEmail $parameters
     * @return GetAutoResponderForEmailResponse
     */
    public function GetAutoResponderForEmail(GetAutoResponderForEmail $parameters)
    {
      return $this->__soapCall('GetAutoResponderForEmail', array($parameters));
    }

    /**
     * Determine if an email address is a catchall for its domain.
     *
     * @param GetCatchallStatusForEmail $parameters
     * @return GetCatchallStatusForEmailResponse
     */
    public function GetCatchallStatusForEmail(GetCatchallStatusForEmail $parameters)
    {
      return $this->__soapCall('GetCatchallStatusForEmail', array($parameters));
    }

    /**
     * Retrieve the Disk Space Used and Quota for an email address.
     *
     * @param GetDiskUsageForEmail $parameters
     * @return GetDiskUsageForEmailResponse
     */
    public function GetDiskUsageForEmail(GetDiskUsageForEmail $parameters)
    {
      return $this->__soapCall('GetDiskUsageForEmail', array($parameters));
    }

    /**
     * Get detailed information about a single, or all email addresses associated with the given shopper.
     *
     * @param GetEmailAddressInfoForShopper $parameters
     * @return GetEmailAddressInfoForShopperResponse
     */
    public function GetEmailAddressInfoForShopper(GetEmailAddressInfoForShopper $parameters)
    {
      return $this->__soapCall('GetEmailAddressInfoForShopper', array($parameters));
    }

    /**
     * Get a list of email addresses associated with a domain ordered by username.
     *
     * @param GetEmailAddressesForDomain $parameters
     * @return GetEmailAddressesForDomainResponse
     */
    public function GetEmailAddressesForDomain(GetEmailAddressesForDomain $parameters)
    {
      return $this->__soapCall('GetEmailAddressesForDomain', array($parameters));
    }

    /**
     * Get a list of email addresses associated with a resource id.
     *
     * @param GetEmailAddressesForPlan $parameters
     * @return GetEmailAddressesForPlanResponse
     */
    public function GetEmailAddressesForPlan(GetEmailAddressesForPlan $parameters)
    {
      return $this->__soapCall('GetEmailAddressesForPlan', array($parameters));
    }

    /**
     * Get email addresses associated with the given shopper.
     *
     * @param GetEmailAddressesForShopper $parameters
     * @return GetEmailAddressesForShopperResponse
     */
    public function GetEmailAddressesForShopper(GetEmailAddressesForShopper $parameters)
    {
      return $this->__soapCall('GetEmailAddressesForShopper', array($parameters));
    }

    /**
     * Get detailed information about a single, or all email/forwarding plans associated with the given shopper.
     *
     * @param GetEmailPlanInfoForShopper $parameters
     * @return GetEmailPlanInfoForShopperResponse
     */
    public function GetEmailPlanInfoForShopper(GetEmailPlanInfoForShopper $parameters)
    {
      return $this->__soapCall('GetEmailPlanInfoForShopper', array($parameters));
    }

    /**
     * Get a list of email and email forwarding resource ids associated with the given domain name.
     *
     * @param GetEmailPlansForDomain $parameters
     * @return GetEmailPlansForDomainResponse
     */
    public function GetEmailPlansForDomain(GetEmailPlansForDomain $parameters)
    {
      return $this->__soapCall('GetEmailPlansForDomain', array($parameters));
    }

    /**
     * Get a list of email and email forwarding resource ids associated with the given shopper.
     *
     * @param GetEmailPlansForShopper $parameters
     * @return GetEmailPlansForShopperResponse
     */
    public function GetEmailPlansForShopper(GetEmailPlansForShopper $parameters)
    {
      return $this->__soapCall('GetEmailPlansForShopper', array($parameters));
    }

    /**
     * Get a list of email and email forwarding resource ids associated with the given shopper.
     *
     * @param GetIMAPForEmail $parameters
     * @return GetIMAPForEmailResponse
     */
    public function GetIMAPForEmail(GetIMAPForEmail $parameters)
    {
      return $this->__soapCall('GetIMAPForEmail', array($parameters));
    }

    /**
     * Retrieve the RIM status for an email address.
     *
     * @param GetRIMForEmail $parameters
     * @return GetRIMForEmailResponse
     */
    public function GetRIMForEmail(GetRIMForEmail $parameters)
    {
      return $this->__soapCall('GetRIMForEmail', array($parameters));
    }

    /**
     * Get detailed info about a single SMTP relay product, or for every SMTP relay products associated with the given shopper.
     *
     * @param GetSMTPRelayInfoForShopper $parameters
     * @return GetSMTPRelayInfoForShopperResponse
     */
    public function GetSMTPRelayInfoForShopper(GetSMTPRelayInfoForShopper $parameters)
    {
      return $this->__soapCall('GetSMTPRelayInfoForShopper', array($parameters));
    }

    /**
     * Get a list of SMTP relay resource ids associated with the given domain.
     *
     * @param GetSMTPRelayPlansForDomain $parameters
     * @return GetSMTPRelayPlansForDomainResponse
     */
    public function GetSMTPRelayPlansForDomain(GetSMTPRelayPlansForDomain $parameters)
    {
      return $this->__soapCall('GetSMTPRelayPlansForDomain', array($parameters));
    }

    /**
     * Get a list of SMTP relay resource ids associated with the given email address.
     *
     * @param GetSMTPRelayPlansForEmail $parameters
     * @return GetSMTPRelayPlansForEmailResponse
     */
    public function GetSMTPRelayPlansForEmail(GetSMTPRelayPlansForEmail $parameters)
    {
      return $this->__soapCall('GetSMTPRelayPlansForEmail', array($parameters));
    }

    /**
     * Retrieve the SMTP relays allotted and used for the given email address.
     *
     * @param GetSMTPRelaysForEmail $parameters
     * @return GetSMTPRelaysForEmailResponse
     */
    public function GetSMTPRelaysForEmail(GetSMTPRelaysForEmail $parameters)
    {
      return $this->__soapCall('GetSMTPRelaysForEmail', array($parameters));
    }

    /**
     * Get a list of SMTP relays associated with the given shopper.
     *
     * @param GetSMTPRelaysForShopper $parameters
     * @return GetSMTPRelaysForShopperResponse
     */
    public function GetSMTPRelaysForShopper(GetSMTPRelaysForShopper $parameters)
    {
      return $this->__soapCall('GetSMTPRelaysForShopper', array($parameters));
    }

    /**
     * Retrieve the current status of an email.
     *
     * @param GetStatusForEmail $parameters
     * @return GetStatusForEmailResponse
     */
    public function GetStatusForEmail(GetStatusForEmail $parameters)
    {
      return $this->__soapCall('GetStatusForEmail', array($parameters));
    }

    /**
     * Reassign an email address to a different email plan.
     *
     * @param MoveEmailAccount $parameters
     * @return MoveEmailAccountResponse
     */
    public function MoveEmailAccount(MoveEmailAccount $parameters)
    {
      return $this->__soapCall('MoveEmailAccount', array($parameters));
    }

    /**
     * Deletes an email address.
     *
     * @param RemoveEmailAddress $parameters
     * @return RemoveEmailAddressResponse
     */
    public function RemoveEmailAddress(RemoveEmailAddress $parameters)
    {
      return $this->__soapCall('RemoveEmailAddress', array($parameters));
    }

    /**
     * Unsubscribe an email address from RIM.
     *
     * @param RemoveRIMAccount $parameters
     * @return RemoveRIMAccountResponse
     */
    public function RemoveRIMAccount(RemoveRIMAccount $parameters)
    {
      return $this->__soapCall('RemoveRIMAccount', array($parameters));
    }

    /**
     * Remove a specific SMTP relay fom an email address by the given resource id.
     *
     * @param RemoveSmtpRelay $parameters
     * @return RemoveSmtpRelayResponse
     */
    public function RemoveSmtpRelay(RemoveSmtpRelay $parameters)
    {
      return $this->__soapCall('RemoveSmtpRelay', array($parameters));
    }

    /**
     * Change the customer facing description of an email or email forwarding plan.
     *
     * @param RenameEmailPlan $parameters
     * @return RenameEmailPlanResponse
     */
    public function RenameEmailPlan(RenameEmailPlan $parameters)
    {
      return $this->__soapCall('RenameEmailPlan', array($parameters));
    }

    /**
     * Create/Update and email/forwarding account’s Auto Responder.
     *
     * @param SetAutoResponder $parameters
     * @return SetAutoResponderResponse
     */
    public function SetAutoResponder(SetAutoResponder $parameters)
    {
      return $this->__soapCall('SetAutoResponder', array($parameters));
    }

    /**
     * Create/Update and email/forwarding account.
     *
     * @param SetEmailAccount $parameters
     * @return SetEmailAccountResponse
     */
    public function SetEmailAccount(SetEmailAccount $parameters)
    {
      return $this->__soapCall('SetEmailAccount', array($parameters));
    }

    /**
     * Email products management method.
     *
     * @param SetRIMAccount $parameters
     * @return SetRIMAccountResponse
     */
    public function SetRIMAccount(SetRIMAccount $parameters)
    {
      return $this->__soapCall('SetRIMAccount', array($parameters));
    }

    /**
     * Email products management method.
     *
     * @param SetSmtpRelays $parameters
     * @return SetSmtpRelaysResponse
     */
    public function SetSmtpRelays(SetSmtpRelays $parameters)
    {
      return $this->__soapCall('SetSmtpRelays', array($parameters));
    }

    /**
     * Email products management method.
     *
     * @param TestEmailPassword $parameters
     * @return TestEmailPasswordResponse
     */
    public function TestEmailPassword(TestEmailPassword $parameters)
    {
      return $this->__soapCall('TestEmailPassword', array($parameters));
    }

    /**
     * Used to get the available balance for a given Private Label ID.
     *
     * @param GetAvailableBalance $parameters
     * @return GetAvailableBalanceResponse
     */
    public function GetAvailableBalance(GetAvailableBalance $parameters)
    {
      return $this->__soapCall('GetAvailableBalance', array($parameters));
    }

    /**
     * Used to get the legal agreement url that resellers need to display and get approval from their customers.
     *
     * @param GetLegalAgreementUrl $parameters
     * @return GetLegalAgreementUrlResponse
     */
    public function GetLegalAgreementUrl(GetLegalAgreementUrl $parameters)
    {
      return $this->__soapCall('GetLegalAgreementUrl', array($parameters));
    }

    /**
     * Used to get the legal agreement content that resellers need to display and get approval from their customers.
     *
     * @param GetLegalAgreementContent $parameters
     * @return GetLegalAgreementContentResponse
     */
    public function GetLegalAgreementContent(GetLegalAgreementContent $parameters)
    {
      return $this->__soapCall('GetLegalAgreementContent', array($parameters));
    }

    /**
     * Used to resend RAA verification to the resellers customer or the domain registrant.
     *
     * @param ResendContactValidation $parameters
     * @return ResendContactValidationResponse
     */
    public function ResendContactValidation(ResendContactValidation $parameters)
    {
      return $this->__soapCall('ResendContactValidation', array($parameters));
    }

}
