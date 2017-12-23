<?php
namespace FreelanceInvoice\Db\Entity;

use DateTime;

/**
 * @Entity
 */
abstract class AbstractAuditEntity
{
    /**
     * @Column(type="string")
     * @var string
     */
    protected $createdBy;

    /**
     * @Column(type="datetime")
     * @var DateTime
     */
    protected $createdAt;
    
    /**
     * @Column(type="string")
     * @var string
     */
    protected $updatedBy;
    
    /**
     * @Column(type="datetime")
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * Gets the date when entry was created.
     * 
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * Gets the user name that created the entry.
     * 
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
    
    /**
     * Gets the date when entry was updated.
     *
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    /**
     * Gets the user name that updated the entry.
     * 
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}