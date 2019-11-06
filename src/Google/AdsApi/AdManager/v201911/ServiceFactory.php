<?php

namespace Google\AdsApi\AdManager\v201911;

use Google\AdsApi\AdManager\AdManagerServices;
use Google\AdsApi\Common\AdsSession;

/**
 * This file was generated from WSDL. DO NOT EDIT.
 */

/**
 * A factory class for creating AdManager service clients.
 */
final class ServiceFactory
{
    private $services;

    public function __construct(AdManagerServices $services = null)
    {
        $this->services = is_null($services) ? new AdManagerServices() : $services;
    }

    /**
     * Creates a new service client for `ActivityGroupService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return ActivityGroupService a new service client
     */
    public function createActivityGroupService(AdsSession $session)
    {
        return $this->services->get($session, ActivityGroupService::class);
    }

    /**
     * Creates a new service client for `ActivityService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return ActivityService a new service client
     */
    public function createActivityService(AdsSession $session)
    {
        return $this->services->get($session, ActivityService::class);
    }

    /**
     * Creates a new service client for `AdExclusionRuleService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return AdExclusionRuleService a new service client
     */
    public function createAdExclusionRuleService(AdsSession $session)
    {
        return $this->services->get($session, AdExclusionRuleService::class);
    }

    /**
     * Creates a new service client for `AdRuleService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return AdRuleService a new service client
     */
    public function createAdRuleService(AdsSession $session)
    {
        return $this->services->get($session, AdRuleService::class);
    }

    /**
     * Creates a new service client for `AdjustmentService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return AdjustmentService a new service client
     */
    public function createAdjustmentService(AdsSession $session)
    {
        return $this->services->get($session, AdjustmentService::class);
    }

    /**
     * Creates a new service client for `AudienceSegmentService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return AudienceSegmentService a new service client
     */
    public function createAudienceSegmentService(AdsSession $session)
    {
        return $this->services->get($session, AudienceSegmentService::class);
    }

    /**
     * Creates a new service client for `CdnConfigurationService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return CdnConfigurationService a new service client
     */
    public function createCdnConfigurationService(AdsSession $session)
    {
        return $this->services->get($session, CdnConfigurationService::class);
    }

    /**
     * Creates a new service client for `CmsMetadataService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return CmsMetadataService a new service client
     */
    public function createCmsMetadataService(AdsSession $session)
    {
        return $this->services->get($session, CmsMetadataService::class);
    }

    /**
     * Creates a new service client for `CompanyService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return CompanyService a new service client
     */
    public function createCompanyService(AdsSession $session)
    {
        return $this->services->get($session, CompanyService::class);
    }

    /**
     * Creates a new service client for `ContactService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return ContactService a new service client
     */
    public function createContactService(AdsSession $session)
    {
        return $this->services->get($session, ContactService::class);
    }

    /**
     * Creates a new service client for `ContentBundleService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return ContentBundleService a new service client
     */
    public function createContentBundleService(AdsSession $session)
    {
        return $this->services->get($session, ContentBundleService::class);
    }

    /**
     * Creates a new service client for `ContentService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return ContentService a new service client
     */
    public function createContentService(AdsSession $session)
    {
        return $this->services->get($session, ContentService::class);
    }

    /**
     * Creates a new service client for `CreativeService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return CreativeService a new service client
     */
    public function createCreativeService(AdsSession $session)
    {
        return $this->services->get($session, CreativeService::class);
    }

    /**
     * Creates a new service client for `CreativeSetService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return CreativeSetService a new service client
     */
    public function createCreativeSetService(AdsSession $session)
    {
        return $this->services->get($session, CreativeSetService::class);
    }

    /**
     * Creates a new service client for `CreativeTemplateService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return CreativeTemplateService a new service client
     */
    public function createCreativeTemplateService(AdsSession $session)
    {
        return $this->services->get($session, CreativeTemplateService::class);
    }

    /**
     * Creates a new service client for `CreativeWrapperService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return CreativeWrapperService a new service client
     */
    public function createCreativeWrapperService(AdsSession $session)
    {
        return $this->services->get($session, CreativeWrapperService::class);
    }

    /**
     * Creates a new service client for `CustomFieldService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return CustomFieldService a new service client
     */
    public function createCustomFieldService(AdsSession $session)
    {
        return $this->services->get($session, CustomFieldService::class);
    }

    /**
     * Creates a new service client for `CustomTargetingService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return CustomTargetingService a new service client
     */
    public function createCustomTargetingService(AdsSession $session)
    {
        return $this->services->get($session, CustomTargetingService::class);
    }

    /**
     * Creates a new service client for `DaiAuthenticationKeyService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return DaiAuthenticationKeyService a new service client
     */
    public function createDaiAuthenticationKeyService(AdsSession $session)
    {
        return $this->services->get($session, DaiAuthenticationKeyService::class);
    }

