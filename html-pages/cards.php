<?php
class Cards
{
    private $id;
    private $imageURL;
    private $cardName;
    private $artist;
    private $colors = [];
    private $power;
    private $def;
    private $text;
    private $flavor_text;
    private $type;
    private $manaCost;
    private $rarity;
    private $cmc;
    private $setName;
    private $setType;

    public function showCards(){
    }

    public function insert(){
        $conectado= new Connection();
        $st=$conectado->conn->prepare(
        "insert into cards(name) ".
        "values(:n)");
        $st->bindValue(":n",$this->getCardName());
        return $st->execute();	
    }
    public function getId()
    {
        return $this->id;
    }

    public function getImageURL()
    {
        return $this->imageURL;
    }

    public function getArtist()
    {
        return $this->artist;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function getDef()
    {
        return $this->def;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getManaCost()
    {
        return $this->manaCost;
    }

    public function getRarity()
    {
        return $this->rarity;
    }

    public function getCmc()
    {
        return $this->cmc;
    }

    public function getSetName()
    {
        return $this->setName;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setImageURL($imageURL): void
    {
        $this->imageURL = $imageURL;
    }

    
    public function setArtist($artist): void
    {
        $this->artist = $artist;
    }

    public function setPower($power): void
    {
        $this->power = $power;
    }

    public function setDef($def): void
    {
        $this->def = $def;
    }

    public function setText($text): void
    {
        $this->text = $text;
    }

    public function setType($type): void
    {
        $this->type = $type;
    }

    public function setManaCost($manaCost): void
    {
        $this->manaCost = $manaCost;
    }

    public function setRarity($rarity): void
    {
        $this->rarity = $rarity;
    }

    public function setCmc($cmc): void
    {
        $this->cmc = $cmc;
    }
    public function setSetName($setName): void
    {
        $this->setName = $setName;
    }
    public function getFlavor_text()
    {
        return $this->flavor_text;
    }
    public function setFlavor_text($flavor_text)
    {
        $this->flavor_text = $flavor_text;

        return $this;
    }
	/**
	 * @return mixed
	 */
	function getSetType() {
		return $this->setType;
	}
	
	/**
	 * @param mixed $setType 
	 * @return Cards
	 */
	function setSetType($setType): self {
		$this->setType = $setType;
		return $this;
	}

    /**
     * Get the value of cardName
     */ 
    public function getCardName()
    {
        return $this->cardName;
    }

    /**
     * Set the value of cardName
     *
     * @return  self
     */ 
    public function setCardName($cardName)
    {
        $this->cardName = $cardName;

        return $this;
    }

    /**
     * Get the value of colors
     */ 
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * Set the value of colors
     *
     * @return  self
     */ 
    public function setColors($colors)
    {
        $this->colors = $colors;

        return $this;
    }
}
