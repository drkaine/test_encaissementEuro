<?php

declare(strict_types=1);

namespace tests;

use PHPUnit\Framework\TestCase;
use src\Convertisseur;

require("./src/Convertisseur.php");

class EncaissementEuroTest extends TestCase
{
    public function testConvertirEnUnEuro(): void
    {
        $convertisseur = new Convertisseur();
        $this->assertEquals([1], $convertisseur->convertirDollarsEnEuro([1.16]));
    }

    public function testEncaissementEuroPourUneTransactionDePlusDeCentEuro(): void
    {
        $convertisseur = new Convertisseur();
        $this->assertEquals(false, $convertisseur->calculPrixTransaction(116));
    }

    public function testEncaissementEuro(): void
    {
        $convertisseur = new Convertisseur();

        $this->assertEquals(313.35, $convertisseur->encaissementEuro([100, 150, 30, 80]));
    }
}
