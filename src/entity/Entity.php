<?php

namespace rumahsantri\santriasuh\model;

class Entity {
    
    /** @var string */
    private $creatorId;
    
    /** @var string */
    private $creationDate;
    
    /** @var string */
    private $modificatorId;
    
    /** @var string */
    private $modificationDate;
    
    /** @return string */
    function getCreatorId() {
        return $this->creatorId;
    }

    /**
     * @param string $creatorId
     * @return void
     */
    function setCreatorId($creatorId) {
        $this->creatorId = $creatorId;
    }

    /** @return string */
    function getCreationDate() {
        return $this->creationDate;
    }

    /**
     * @param string $creationDate
     * @return void
     */
    function setCreationDate($creationDate) {
        $this->creationDate = $creationDate;
    }

    /** @return string */
    function getModificatorId() {
        return $this->modificatorId;
    }

    /**
     * @param string $modificatorId
     * @return void
     */
    function setModificatorId($modificatorId) {
        $this->modificatorId = $modificatorId;
    }

    /** @return string */
    function getModificationDate() {
        return $this->modificationDate;
    }

    /**
     * @param string $modificationDate
     * @return void
     */
    function setModificationDate($modificationDate) {
        $this->modificationDate = $modificationDate;
    }
}
