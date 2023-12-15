<?php

namespace App\Enums;

enum SituacaoStatus: string {
    case A = "Aprovado";
    case R = "Reprovado";
    case P = "Pendente";

    public static function fromValue(string $situacao): string {
        foreach (self::cases() as $status) {
            if ($situacao == $status->name) {
                return $status->value;
            }
        }
    }
}
