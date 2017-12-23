<?php
namespace FreelanceInvoice\Db\Entity;

/**
 * @Entity @Table(name="product_categories")
 */
class ProductCategory extends AbstractAuditEntity
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
     * One Category has Many Categories.
     * @OneToMany(targetEntity="ProductCategory", mappedBy="parent")
     */
    private $children;

    /**
     * Many Categories have One Category.
     * @ManyToOne(targetEntity="ProductCategory", inversedBy="children")
     * @JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;
    
    /**
     * Many Products have Many Categories.
     * @ManyToMany(targetEntity="Product", mappedBy="categories")
     * @JoinTable(name="products_categories_products")
     */
    private $products;
    
    public function __construct() {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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