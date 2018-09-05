<?php

namespace KKT\Model;

use KKT\Interfaces\IValidator;

class TeamData extends Data implements IValidator
{
    public function __construct($teamName, $teamCapitan, $teamPhone, $teamMail, $city, $voivodeship, $player2, $player3, $player4, $player5, $reserve1, $reserve2, $legal1, $legal2, $legal3ss)
    {

    }

    public function validate(): bool
    {

    }
}