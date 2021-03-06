<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/asset.proto

namespace Google\Ads\GoogleAds\V4\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Asset is a part of an ad which can be shared across multiple ads.
 * It can be an image (ImageAsset), a video (YoutubeVideoAsset), etc.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.Asset</code>
 */
class Asset extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the asset.
     * Asset resource names have the form:
     * `customers/{customer_id}/assets/{asset_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the asset.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Optional name of the asset.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     */
    protected $name = null;
    /**
     * Output only. Type of the asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AssetTypeEnum.AssetType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    protected $asset_data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the asset.
     *           Asset resource names have the form:
     *           `customers/{customer_id}/assets/{asset_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           Output only. The ID of the asset.
     *     @type \Google\Protobuf\StringValue $name
     *           Optional name of the asset.
     *     @type int $type
     *           Output only. Type of the asset.
     *     @type \Google\Ads\GoogleAds\V4\Common\YoutubeVideoAsset $youtube_video_asset
     *           Immutable. A YouTube video asset.
     *     @type \Google\Ads\GoogleAds\V4\Common\MediaBundleAsset $media_bundle_asset
     *           Immutable. A media bundle asset.
     *     @type \Google\Ads\GoogleAds\V4\Common\ImageAsset $image_asset
     *           Output only. An image asset.
     *     @type \Google\Ads\GoogleAds\V4\Common\TextAsset $text_asset
     *           Output only. A text asset.
     *     @type \Google\Ads\GoogleAds\V4\Common\BookOnGoogleAsset $book_on_google_asset
     *           A book on google asset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Resources\Asset::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the asset.
     * Asset resource names have the form:
     * `customers/{customer_id}/assets/{asset_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the asset.
     * Asset resource names have the form:
     * `customers/{customer_id}/assets/{asset_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the asset.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * Output only. The ID of the asset.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * Output only. The ID of the asset.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The ID of the asset.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * Optional name of the asset.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * Optional name of the asset.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * Optional name of the asset.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Optional name of the asset.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

    /**
     * Output only. Type of the asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AssetTypeEnum.AssetType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. Type of the asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AssetTypeEnum.AssetType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\AssetTypeEnum_AssetType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Immutable. A YouTube video asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.YoutubeVideoAsset youtube_video_asset = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V4\Common\YoutubeVideoAsset
     */
    public function getYoutubeVideoAsset()
    {
        return $this->readOneof(5);
    }

    /**
     * Immutable. A YouTube video asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.YoutubeVideoAsset youtube_video_asset = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V4\Common\YoutubeVideoAsset $var
     * @return $this
     */
    public function setYoutubeVideoAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\YoutubeVideoAsset::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Immutable. A media bundle asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.MediaBundleAsset media_bundle_asset = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V4\Common\MediaBundleAsset
     */
    public function getMediaBundleAsset()
    {
        return $this->readOneof(6);
    }

    /**
     * Immutable. A media bundle asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.MediaBundleAsset media_bundle_asset = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V4\Common\MediaBundleAsset $var
     * @return $this
     */
    public function setMediaBundleAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\MediaBundleAsset::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Output only. An image asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.ImageAsset image_asset = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V4\Common\ImageAsset
     */
    public function getImageAsset()
    {
        return $this->readOneof(7);
    }

    /**
     * Output only. An image asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.ImageAsset image_asset = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V4\Common\ImageAsset $var
     * @return $this
     */
    public function setImageAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\ImageAsset::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Output only. A text asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.TextAsset text_asset = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V4\Common\TextAsset
     */
    public function getTextAsset()
    {
        return $this->readOneof(8);
    }

    /**
     * Output only. A text asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.TextAsset text_asset = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V4\Common\TextAsset $var
     * @return $this
     */
    public function setTextAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\TextAsset::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * A book on google asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.BookOnGoogleAsset book_on_google_asset = 10;</code>
     * @return \Google\Ads\GoogleAds\V4\Common\BookOnGoogleAsset
     */
    public function getBookOnGoogleAsset()
    {
        return $this->readOneof(10);
    }

    /**
     * A book on google asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.BookOnGoogleAsset book_on_google_asset = 10;</code>
     * @param \Google\Ads\GoogleAds\V4\Common\BookOnGoogleAsset $var
     * @return $this
     */
    public function setBookOnGoogleAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\BookOnGoogleAsset::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAssetData()
    {
        return $this->whichOneof("asset_data");
    }

}

