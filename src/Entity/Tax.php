<?php
namespace FreelanceInvoice\Db\Entity;

/**
 * @Entity @Table(name="taxes")
 */
class Tax extends AbstractAuditEntity
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var int
     */
    protected $id;
    
    /**
     * @Column(type="string")
     * @var string
     */
    protected $name;
    
    /**
     * @Column(type="string")
     * @var string
     */
    protected $status;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getStatus()
    {
        return $this->status;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setStatus($status)
    {
        $this->status = $status;
    }
}