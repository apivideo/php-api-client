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
 * SummaryCreationPayload Class Doc Comment
 *
 * @category Class
 * @package  ApiVideo\Client
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SummaryCreationPayload implements ModelInterface, \JsonSerializable
{
    public static function getDefinition(): ModelDefinition
    {
        return new ModelDefinition(
            'summary-creation-payload',
            [
                'videoId' => 'string',
                'origin' => 'string',
                'attributes' => 'string[]'
            ],
            [
                'videoId' => null,
                'origin' => null,
                'attributes' => null
            ],
            [
                'videoId' => 'videoId',
                'origin' => 'origin',
                'attributes' => 'attributes'
            ],
            [
                'videoId' => 'setVideoId',
                'origin' => 'setOrigin',
                'attributes' => 'setAttributes'
            ],
            [
                'videoId' => 'getVideoId',
                'origin' => 'getOrigin',
                'attributes' => 'getAttributes'
            ],
            [
                'videoId' => null,
                'origin' => null,
                'attributes' => null
            ],
            null
        );
    }

    const ORIGIN_AUTO = 'auto';
    const ATTRIBUTES__ABSTRACT = 'abstract';
    const ATTRIBUTES_TAKEAWAYS = 'takeaways';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOriginAllowableValues()
    {
        return [
            self::ORIGIN_AUTO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAttributesAllowableValues()
    {
        return [
            self::ATTRIBUTES__ABSTRACT,
            self::ATTRIBUTES_TAKEAWAYS,
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
        $this->container['videoId'] = $data['videoId'] ?? null;
        $this->container['origin'] = $data['origin'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['videoId'] === null) {
            $invalidProperties[] = "'videoId' can't be null";
        }
        $allowedValues = $this->getOriginAllowableValues();
        if (!is_null($this->container['origin']) && !in_array($this->container['origin'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'origin', must be one of '%s'",
                $this->container['origin'],
                implode("', '", $allowedValues)
            );
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
     * Gets videoId
     *
     * @return string
     */
    public function getVideoId()
    {
        return $this->container['videoId'];
    }

    /**
     * Sets videoId
     *
     * @param string $videoId Create a summary of a video using the video ID.
     *
     * @return self
     */
    public function setVideoId($videoId)
    {
        $this->container['videoId'] = $videoId;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string|null $origin Use this parameter to define how the API generates the summary. The only allowed value is `auto`, which means that the API generates a summary automatically.  If you do not set this parameter, **the API will not generate a summary automatically**.  In this case, `sourceStatus` will return `missing`, and you have to manually add a summary using the `PATCH /summaries/{summaryId}/source` endpoint operation.
     *
     * @return self
     */
    public function setOrigin($origin)
    {
        $allowedValues = $this->getOriginAllowableValues();
        if (!is_null($origin) && !in_array($origin, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'origin', must be one of '%s'",
                    $origin,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return string[]|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param string[]|null $attributes Use this parameter to define the elements of a summary that you want to generate. If you do not define this parameter, the API generates a full summary with all attributes.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        $allowedValues = $this->getAttributesAllowableValues();
        if (!is_null($attributes) && array_diff($attributes, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'attributes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['attributes'] = $attributes;

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


