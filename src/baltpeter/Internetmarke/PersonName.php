<?php

namespace baltpeter\Internetmarke;

class PersonName extends ApiResult {
    /**
     * @var string
     */
    protected $salutation;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $firstname;
    /**
     * @var string
     */
    protected $lastname;

    /**
     * PersonName constructor.
     *
     * @param string $salutation
     * @param string $title
     * @param string $first_name
     * @param string $last_name
     */
    public function __construct($salutation, $title, $first_name, $last_name) {
        $this->salutation = $salutation;
        $this->title = $title;
        $this->firstname = $first_name;
        $this->lastname = $last_name;
    }

    /**
     * @return string
     */
    public function getSalutation() {
        return $this->salutation;
    }

    /**
     * @param string $salutation
     */
    public function setSalutation($salutation) {
        $this->salutation = $salutation;
    }

    /**
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }
}
