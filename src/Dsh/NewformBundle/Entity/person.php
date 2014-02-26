<?php


namespace Dsh\NewformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ORM\Entity()
 * @ORM\Table(name="person")
 */

class Person
{

     /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    
    /**
     * @ORM\Column(type="Integer")
     */
    protected $age;


    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $favfootballteam;
    
    
    
    
    public function get_id(){
    return $id;
    }

    public function get_name(){
    return $name;
    }

    public function get_age(){
    return $age;
    }

    public function get_favfootballteam(){
    return $favfootballteam;
    }

    public function set_id($value){
    $this->id = $value;
	}
	public function set_name($value){
	    $this->name = $value;
	}
	public function set_age($value){
	    $this->age = $value;
	}
	public function set_favfootballteam($value){
	    $this->favfootballteam = $value;
	}

}
