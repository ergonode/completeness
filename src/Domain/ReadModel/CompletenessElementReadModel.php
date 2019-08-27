<?php

/**
 * Copyright © Bold Brand Commerce Sp. z o.o. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types = 1);

namespace Ergonode\Completeness\Domain\ReadModel;

use Ergonode\Attribute\Domain\Entity\AttributeId;
use JMS\Serializer\Annotation as JMS;

/**
 */
class CompletenessElementReadModel
{
    /**
     * @var AttributeId
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var bool
     *
     * @JMS\Exclude()
     */
    private $required;

    /**
     * @var string|null
     *
     * @JMS\Exclude()
     */
    private $value;

    /**
     * @param AttributeId $id
     * @param string      $name
     * @param bool        $required
     * @param string|null $value
     */
    public function __construct(AttributeId $id, string $name, bool $required, ?string $value = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->required = $required;
        $this->value = $value;
    }

    /**
     * @return AttributeId
     */
    public function getId(): AttributeId
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->required;
    }

    /**
     * @return bool
     */
    public function isFilled(): bool
    {
        return null !== $this->value;
    }
}
