<?php


 function autoload_920d6407d50472b386262d955d1070fd($class)
{
    $classes = array(
        'cloudposse\wild_west_reseller_api\WAPI' => __DIR__ .'/WAPI.php',
        'cloudposse\wild_west_reseller_api\ProcessRequest' => __DIR__ .'/ProcessRequest.php',
        'cloudposse\wild_west_reseller_api\ProcessRequestResponse' => __DIR__ .'/ProcessRequestResponse.php',
        'cloudposse\wild_west_reseller_api\Describe' => __DIR__ .'/Describe.php',
        'cloudposse\wild_west_reseller_api\Credential' => __DIR__ .'/Credential.php',
        'cloudposse\wild_west_reseller_api\DescribeResponse' => __DIR__ .'/DescribeResponse.php',
        'cloudposse\wild_west_reseller_api\CheckAvailability' => __DIR__ .'/CheckAvailability.php',
        'cloudposse\wild_west_reseller_api\ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'cloudposse\wild_west_reseller_api\CheckAvailabilityResponse' => __DIR__ .'/CheckAvailabilityResponse.php',
        'cloudposse\wild_west_reseller_api\CheckDomains' => __DIR__ .'/CheckDomains.php',
        'cloudposse\wild_west_reseller_api\ArrayOfCheckDomain' => __DIR__ .'/ArrayOfCheckDomain.php',
        'cloudposse\wild_west_reseller_api\CheckDomain' => __DIR__ .'/CheckDomain.php',
        'cloudposse\wild_west_reseller_api\CheckDomainsResponse' => __DIR__ .'/CheckDomainsResponse.php',
        'cloudposse\wild_west_reseller_api\Info' => __DIR__ .'/Info.php',
        'cloudposse\wild_west_reseller_api\InfoResponse' => __DIR__ .'/InfoResponse.php',
        'cloudposse\wild_west_reseller_api\NameGen' => __DIR__ .'/NameGen.php',
        'cloudposse\wild_west_reseller_api\NameGenResponse' => __DIR__ .'/NameGenResponse.php',
        'cloudposse\wild_west_reseller_api\NameGenDB' => __DIR__ .'/NameGenDB.php',
        'cloudposse\wild_west_reseller_api\NameGenDBResponse' => __DIR__ .'/NameGenDBResponse.php',
        'cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimit' => __DIR__ .'/NameGenDBWithTimeLimit.php',
        'cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimitResponse' => __DIR__ .'/NameGenDBWithTimeLimitResponse.php',
        'cloudposse\wild_west_reseller_api\Poll' => __DIR__ .'/Poll.php',
        'cloudposse\wild_west_reseller_api\PollResponse' => __DIR__ .'/PollResponse.php',
        'cloudposse\wild_west_reseller_api\OrderCredits' => __DIR__ .'/OrderCredits.php',
        'cloudposse\wild_west_reseller_api\Shopper' => __DIR__ .'/Shopper.php',
        'cloudposse\wild_west_reseller_api\ArrayOfOrderItem' => __DIR__ .'/ArrayOfOrderItem.php',
        'cloudposse\wild_west_reseller_api\OrderItem' => __DIR__ .'/OrderItem.php',
        'cloudposse\wild_west_reseller_api\Order' => __DIR__ .'/Order.php',
        'cloudposse\wild_west_reseller_api\OrderCreditsResponse' => __DIR__ .'/OrderCreditsResponse.php',
        'cloudposse\wild_west_reseller_api\OrderDomains' => __DIR__ .'/OrderDomains.php',
        'cloudposse\wild_west_reseller_api\ArrayOfDomainRegistration' => __DIR__ .'/ArrayOfDomainRegistration.php',
        'cloudposse\wild_west_reseller_api\DomainRegistration' => __DIR__ .'/DomainRegistration.php',
        'cloudposse\wild_west_reseller_api\ContactInfo' => __DIR__ .'/ContactInfo.php',
        'cloudposse\wild_west_reseller_api\Nexus' => __DIR__ .'/Nexus.php',
        'cloudposse\wild_west_reseller_api\ArrayOfNS' => __DIR__ .'/ArrayOfNS.php',
        'cloudposse\wild_west_reseller_api\NS' => __DIR__ .'/NS.php',
        'cloudposse\wild_west_reseller_api\ArrayOfDomainByProxy' => __DIR__ .'/ArrayOfDomainByProxy.php',
        'cloudposse\wild_west_reseller_api\DomainByProxy' => __DIR__ .'/DomainByProxy.php',
        'cloudposse\wild_west_reseller_api\OrderDomainsResponse' => __DIR__ .'/OrderDomainsResponse.php',
        'cloudposse\wild_west_reseller_api\OrderDomainRenewals' => __DIR__ .'/OrderDomainRenewals.php',
        'cloudposse\wild_west_reseller_api\ArrayOfDomainRenewal' => __DIR__ .'/ArrayOfDomainRenewal.php',
        'cloudposse\wild_west_reseller_api\DomainRenewal' => __DIR__ .'/DomainRenewal.php',
        'cloudposse\wild_west_reseller_api\OrderDomainRenewalsResponse' => __DIR__ .'/OrderDomainRenewalsResponse.php',
        'cloudposse\wild_west_reseller_api\OrderPrivateDomainRenewals' => __DIR__ .'/OrderPrivateDomainRenewals.php',
        'cloudposse\wild_west_reseller_api\ArrayOfResourceRenewal' => __DIR__ .'/ArrayOfResourceRenewal.php',
        'cloudposse\wild_west_reseller_api\ResourceRenewal' => __DIR__ .'/ResourceRenewal.php',
        'cloudposse\wild_west_reseller_api\OrderPrivateDomainRenewalsResponse' => __DIR__ .'/OrderPrivateDomainRenewalsResponse.php',
        'cloudposse\wild_west_reseller_api\OrderDomainTransfers' => __DIR__ .'/OrderDomainTransfers.php',
        'cloudposse\wild_west_reseller_api\ArrayOfDomainTransfer' => __DIR__ .'/ArrayOfDomainTransfer.php',
        'cloudposse\wild_west_reseller_api\DomainTransfer' => __DIR__ .'/DomainTransfer.php',
        'cloudposse\wild_west_reseller_api\OrderDomainTransfersResponse' => __DIR__ .'/OrderDomainTransfersResponse.php',
        'cloudposse\wild_west_reseller_api\OrderDomainRedemptions' => __DIR__ .'/OrderDomainRedemptions.php',
        'cloudposse\wild_west_reseller_api\ArrayOfDomainRedemption' => __DIR__ .'/ArrayOfDomainRedemption.php',
        'cloudposse\wild_west_reseller_api\DomainRedemption' => __DIR__ .'/DomainRedemption.php',
        'cloudposse\wild_west_reseller_api\OrderDomainRedemptionsResponse' => __DIR__ .'/OrderDomainRedemptionsResponse.php',
        'cloudposse\wild_west_reseller_api\OrderDomainPrivacy' => __DIR__ .'/OrderDomainPrivacy.php',
        'cloudposse\wild_west_reseller_api\OrderDomainPrivacyResponse' => __DIR__ .'/OrderDomainPrivacyResponse.php',
        'cloudposse\wild_west_reseller_api\OrderResourceRenewals' => __DIR__ .'/OrderResourceRenewals.php',
        'cloudposse\wild_west_reseller_api\OrderResourceRenewalsResponse' => __DIR__ .'/OrderResourceRenewalsResponse.php',
        'cloudposse\wild_west_reseller_api\OrderServiceRenewals' => __DIR__ .'/OrderServiceRenewals.php',
        'cloudposse\wild_west_reseller_api\ArrayOfServiceRenewal' => __DIR__ .'/ArrayOfServiceRenewal.php',
        'cloudposse\wild_west_reseller_api\ServiceRenewal' => __DIR__ .'/ServiceRenewal.php',
        'cloudposse\wild_west_reseller_api\OrderServiceRenewalsResponse' => __DIR__ .'/OrderServiceRenewalsResponse.php',
        'cloudposse\wild_west_reseller_api\OrderServices' => __DIR__ .'/OrderServices.php',
        'cloudposse\wild_west_reseller_api\ArrayOfProductGroup' => __DIR__ .'/ArrayOfProductGroup.php',
        'cloudposse\wild_west_reseller_api\ProductGroup' => __DIR__ .'/ProductGroup.php',
        'cloudposse\wild_west_reseller_api\OrderServicesResponse' => __DIR__ .'/OrderServicesResponse.php',
        'cloudposse\wild_west_reseller_api\OrderDomainBackOrders' => __DIR__ .'/OrderDomainBackOrders.php',
        'cloudposse\wild_west_reseller_api\ArrayOfDomainBackOrder' => __DIR__ .'/ArrayOfDomainBackOrder.php',
        'cloudposse\wild_west_reseller_api\DomainBackOrder' => __DIR__ .'/DomainBackOrder.php',
        'cloudposse\wild_west_reseller_api\OrderDomainBackOrdersResponse' => __DIR__ .'/OrderDomainBackOrdersResponse.php',
        'cloudposse\wild_west_reseller_api\Cancel' => __DIR__ .'/Cancel.php',
        'cloudposse\wild_west_reseller_api\CancelResponse' => __DIR__ .'/CancelResponse.php',
        'cloudposse\wild_west_reseller_api\UpdateDomainOwnership' => __DIR__ .'/UpdateDomainOwnership.php',
        'cloudposse\wild_west_reseller_api\GainingOwner' => __DIR__ .'/GainingOwner.php',
        'cloudposse\wild_west_reseller_api\ShopperNoDBP' => __DIR__ .'/ShopperNoDBP.php',
        'cloudposse\wild_west_reseller_api\UpdateDomainOwnershipResponse' => __DIR__ .'/UpdateDomainOwnershipResponse.php',
        'cloudposse\wild_west_reseller_api\ResetPassword' => __DIR__ .'/ResetPassword.php',
        'cloudposse\wild_west_reseller_api\ResetPasswordResponse' => __DIR__ .'/ResetPasswordResponse.php',
        'cloudposse\wild_west_reseller_api\SetShopperInfo' => __DIR__ .'/SetShopperInfo.php',
        'cloudposse\wild_west_reseller_api\SetShopperInfoResponse' => __DIR__ .'/SetShopperInfoResponse.php',
        'cloudposse\wild_west_reseller_api\CreateNewShopper' => __DIR__ .'/CreateNewShopper.php',
        'cloudposse\wild_west_reseller_api\CreateNewShopperResponse' => __DIR__ .'/CreateNewShopperResponse.php',
        'cloudposse\wild_west_reseller_api\CheckUser' => __DIR__ .'/CheckUser.php',
        'cloudposse\wild_west_reseller_api\CheckUserResponse' => __DIR__ .'/CheckUserResponse.php',
        'cloudposse\wild_west_reseller_api\SetupDomainAlert' => __DIR__ .'/SetupDomainAlert.php',
        'cloudposse\wild_west_reseller_api\DomainAlert' => __DIR__ .'/DomainAlert.php',
        'cloudposse\wild_west_reseller_api\SetupDomainAlertResponse' => __DIR__ .'/SetupDomainAlertResponse.php',
        'cloudposse\wild_west_reseller_api\UpdateDomainAlert' => __DIR__ .'/UpdateDomainAlert.php',
        'cloudposse\wild_west_reseller_api\UpdateDomainAlertResponse' => __DIR__ .'/UpdateDomainAlertResponse.php',
        'cloudposse\wild_west_reseller_api\RemoveDomainAlert' => __DIR__ .'/RemoveDomainAlert.php',
        'cloudposse\wild_west_reseller_api\RemoveDomainAlertResponse' => __DIR__ .'/RemoveDomainAlertResponse.php',
        'cloudposse\wild_west_reseller_api\GetDomainAlertCredits' => __DIR__ .'/GetDomainAlertCredits.php',
        'cloudposse\wild_west_reseller_api\GetDomainAlertCreditsResponse' => __DIR__ .'/GetDomainAlertCreditsResponse.php',
        'cloudposse\wild_west_reseller_api\GetMonitoredDomainList' => __DIR__ .'/GetMonitoredDomainList.php',
        'cloudposse\wild_west_reseller_api\GetMonitoredDomainListResponse' => __DIR__ .'/GetMonitoredDomainListResponse.php',
        'cloudposse\wild_west_reseller_api\GetExpiringNameList' => __DIR__ .'/GetExpiringNameList.php',
        'cloudposse\wild_west_reseller_api\GetExpiringNameListResponse' => __DIR__ .'/GetExpiringNameListResponse.php',
        'cloudposse\wild_west_reseller_api\DomainForwarding' => __DIR__ .'/DomainForwarding.php',
        'cloudposse\wild_west_reseller_api\DomainForwardingResponse' => __DIR__ .'/DomainForwardingResponse.php',
        'cloudposse\wild_west_reseller_api\UpdateNameServer' => __DIR__ .'/UpdateNameServer.php',
        'cloudposse\wild_west_reseller_api\ArrayOfDomain' => __DIR__ .'/ArrayOfDomain.php',
        'cloudposse\wild_west_reseller_api\Domain' => __DIR__ .'/Domain.php',
        'cloudposse\wild_west_reseller_api\UpdateNameServerResponse' => __DIR__ .'/UpdateNameServerResponse.php',
        'cloudposse\wild_west_reseller_api\UpdateDomainContact' => __DIR__ .'/UpdateDomainContact.php',
        'cloudposse\wild_west_reseller_api\UpdateDomainContactResponse' => __DIR__ .'/UpdateDomainContactResponse.php',
        'cloudposse\wild_west_reseller_api\SetDomainLocking' => __DIR__ .'/SetDomainLocking.php',
        'cloudposse\wild_west_reseller_api\SetDomainLockingResponse' => __DIR__ .'/SetDomainLockingResponse.php',
        'cloudposse\wild_west_reseller_api\ManageTransfer' => __DIR__ .'/ManageTransfer.php',
        'cloudposse\wild_west_reseller_api\ManageTransferResponse' => __DIR__ .'/ManageTransferResponse.php',
        'cloudposse\wild_west_reseller_api\UpdateDomainForwarding' => __DIR__ .'/UpdateDomainForwarding.php',
        'cloudposse\wild_west_reseller_api\UpdateDomainForwardingResponse' => __DIR__ .'/UpdateDomainForwardingResponse.php',
        'cloudposse\wild_west_reseller_api\UpdateDomainMasking' => __DIR__ .'/UpdateDomainMasking.php',
        'cloudposse\wild_west_reseller_api\UpdateDomainMaskingResponse' => __DIR__ .'/UpdateDomainMaskingResponse.php',
        'cloudposse\wild_west_reseller_api\ModifyDNS' => __DIR__ .'/ModifyDNS.php',
        'cloudposse\wild_west_reseller_api\ArrayOfDNSRequest' => __DIR__ .'/ArrayOfDNSRequest.php',
        'cloudposse\wild_west_reseller_api\DNSRequest' => __DIR__ .'/DNSRequest.php',
        'cloudposse\wild_west_reseller_api\ModifyDNSResponse' => __DIR__ .'/ModifyDNSResponse.php',
        'cloudposse\wild_west_reseller_api\GetIDNLanguageList' => __DIR__ .'/GetIDNLanguageList.php',
        'cloudposse\wild_west_reseller_api\GetIDNLanguageListResponse' => __DIR__ .'/GetIDNLanguageListResponse.php',
        'cloudposse\wild_west_reseller_api\GetPunycodeIDN' => __DIR__ .'/GetPunycodeIDN.php',
        'cloudposse\wild_west_reseller_api\GetPunycodeIDNResponse' => __DIR__ .'/GetPunycodeIDNResponse.php',
        'cloudposse\wild_west_reseller_api\GetUnicodeIDN' => __DIR__ .'/GetUnicodeIDN.php',
        'cloudposse\wild_west_reseller_api\GetUnicodeIDNResponse' => __DIR__ .'/GetUnicodeIDNResponse.php',
        'cloudposse\wild_west_reseller_api\ValidateRegistration' => __DIR__ .'/ValidateRegistration.php',
        'cloudposse\wild_west_reseller_api\DomainContacts' => __DIR__ .'/DomainContacts.php',
        'cloudposse\wild_west_reseller_api\ArrayOfDomainData' => __DIR__ .'/ArrayOfDomainData.php',
        'cloudposse\wild_west_reseller_api\DomainData' => __DIR__ .'/DomainData.php',
        'cloudposse\wild_west_reseller_api\ValidateRegistrationResponse' => __DIR__ .'/ValidateRegistrationResponse.php',
        'cloudposse\wild_west_reseller_api\SetServiceAddOnQty' => __DIR__ .'/SetServiceAddOnQty.php',
        'cloudposse\wild_west_reseller_api\SetServiceAddOnQtyResponse' => __DIR__ .'/SetServiceAddOnQtyResponse.php',
        'cloudposse\wild_west_reseller_api\GetAutoResponderForEmail' => __DIR__ .'/GetAutoResponderForEmail.php',
        'cloudposse\wild_west_reseller_api\ReturnConfig' => __DIR__ .'/ReturnConfig.php',
        'cloudposse\wild_west_reseller_api\GetAutoResponderForEmailResponse' => __DIR__ .'/GetAutoResponderForEmailResponse.php',
        'cloudposse\wild_west_reseller_api\GetCatchallStatusForEmail' => __DIR__ .'/GetCatchallStatusForEmail.php',
        'cloudposse\wild_west_reseller_api\GetCatchallStatusForEmailResponse' => __DIR__ .'/GetCatchallStatusForEmailResponse.php',
        'cloudposse\wild_west_reseller_api\GetDiskUsageForEmail' => __DIR__ .'/GetDiskUsageForEmail.php',
        'cloudposse\wild_west_reseller_api\GetDiskUsageForEmailResponse' => __DIR__ .'/GetDiskUsageForEmailResponse.php',
        'cloudposse\wild_west_reseller_api\GetEmailAddressInfoForShopper' => __DIR__ .'/GetEmailAddressInfoForShopper.php',
        'cloudposse\wild_west_reseller_api\GetEmailAddressInfoForShopperResponse' => __DIR__ .'/GetEmailAddressInfoForShopperResponse.php',
        'cloudposse\wild_west_reseller_api\GetEmailAddressesForDomain' => __DIR__ .'/GetEmailAddressesForDomain.php',
        'cloudposse\wild_west_reseller_api\GetEmailAddressesForDomainResponse' => __DIR__ .'/GetEmailAddressesForDomainResponse.php',
        'cloudposse\wild_west_reseller_api\GetEmailAddressesForPlan' => __DIR__ .'/GetEmailAddressesForPlan.php',
        'cloudposse\wild_west_reseller_api\GetEmailAddressesForPlanResponse' => __DIR__ .'/GetEmailAddressesForPlanResponse.php',
        'cloudposse\wild_west_reseller_api\GetEmailAddressesForShopper' => __DIR__ .'/GetEmailAddressesForShopper.php',
        'cloudposse\wild_west_reseller_api\GetEmailAddressesForShopperResponse' => __DIR__ .'/GetEmailAddressesForShopperResponse.php',
        'cloudposse\wild_west_reseller_api\GetEmailPlanInfoForShopper' => __DIR__ .'/GetEmailPlanInfoForShopper.php',
        'cloudposse\wild_west_reseller_api\GetEmailPlanInfoForShopperResponse' => __DIR__ .'/GetEmailPlanInfoForShopperResponse.php',
        'cloudposse\wild_west_reseller_api\GetEmailPlansForDomain' => __DIR__ .'/GetEmailPlansForDomain.php',
        'cloudposse\wild_west_reseller_api\GetEmailPlansForDomainResponse' => __DIR__ .'/GetEmailPlansForDomainResponse.php',
        'cloudposse\wild_west_reseller_api\GetEmailPlansForShopper' => __DIR__ .'/GetEmailPlansForShopper.php',
        'cloudposse\wild_west_reseller_api\GetEmailPlansForShopperResponse' => __DIR__ .'/GetEmailPlansForShopperResponse.php',
        'cloudposse\wild_west_reseller_api\GetIMAPForEmail' => __DIR__ .'/GetIMAPForEmail.php',
        'cloudposse\wild_west_reseller_api\GetIMAPForEmailResponse' => __DIR__ .'/GetIMAPForEmailResponse.php',
        'cloudposse\wild_west_reseller_api\GetRIMForEmail' => __DIR__ .'/GetRIMForEmail.php',
        'cloudposse\wild_west_reseller_api\GetRIMForEmailResponse' => __DIR__ .'/GetRIMForEmailResponse.php',
        'cloudposse\wild_west_reseller_api\GetSMTPRelayInfoForShopper' => __DIR__ .'/GetSMTPRelayInfoForShopper.php',
        'cloudposse\wild_west_reseller_api\GetSMTPRelayInfoForShopperResponse' => __DIR__ .'/GetSMTPRelayInfoForShopperResponse.php',
        'cloudposse\wild_west_reseller_api\GetSMTPRelayPlansForDomain' => __DIR__ .'/GetSMTPRelayPlansForDomain.php',
        'cloudposse\wild_west_reseller_api\GetSMTPRelayPlansForDomainResponse' => __DIR__ .'/GetSMTPRelayPlansForDomainResponse.php',
        'cloudposse\wild_west_reseller_api\GetSMTPRelayPlansForEmail' => __DIR__ .'/GetSMTPRelayPlansForEmail.php',
        'cloudposse\wild_west_reseller_api\GetSMTPRelayPlansForEmailResponse' => __DIR__ .'/GetSMTPRelayPlansForEmailResponse.php',
        'cloudposse\wild_west_reseller_api\GetSMTPRelaysForEmail' => __DIR__ .'/GetSMTPRelaysForEmail.php',
        'cloudposse\wild_west_reseller_api\GetSMTPRelaysForEmailResponse' => __DIR__ .'/GetSMTPRelaysForEmailResponse.php',
        'cloudposse\wild_west_reseller_api\GetSMTPRelaysForShopper' => __DIR__ .'/GetSMTPRelaysForShopper.php',
        'cloudposse\wild_west_reseller_api\GetSMTPRelaysForShopperResponse' => __DIR__ .'/GetSMTPRelaysForShopperResponse.php',
        'cloudposse\wild_west_reseller_api\GetStatusForEmail' => __DIR__ .'/GetStatusForEmail.php',
        'cloudposse\wild_west_reseller_api\GetStatusForEmailResponse' => __DIR__ .'/GetStatusForEmailResponse.php',
        'cloudposse\wild_west_reseller_api\MoveEmailAccount' => __DIR__ .'/MoveEmailAccount.php',
        'cloudposse\wild_west_reseller_api\MoveEmailAccountResponse' => __DIR__ .'/MoveEmailAccountResponse.php',
        'cloudposse\wild_west_reseller_api\RemoveEmailAddress' => __DIR__ .'/RemoveEmailAddress.php',
        'cloudposse\wild_west_reseller_api\RemoveEmailAddressResponse' => __DIR__ .'/RemoveEmailAddressResponse.php',
        'cloudposse\wild_west_reseller_api\RemoveRIMAccount' => __DIR__ .'/RemoveRIMAccount.php',
        'cloudposse\wild_west_reseller_api\RemoveRIMAccountResponse' => __DIR__ .'/RemoveRIMAccountResponse.php',
        'cloudposse\wild_west_reseller_api\RemoveSmtpRelay' => __DIR__ .'/RemoveSmtpRelay.php',
        'cloudposse\wild_west_reseller_api\RemoveSmtpRelayResponse' => __DIR__ .'/RemoveSmtpRelayResponse.php',
        'cloudposse\wild_west_reseller_api\RenameEmailPlan' => __DIR__ .'/RenameEmailPlan.php',
        'cloudposse\wild_west_reseller_api\RenameEmailPlanResponse' => __DIR__ .'/RenameEmailPlanResponse.php',
        'cloudposse\wild_west_reseller_api\SetAutoResponder' => __DIR__ .'/SetAutoResponder.php',
        'cloudposse\wild_west_reseller_api\SetAutoResponderResponse' => __DIR__ .'/SetAutoResponderResponse.php',
        'cloudposse\wild_west_reseller_api\SetEmailAccount' => __DIR__ .'/SetEmailAccount.php',
        'cloudposse\wild_west_reseller_api\SetEmailAccountResponse' => __DIR__ .'/SetEmailAccountResponse.php',
        'cloudposse\wild_west_reseller_api\SetRIMAccount' => __DIR__ .'/SetRIMAccount.php',
        'cloudposse\wild_west_reseller_api\SetRIMAccountResponse' => __DIR__ .'/SetRIMAccountResponse.php',
        'cloudposse\wild_west_reseller_api\SetSmtpRelays' => __DIR__ .'/SetSmtpRelays.php',
        'cloudposse\wild_west_reseller_api\SetSmtpRelaysResponse' => __DIR__ .'/SetSmtpRelaysResponse.php',
        'cloudposse\wild_west_reseller_api\TestEmailPassword' => __DIR__ .'/TestEmailPassword.php',
        'cloudposse\wild_west_reseller_api\TestEmailPasswordResponse' => __DIR__ .'/TestEmailPasswordResponse.php',
        'cloudposse\wild_west_reseller_api\GetAvailableBalance' => __DIR__ .'/GetAvailableBalance.php',
        'cloudposse\wild_west_reseller_api\GetAvailableBalanceResponse' => __DIR__ .'/GetAvailableBalanceResponse.php',
        'cloudposse\wild_west_reseller_api\GetLegalAgreementUrl' => __DIR__ .'/GetLegalAgreementUrl.php',
        'cloudposse\wild_west_reseller_api\GetLegalAgreementUrlResponse' => __DIR__ .'/GetLegalAgreementUrlResponse.php',
        'cloudposse\wild_west_reseller_api\GetLegalAgreementContent' => __DIR__ .'/GetLegalAgreementContent.php',
        'cloudposse\wild_west_reseller_api\GetLegalAgreementContentResponse' => __DIR__ .'/GetLegalAgreementContentResponse.php',
        'cloudposse\wild_west_reseller_api\ResendContactValidation' => __DIR__ .'/ResendContactValidation.php',
        'cloudposse\wild_west_reseller_api\ResendContactValidationResponse' => __DIR__ .'/ResendContactValidationResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_920d6407d50472b386262d955d1070fd');

// Do nothing. The rest is just leftovers from the code generation.
{
}
