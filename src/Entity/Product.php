<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity()
 */

class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\column(type="text")
     */
    private $title;

    /**
     * @ORM\column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\column(type="float")
     */
    private $price;

    /**
     * @ORM\column(type="boolean")
     */
    private $instock;
}