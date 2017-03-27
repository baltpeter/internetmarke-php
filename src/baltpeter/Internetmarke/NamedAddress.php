<?php

namespace baltpeter\Internetmarke;

class NamedAddress extends ApiResult {
    /**
     * @var Name A person or company name
     */
    protected $name;
    /**
     * @var Address An address
     */
    protected $address;

    /**
     * NamedAddress constructor.
     *
     * @param Name $name
     * @param Address $address
     */
    public function __construct(Name $name, Address $address) {
        $this->name = $name;
        $this->address = $address;
    }

    /**
     * @return Name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param Name $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return Address
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress($address) {
        $this->address = $address;
    }
}
