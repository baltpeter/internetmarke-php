<?php

namespace baltpeter\Internetmarke;

class Name extends ApiResult {
    /**
     * @var PersonName First name and last name of a natural person
     * (The parameters name and companyName are mutually exclusive, i.e., if a companyName is used, there must be no details on name.)
     */
    protected $personName;
    /**
     * @var CompanyName Company name and contact person
     * (The parameters name and companyName are mutually exclusive, i.e., if a companyName is used, there must be no details on name.)
     */
    protected $companyName;

    /**
     * Name constructor.
     *
     * @param PersonName $person_name
     * @param CompanyName $company_name
     */
    public function __construct($person_name, $company_name) {
        $this->personName = $person_name;
        $this->companyName = $company_name;
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

    /**
     * @return CompanyName
     */
    public function getCompanyName() {
        return $this->companyName;
    }

    /**
     * @param CompanyName $companyName
     */
    public function setCompanyName($companyName) {
        $this->companyName = $companyName;
    }
}
