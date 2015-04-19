<?php
  class CharacterGenerator{
    //******************************************************************
    //* Declare arrays for all randomly generated elements             *
    //* name1, name2, and name3 will combine to form a full first name *
    //******************************************************************
    private static $name1 = ["A", "Ada", "Aki", "Al", "Ali", "Alo", "Ana", "Ani", 
        "Ba", "Be", "Bo", "Bra", "Bro", "Cha", "Chi", "Da", "De", "Do", 
        "Dra", "Dro", "Eki", "Eko", "Ele", "Eli", "Elo", "Er", "Ere", 
        "Eri", "Ero", "Fa", "Fe", "Fi", "Fo", "Fra", "Gla", "Gro", "Ha",
        "He", "Hi", "Illia", "Ira", "Ja", "Jo", "Ka", "Ki", "Kra", "La", 
        "Le", "Lo", "Ma", "Me", "Mi", "Mo", "Na", "Ne", "No", "O", "Ol", 
        "Or", "Pa", "Pe", "Pi", "Po", "Pra", "Qua", "Qui", "Quo", "Ra", 
        "Re", "Ro", "Sa", "Sca", "Sco", "Se", "Sha", "She", "Sho", "So", 
        "Sta", "Ste", "Sti", "Stu", "Ta", "Tha", "The", "Tho", "Ti", "To", 
        "Tra", "Tri", "Tru", "Ul", "Ur", "Va", "Vo", "Wra", "Xa", "Xi", 
        "Zha", "Zho"];

    private static $name2 = ["bb", "bl", "bold", "br", "bran", "can", "carr", "ch",
        "cinn", "ck", "ckl", "ckr", "cks", "dd", "dell", "dr", "ds", "fadd",
        "fall", "farr", "ff", "fill", "fl", "fr", "genn", "gg", "gl", "gord",
          "gr", "gs", "h", "hall", "hark", "hill", "hork", "jenn", "kell", "kill",
          "kk" ,"kl", "klip", "kr", "krack", "ladd", "land", "lark", "ld", "ldr",
          "lind", "ll", "ln", "lord", "ls", "matt", "mend", "mm", "ms", "nd", 
          "nett", "ng", "nk", "nn", "nodd", "ns", "nt", "part", "pelt", "pl", 
          "pp", "ppr", "pps", "rand", "rd", "resh", "rn", "rp", "rr", "rush", 
          "salk", "sass", "sc", "sh", "sp", "ss", "st", "tall", "tend", "told", 
          "v", "vall", "w", "wall", "wild", "will", "x", "y", "yang", "yell", "z", 
          "zenn"];

    private static $name3 = ["a", "ab", "ac", "ace", "ach", "ad", "adle", "af", "ag", "ah",
        "ai", "ak", "aker", "al", "ale", "am", "an", "and", "ane", "ar", "ard", "ark",
          "art", "ash", "at", "ath", "ave", "ea", "eb", "ec", "ech", "ed", "ef", "eh",
          "ek", "el", "elle", "elton", "em", "en", "end", "ent", "enton", "ep", "er",
          "esh", "ess", "ett", "ic", "ich", "id", "if", "ik", "il", "im", "in", "ion", 
          "ir", "is", "ish", "it", "ith", "ive", "ob", "och", "od", "odin", "oe", "of", 
          "oh", "ol", "olen", "omir", "or", "orb", "org", "ort", "os", "osh", "ot", "oth", 
          "ottle", "ove", "ow", "ox", "ud", "ule", "umber", "un", "under", "undle", "unt", 
          "ur", "us", "ust", "ut"];

    private static $class = ["Barbarian", "Bard", "Druid", "Monk", "Paladin", "Ranger", "Rogue", "Fighter", "Wizard", "Cleric"];

    private static $race = ["Human", "Gnome", "Dwarf", "Gnome", "Halfling", "Half-Elf"];

    private static $eyecolor = ["brown", "black", "white", "red", "golden", "blue", "green", "blue green", "orange", "silver"];

    private static $haircolor = ["brown", "black", "white", "grey", "silver", "red", "orange", "no"];

    private static $height = ["short", "tall", "medium height"];

    private static $build = ["athletic", "stocky", "overweight"]; 




    public static function generateName(){
      return self::$name1[array_rand(self::$name1)].self::$name2[array_rand(self::$name2)].self::$name3[array_rand(self::$name3)];
    }

    public static function generateAttribute($attribute){
      $attrs = self::$$attribute;
      return $attrs[array_rand($attrs)];
    }

    public static function generateStats(){

    }

    private static function diceRoller(){
      global $total;
      $rolls = [rand(1,6), rand(1,6), rand(1,6), rand(1,6)];
      sort($rolls);
      array_shift($rolls);
      $total = array_sum($rolls);
      return $total;
    }

    private static function abilityModifiers($total){
      if ($total==1)
        return "-5";
      else if ($total>=2 && $total <=3)
        return "-4";
      else if ($total >=4 && $total <=5)
        return "-3";
      else if ($total >=6 && $total <=7)
        return "-2";
      else if ($total >=8 && $total <=9)
        return "-1";
      else if ($total >=10 && $total <=11)
        return "+0";
      else if ($total >=12 && $total <=13)
        return "+1";
      else if ($total >=14 && $total <=15)
        return "+2";
      else if ($total >=16 && $total <=17)
        return "+3";
      else if ($total >=18 && $total <=19)
        return "+4";
      else if ($total >=20 && $total <=21)
        return "+5";
    }
  }