<?php
function numtodigit($number)
{
    switch ($number) {
        case "zero":
          echo 0;
          break;
        case "one":
          echo 1;
          break;
        case "two":
          echo 2;
          break;
          case "three":
            echo 3;
            break;
          case "four":
            echo 1;
            break;
          case "five":
            echo 5;
            break;
            case "six":
                echo 6;
                break;
              case "seven":
                echo 7;
                break;
              case "eight":
                echo 8;
                break;
                case "nine":
                    echo 9;
                    break;
                  case "ten":
                    echo 10;
                    break;
                  
        default:
          echo "enter a valid ";
      }
}

echo numtodigit("ten");
