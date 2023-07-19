<?php

use Chorume\Solid\MessageDataFile;
use Chorume\Solid\Payments;
use Chorume\Solid\Junior;
use Chorume\Solid\Experienced;
use Chorume\Solid\Senior;

test("Deve adicionar desenvolvedores e calcular pagamentos", function () {
    $hourly_rate = (object) ["junior" => 25, "experienced" => 45, "senior" => 80];
    $payments = new Payments(new MessageDataFile());
    $payments->addDevelopers(new Junior($hourly_rate->junior, 40));
    $payments->addDevelopers(new Experienced($hourly_rate->experienced, 40));
    $payments->addDevelopers(new Senior($hourly_rate->senior, 40));
    $total = $payments->getTotal();
    expect($total)->toBe(6000);
});

test("Deve adicionar desenvolvedores e calcular bonus", function () {
    $hourly_rate = (object) ["junior" => 25, "experienced" => 45, "senior" => 80];
    $payments = new Payments(new MessageDataFile());
    $payments->addDevelopers(new Junior($hourly_rate->junior, 40));
    $payments->addDevelopers(new Experienced($hourly_rate->experienced, 40));
    $payments->addDevelopers(new Senior($hourly_rate->senior, 40));
    $bonus = $payments->getBonus();
    expect($bonus)->toBe(190);
});

test("Deve Imprimir uma mensagem português", function () {
    $hourly_rate = (object) ["junior" => 25, "experienced" => 45, "senior" => 80];
    $payments = new Payments(new MessageDataFile());
    $payments->addDevelopers(new Junior($hourly_rate->junior, 40));
    $payments->addDevelopers(new Experienced($hourly_rate->experienced, 40));
    $payments->addDevelopers(new Senior($hourly_rate->senior, 40));
    $message = $payments->printMessage("pt_BR");
    expect($message)->toBe("O total de pagamentos é R$ 6000 e o total de bônus é R$ 190");
});

test("Deve Imprimir uma mensagem inglês", function () {
    $hourly_rate = (object) ["junior" => 25, "experienced" => 45, "senior" => 80];
    $payments = new Payments(new MessageDataFile());
    $payments->addDevelopers(new Junior($hourly_rate->junior, 40));
    $payments->addDevelopers(new Experienced($hourly_rate->experienced, 40));
    $payments->addDevelopers(new Senior($hourly_rate->senior, 40));
    $message = $payments->printMessage("en");
    expect($message)->toBe("The total amount of payments is R$ 6000 and the total bonus is R$ 190");
});