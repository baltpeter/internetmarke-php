<?php

namespace baltpeter\Internetmarke;

class AddressBinding extends ApiResult {
    /**
     * @var NamedAddress The sender's address
     */
    protected $sender;
    /**
     * @var NamedAddress The recipient's address
     */
    protected $receiver;

    /**
     * AddressBinding constructor.
     *
     * @param NamedAddress $sender_address
     * @param NamedAddress $receiver_address
     */
    public function __construct($sender_address, $receiver_address) {
        $this->sender = $sender_address;
        $this->receiver = $receiver_address;
    }

    /**
     * @return NamedAddress
     */
    public function getSender() {
        return $this->sender;
    }

    /**
     * @param NamedAddress $sender
     */
    public function setSender($sender) {
        $this->sender = $sender;
    }

    /**
     * @return NamedAddress
     */
    public function getReceiver() {
        return $this->receiver;
    }

    /**
     * @param NamedAddress $receiver
     */
    public function setReceiver($receiver) {
        $this->receiver = $receiver;
    }
}