    /**
     * Creates a new service client for `ForecastService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return ForecastService a new service client
     */
    public function createForecastService(AdsSession $session)
    {
        return $this->services->get($session, ForecastService::class);
    }

    /**
     * Creates a new service client for `InventoryService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return InventoryService a new service client
     */
    public function createInventoryService(AdsSession $session)
    {
        return $this->services->get($session, InventoryService::class);
    }

    /**
     * Creates a new service client for `LabelService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return LabelService a new service client
     */
    public function createLabelService(AdsSession $session)
    {
        return $this->services->get($session, LabelService::class);
    }

    /**
     * Creates a new service client for `LineItemCreativeAssociationService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return LineItemCreativeAssociationService a new service client
     */
    public function createLineItemCreativeAssociationService(AdsSession $session)
    {
        return $this->services->get($session, LineItemCreativeAssociationService::class);
    }

    /**
     * Creates a new service client for `LineItemService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return LineItemService a new service client
     */
    public function createLineItemService(AdsSession $session)
    {
        return $this->services->get($session, LineItemService::class);
    }

    /**
     * Creates a new service client for `LineItemTemplateService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return LineItemTemplateService a new service client
     */
    public function createLineItemTemplateService(AdsSession $session)
    {
        return $this->services->get($session, LineItemTemplateService::class);
    }

    /**
     * Creates a new service client for `LiveStreamEventService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return LiveStreamEventService a new service client
     */
    public function createLiveStreamEventService(AdsSession $session)
    {
        return $this->services->get($session, LiveStreamEventService::class);
    }

    /**
     * Creates a new service client for `MobileApplicationService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return MobileApplicationService a new service client
     */
    public function createMobileApplicationService(AdsSession $session)
    {
        return $this->services->get($session, MobileApplicationService::class);
    }

    /**
     * Creates a new service client for `NativeStyleService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return NativeStyleService a new service client
     */
    public function createNativeStyleService(AdsSession $session)
    {
        return $this->services->get($session, NativeStyleService::class);
    }

    /**
     * Creates a new service client for `NetworkService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return NetworkService a new service client
     */
    public function createNetworkService(AdsSession $session)
    {
        return $this->services->get($session, NetworkService::class);
    }

    /**
     * Creates a new service client for `OrderService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return OrderService a new service client
     */
    public function createOrderService(AdsSession $session)
    {
        return $this->services->get($session, OrderService::class);
    }

    /**
     * Creates a new service client for `PlacementService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return PlacementService a new service client
     */
    public function createPlacementService(AdsSession $session)
    {
        return $this->services->get($session, PlacementService::class);
    }

    /**
     * Creates a new service client for `ProposalLineItemService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return ProposalLineItemService a new service client
     */
    public function createProposalLineItemService(AdsSession $session)
    {
        return $this->services->get($session, ProposalLineItemService::class);
    }

    /**
     * Creates a new service client for `ProposalService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return ProposalService a new service client
     */
    public function createProposalService(AdsSession $session)
    {
        return $this->services->get($session, ProposalService::class);
    }

    /**
     * Creates a new service client for `PublisherQueryLanguageService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return PublisherQueryLanguageService a new service client
     */
    public function createPublisherQueryLanguageService(AdsSession $session)
    {
        return $this->services->get($session, PublisherQueryLanguageService::class);
    }

    /**
     * Creates a new service client for `ReportService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return ReportService a new service client
     */
    public function createReportService(AdsSession $session)
    {
        return $this->services->get($session, ReportService::class);
    }

    /**
     * Creates a new service client for `SuggestedAdUnitService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return SuggestedAdUnitService a new service client
     */
    public function createSuggestedAdUnitService(AdsSession $session)
    {
        return $this->services->get($session, SuggestedAdUnitService::class);
    }

    /**
     * Creates a new service client for `TargetingPresetService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return TargetingPresetService a new service client
     */
    public function createTargetingPresetService(AdsSession $session)
    {
        return $this->services->get($session, TargetingPresetService::class);
    }

    /**
     * Creates a new service client for `TeamService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return TeamService a new service client
     */
    public function createTeamService(AdsSession $session)
    {
        return $this->services->get($session, TeamService::class);
    }

    /**
     * Creates a new service client for `UserService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return UserService a new service client
     */
    public function createUserService(AdsSession $session)
    {
        return $this->services->get($session, UserService::class);
    }

    /**
     * Creates a new service client for `UserTeamAssociationService`.
     *
     * @param AdsSession $session a session containing configurations for the service client
     * @return UserTeamAssociationService a new service client
     */
    public function createUserTeamAssociationService(AdsSession $session)
    {
        return $this->services->get($session, UserTeamAssociationService::class);
    }

}
