<?php

declare(strict_types=1);

namespace src;

class Convertisseur
{
    private $tauxChangeDollarEnEuro = 1.16;
    private $montantTransactionMinimum = 100;
    private $prixTransaction = 1;

    public function convertirDollarsEnEuro(array $listDeDollars): array
    {
        $listEnEuro = [];

        foreach($listDeDollars as $dollar) {
            $listEnEuro[] = round(($dollar / $this->tauxChangeDollarEnEuro), 2);
        }

        return $listEnEuro;
    }

    public function calculPrixTransaction(float $valeurEuro): bool|float
    {
        if($valeurEuro >= $this->montantTransactionMinimum) {
            return false;
        }
        return $this->prixTransaction;
    }

    public function encaissementEuro(array $listEnDollars): float
    {
        $listEnEuro = $this->convertirDollarsEnEuro($listEnDollars);
        $encaissementEuro = 0;

        foreach($listEnEuro as $valeurEuro) {
            $encaissementEuroValeur = $this->calculPrixTransaction($valeurEuro);
            if($encaissementEuroValeur) {
                $encaissementEuro += $encaissementEuroValeur;
            }
            $encaissementEuro += $valeurEuro;
        }

        return $encaissementEuro;
    }
}
