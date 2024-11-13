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
 * WebhooksCreationPayload Class Doc Comment
 *
 * @category Class
 * @package  ApiVideo\Client
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WebhooksCreationPayload implements ModelInterface, \JsonSerializable
{
    public static function getDefinition(): ModelDefinition
    {
        return new ModelDefinition(
            'webhooks-creation-payload',
            [
                'events' => 'string[]',
                'url' => 'string'
            ],
            [
                'events' => null,
                'url' => null
            ],
            [
                'events' => 'events',
                'url' => 'url'
            ],
            [
                'events' => 'setEvents',
                'url' => 'setUrl'
            ],
            [
                'events' => 'getEvents',
                'url' => 'getUrl'
            ],
            [
                'events' => null,
                'url' => null
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
        $this->container['events'] = $data['events'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['events'] === null) {
            $invalidProperties[] = "'events' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
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
     * Gets events
     *
     * @return string[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param string[] $events An array of webhook events that you want to subscribe to.
     *
     * @return self
     */
    public function setEvents($events)
    {
        $allowedValues = $this->getEventsAllowableValues();
        if (array_diff($events, $allowedValues)) {
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
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url The the url to which HTTP notifications are sent. It could be any http or https URL.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


