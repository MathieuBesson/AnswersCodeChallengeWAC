<?php
namespace Classes;

class Calendrier
{
    private int $currentDay;
    private array $openCases;

    public function __construct(int $currentDay, array $openCases)
    {
        $this->currentDay = $currentDay;
        $this->openCases = $openCases;
    }

    private function checkIndignity(): bool
    {
        if($this->checkEatFuturDay()){
            return true;
        }

        if($this->checkNotOldDay()){
            return true;
        }
        return false;
    }

    private function checkEatFuturDay(): bool
    {
        foreach ($this->openCases as $openCase) {
            if ($openCase > $this->currentDay) {
                return true;
            }
        }
        return false;
    }

    private function checkNotOldDay(): bool
    {
        for ($i = 1; $i <= $this->currentDay; $i++) {
            if (!in_array($i, $this->openCases)) {
                return true;
            }
        }
        return false;
    }

    public function getResult()
    {
        return $this->checkIndignity() ? 'ERREUR' : 'OK';
    }
}
