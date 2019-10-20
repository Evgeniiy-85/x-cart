<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\EA\ProductRecommendations\Model;

use XLite\Core\Validator\Enum\Boolean;

/**
 * The "Recommendation" model class
 *
 * @Entity
 * @Table  (name="product_recommendations",
 *      indexes={
 *          @Index (name="additionDate", columns={"additionDate"}),
 *          @Index (name="status", columns={"status"}),
 *      }
 * )
 * @HasLifecycleCallbacks
 */
class Recommendation extends \XLite\Model\AEntity
{
    const STATUS_UNPUBLISHED = 0;
    const STATUS_PUBLISHED   = 1;

    /**
     * Unique ID
     *
     * @var integer
     *
     * @Id
     * @GeneratedValue (strategy="AUTO")
     * @Column         (type="integer", options={ "unsigned": true })
     */
    protected $id;

    /**
     * Addition date (UNIX timestamp)
     *
     * @var integer
     *
     * @Column (type="integer")
     */
    protected $additionDate;

    /**
     * Status
     *
     * @var Boolean
     *
     * @Column (type="boolean")
     */
    protected $status = self::STATUS_PUBLISHED;

    /**
     * Quote (text)
     *
     * @var string
     *
     * @Column (type="text", nullable=true)
     */
    protected $quote = '';

    /**
     * Source Name (text)
     *
     * @var string
     *
     * @Column (type="text", nullable=true)
     */
    protected $source_name = '';

    /**
     * Source Link (text)
     *
     * @var string
     *
     * @Column (type="text")
     */
    protected $source_link = '';

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Relation to a product entity
     *
     * @var \XLite\Model\Product
     *
     * @ManyToOne  (targetEntity="XLite\Model\Product", inversedBy="quotes")
     * @JoinColumn (name="product_id", referencedColumnName="product_id", onDelete="CASCADE")
     */
    protected $product;

    /**
     * Get Product
     *
     * @return integer
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set Product
     *
     * @return integer
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * Set additionDate
     *
     * @param integer $additionDate
     * @return integer
     */
    public function setAdditionDate($additionDate)
    {
        $this->additionDate = $additionDate;
    }

    /**
     * Get additionDate
     *
     * @return integer
     */
    public function getAdditionDate()
    {
        return $this->additionDate;
    }

    /**
     * Set status
     *
     * @param int $status
     * @return Recommendation
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Define if recommendation is published
     *
     * @return boolean
     */
    public function isPublished()
    {
        return $this->getStatus() == static::STATUS_PUBLISHED;
    }
    
    /**
     * Prepare creation date
     *
     * @return void
     *
     * @PrePersist
     */
    public function prepareBeforeCreate()
    {
        if (!$this->getAdditionDate()) {
            $this->setAdditionDate(\XLite\Core\Converter::time());
        }
    }
}
