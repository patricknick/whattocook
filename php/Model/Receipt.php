<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 29.04.14
 * Time: 17:26
 */

class Receipt implements JsonSerializable{

    private $receiptId;
    private $name;
    private $instructions;
    private $difficulty;
    private $imagePartName;


    /**
     * @return mixed
     */
    public function getReceiptId()
    {
        return $this->receiptId;
    }

    /**
     * @return mixed
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * @return string
     */
    public function getImagePartName()
    {
        return $this->imagePartName;
    }


    /**
     * (PHP 5 &gt;= 5.4.0)<br/>
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     */
    public function jsonSerialize()
    {
        return array(
            'receiptId' => $this->receiptId,
            'name' => $this->name,
            'instructions' => $this->instructions,
            'difficulty' => $this->difficulty,
            'imagePartName' => $this->imagePartName
        );
    }
}