<?php

/*Healer*/

function getAttackBonus($level)
{
  $attacBonus = 0;
  
  if($level == 2)
  {
      $attacBonus = 1;
  }
  
  if($level >= 3 && $level <= 4)
  {
      $attacBonus = 2;
  }
  
  if($level == 5)
  {
      $attacBonus = 3;
  }
  
  if($level == 6)
  {
      $attacBonus = 4;
  }

  if($level >= 7 && $level <= 8)
  {
      $attacBonus = 5;
  }

  if($level == 9)
  {
      $attacBonus = 6;
  }
  
  if($level == 10)
  {
      $attacBonus = 7;
  }


  return $attacBonus;
}


function savingThrowReflex($level)
{
    $reflex = 0;

    if($level >= 3 && $level <= 5)
    {
        $reflex = 1;
    }

    if($level >= 6 && $level <= 8)
    {
        $reflex = 2;
    }

    if($level >= 9 && $level <= 10)
    {
        $reflex = 3;
    }

    return $reflex;

}


function savingThrowFort($level)
{

  $fort = 1;

  if($level >= 4 && $level <= 6)
  {
      $fort = 2;
  }

  if($level >= 7 && $level <= 9)
  {
      $fort = 3;
  }

  if($level == 10)
  {
      $fort = 4;
  }

  return $fort;

}


function savingThrowWill($level)
{
    $will = 1;

    if($level >= 3 && $level <= 4)
    {
        $will = 2;
    }

    if($level == 5)
    {
        $will = 3;
    }
    
    if($level >= 6 && $level <= 7)
    {
        $will = 4;
    }

    
    if($level >= 8 && $level <= 9)
    {
        $will = 5;
    }

    if($level == 10)
    {
        $will = 6;
    }

    return $will;

}



function actionDice($level)
{
    $actionDice = "";

    if($level <= 5)
    {
        $actionDice = "1d20";
    }

    if($level == 6)
    {
        $actionDice = "1d20+1d14";
    }

    if($level == 7)
    {
        $actionDice = "1d20+1d16";
    }

    if($level >= 8)
    {
        $actionDice = "1d20 (x2)";
    }


    return $actionDice;
}



function criticalDie($level)
{
    $critical = "";

    if($level >= 1 && $level <= 2)
    {
        $critical = "1d8/III";
    }


    if($level >= 3 && $level <= 4)
    {
        $critical = "1d10/III";
    }

    if($level >= 5 && $level <= 6)
    {
        $critical = "1d12/III";
    }

    if($level >= 7 && $level <= 8)
    {
        $critical = "1d14/III";
    }

    if($level >= 9 && $level <= 10)
    {
        $critical = "1d14/III";
    }

    return $critical;

}


function title($level)
{

        if($level == 1)
        {
            $title = "Intern";
        }
        else if($level == 2)
        {
            $title = "Medic";
        }
        else if($level == 3)
        {
            $title = "Curate";
        }
        else if($level == 4)
        {
            $title = "Doctor";
        }
        else if($level == 5)
        {
            $title = "Healer";
        }
        else
        {
            $title = "High Healer";
        }

return $title;

}

function getArtifactCheckBonus($level)
{
    $bonus = 0;

    switch ($level) 
    {
        case 1:
            $bonus = 2;
          break;
          
        case 2:
            $bonus = 3;
          break;
          
        case 3:
            $bonus = 4;
          break;

        case 4:
            $bonus = 5;
          break;
          
        case 5:
            $bonus = 5;
          break;
          
        case 6:
            $bonus = 6;
          break;

          case 7:
            $bonus = 7;
          break;
          
        case 8:
            $bonus = 8;
          break;
          
        case 9:
            $bonus = 9;
          break;
          
        case 10:
            $bonus = 10;
          break;
          
        default:
            $bonus = 999;
      } 

    return $bonus;
}


function getNaturalHealingPerDay($level)
{
    $bonus = '';

    switch ($level) 
    {
        case 1:
            $bonus = '1d3 (x2)';
          break;
          
        case 2:
            $bonus = '1d4 (x4)';
          break;
          
        case 3:
            $bonus = '1d5 (x6)';
          break;

        case 4:
            $bonus = '1d6 (x8)';
          break;
          
        case 5:
            $bonus = '1d7 (x10)';
          break;
          
        case 6:
            $bonus = '1d8 (x12)';
          break;

          case 7:
            $bonus = '1d10 (x14)';
          break;
          
        case 8:
            $bonus = '1d12 (x16)';
          break;
          
        case 9:
            $bonus = '1d14 (x18)';
          break;
          
        case 10:
            $bonus = '1d16 (x20)';
          break;
          
        default:
            $bonus = '000';
      } 

    return $bonus;
}


?>