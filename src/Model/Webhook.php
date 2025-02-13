<?php

/**
* api.video PHP API client
* api.video is an API that encodes on the go to facilitate immediate playback, enhancing viewer streaming experiences across multiple devices and platforms. You can stream live or on-demand online videos within minutes.
*
* The version of the OpenAPI document: 1
* Contact: ecosystem@api.video
*
* NOTE: This class is auto generated.
* Do not edit the class manually.
*/


namespace ApiVideo\Client\Model;

use ApiVideo\Client\ObjectSerializer;

/**
 * Webhook Class Doc Comment
 *
 * @category Class
 * @package  ApiVideo\Client
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Webhook implements ModelInterface, \JsonSerializable
{
    public static function getDefinition(): ModelDefinition
    {
        return new ModelDefinition(
            'webhook',
            [
                'webhookId' => 'string',
                'createdAt' => '\DateTime',
                'events' => 'string[]',
                'url' => 'string',
                'signatureSecret' => 'string'
            ],
            [
                'webhookId' => null,
                'createdAt' => 'date-time',
                'events' => null,
                'url' => null,
                'signatureSecret' => null
            ],
            [
                'webhookId' => 'webhookId',
                'createdAt' => 'createdAt',
                'events' => 'events',
                'url' => 'url',
                'signatureSecret' => 'signatureSecret'
            ],
            [
                'webhookId' => 'setWebhookId',
                'createdAt' => 'setCreatedAt',
                'events' => 'setEvents',
                'url' => 'setUrl',
                'signatureSecret' => 'setSignatureSecret'
            ],
            [
                'webhookId' => 'getWebhookId',
                'createdAt' => 'getCreatedAt',
                'events' => 'getEvents',
                'url' => 'getUrl',
                'signatureSecret' => 'getSignatureSecret'
            ],
            [
                'webhookId' => null,
                'createdAt' => null,
                'events' => null,
                'url' => null,
                'signatureSecret' => null
            ],
            null
        );
    }

    const EVENTS_LIVE_STREAM_BROADCAST_STARTED = 'live-stream.broadcast.started';
    const EVENTS_LIVE_STREAM_BROADCAST_ENDED = 'live-stream.broadcast.ended';
    const EVENTS_VIDEO_SOURCE_RECORDED = 'video.source.recorded';
    const EVENTS_VIDEO_ENCODING_QUALITY_COMPLETED = 'video.encoding.quality.completed';
    const EVENTS_VIDEO_CAPTION_GENERATED = 'video.caption.generated';
    const EVENTS_VIDEO_SUMMARY_GENERATED = 'video.summary.generated';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventsAllowableValues()
    {
        return [
            self::EVENTS_LIVE_STREAM_BROADCAST_STARTED,
            self::EVENTS_LIVE_STREAM_BROADCAST_ENDED,
            self::EVENTS_VIDEO_SOURCE_RECORDED,
            self::EVENTS_VIDEO_ENCODING_QUALITY_COMPLETED,
            self::EVENTS_VIDEO_CAPTION_GENERATED,
            self::EVENTS_VIDEO_SUMMARY_GENERATED,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['webhookId'] = $data['webhookId'] ?? null;
        $this->container['createdAt'] = isset($data['createdAt']) ? new \DateTime($data['createdAt']) : null;
        $this->container['events'] = $data['events'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['signatureSecret'] = $data['signatureSecret'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets webhookId
     *
     * @return string|null
     */
    public function getWebhookId()
    {
        return $this->container['webhookId'];
    }

    /**
     * Sets webhookId
     *
     * @param string|null $webhookId A unique identifier of the webhook you subscribed to.
     *
     * @return self
     */
    public function setWebhookId($webhookId)
    {
        $this->container['webhookId'] = $webhookId;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt The time and date when you created this webhook subscription, in ATOM UTC format.
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets events
     *
     * @return string[]|null
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param string[]|null $events A list of events that you subscribed to. When these events occur, the API triggers a webhook call to the URL you provided.
     *
     * @return self
     */
    public function setEvents($events)
    {
        $allowedValues = $this->getEventsAllowableValues();
        if (!is_null($events) && array_diff($events, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'events', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The URL where the API sends the webhook.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets signatureSecret
     *
     * @return string|null
     */
    public function getSignatureSecret()
    {
        return $this->container['signatureSecret'];
    }

    /**
     * Sets signatureSecret
     *
     * @param string|null $signatureSecret A secret key for the webhook you subscribed to. You can use it to verify the origin of the webhook call that you receive.
     *
     * @return self
     */
    public function setSignatureSecret($signatureSecret)
    {
        $this->container['signatureSecret'] = $signatureSecret;

        return $this;
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


