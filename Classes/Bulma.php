<?php
namespace Classes;

class Bulma{

    private array $objetsFormated;
    private array $capsules;

    private int $result = 0;

    public function __construct(array $objets, array $capsules)
    {
        $this->objetsFormated = $this->formateData($objets);
        $this->capsules = $capsules;
    }

    private function formateData(array $arr): array
    {
        $arrayFormate = [];
        foreach ($arr as $string) {
            $newArr = [];
            [$newArr['name'], $newArr['poid']] = explode('-', $string);
            $arrayFormate[] = $newArr;
        }
        return $arrayFormate;
    }

    private function searchCapsulesFromObjects(): void
    {
        $smallCodeFromCapsules = [];
        foreach ($this->objetsFormated as $key => $objet) {
            $smallCodeFromCapsules[$key] = $this->getSmallCode($objet);
        }
        $objetsInCapsules = array_intersect($smallCodeFromCapsules, $this->capsules);

        $this->calculResult($objetsInCapsules);
    }

    private function getSmallCode(array $objet): string
    { 
        return substr($objet['name'], 0, 2) . substr($objet['name'], -2) . '-' . floor($objet['poid']/10);
    }

    private function calculResult(array $objets): void 
    {
        foreach($objets as $key => $o){
            $this->result += (int) $this->objetsFormated[$key]['poid'];
        }
    }

    public function getResult(): int
    {
        $this->searchCapsulesFromObjects();
        return $this->result;
    }
}