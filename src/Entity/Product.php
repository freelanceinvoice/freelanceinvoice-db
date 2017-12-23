<?php
namespace FreelanceInvoice\Db\Entity;

/**
 * @Entity @Table(name="products")
 */
class Product extends AbstractAuditEntity
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
    
    /**
     * @ManyToOne(targetEntity="Tax", inversedBy="assignedBugs")
     **/
    protected $tax;
    
    
    
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
    
    public function getTax()
    {
        return $this->tax;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setStatus($status)
    {
        $this->status = $status;
    }
    
    public function setTax($tax)
    {
        $this->tax = $tax;
    }
}