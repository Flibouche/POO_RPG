<?php

class Character {
    
    private int $idCharacter;

    private string $name;

    private int $level;
    private int $xp;
    private float $gold;
    private int $life;
    private int $mana;
    private int $damage;
    private int $strength;
    private int $constitution;
    private int $dexterity;
    private int $intelligence;
    private int $wisdom;
    private int $charisma;

    private static $nbCharacters = 0;

public function __construct(string $name) {
    self::$nbCharacters++;
    $this->idCharacter = self::$nbCharacters;
    $this->name = $name;
    $this->level = 1;
    $this->xp = 1;
    $this->gold = 100;
    $this->life = 100;
    $this->mana = 50;
    $this->damage = 10;
    $this->strength = 1;
    $this->constitution = 1;
    $this->dexterity = 1;
    $this->intelligence = 1;
    $this->wisdom = 1;
    $this->charisma = 1;
}

//===================== ID Character =====================// 

public function getIdCharacter()
{
    return $this->idCharacter;
    }
    
    public function setIdCharacter($idCharacter)
    {
        $this->idCharacter = $idCharacter;
        
        return $this;
    }
    
    //===================== Name =====================//

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    //===================== Level =====================//
    
    public function getLevel()
    {
        return $this->level;
    }
    
    public function setLevel($level)
    {
        $this->level = $level;
        
        return $this;
    }

    //===================== XP =====================//
    
    public function getXp()
    {
        return $this->xp;
    }
    
    public function setXp($xp)
    {
        $this->xp = $xp;
        
        return $this;
    }

    //===================== Gold =====================//
    
    public function getGold()
    {
        return $this->gold;
    }
    
    public function setGold($gold)
    {
        $this->gold = $gold;
        
        return $this;
    }
    
    //===================== Life =====================//
    
    public function getLife()
    {
        return $this->life;
    }
    
    public function setLife($life)
    {
        $this->life = $life;
        
        return $this;
    }

    //===================== Mana =====================//
    
    public function getMana()
    {
        return $this->mana;
    }
    
    public function setMana($mana)
    {
        $this->mana = $mana;
        
        return $this;
    }

    //===================== Damage =====================//
    
    public function getDamage()
    {
        return $this->damage;
    }

    public function setDamage($damage)
    {
        $this->damage = $damage;
        
        return $this;
    }

    //===================== Strength =====================//
    
    public function getStrength()
    {
        return $this->strength;
    }
    
    public function setStrength($strength)
    {
        $this->strength = $strength;
        
        return $this;
    }

    //===================== Constitution =====================//
    
    public function getConstitution()
    {
        return $this->constitution;
    }
    
    public function setConstitution($constitution)
    {
        $this->constitution = $constitution;
        
        return $this;
    }

    //===================== Dexterity =====================//
    
    public function getDexterity()
    {
        return $this->dexterity;
    }

    public function setDexterity($dexterity)
    {
        $this->dexterity = $dexterity;
        
        return $this;
    }

    //===================== Intelligence =====================//
    
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;
        
        return $this;
    }

    //===================== Wisdom =====================//
    
    public function getWisdom()
    {
        return $this->wisdom;
    }
    
    public function setWisdom($wisdom)
    {
        $this->wisdom = $wisdom;
        
        return $this;
    }

    //===================== Charisma =====================//
    
    public function getCharisma()
    {
        return $this->charisma;
    }
    
    public function setCharisma($charisma)
    {
        $this->charisma = $charisma;
        
        return $this;
    }
    
    //===================== Infos =====================//
    
    public function getInfos()
    {
        return "<h2>$this</h2>
        Level : $this->level<br>
        XP : $this->xp<br>
        Gold : $this->gold<br>
        <br>
        Life : $this->life<br>
        Mana : $this->mana<br>
        Damage : $this->damage<br>
        <br>
        <strong>Statistics</strong> :<br>
        Strength : $this->strength<br>
        Constitution : $this->constitution<br>
        Dexterity : $this->dexterity<br>
        Intelligence : $this->intelligence<br>
        Wisdom : $this->wisdom<br>
        Charisma : $this->charisma<br>";
    }

    //===================== toString =====================//

    public function __toString()
    {
        return $this->name;
    }
}


?>