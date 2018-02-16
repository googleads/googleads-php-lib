<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Contact extends \Google\AdsApi\Dfp\v201802\BaseContact
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $companyId
     */
    protected $companyId = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $address
     */
    protected $address = null;

    /**
     * @var string $cellPhone
     */
    protected $cellPhone = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $faxPhone
     */
    protected $faxPhone = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $workPhone
     */
    protected $workPhone = null;

    /**
     * @param int $id
     * @param string $name
     * @param int $companyId
     * @param string $status
     * @param string $address
     * @param string $cellPhone
     * @param string $comment
     * @param string $email
     * @param string $faxPhone
     * @param string $title
     * @param string $workPhone
     */
    public function __construct($id = null, $name = null, $companyId = null, $status = null, $address = null, $cellPhone = null, $comment = null, $email = null, $faxPhone = null, $title = null, $workPhone = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->companyId = $companyId;
      $this->status = $status;
      $this->address = $address;
      $this->cellPhone = $cellPhone;
      $this->comment = $comment;
      $this->email = $email;
      $this->faxPhone = $faxPhone;
      $this->title = $title;
      $this->workPhone = $workPhone;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\Dfp\v201802\Contact
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\Dfp\v201802\Contact
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
      return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return \Google\AdsApi\Dfp\v201802\Contact
     */
    public function setCompanyId($companyId)
    {
      $this->companyId = (!is_null($companyId) && PHP_INT_SIZE === 4)
          ? floatval($companyId) : $companyId;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\Dfp\v201802\Contact
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param string $address
     * @return \Google\AdsApi\Dfp\v201802\Contact
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return string
     */
    public function getCellPhone()
    {
      return $this->cellPhone;
    }

    /**
     * @param string $cellPhone
     * @return \Google\AdsApi\Dfp\v201802\Contact
     */
    public function setCellPhone($cellPhone)
    {
      $this->cellPhone = $cellPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string $comment
     * @return \Google\AdsApi\Dfp\v201802\Contact
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Google\AdsApi\Dfp\v201802\Contact
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaxPhone()
    {
      return $this->faxPhone;
    }

    /**
     * @param string $faxPhone
     * @return \Google\AdsApi\Dfp\v201802\Contact
     */
    public function setFaxPhone($faxPhone)
    {
      $this->faxPhone = $faxPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \Google\AdsApi\Dfp\v201802\Contact
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkPhone()
    {
      return $this->workPhone;
    }

    /**
     * @param string $workPhone
     * @return \Google\AdsApi\Dfp\v201802\Contact
     */
    public function setWorkPhone($workPhone)
    {
      $this->workPhone = $workPhone;
      return $this;
    }

}
