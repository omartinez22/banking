<?php
/**
 * Bill
 *
 * @Table(name="bills")
 * @Entity
 */
class Bill
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=25, nullable=false, unique=true)
     */
    private $name;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ManyToMany(targetEntity="Account", inversedBy="payees")
     * @JoinTable(name="account_payee")
     **/
    //private $accounts;
    
    
    public function __construct() 
    {
        ;
    }

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
     * Set name
     *
     * @param string $name
     * @return DxUsers
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    public function getAccounts() 
    {
        
    }

}
