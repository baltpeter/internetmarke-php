<?php

namespace baltpeter\Internetmarke;

class CompanyName {
    /**
     * @var string Company name
     */
    protected $company;
    /**
     * @var PersonName Name of the company's contact person
     */
    protected $personName;

    /**
     * CompanyName constructor.
     *
     * @param string $company
     * @param PersonName $person_name
     */
    public function __construct($company, $person_name) {
        $this->company = $company;
        $this->personName = $person_name;
    }

    /**
     * @return string
     */
    public function getCompany() {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany($company) {
        $this->company = $company;
    }

    /**
     * @return PersonName
     */
    public function getPersonName() {
        return $this->personName;
    }

    /**
     * @param PersonName $personName
     */
    public function setPersonName($personName) {
        $this->personName = $personName;
    }
}
